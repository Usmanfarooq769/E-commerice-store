@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">  
<div class="card custom-card bg-primary-transparent ">
    <div class="card-header justify-content-between flex-warp border-0">
        <h3 class="card-title">Create New Permission</h3>
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
                <h6 class="card-title"><i class="bi bi-key me-2 text-warning"></i>Permission Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.permissions.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">
                            Permission Name <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               id="name" name="name"
                               value="{{ old('name') }}"
                               placeholder="e.g. edit posts"
                               required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            Convention: <code>action resource</code>
                            &nbsp;e.g.&nbsp; <code>view posts</code>, <code>delete users</code>
                        </div>
                    </div>

                    {{-- Quick presets --}}
                    <div class="mb-4">
                        <label class="form-label">Quick Presets</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach(['view posts','create posts','edit posts','delete posts','view users','manage users'] as $preset)
                                <button type="button"
                                        class="btn btn-sm btn-outline-secondary preset-btn"
                                        onclick="document.getElementById('name').value='{{ $preset }}'">
                                    {{ $preset }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-lg me-1"></i> Create Permission
                        </button>
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card custom-card bg-success-transparent" >
            <div class="card-body">
                <h6 class="fw-semibold mb-3"><i class="bi bi-lightbulb me-2 text-warning"></i>Naming Convention</h6>
                <p style="font-size:.85rem;color:#64748b" class="mb-3">
                    Use <code>verb noun</code> format for consistency:
                </p>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" style="font-size:.82rem">
                        <thead class="table-primary">
                            <tr><th>Action</th><th>Resource</th><th>Permission</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>view</td><td>posts</td><td><code>view posts</code></td></tr>
                            <tr><td>create</td><td>posts</td><td><code>create posts</code></td></tr>
                            <tr><td>edit</td><td>posts</td><td><code>edit posts</code></td></tr>
                            <tr><td>delete</td><td>posts</td><td><code>delete posts</code></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@endpush