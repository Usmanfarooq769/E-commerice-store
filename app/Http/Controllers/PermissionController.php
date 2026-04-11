<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of all permissions.
     */
    public function index()
    {
        $permissions = Permission::with('roles')->paginate(15);

        return view('admin.permissions.index', compact('permissions'));
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
        $permName = $permission->name;
        $permission->delete();

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', "Permission <strong>{$permName}</strong> deleted successfully.");
    }
}