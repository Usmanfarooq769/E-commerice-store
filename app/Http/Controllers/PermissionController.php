<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
 use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of all permissions.
     */
    public function index()
    {
        $totalPermissions = Permission::count();

    return view('admin.permissions.index', compact('totalPermissions'));
    }

    /**
     * Show the form for creating a new permission.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created permission in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:permissions,name',
        ]);

        $permission = Permission::create(['name' => $request->name]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', "Permission <strong>{$permission->name}</strong> created successfully.");
    }

    /**
     * Show the form for editing the specified permission.
     */
    public function edit(Permission $permission)
    {
        $roles             = Role::all();
        $permissionRoles   = $permission->roles->pluck('name')->toArray();

        return view('admin.permissions.edit', compact('permission', 'roles', 'permissionRoles'));
    }

    /**
     * Update the specified permission in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $request->name]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', "Permission <strong>{$permission->name}</strong> updated successfully.");
    }

    /**
     * Remove the specified permission from storage.
     */
   public function destroy(Permission $permission)
{
    $permission->delete();

    return response()->json([
        'success' => true,
        'message' => 'Permission deleted successfully'
    ]);
}


  

public function getData(Request $request)
{
    if ($request->ajax()) {

        $permissions = Permission::with('roles')->select('permissions.*');

        return DataTables::of($permissions)

            ->addIndexColumn()

            ->addColumn('name', function ($permission) {
                return '<code class="badge bg-primary">'.$permission->name.'</code>';
            })

            ->addColumn('roles', function ($permission) {
                if ($permission->roles->count()) {
                    return $permission->roles->map(function ($role) {
                        return '<span class="badge bg-success">'.$role->name.'</span>';
                    })->implode(' ');
                }
                return '<span class="text-primary">Unassigned</span>';
            })

            ->addColumn('guard_name', function ($permission) {
                return '<span class="badge bg-primary">'.$permission->guard_name.'</span>';
            })

            ->addColumn('actions', function ($permission) {

                $edit = '';
                $delete = '';

                if (auth()->user()->can('edit permissions')) {
                    $edit = '<a href="'.route('admin.permissions.edit', $permission).'" class="btn btn-sm btn-success-light">
                                <i class="bi bi-pencil"></i>
                             </a>';
                }

                if (auth()->user()->can('delete permissions')) {
                    $delete = '<button data-id="'.$permission->id.'" data-name="'.$permission->name.'" class="btn btn-sm btn-danger-light delete-btn">
                                <i class="bi bi-trash"></i>
                               </button>';
                }

                return '<div class="d-flex gap-1">'.$edit.$delete.'</div>';
            })

            ->rawColumns(['name', 'roles', 'guard_name', 'actions'])
            ->make(true);
    }
}
}