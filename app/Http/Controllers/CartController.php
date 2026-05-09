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
    /*
   
     LOGGED-IN USER
    */
    if (auth()->check()) {

        $cartItems = CartItem::with('product.category')
            ->where('user_id', auth()->id())
            ->get();
    }

    /*
    GUEST USER
    */
    else {

        $sessionCart = session()->get('cart', []);

        $productIds = collect($sessionCart)->pluck('product_id');

        $products = Product::with('category')
            ->whereIn('id', $productIds)
            ->get();

        $cartItems = $products->map(function ($product) use ($sessionCart) {

            $item = collect($sessionCart)
                ->firstWhere('product_id', $product->id);

            return (object)[
                'id'       => $product->id,
                'product'  => $product,
                'quantity' => $item['quantity'],
            ];
        });
    }

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

    $qty = $request->quantity ?? 1;

    /*
    LOGGED-IN USER 
    */
    if (auth()->check()) {

        $cartItem = CartItem::firstOrCreate(
            [
                'user_id'    => auth()->id(),
                'product_id' => $product->id
            ],
            [
                'quantity' => 0
            ]
        );

        $newQty = $cartItem->quantity + $qty;

        $cartItem->update([
            'quantity' => min($newQty, $product->stock)
        ]);

        $count = CartItem::where('user_id', auth()->id())->sum('quantity');
    }
    else {

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {

            $cart[$product->id]['quantity'] += $qty;

            $cart[$product->id]['quantity'] = min(
                $cart[$product->id]['quantity'],
                $product->stock
            );

        } else {

            $cart[$product->id] = [
                'product_id' => $product->id,
                'name'       => $product->name,
                'price'      => $product->sale_price ?? $product->price,
                'image'      => $product->image_url,
                'quantity'   => min($qty, $product->stock),
                'category'   => $product->category?->name,
            ];
        }

        session()->put('cart', $cart);

        $count = collect($cart)->sum('quantity');
    }

    return response()->json([
        'success' => true,
        'message' => 'Added to cart!',
        'count'   => $count,
    ]);
}

    // Update quantity
   public function update(Request $request, $id)
{
    $qty = max(1, (int) $request->quantity);
    if (auth()->check()) {

        $cartItem = CartItem::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $qty = min($qty, $cartItem->product->stock);

        $cartItem->update([
            'quantity' => $qty
        ]);

        $price = $cartItem->product->sale_price
            ?? $cartItem->product->price;

        $itemTotal = $price * $qty;
    }
    else {

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {

            return response()->json([
                'success' => false
            ], 404);
        }

        $product = Product::findOrFail($id);

        $qty = min($qty, $product->stock);

        $cart[$id]['quantity'] = $qty;

        session()->put('cart', $cart);

        $price = $cart[$id]['price'];

        $itemTotal = $price * $qty;
    }

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
    if (auth()->check()) {

        CartItem::where('user_id', auth()->id())
            ->where('id', $id)
            ->delete();
    }
    else {

        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart', $cart);
    }

    return response()->json([
        'success' => true
    ]);
}

    // AJAX: header cart dropdown data
   public function headerCart()
{
    if (auth()->check()) {

        $items = CartItem::with('product.category')
            ->where('user_id', auth()->id())
            ->get();

        $cartItems = $items->map(function ($item) {

            return [
                'id'       => $item->id,
                'name'     => $item->product->name,
                'image'    => $item->product->image_url,
                'category' => $item->product->category?->name,
                'qty'      => $item->quantity,
                'price'    => number_format(
                    ($item->product->sale_price ?? $item->product->price),
                    0
                ),
            ];
        });

        $count = $items->sum('quantity');
    }

    else {

        $sessionCart = session()->get('cart', []);

        $cartItems = collect($sessionCart)->map(function ($item, $key) {

            return [
                'id'       => $key,
                'name'     => $item['name'],
                'image'    => $item['image'],
                'category' => $item['category'],
                'qty'      => $item['quantity'],
                'price'    => number_format($item['price'], 0),
            ];
        })->values();

        $count = collect($sessionCart)->sum('quantity');
    }

    return response()->json([
        'count' => $count,
        'items' => $cartItems
    ]);
}
   private function cartCount(): int
{
    if (auth()->check()) {

        return CartItem::where('user_id', auth()->id())
            ->sum('quantity');
    }
    return collect(session()->get('cart', []))
        ->sum('quantity');
}

   private function getSummary(): array
{
    if (auth()->check()) {

        $items = CartItem::with('product')
            ->where('user_id', auth()->id())
            ->get();

        $subtotal = $items->sum(fn($i) =>
            ($i->product->sale_price ?? $i->product->price)
            * $i->quantity
        );

        $discount = $items->sum(fn($i) =>
            $i->product->sale_price
                ? ($i->product->price - $i->product->sale_price) * $i->quantity
                : 0
        );

        $count = $items->sum('quantity');
    }

    else {

        $cart = session()->get('cart', []);

        $subtotal = collect($cart)->sum(function ($item) {

            return $item['price'] * $item['quantity'];
        });

        $discount = 0;

        $count = collect($cart)->sum('quantity');
    }

    $tax      = $subtotal * 0.18;
    $delivery = $subtotal > 0 ? 5 : 0;
    $total    = $subtotal - $discount + $tax + $delivery;

    return [
        'subtotal' => number_format($subtotal, 2),
        'discount' => number_format($discount, 2),
        'tax'      => number_format($tax, 2),
        'delivery' => number_format($delivery, 2),
        'total'    => number_format($total, 2),
        'count'    => $count,
    ];
}





}
