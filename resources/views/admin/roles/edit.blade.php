@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-nd-12">


        <div class="card custom-card bg-primary-transparent">

            <div class="card-header justify-content-between flex-wrap border-0">

                <h4 class="card-header">Edit <span class="badge bg-success ">{{ $role->name }}</span> Role</h4>
                <a href="{{ route('admin.roles.index') }}" class="btn btn btn-sm btn-light">
                    <i class="bi bi-arrow-left"></i>
                </a>

            </div>
        </div>
    </div>
</div>
<form action="{{ route('admin.roles.update', $role) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xl-8">
            {{-- Role Name --}}
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap">
                    <h6 class="mb-0 fw-semibold"><i class="bi bi-tag me-2 text-primary"></i>Role Details</h6>
                </div>
                <div class="card-body">
                    <div class="mb-0">
                        <label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $role->name) }}" required
                            {{ $role->name === 'admin' ? 'readonly' : '' }}>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($role->name === 'admin')
                        <div class="form-text text-warning">
                            <i class="bi bi-lock-fill"></i>
                            The admin role name cannot be changed.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Role info sidebar --}}
        <div class="col-xl-4">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Role Information</div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:.85rem">
                        <span class="text-muted">Name</span>
                        <span class="fw-medium">{{ $role->name }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:.85rem">
                        <span class="text-muted">Permissions</span>
                        <span class="fw-medium">{{ count($rolePermissions) }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2" style="font-size:.85rem">
                        <span class="text-muted">Created</span>
                        <span class="fw-medium">{{ $role->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>

            @if($role->name !== 'admin')
            <div class="card border-danger">
                <div class="card-body">
                    <h6 class="fw-semibold text-danger mb-2">Danger Zone</h6>
                    <p class="text-muted mb-3" style="font-size:.8rem">
                        Deleting this role will remove it from all users assigned to it.
                    </p>
                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST"
                        onsubmit="return confirm('Delete role {{ $role->name }}? This cannot be undone.')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger w-100">
                            <i class="bi bi-trash me-1"></i> Delete Role
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            {{-- Permissions --}}
            <div class="card custom-card ">
                <div class="card-header justify-content-between flex-wrap">
                    <h6 class="card-title"><i class="bi bi-key me-2 text-warning"></i>Permissions</h6>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-success" id="selected-count">
                            {{ count($rolePermissions) }} selected
                        </span>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" id="selectAll">
                            <label class="form-check-label" style="font-size:.8rem" for="selectAll">Select
                                All</label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @forelse($permissions as $group => $groupPerms)
                    <div class="perm-group-card">
                        <div class="perm-group-title mb-2 mt-2">
                            <i class="bi bi-folder2"></i>
                            {{ ucfirst($group) }}
                        </div>
                        <div class="row g-2">
                            @foreach($groupPerms as $permission)
                            <div class="col-sm-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input perm-check" type="checkbox" name="permissions[]"
                                        value="{{ $permission->name }}" id="perm_{{ $permission->id }}"
                                        {{ in_array($permission->name, old('permissions', $rolePermissions)) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perm_{{ $permission->id }}"
                                        style="font-size:.85rem">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @empty
                    <p class="text-muted mb-0">No permissions found.</p>
                    @endforelse
                </div>


                {{-- Actions --}}
                <div class="card-footer text-end gap-2">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-check-lg me-2"></i> Update Role
                    </button>
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
const selectAll = document.getElementById('selectAll');
const checkboxes = document.querySelectorAll('.perm-check');
const countBadge = document.getElementById('selected-count');

function updateCount() {
    const n = [...checkboxes].filter(c => c.checked).length;
    countBadge.textContent = n + ' selected';
    selectAll.checked = n === checkboxes.length;
    selectAll.indeterminate = n > 0 && n < checkboxes.length;
}

selectAll.addEventListener('change', function() {
    checkboxes.forEach(cb => cb.checked = this.checked);
    updateCount();
});

checkboxes.forEach(cb => cb.addEventListener('change', updateCount));
updateCount();
</script>
@endpush