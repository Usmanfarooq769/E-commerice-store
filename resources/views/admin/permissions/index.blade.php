@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">All Permissions</h6>
                <span class="badge bg-primary">{{ $permissions->total() }} total</span>

                <div class="d-flex align-items-center">
                    @can('create permissions')
                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> New Permission
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th style="width:50px">#</th>
                                <th>Permission Name</th>
                                <th>Assigned to Roles</th>
                                <th style="width:120px">Guard</th>
                                <th style="width:130px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($permissions as $permission)
                            <tr>
                                <td class="text-muted">
                                    {{ ($permissions->currentPage()-1) * $permissions->perPage() + $loop->iteration }}
                                </td>

                                <td>
                                    <code class="badge bg-primary" style="font-size:.82rem">
                                {{ $permission->name }}
                            </code>
                                </td>

                                <td>
                                    @forelse($permission->roles as $role)
                                    <span class="badge bg-success" style="font-size:.82rem">{{ $role->name }}</span>
                                    @empty
                                    <span class="text-primary" style="font-size:.8rem">Unassigned</span>
                                    @endforelse
                                </td>

                                <td>
                                    <span class="badge bg-primary" style="font-size:.82rem">{{ $permission->guard_name }}</span>
                                </td>

                                <td>
                                    <div class="d-flex gap-1">
                                        @can('edit permissions')
                                        <a href="{{ route('admin.permissions.edit', $permission) }}"
                                            class="btn btn-sm btn-success-light" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        @endcan

                                        @can('delete permissions')
                                        <form action="{{ route('admin.permissions.destroy', $permission) }}"
                                            method="POST"
                                            onsubmit="return confirm('Delete permission {{ $permission->name }}?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger-light" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    <i class="bi bi-key fs-3 d-block mb-2"></i>
                                    No permissions found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($permissions->hasPages())
            <div class="card-footer bg-white">
                {{ $permissions->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection