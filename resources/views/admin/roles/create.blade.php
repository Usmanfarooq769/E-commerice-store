@extends('layouts.app')

@section('content')




<div class="row">
    <div class="col-md-12">
        <div class="card custom-card bg-primary-transprint">
            <div class="card-header justify-content-between flex-wrap border-0">
                <h3 class="card-title">Create Role</h3>
                <a href="{{ route('admin.roles.index') }}" class="btn btn-sm btn-light">
                    <i class="bi bi-arrow-left"></i>
                </a>

            </div>
        </div>
    </div>
</div>


<form action="{{ route('admin.roles.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xl-8">
            {{-- Role Name --}}
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap">
                    <h6 class="mb-0 fw-semibold"><i class="bi bi-tag me-2 text-primary"></i>Role Details</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" placeholder="e.g. editor, moderator, manager" required
                            autofocus>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Use lowercase, no spaces (e.g. <code>super-admin</code>)</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Help sidebar --}}
        <div class="col-xl-4">
            <div class="card custom-card bg-success-transparent">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3"><i class="bi bi-lightbulb me-2 text-primary"></i>Tips</h6>
                    <ul class="list-unstyled mb-0" style="font-size:.85rem;color:#64748b">
                        <li class="mb-2">
                            <i class="bi bi-dot text-primary"></i>
                            Role names must be unique and lowercase
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-dot text-primary"></i>
                            Assign only the minimum permissions required
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-dot text-primary"></i>
                            The <strong>admin</strong> role gets all permissions
                        </li>
                        <li>
                            <i class="bi bi-dot text-primary"></i>
                            You can update permissions anytime
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{-- Permissions --}}
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap">
                    <h6 class="mb-0 fw-semibold"><i class="bi bi-key me-2 text-primary"></i>Permissions</h6>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="selectAll">
                        <label class="form-check-label" style="font-size:.8rem" for="selectAll">Select All</label>
                    </div>
                </div>
                <div class="card-body">
                    @forelse($permissions as $group => $groupPerms)
                    <div class="perm-group-card">
                        <div class="perm-group-title mt-2 mb-2">
                            <i class="bi bi-folder2"></i>
                            {{ ucfirst($group) }}
                        </div>
                        <div class="row g-2">
                            @foreach($groupPerms as $permission)
                            <div class="col-sm-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input perm-check" type="checkbox" name="permissions[]"
                                        value="{{ $permission->name }}" id="perm_{{ $permission->id }}"
                                        {{ in_array($permission->name, old('permissions', [])) ? 'checked' : '' }}>
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
                    <p class="text-primary mb-0">
                        No permissions found.
                        <a href="{{ route('admin.permissions.create') }}">Create some first</a>.
                    </p>
                    @endforelse
                </div>
                <div class="card-footer text-end gap-2">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-check-lg me-1"></i> Create Role
                    </button>
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </div>

            {{-- Actions --}}


        </div>
    </div>
</form>
@endsection
@push('scripts')
<script>
const selectAll = document.getElementById('selectAll');
const checkboxes = document.querySelectorAll('.perm-check');

selectAll.addEventListener('change', function() {
    checkboxes.forEach(cb => cb.checked = this.checked);
});

// Update select-all state if individual boxes change
checkboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectAll.checked = [...checkboxes].every(c => c.checked);
        selectAll.indeterminate = [...checkboxes].some(c => c.checked) && ![...checkboxes].every(c => c
            .checked);
    });
});
</script>
@endpush