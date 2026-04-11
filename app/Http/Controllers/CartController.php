<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;


class CartController extends Controller
{
    
    // Cart page
    public function index()
    {
        $cartItems = CartItem::with('product.category')
            ->where('user_id', auth()->id())
            ->get();

        return view('user.cart', compact('cartItems'));
    }

    // Add to cart
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $cartItem = CartItem::firstOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $product->id],
            ['quantity' => 0]
        );

        $newQty = $cartItem->quantity + ($request->quantity ?? 1);

        // Don't exceed stock
        $cartItem->update(['quantity' => min($newQty, $product->stock)]);

        return response()->json([
            'success' => true,
            'message' => 'Added to cart!',
            'count'   => $this->cartCount(),
        ]);
    }

    // Update quantity
    public function update(Request $request, $id)
    {
        $cartItem = CartItem::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $qty = max(1, (int) $request->quantity);
        $qty = min($qty, $cartItem->product->stock);

        $cartItem->update(['quantity' => $qty]);

        $price     = $cartItem->product->sale_price ?? $cartItem->product->price;
        $itemTotal = $price * $qty;

        return response()->json([
            'success'    => true,
            'quantity'   => $qty,
            'item_total' => number_format($itemTotal, 2),
            'summary'    => $this->getSummary(),
        ]);
    }

    // Remove item
    public function remove($id)
    {
        CartItem::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return response()->json([
            'success' => true,
            'count'   => $this->cartCount(),
            'summary' => $this->getSummary(),
        ]);
    }

    // AJAX: header cart dropdown data
    public function headerCart()
    {
        $items = CartItem::with('product')
            ->where('user_id', auth()->id())
            ->latest()
            ->take(5)
            ->get()
            ->map(fn($item) => [
                'id'        => $item->id,
                'name'      => $item->product->name,
                'category'  => $item->product->category?->name ?? '',
                'qty'       => $item->quantity,
                'price'     => number_format($item->product->sale_price ?? $item->product->price, 2),
                'image'     => $item->product->image_url ?? asset('assets/images/ecommerce/png/1.png'),
            ]);

        return response()->json([
            'items' => $items,
            'count' => $this->cartCount(),
        ]);
    }

    // ── Helpers ───────────────────────────────────────────────
    private function cartCount(): int
    {
        return CartItem::where('user_id', auth()->id())->sum('quantity');
    }

    private function getSummary(): array
    {
        $items    = CartItem::with('product')->where('user_id', auth()->id())->get();
        $subtotal = $items->sum(fn($i) => ($i->product->sale_price ?? $i->product->price) * $i->quantity);
        $discount = $items->sum(fn($i) => $i->product->sale_price
            ? ($i->product->price - $i->product->sale_price) * $i->quantity
            : 0);
        $tax      = $subtotal * 0.18;
        $delivery = $subtotal > 0 ? 5 : 0;
        $total    = $subtotal - $discount + $tax + $delivery;

        return [
            'subtotal'  => number_format($subtotal, 2),
            'discount'  => number_format($discount, 2),
            'tax'       => number_format($tax, 2),
            'delivery'  => number_format($delivery, 2),
            'total'     => number_format($total, 2),
            'count'     => $items->sum('quantity'),
        ];
  
}





}
