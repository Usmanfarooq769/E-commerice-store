<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                    data-status="'.$c->status.'">
                    <i class="ri-edit-line"></i>
                </button>
                <button class="btn btn-danger-light btn-sm deleteCatBtn"
                    data-id="'.$c->id.'"
                    data-name="'.e($c->name).'">
                    <i class="ri-delete-bin-line"></i>
                </button>
            ')
            ->rawColumns(['slug_col', 'description_col', 'status_badge', 'actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100|unique:categories,name',
            'description' => 'nullable|string|max:255',
            'status'      => 'required|in:active,inactive',
        ]);

        Category::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'status'      => $request->status,
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
        ]);

        $category->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'status'      => $request->status,
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

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully!']);
    }
}