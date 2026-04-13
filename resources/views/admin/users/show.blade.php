@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card custom-card bg-primary-transparent">
            <div class="card-header justify-content-between flex-wrap border-0">
                <h3 class="card-title">{{ $user->name }}</h3>
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-light">
                    <i class="bi bi-arrow-left"></i>
                </a>


            </div>

        </div>
    </div>
</div>

<div class="row g-4">

    {{-- Left: current roles + permissions --}}
    <div class="col-xl-8">

        {{-- Current Roles --}}
        <div class="card custom-card ">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">
                    <i class="bi bi-person-badge me-2 text-primary"></i>
                    Current Roles
                </h6>
                <span class="badge bg-secondary" style="font-size:.85rem">{{ $user->roles->count() }}</span>
            </div>
            <div class="card-body">
                @forelse($user->roles as $role)
                <div class="d-flex align-items-center justify-content-between py-2
                            {{ !$loop->last ? 'border-bottom' : '' }}">
                    <div class="d-flex align-items-center gap-3">
                        <span class="role-badge {{ $role->name }}">
                            <i class="bi bi-circle-fill" style="font-size:.4rem"></i>
                            {{ $role->name }}
                        </span>
                        <span class="text-muted" style="font-size:.8rem">
                            {{ $role->permissions->count() }} permissions
                        </span>
                    </div>

                    <form action="{{ route('admin.users.revoke-role', [$user, $role]) }}"
                          method="POST"
                          onsubmit="return confirm('Revoke {{ $role->name }} from {{ $user->name }}?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-x-lg me-1"></i> Revoke
                        </button>
                    </form>
                </div>
                @empty
                <p class="text-primary mb-0" style="font-size:.875rem">
                    <i class="bi bi-info-circle me-1"></i>
                    No roles assigned to this user yet.
                </p>
                @endforelse
            </div>
        </div>

        {{-- Effective Permissions (from all roles) --}}
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">
                    <i class="bi bi-key me-2 text-warning"></i>
                    Effective Permissions
                    <span class="badge bg-secondary ms-2">
                        {{ $user->getAllPermissions()->count() }}
                    </span>
                </h6>
            </div>
            <div class="card-body">
                @php
                    $allPerms = $user->getAllPermissions()->groupBy(function($p) {
                        return explode(' ', $p->name)[1] ?? $p->name;
                    });
                @endphp

                @forelse($allPerms as $group => $perms)
              
                    <h6 class="perm-group-title mt-3 mb-3">
                        <i class="bi bi-folder2"></i> {{ ucfirst($group) }}
                    </h6>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($perms as $perm)
                            <span class="badge bg-success" style="font-size:.82rem">
                                <i class="bi bi-check2 me-1"></i>{{ $perm->name }}
                            </span>
                        @endforeach
                    </div>
               
                @empty
                    <p class="text-muted mb-0" style="font-size:.875rem">No permissions from roles.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Right: assign role + user info --}}
    <div class="col-xl-4">

        {{-- User info card --}}
        <div class="card custom-card">
            <div class="card-body text-center py-4">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                     style="width:64px;height:64px;background:#ede9fe;color:#5b21b6;font-size:1.3rem;font-weight:700">
                    {{ strtoupper(substr($user->name, 0, 2)) }}
                </div>
                <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                <p class="text-muted mb-2" style="font-size:.82rem">{{ $user->email }}</p>
                <div class="d-flex justify-content-center gap-1 flex-wrap">
                    @foreach($user->roles as $role)
                        <span class="role-badge {{ $role->name }}">{{ $role->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Assign single role --}}
        <div class="card custom-card ">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">Assign Role</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.assign-role', $user) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" style="font-size:.85rem">Select Role</label>
                        <select name="role" class="form-select form-select-sm">
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}"
                                    {{ $user->hasRole($role->name) ? 'disabled' : '' }}>
                                    {{ $role->name }}
                                    {{ $user->hasRole($role->name) ? '(assigned)' : '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm w-100">
                        <i class="bi bi-plus-lg me-1"></i> Assign Role
                    </button>
                </form>
            </div>
        </div>

        {{-- Sync all roles at once --}}
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">Sync All Roles</h6>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3" style="font-size:.8rem">
                    This replaces all current roles with the selected ones.
                </p>
                <form action="{{ route('admin.users.sync-roles', $user) }}" method="POST">
                    @csrf
                    @foreach($roles as $role)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox"
                               name="roles[]"
                               value="{{ $role->name }}"
                               id="sync_{{ $role->id }}"
                               {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                        <label class="form-check-label" for="sync_{{ $role->id }}"
                               style="font-size:.875rem">
                            {{ $role->name }}
                        </label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-warning btn-sm w-100 mt-2"
                            onclick="return confirm('This will replace all current roles. Continue?')">
                        <i class="bi bi-arrow-repeat me-1"></i> Sync Roles
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@endpush