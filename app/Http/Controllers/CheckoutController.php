<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product.category')
            ->where('user_id', auth()->id())
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('user.products')
                ->with('error', 'Your cart is empty!');
        }

        $subtotal = $cartItems->sum(fn($i) =>
            ($i->product->sale_price ?? $i->product->price) * $i->quantity
        );
        $discount = $cartItems->sum(fn($i) =>
            $i->product->sale_price
                ? ($i->product->price - $i->product->sale_price) * $i->quantity
                : 0
        );
        $tax      = round($subtotal * 0.18, 2);
        $delivery = 5;
        $total    = $subtotal - $discount + $tax + $delivery;

        return view('user.checkout', compact(
            'cartItems','subtotal','discount','tax','delivery','total'
        ));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'first_name'      => 'required|string|max:100',
            'last_name'       => 'required|string|max:100',
            'email'           => 'required|email',
            'phone'           => 'required|string|max:20',
            'address'         => 'required|string',
            'city'            => 'required|string|max:100',
            'country'         => 'required|string|max:100',
            'state'           => 'nullable|string|max:100',
            'pincode'         => 'nullable|string|max:20',
            'shipping_method' => 'required|in:standard,express',
            'payment_method'  => 'required|in:cod,card',
        ]);

        $cartItems = CartItem::with('product')
            ->where('user_id', auth()->id())
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Cart is empty!'], 422);
        }

        $subtotal = $cartItems->sum(fn($i) =>
            ($i->product->sale_price ?? $i->product->price) * $i->quantity
        );
        $discount = $cartItems->sum(fn($i) =>
            $i->product->sale_price
                ? ($i->product->price - $i->product->sale_price) * $i->quantity
                : 0
        );
        $tax      = round($subtotal * 0.18, 2);
        $delivery = $request->shipping_method === 'express' ? 20 : 5;
        $total    = $subtotal - $discount + $tax + $delivery;

        // Create order
        $order = Order::create([
            'user_id'         => auth()->id(),
            'order_number'    => 'ORD-' . strtoupper(Str::random(8)),
            'shop_name'  =>    $request->shop_name,
            'first_name'      => $request->first_name,
            'last_name'       => $request->last_name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'address'         => $request->address,
            'city'            => $request->city,
            'state'           => $request->state,
            'country'         => $request->country,
            'pincode'         => $request->pincode,
            'shipping_method' => $request->shipping_method,
            'subtotal'        => $subtotal,
            'discount'        => $discount,
            'tax'             => $tax,
            'delivery_charge' => $delivery,
            'total'           => $total,
            'payment_method'  => $request->payment_method,
            'status'          => 'pending',
        ]);

        // Create order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id'       => $order->id,
                'product_id'     => $item->product_id,
                'product_name'   => $item->product->name,
                'price'          => $item->product->sale_price ?? $item->product->price,
                'original_price' => $item->product->price,
                'quantity'       => $item->quantity,
                'total'          => ($item->product->sale_price ?? $item->product->price) * $item->quantity,
            ]);

            // Reduce stock
            $item->product->decrement('stock', $item->quantity);
        }

        // Clear cart
        CartItem::where('user_id', auth()->id())->delete();

        return response()->json([
            'success'      => true,
            'message'      => 'Order placed successfully!',
            'order_number' => $order->order_number,
            'order_id'     => $order->id,
        ]);
    }

    // Download PDF invoice
    public function downloadInvoice($id)
    {
        $order = Order::with('items.product', 'user')
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $pdf = Pdf::loadView('user.invoice', compact('order'));
        return $pdf->download('invoice-' . $order->order_number . '.pdf');
    }
}