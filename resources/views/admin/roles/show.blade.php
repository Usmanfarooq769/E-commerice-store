@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card custom-card bg-primary-transparent">
            <div class="card-header gap-3 flex-wrap border-0">
                <a href="{{ route('admin.roles.index') }}" class="btn btn-sm btn-light">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <div class="flex-grow-1">
                    <h4 class="fw-bold mb-0 d-flex align-items-center gap-2">
                        Role:
                        <span class="role-badge {{ $role->name }}">{{ $role->name }}</span>
                    </h4>
                </div>
                @can('edit roles')
                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-success btn-sm">
                    <i class="bi bi-pencil me-1"></i> Edit Role
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    {{-- Permissions --}}
    <div class="col-xl-8">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="fw-semibold">
                    <i class="bi bi-key me-2 text-warning"></i>
                    Permissions
                    <span class="badge bg-secondary ms-2">{{ $role->permissions->count() }}</span>
                </h6>
            </div>
            <div class="card-body">
                @php
                $grouped = $role->permissions->groupBy(function($p) {
                $parts = explode(' ', $p->name);
                return $parts[1] ?? $p->name;
                });
                @endphp

                @forelse($grouped as $group => $perms)
                <div class="perm-group-card">
                    <h6 class="perm-group-title mb-3 mt-3">
                        <i class="bi bi-folder2"></i> {{ ucfirst($group) }}
                    </h6>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($perms as $perm)
                        <span class="badge bg-success-transparent" style="font-size:.78rem">
                            <i class="bi bi-check-circle-fill text-success me-1"></i>
                            {{ $perm->name }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @empty
                <p class="text-muted mb-0">No permissions assigned to this role.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="col-xl-4">
        {{-- Role details --}}
        <div class="card  custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">Role Details</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-sm mb-0">
                        <tr>
                            <td class="text-muted ps-3">Name</td>
                            <td class="pe-3 text-end fw-medium">{{ $role->name }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-3">Guard</td>
                            <td class="pe-3 text-end">{{ $role->guard_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-3">Permissions</td>
                            <td class="pe-3 text-end">{{ $role->permissions->count() }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-3">Users</td>
                            <td class="pe-3 text-end">{{ $role->users->count() }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-3">Created</td>
                            <td class="pe-3 text-end">{{ $role->created_at->format('M d, Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
       </div>

            {{-- Users with this role --}}
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap">
                    <h6 class="mb-0 fw-semibold">
                        <i class="bi bi-people me-2"></i>
                        Users with this role
                        <span class="badge bg-secondary ms-1">{{ $role->users->count() }}</span>
                    </h6>
                </div>
                <div class="card-body p-0">
                    @forelse($role->users->take(10) as $user)
                    <div class="d-flex align-items-center gap-2 px-3 py-2 border-bottom">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width:32px;height:32px;background:#ede9fe;color:#5b21b6;font-size:.75rem;font-weight:600">
                            {{ strtoupper(substr($user->name, 0, 2)) }}
                        </div>
                        <div>
                            <div style="font-size:.85rem;font-weight:500">{{ $user->name }}</div>
                            <div style="font-size:.75rem;color:#64748b">{{ $user->email }}</div>
                        </div>
                        @can('view users')
                        <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-light ms-auto py-0 px-2">
                            <i class="bi bi-arrow-right" style="font-size:.75rem"></i>
                        </a>
                        @endcan
                    </div>
                    @empty
                    <p class="text-muted text-center py-3 mb-0" style="font-size:.85rem">
                        No users assigned to this role
                    </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @endsection