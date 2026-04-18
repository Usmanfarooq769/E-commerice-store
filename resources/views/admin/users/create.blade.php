@extends('layouts.app')

@section('content')


<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Create User</h1>
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active">Create User</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h3 class="card-title">Create User</h3>

            </div>
            
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                         <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label>Profile Image</label>
                                <input type="file" name="profile_photo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="roles" class="form-label">Assign Roles</label>
                                <select name="roles[]" id="roles" class="form-select" multiple>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                          <button type="submit" class="btn btn-primary">Create User</button>
                        </div>
                    </form>


                
            </div>
        </div>
    </div>
</div>


@endsection
@push('script')
@endpush