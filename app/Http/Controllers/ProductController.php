<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->get(['id', 'name']);
        return view('admin.products.index', compact('categories'));
    }

    public function getData()
    {
        $products = Product::with(['category', 'creator'])->latest();

        return DataTables::of($products)
            ->addIndexColumn()
            ->addColumn('image_col', fn($p) => $p->image_url
                ? '<img src="'.$p->image_url.'" style="height:40px;width:50px;object-fit:cover;border-radius:4px;">'
                : '<span class="text-muted">—</span>'
            )
            ->addColumn('category_name', fn($p) => $p->category?->name ?? 'N/A')
            ->addColumn('price_col', fn($p) => 'PKR '.number_format($p->price, 2))
            ->addColumn('sale_price_col', fn($p) => $p->sale_price
                ? '<span class="text-danger">PKR '.number_format($p->sale_price, 2).'</span>'
                : '<span class="text-muted">—</span>'
            )
            ->addColumn('status_badge', fn($p) => $p->status === 'active'
                ? '<span class="badge bg-success">Active</span>'
                : '<span class="badge bg-secondary">Inactive</span>'
            )
            ->addColumn('featured_badge', fn($p) => $p->is_featured
                ? '<span class="badge bg-warning text-dark">Yes</span>'
                : '<span class="badge bg-light text-dark">No</span>'
            )
            ->addColumn('created_by', fn($p) => $p->creator?->name ?? 'N/A')
            ->addColumn('actions', fn($p) => '
                <button class="btn btn-success-light btn-sm editProdBtn"
                    data-id="'.$p->id.'"
                    data-category_id="'.$p->category_id.'"
                    data-name="'.e($p->name).'"
                    data-sku="'.e($p->sku).'"
                    data-price="'.$p->price.'"
                    data-sale_price="'.$p->sale_price.'"
                    data-stock="'.$p->stock.'"
                    data-unit="'.$p->unit.'"
                    data-status="'.$p->status.'"
                    data-featured="'.($p->is_featured ? 1 : 0).'"
                    data-description="'.e($p->description).'"
                    data-image="'.($p->image_url ?? '').'">
                    <i class="ri-edit-line"></i>
                </button>
                <button class="btn btn-danger-light btn-sm deleteProdBtn"
                    data-id="'.$p->id.'"
                    data-name="'.e($p->name).'">
                    <i class="ri-delete-bin-line"></i>
                </button>
            ')
            ->rawColumns(['image_col','sale_price_col','status_badge','featured_badge','actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:150',
            'price'       => 'required|numeric|min:0',
            'sale_price'  => 'nullable|numeric|lt:price',
            'stock'       => 'required|integer|min:0',
            'unit'        => 'required|in:piece,kg,liter,gram,dozen',
            'status'      => 'required|in:active,inactive',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'_'.Str::slug($request->name).'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
        }

        Product::create([
            'category_id' => $request->category_id,
            'created_by'  => auth()->id(),
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'sku'         => $request->sku ?: strtoupper(Str::random(8)),
            'description' => $request->description,
            'price'       => $request->price,
            'sale_price'  => $request->sale_price ?: null,
            'image'       => $imageName,
            'stock'       => $request->stock,
            'unit'        => $request->unit,
            'status'      => $request->status,
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return response()->json(['success' => true, 'message' => 'Product added successfully!']);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:150',
            'price'       => 'required|numeric|min:0',
            'sale_price'  => 'nullable|numeric|lt:price',
            'stock'       => 'required|integer|min:0',
            'unit'        => 'required|in:piece,kg,liter,gram,dozen',
            'status'      => 'required|in:active,inactive',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('products/'.$product->image))) {
                unlink(public_path('products/'.$product->image));
            }
            $imageName = time().'_'.Str::slug($request->name).'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->update([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'sku'         => $request->sku,
            'description' => $request->description,
            'price'       => $request->price,
            'sale_price'  => $request->sale_price ?: null,
            'stock'       => $request->stock,
            'unit'        => $request->unit,
            'status'      => $request->status,
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return response()->json(['success' => true, 'message' => 'Product updated successfully!']);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && file_exists(public_path('products/'.$product->image))) {
            unlink(public_path('products/'.$product->image));
        }

        $product->delete();

        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
}