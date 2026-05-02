@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Edit User</h1>
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
    </nav>
</div>



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">

                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                <label class="form-label">Date of Birth</label>

                <input type="date"
                    name="birthday"
                    value="{{ old('birthday', optional($user->staffDetail)->birthday) }}"
                    class="form-control">
            </div>

                    <!-- Profile Image -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Profile Image <span class="text-danger">*</span></label><br>

                        @if($user->profile_photo_path)
                        <img src="{{ asset('storage/'.$user->profile_photo_path) }}" width="100" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow mb-2" style="width:60px ; height:60px">
                        @endif

                        <input type="file" name="profile_photo" class="form-control">
                    </div>

                    <!-- Password -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password (leave blank to keep same)</label>
                        <input type="password" name="password" class="form-control">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Education</label>

                        <select name="education" class="form-select js-example-basic-single">
                            <option value="">Select Education</option>

                            <option value="under_matric"
                                {{ old('education', optional($user->staffDetail)->education) == 'under_matric' ? 'selected' : '' }}>
                                Under Matric</option>

                            <option value="matric"
                                {{ old('education', optional($user->staffDetail)->education) == 'matric' ? 'selected' : '' }}>
                                Matric</option>

                            <option value="fa"
                                {{ old('education', optional($user->staffDetail)->education) == 'fa' ? 'selected' : '' }}>
                                FA</option>

                            <option value="fsc"
                                {{ old('education', optional($user->staffDetail)->education) == 'fsc' ? 'selected' : '' }}>
                                FSC</option>

                            <option value="fa_fsc_equivalent"
                                {{ old('education', optional($user->staffDetail)->education) == 'fa_fsc_equivalent' ? 'selected' : '' }}>
                                FA/FSC Equivalent</option>

                            <option value="bachelors"
                                {{ old('education', optional($user->staffDetail)->education) == 'bachelors' ? 'selected' : '' }}>
                                BS / Bachelors</option>

                            <option value="masters"
                                {{ old('education', optional($user->staffDetail)->education) == 'masters' ? 'selected' : '' }}>
                                MS / Masters</option>

                            <option value="other"
                                {{ old('education', optional($user->staffDetail)->education) == 'other' ? 'selected' : '' }}>
                                Other</option>
                        </select>
                    </div>

                    <!-- Work Experience -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Work Experience</label>

                        <select name="work_experience" class="form-select js-example-basic-single">
                            <option value="">Select Experience</option>

                            <option value="fresher"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == 'fresher' ? 'selected' : '' }}>
                                Fresher (0 Years)</option>

                            <option value="1_year"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == '1_year' ? 'selected' : '' }}>
                                1 Year</option>

                            <option value="2_years"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == '2_years' ? 'selected' : '' }}>
                                2 Years</option>

                            <option value="3_years"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == '3_years' ? 'selected' : '' }}>
                                3 Years</option>

                            <option value="4_5_years"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == '4_5_years' ? 'selected' : '' }}>
                                4–5 Years</option>

                            <option value="5_plus"
                                {{ old('work_experience', optional($user->staffDetail)->work_experience) == '5_plus' ? 'selected' : '' }}>
                                5+ Years</option>
                        </select>
                    </div>

                    <!-- Pincode -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Pincode</label>

                        <input type="text" name="pincode"
                            value="{{ old('pincode' , $user->staffDetail->pincode ?? ' ') }}" class="form-control"
                            placeholder="Enter Pincode">
                    </div>

                    <!-- Country -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Country</label>

                        <input type="text" name="country"
                            value="{{ old('country', $user->staffDetail->country ?? ' ' ) }}" class="form-control"
                            placeholder="Enter Country">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">State</label>

                        <input type="text" name="state"
                            value="{{ old('country', $user->staffDetail->state ?? ' ' ) }}" class="form-control"
                            placeholder="Enter Country">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>

                        <input type="text" name="city"
                            value="{{ old('country', $user->staffDetail->city ?? ' ' ) }}" class="form-control"
                            placeholder="Enter Country">
                    </div>



                    <!-- Roles -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Roles <span class="text-danger">*</span></label>
                        <select name="roles[]" multiple="multiple" class="form-select js-example-basic-multiple">
                            @foreach($roles as $role)
                            <option value="{{ $role->name }}"
                                {{ $user->roles->pluck('name')->contains($role->name) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address"
                            value="{{ old('address', $user->staffDetail->address ?? '') }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City <span class="text-danger">*</span></label>
                        <input type="text" name="city" value="{{ old('city', $user->staffDetail->city ?? '') }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone Numbe <span class="text-danger">*</span></label>
                        <input type="text" name="phone_number"
                            value="{{ old('phone_number', $user->staffDetail->phone_number ?? '') }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Salary <span class="text-danger">*</span></label>
                        <input type="number" name="salary" value="{{ old('salary', $user->staffDetail->salary ?? '') }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father Name <span class="text-danger">*</span></label>
                        <input type="text" name="father_name"
                            value="{{ old('father_name', $user->staffDetail->father_name ?? '') }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">User CNIC <span class="text-danger">*</span></label>
                        <input type="text" name="user_cnic"
                            value="{{ old('user_cnic', $user->staffDetail->user_cnic ?? '') }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father CNIC <span class="text-danger">*</span></label>
                        <input type="text" name="father_cnic"
                            value="{{ old('father_cnic', $user->staffDetail->father_cnic ?? '') }}"
                            class="form-control">
                    </div>

                    <!-- Degree -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Degree <span class="text-danger">*</span></label><br>

                        @if(!empty($user->staffDetail->last_degree_file))
                        <img src="{{ asset('storage/'.$user->staffDetail->last_degree_file) }}" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width:60px ; height:60px" >
                          
                        @endif

                        <input type="file" name="last_degree_file" class="form-control mt-2">
                    </div>
                    <!-- Father CNIC Front -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father CNIC Front <span class="text-danger">*</span></label><br>
                        @if(!empty($user->staffDetail->father_cnic_front))
                        <img src="{{ asset('storage/'.$user->staffDetail->father_cnic_front) }}"  class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width:60px ; height:60px" >
                        @endif
                        <input type="file" name="father_cnic_front" class="form-control mt-2">
                    </div>

                    <!-- Father CNIC Back -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father CNIC Back <span class="text-danger">*</span></label><br>
                        @if(!empty($user->staffDetail->father_cnic_back))
                        <img src="{{ asset('storage/'.$user->staffDetail->father_cnic_back) }}" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width:60px ; height:60px">
                        @endif
                        <input type="file" name="father_cnic_back" class="form-control mt-2">
                    </div>

                    <!-- User CNIC Front -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">User CNIC Front <span class="text-danger">*</span></label><br>
                        @if(!empty($user->staffDetail->user_cnic_front))
                        <img src="{{ asset('storage/'.$user->staffDetail->user_cnic_front) }}" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width:60px ; height:60px">
                        @endif
                        <input type="file" name="user_cnic_front" class="form-control mt-2">
                    </div>

                    <!-- User CNIC Back -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">User CNIC Back <span class="text-danger">*</span></label><br>
                        @if(!empty($user->staffDetail->user_cnic_back))
                        <img src="{{ asset('storage/'.$user->staffDetail->user_cnic_back) }}" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width:60px ; height:60px">
                        @endif
                        <input type="file" name="user_cnic_back" class="form-control mt-2">
                    </div>

                </div>

            </div>

            <div class="card-footer text-end">
                <a href="{{ route('admin.users.index') }}" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>

        </div>

    </form>


@endsection