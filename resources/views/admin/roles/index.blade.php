@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="fw-bold mb-0">Roles</h4>
        <p class="text-muted mb-0" style="font-size:.85rem">Manage application roles and their permissions</p>
    </div>

</div>

{{-- Stats row --}}
<div class="row">
    <div class="col-xl-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="flex-fill fs-13 text-muted mb-2">Total Roles</div>
                        <h4 class="fw-semibold mb-0">{{ $roles->total() }}</h4>
                    </div>
                    <div class="avatar avatar-md avatar-rounded bg-primary shadow-primary flex-shrink-0">
                        <i class="ti ti-briefcase fs-18"></i>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div class="col-xl-6">


        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="flex-fill fs-13 text-muted mb-2">Total Permissions</div>
                        <h4 class="fw-semibold mb-0">{{ \Spatie\Permission\Models\Permission::count() }}</h4>
                    </div>
                    <div class="avatar avatar-md avatar-rounded bg-secondary shadow-secondary flex-shrink-0">
                        <i class="ti ti-news fs-18"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Roles Table --}}
<div class="card custom-card">
    <div class="card-header  justify-content-between flex-wrap">
        <h6 class="card-title">All Roles</h6>
        <div class="d-flex align-item-center gap3">
            <span class="badge bg-light text-dark">{{ $roles->total() }} total</span>
            @can('create roles')
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> New Role
            </a>
            @endcan
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width:50px">#</th>
                        <th>Role Name</th>
                        <th>Permissions</th>
                        <th style="width:80px">Users</th>
                        <th style="width:160px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $role)
                    <tr>
                        <td class="text-muted">{{ $loop->iteration }}</td>

                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="role-badge {{ $role->name }}">
                                    <i class="bi bi-circle-fill text-primary" style="font-size:.4rem"></i>
                                    {{ $role->name }}
                                </span>
                            </div>
                        </td>

                        <td>
                            @forelse($role->permissions->take(5) as $perm)
                            <span class="badge bg-primary">
                                {{ $perm->name }}
                            </span>
                            @empty
                            <span class="text-muted" style="font-size:.8rem">No permissions</span>
                            @endforelse
                            @if($role->permissions->count() > 5)
                            <span class="badge bg-secondary rounded-pill">
                                +{{ $role->permissions->count() - 5 }} more
                            </span>
                            @endif
                        </td>

                        <td>
                            <span class="badge bg-primary">
                                {{ $role->users_count }}
                            </span>
                        </td>

                        <td>
                            <div class="d-flex gap-1">
                                @can('view roles')
                                <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-sm btn-primary-light"
                                    title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                                @endcan

                                @can('edit roles')
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-success-light"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                @endcan

                                @can('delete roles')
                                @if($role->name !== 'admin')
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST"
                                    onsubmit="return confirm('Delete role {{ $role->name }}? This cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger-light" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                @endif
                                @endcan
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                            No roles found. <a href="{{ route('admin.roles.create') }}">Create one</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($roles->hasPages())
    <div class="card-footer bg-white border-top">
        {{ $roles->links() }}
    </div>
    @endif
</div>
@endsection