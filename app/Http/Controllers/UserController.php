<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of all users with their roles.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show a single user with their roles and permissions.
     */
    public function show(User $user)
    {
        $user->load('roles', 'permissions');
        $roles = Role::all();

        return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Assign a role to a user.
     */
    public function assignRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        if ($user->hasRole($request->role)) {
            return back()->with('warning', "User already has the <strong>{$request->role}</strong> role.");
        }

        $user->assignRole($request->role);

        return back()->with('success', "Role <strong>{$request->role}</strong> assigned to {$user->name}.");
    }

    /**
     * Revoke a role from a user.
     */
    public function revokeRole(User $user, Role $role)
    {
        if (!$user->hasRole($role)) {
            return back()->with('warning', "User does not have the <strong>{$role->name}</strong> role.");
        }

        $user->removeRole($role);

        return back()->with('success', "Role <strong>{$role->name}</strong> revoked from {$user->name}.");
    }

    /**
     * Sync all roles for a user at once.    
     */
    public function syncRoles(Request $request, User $user)
    {
        $request->validate([
            'roles'   => 'nullable|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $user->syncRoles($request->roles ?? []);

        return back()->with('success', "Roles updated for <strong>{$user->name}</strong>.");
    }
}