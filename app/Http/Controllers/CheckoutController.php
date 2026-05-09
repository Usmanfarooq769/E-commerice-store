<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\StaffDetail;


class CheckoutController extends Controller
{
 public function index()
{
    $cartItems = $this->getCartItems();

    if ($cartItems->isEmpty()) {
        return redirect()->route('products')
            ->with('error', 'Your cart is empty!');
    }

    $subtotal = $this->calculateSubtotal($cartItems);
    $discount = $this->calculateDiscount($cartItems);
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

    $cartItems = $this->getCartItems();

    if ($cartItems->isEmpty()) {
        return response()->json(['success' => false, 'message' => 'Cart is empty!'], 422);
    }

    $subtotal = $this->calculateSubtotal($cartItems);
    $discount = $this->calculateDiscount($cartItems);
    $tax      = round($subtotal * 0.18, 2);
    $delivery = $request->shipping_method === 'express' ? 20 : 5;
    $total    = $subtotal - $discount + $tax + $delivery;

   DB::beginTransaction();

try {

    $user = auth()->user();

    if (!$user) {

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->first_name . ' ' . $request->last_name,
                'password' => Hash::make('12341234'),
            ]
        );

        if ($user->wasRecentlyCreated) {
            $user->assignRole('guest-users');

            StaffDetail::create([
                'user_id'      => $user->id,
                'address'      => $request->address,
                'city'         => $request->city,
                'phone_number' => $request->phone,
                'country'      => $request->country,
                'state'        => $request->state,
                'pincode'      => $request->pincode,
            ]);
        }
    }

    $order = Order::create([
        'user_id' => $user->id,
        'order_number' => 'ORD-' . strtoupper(Str::random(8)),
        'shop_name' => $request->shop_name,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'country' => $request->country,
        'pincode' => $request->pincode,
        'shipping_method' => $request->shipping_method,
        'subtotal' => $subtotal,
        'discount' => $discount,
        'tax' => $tax,
        'delivery_charge' => $delivery,
        'total' => $total,
        'payment_method' => $request->payment_method,
        'status' => 'pending',
    ]);

    foreach ($cartItems as $item) {

        OrderItem::create([
            'order_id'       => $order->id,
            'product_id'     => $item['product_id'],
            'product_name'   => $item['name'],
            'price'          => $item['price'],
            'original_price' => $item['original_price'],
            'quantity'       => $item['quantity'],
            'total'          => $item['price'] * $item['quantity'],
        ]);

        Product::where('id', $item['product_id'])
            ->decrement('stock', $item['quantity']);
    }

    $this->clearCart();

    DB::commit();

    return response()->json([
        'success' => true,
        'message' => 'Order placed successfully!',
        'order_number' => $order->order_number,
        'order_id' => $order->id,
    ]);

} catch (\Exception $e) {

    DB::rollBack();

    return response()->json([
        'success' => false,
        'message' => 'Order failed: ' . $e->getMessage()
    ], 500);
}
}
private function getCartItems()
{

    if (auth()->check()) {
        return CartItem::with('product.category')
            ->where('user_id', auth()->id())
            ->get()
            ->map(function ($item) {
                return [
                    'product_id' => $item->product_id,
                    'name'       => $item->product->name,
                    'price'      => $item->product->sale_price ?? $item->product->price,
                    'original_price'   => $item->product->price,
                    'quantity'   => $item->quantity,
                    'stock'      => $item->product->stock,
                    'model'      => $item->product,
                ];
            });
    }
    $cart = session()->get('cart', []);

    return collect($cart)->map(function ($item, $id) {
        $product = Product::find($item['product_id']);

        return [
            'product_id' => $item['product_id'],
            'name'       => $item['name'],
            'price'      => $item['price'],
            'original_price'   => $product?->price,
            'quantity'   => $item['quantity'],
            'stock'      => $product?->stock ?? 0,
            'model'      => $product,
        ];
    });
}

   private function calculateSubtotal($items)
{
    return collect($items)->sum(fn($i) => $i['price'] * $i['quantity']);
}

private function calculateDiscount($items)
{
    return collect($items)->sum(function ($i) {
        return ($i['original_price'] ?? $i['price']) > $i['price']
            ? (($i['original_price'] - $i['price']) * $i['quantity'])
            : 0;
    });
}
private function clearCart()
{
    if (auth()->check()) {
        CartItem::where('user_id', auth()->id())->delete();
    } else {
        session()->forget('cart');
    }
}


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