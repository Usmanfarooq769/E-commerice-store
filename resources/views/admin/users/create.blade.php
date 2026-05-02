@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Create User</h1>
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a></li>
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

            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter Full Name ">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter Email ">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Profile -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Profile Image <span class="text-danger">*</span></label>
                                <input type="file" name="profile_photo"
                                    class="form-control @error('profile_photo') is-invalid @enderror">
                                @error('profile_photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter Password">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Roles -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Assign Roles <span class="text-danger">*</span></label>
                                <select name="roles[]" multiple
                                    class="form-select @error('roles') is-invalid @enderror js-example-basic-multiple">
                                    @foreach($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ collect(old('roles'))->contains($role->name) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('roles') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>



                        <!-- Address -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                                    placeholder="Enter Address">
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" value="{{ old('city') }}" class="form-control"
                                    placeholder="Enter City Name ">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                    class="form-control" placeholder="Enter Phone Number ">
                            </div>
                        </div>

                        <!-- Salary -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Salary <span class="text-danger">*</span></label>
                                <input type="number" name="salary" value="{{ old('salary') }}" class="form-control"
                                    placeholder="Enter Salary ">
                            </div>
                        </div>

                        <!-- Father Name -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Father Name <span class="text-danger">*</span></label>
                                <input type="text" name="father_name" value="{{ old('father_name') }}"
                                    class="form-control" placeholder="Enter Father Name ">
                            </div>
                        </div>

                        <!-- User CNIC -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User CNIC <span class="text-danger">*</span></label>
                                <input type="text" name="user_cnic" value="{{ old('user_cnic') }}"
                                    placeholder="35202-1234567-1"
                                    class="form-control @error('user_cnic') is-invalid @enderror">
                                @error('user_cnic') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Father CNIC -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Father CNIC <span class="text-danger">*</span></label>
                                <input type="text" name="father_cnic" value="{{ old('father_cnic') }}"
                                    class="form-control @error('father_cnic') is-invalid @enderror"
                                    placeholder="Enter Father CNIC eg. 33202-1000000-1">
                                @error('father_cnic') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Degree -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Degree <span class="text-danger">*</span></label>
                                <input type="file" name="last_degree_file" class="form-control">
                            </div>
                        </div>

                        <!-- CNIC Uploads -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Father CNIC Front <span class="text-danger">*</span></label>
                                <input type="file" name="father_cnic_front" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Father CNIC Back <span class="text-danger">*</span></label>
                                <input type="file" name="father_cnic_back" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User CNIC Front <span class="text-danger">*</span></label>
                                <input type="file" name="user_cnic_front" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User CNIC Back <span class="text-danger">*</span></label>
                                <input type="file" name="user_cnic_back" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{route('admin.users.index')}}" class="btn btn-light me-2">Cancel</a>
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