<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function getData()
    {
        $categories = Category::with('creator')->latest();

        return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('image_col', fn($c) => $c->image
                ? '<img src="'.asset('storage/'.$c->image).'" width="45" height="45" style="object-fit:cover;border-radius:6px;">'
                : '<span class="text-muted">—</span>'
            )
            ->addColumn('slug_col', fn($c) => '<code>'.$c->slug.'</code>')
            ->addColumn('description_col', fn($c) => $c->description ?: '<span class="text-muted">—</span>')
            ->addColumn('status_badge', fn($c) => $c->status === 'active'
                ? '<span class="badge bg-success">Active</span>'
                : '<span class="badge bg-secondary">Inactive</span>'
            )
            ->addColumn('created_by', fn($c) => $c->creator?->name ?? 'N/A')
            ->addColumn('actions', fn($c) => '
                <button class="btn btn-success-light btn-sm me-1 editCatBtn"
                    data-id="'.$c->id.'"
                    data-name="'.e($c->name).'"
                    data-description="'.e($c->description).'"
                    data-status="'.$c->status.'"
                    data-image="'.($c->image ? asset('storage/'.$c->image) : '').'">
                    <i class="ri-edit-line"></i>
                </button>
                <button class="btn btn-danger-light btn-sm deleteCatBtn"
                    data-id="'.$c->id.'"
                    data-name="'.e($c->name).'">
                    <i class="ri-delete-bin-line"></i>
                </button>
            ')
            ->rawColumns(['image_col', 'slug_col', 'description_col', 'status_badge', 'actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100|unique:categories,name',
            'description' => 'nullable|string|max:255',
            'status'      => 'required|in:active,inactive',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
        }

        Category::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'status'      => $request->status,
            'image'       => $imagePath,
            'created_by'  => auth()->id(),
        ]);

        return response()->json(['success' => true, 'message' => 'Category added successfully!']);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:100|unique:categories,name,'.$id,
            'description' => 'nullable|string|max:255',
            'status'      => 'required|in:active,inactive',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $category->image; // keep existing by default

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $imagePath = $request->file('image')->store('categories', 'public');
        }

        // If user explicitly removed the image
        if ($request->input('remove_image') == '1') {
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $imagePath = null;
        }

        $category->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'status'      => $request->status,
            'image'       => $imagePath,
        ]);

        return response()->json(['success' => true, 'message' => 'Category updated successfully!']);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->products()->count() > 0) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete! This category has products.',
            ], 422);
        }

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully!']);
    }
}