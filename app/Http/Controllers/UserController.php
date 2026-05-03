<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\StaffDetail;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of all users with their roles.
     */
    public function index()
    {
        if (!auth()->user()->can('view users')) {
            abort(403, 'Unauthorized');
        }
        $users = User::with('roles')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show a single user with their roles and permissions.
     */
    public function editRole(User $user)
    {
        if (!auth()->user()->can('edit role user')) {
        abort(403, 'Unauthorized');
    }
        $user->load('roles', 'permissions');
        $roles = Role::all();

        return view('admin.users.edit_role', compact('user', 'roles'));
    }

    /**
     * Assign a role to a user.
     */
    public function assignRole(Request $request, User $user)
    {
         if (!auth()->user()->can('assign role user')) {
            abort(403, 'Unauthorized');
        }
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

      if (!auth()->user()->can('revoke role user')) {
            abort(403, 'Unauthorized');
        }

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

    if (!auth()->user()->can('sync role user')) {
            abort(403, 'Unauthorized');
        }
        $request->validate([
            'roles'   => 'nullable|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $user->syncRoles($request->roles ?? []);

        return back()->with('success', "Roles updated for <strong>{$user->name}</strong>.");
    }


    public function create()
    {
        if (!auth()->user()->can('create users')) {
            abort(403, 'Unauthorized');
        }
        
        $roles = Role::all(); 
        return view('admin.users.create', compact('roles'));
    }

    

    public function store(Request $request)
    {

    if (!auth()->user()->can('create users')) {
            abort(403, 'Unauthorized');
        }
        $request->validate([
        // User
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'roles'    => 'required|array',

        // Staff
        'address'       => 'nullable|string|max:255',
        'city'          => 'nullable|string|max:100',
        'phone_number'  => 'nullable|string|max:20',
        'salary'        => 'nullable|numeric',

        'father_name'   => 'nullable|string|max:255',

        'user_cnic' => ['nullable','regex:/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/'],
        'father_cnic' => ['nullable','regex:/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/'],

        // Files
        'profile_photo'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'last_degree_file'   => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

        'father_cnic_front'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'father_cnic_back'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'user_cnic_front'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'user_cnic_back'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

        $imagePath = null;

        // Upload Image
        if ($request->hasFile('profile_photo')) {
            $imagePath = $request->file('profile_photo')
                ->store('profile-photos', 'public'); // storage/app/public/profile-photos
        }

        // Create User
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'profile_photo_path' => $imagePath
        ]);

        // Assign Role
        $user->assignRole($request->role);

         // Upload Degree File
    $degreePath = null;
    $fatherFront = null;
    $fatherBack = null;
    $userFront = null;
    $userBack = null;
    if ($request->hasFile('last_degree_file')) {
        $degreePath = $request->file('last_degree_file')
            ->store('degrees', 'public');
    }

    if ($request->hasFile('father_cnic_front')) {
    $fatherFront = $request->file('father_cnic_front')
        ->store('cnic', 'public');
        }

        if ($request->hasFile('father_cnic_back')) {
            $fatherBack = $request->file('father_cnic_back')
                ->store('cnic', 'public');
        }

        if ($request->hasFile('user_cnic_front')) {
            $userFront = $request->file('user_cnic_front')
                ->store('cnic', 'public');
        }

        if ($request->hasFile('user_cnic_back')) {
            $userBack = $request->file('user_cnic_back')
                ->store('cnic', 'public');
        }

    // Save Staff Details
    StaffDetail::create([
        'user_id'       => $user->id, 
        'address'       => $request->address,
        'city'          => $request->city,
        'phone_number'  => $request->phone_number,
        'salary'        => $request->salary,
        'father_name'   => $request->father_name,
        'father_cnic'   => $request->father_cnic,
        'user_cnic'     => $request->user_cnic,
        'last_degree_file' => $degreePath,
        'father_cnic_front' => $fatherFront,
        'father_cnic_back'  => $fatherBack,
        'user_cnic_front'   => $userFront,
        'user_cnic_back'    => $userBack,
    ]);

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully');
    }

public function edit($id)
{
    if (!auth()->user()->can('edit users')) {
            abort(403, 'Unauthorized');
        }
    $user = User::with('staffDetail')->findOrFail($id);
    $roles = Role::all();

    return view('admin.users.edit', compact('user', 'roles'));
}
   

public function update(Request $request, $id)
{
    if (!auth()->user()->can('edit users')) {
            abort(403, 'Unauthorized');
        }
    $user = User::with('staffDetail')->findOrFail($id);

    $request->validate([
        // User
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'roles'    => 'required|array',

        // Staff
        'address'       => 'nullable|string|max:255',
        'city'          => 'nullable|string|max:100',
        'phone_number'  => 'nullable|string|max:20',
        'salary'        => 'nullable|numeric',

        'father_name'   => 'nullable|string|max:255',

        'user_cnic' => ['nullable','regex:/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/'],
        'father_cnic' => ['nullable','regex:/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/'],

        // Files
        'profile_photo'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'last_degree_file'   => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

        'father_cnic_front'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'father_cnic_back'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'user_cnic_front'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'user_cnic_back'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'education' => 'required' ,
        'work_experience' => 'required' ,
        'pincode' => 'required',
        'country' => 'required' ,
        'state' => 'required' , 

    ]);

    DB::transaction(function () use ($request, $user) {

        // Profile Image Update
        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $user->profile_photo_path = $request->file('profile_photo')
                ->store('profile-photos', 'public');
        }

        // Update User
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        $user->syncRoles($request->roles);

        $staff = $user->staffDetail;

        // File Upload Helper
        function uploadFile($request, $field, $oldPath = null) {
            if ($request->hasFile($field)) {
                if ($oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }
                return $request->file($field)->store('uploads', 'public');
            }
            return $oldPath;
        }

        // Update Staff Details
        $staff->update([
            'address' => $request->address,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'salary' => $request->salary,
            'father_name' => $request->father_name,
            'father_cnic' => $request->father_cnic,
            'user_cnic' => $request->user_cnic,
            'education' => $request->education,
            'work_experience' => $request->work_experience ,
            'pincode' => $request->pincode,
            'country' => $request->country,
            'state' => $request->state,
            'birthday' => $request->birthday,
            'last_degree_file' => uploadFile($request, 'last_degree_file', $staff->last_degree_file),
            'father_cnic_front' => uploadFile($request, 'father_cnic_front', $staff->father_cnic_front),
            'father_cnic_back'  => uploadFile($request, 'father_cnic_back', $staff->father_cnic_back),
            'user_cnic_front' => uploadFile($request, 'user_cnic_front', $staff->user_cnic_front),
            'user_cnic_back'  => uploadFile($request, 'user_cnic_back', $staff->user_cnic_back),
        ]);
    });

    return redirect()->route('admin.users.index')
        ->with('success', 'User updated successfully');
}

public function show($id){
    if (!auth()->user()->can('view users')) {
            abort(403, 'Unauthorized');
        }
    $user = User::with('staffDetail')->findOrFail($id);
    $roles = Role::all();

    return view('admin.users.show', compact('user', 'roles'));
}
}