@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card custom-card bg-primary-transparent">
            <div class="card-header justify-content-between flex-wrap border-0">
            <h3 class="card-title">Edit Permission <span class="text-primary">{{ $permission->name }}</span></h3>

             <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-light">
                <i class="bi bi-arrow-left"></i>
            </a>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="mb-0 fw-semibold"><i class="bi bi-key me-2 text-warning"></i>Permission Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
                    @csrf @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="form-label">
                            Permission Name <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               id="name" name="name"
                               value="{{ old('name', $permission->name) }}"
                               required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="bi bi-exclamation-triangle text-warning"></i>
                            Renaming may affect existing role assignments.
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-lg me-1"></i> Update Permission
                        </button>
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        {{-- Danger zone --}}
        <div class="card custom-card bg-danger-transparent">
            <div class="card-body">
                <h6 class="fw-semibold text-danger mb-2">Danger Zone</h6>
                <p class="text-muted mb-3" style="font-size:.8rem">
                    Deleting this permission removes it from all roles that have it.
                </p>
                <form action="{{ route('admin.permissions.destroy', $permission) }}"
                      method="POST"
                      onsubmit="return confirm('Delete permission {{ $permission->name }}?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash me-1"></i> Delete Permission
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="mb-0 fw-semibold">Assigned to Roles</h6>
            </div>
            <div class="card-body p-0">
                @forelse($permission->roles as $role)
                <div class="d-flex align-items-center px-3 py-2 border-bottom">
                    <span class="role-badge {{ $role->name }}">{{ $role->name }}</span>
                    <a href="{{ route('admin.roles.edit', $role) }}"
                       class="btn btn-sm btn-light ms-auto py-0 px-2">
                        <i class="bi bi-pencil" style="font-size:.75rem"></i>
                    </a>
                </div>
                @empty
                <p class="text-primary text-center py-3 mb-0" style="font-size:.85rem">
                    Not assigned to any roles
                </p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection