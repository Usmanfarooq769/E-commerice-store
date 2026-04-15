<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('status', 'active')
            ->withCount(['products' => fn($q) => $q->where('status', 'active')])
            ->get();

        $products = Product::with('category')
            ->where('status', 'active')
            ->when($request->filled('search'),   fn($q) => $q->where('name', 'like', '%'.$request->search.'%'))
            ->when($request->filled('category'), fn($q) => $q->where('category_id', $request->category))
            ->when($request->filled('min_price'), fn($q) => $q->where('price', '>=', $request->min_price))
            ->when($request->filled('max_price'), fn($q) => $q->where('price', '<=', $request->max_price))
            ->when($request->filled('sort'), function ($q) use ($request) {
                match($request->sort) {
                    'price_asc'  => $q->orderBy('price', 'asc'),
                    'price_desc' => $q->orderBy('price', 'desc'),
                    'oldest'     => $q->oldest(),
                    default      => $q->latest(),
                };
            }, fn($q) => $q->latest())
            ->paginate(12)
            ->withQueryString();

        $featuredProducts = Product::where('status', 'active')
            ->where('is_featured', true)
            ->latest()->take(5)->get();

        return view('user.index', compact('products', 'categories', 'featuredProducts'));
    }

    public function show($slug)
    {
        $product = Product::with('category')
            ->where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        // Discount percentage
        $discount = null;
        if ($product->sale_price) {
            $discount = round((($product->price - $product->sale_price) / $product->price) * 100);
        }

        // Related products — same category, exclude current
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->take(6)->get();

        // Featured products for sidebar
        $featuredProducts = Product::where('status', 'active')
            ->where('is_featured', true)
            ->where('id', '!=', $product->id)
            ->take(5)->get();

        return view('user.product-details', compact('product', 'discount', 'relatedProducts', 'featuredProducts'));
    }
    public function byCategory(Request $request, $slug)
{
    $category = Category::where('slug', $slug)
        ->where('status', 'active')
        ->firstOrFail();

    $categories = Category::where('status', 'active')
        ->withCount(['products' => fn($q) => $q->where('status', 'active')])
        ->get();

    $products = Product::with('category')
        ->where('category_id', $category->id)
        ->where('status', 'active')
        ->when($request->filled('search'),    fn($q) => $q->where('name', 'like', '%'.$request->search.'%'))
        ->when($request->filled('min_price'), fn($q) => $q->where('price', '>=', $request->min_price))
        ->when($request->filled('max_price'), fn($q) => $q->where('price', '<=', $request->max_price))
        ->when($request->filled('sort'), function ($q) use ($request) {
            match($request->sort) {
                'price_asc'  => $q->orderBy('price', 'asc'),
                'price_desc' => $q->orderBy('price', 'desc'),
                'oldest'     => $q->oldest(),
                default      => $q->latest(),
            };
        }, fn($q) => $q->latest())
        ->paginate(12)
        ->withQueryString();

    $featuredProducts = Product::where('status', 'active')
        ->where('is_featured', true)
        ->latest()->take(5)->get();

    return view('user.category-products', compact('category', 'categories', 'products', 'featuredProducts'));
}
}