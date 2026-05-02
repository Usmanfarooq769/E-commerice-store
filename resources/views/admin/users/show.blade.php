@extends('layouts.app')

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Show User</h1>
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">Show User</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-xxl-9">
        <div class="card custom-card profile-card overflow-hidden">
            <div class="main-profile-cover text-fixed-white">
                <div class="p-xl-5 p-2 z-1">
                    <div class="p-4 bg-black-transparent rounded-3 border border-opacity-10 border-white">
                        <div class="d-flex gap-3 align-items-center flex-wrap">
                            <div>
                                <img src="{{ asset('storage/'.$user->profile_photo_path) }}" alt="Profile Images"
                                    class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow" style="width: 80px; height: 80px;">
                            </div>
                            <div>
                                <h4 class="text-fixed-white mb-1">{{$user->name ?? 'No Name'}} </h4>
                                <p class="mb-1 op-6 fs-15"><i
                                        class="ri-briefcase-fill lh-1 align-middle me-2 d-inline-block"></i>Lead Product
                                    Designer</p>
                                <div class="d-flex gap-3 align-items-center flex-wrap">
                                    <p class="mb-0 op-6 fs-15"><i
                                            class="ri-map-pin-line lh-1 align-middle me-2 d-inline-block"></i>{{$user->staffDetail->address ?? 'No Address'}}</p>
                                    <span class="op-3">|</span>
                                    <p class="mb-0 op-6 fs-15"><i
                                            class="ri-mail-line lh-1 align-middle me-2 d-inline-block"></i>{{$user->email  ?? 'No Email'}}
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0 position-relative">
                <div class="profile-content">
                    <div class="card custom-card rounded-0 mb-0 bg-warning-transparent">

                       <div class="card-header align-items-center flex-wrap gap-2">
                          @if(!empty($user->staffDetail->last_degree_file))
                        <a href="{{ asset('storage/'.$user->staffDetail->last_degree_file) }}" class="btn btn-primary"
                            target="_blank">
                            View Degree
                        </a>
                        @endif

                         @if(!empty($user->staffDetail->father_cnic_front))
                        <a href="{{ asset('storage/'.$user->staffDetail->father_cnic_front) }}"  class="btn btn-success"  target="_blank">
                            View Father CNIC
                        </a>
                        @endif
                        @if(!empty($user->staffDetail->father_cnic_back))
                        <a href="{{ asset('storage/'.$user->staffDetail->father_cnic_back) }}" class="btn btn-warning"  target="_blank">
                            View Father CNIC Back
                        </a>
                        @endif

                          @if(!empty($user->staffDetail->user_cnic_front))
                        <a href="{{ asset('storage/'.$user->staffDetail->user_cnic_front) }}" class="btn btn-info"  target="_blank">
                            User CNIC Front
                        </a>
                        @endif

                         @if(!empty($user->staffDetail->user_cnic_back))
                        <a href="{{ asset('storage/'.$user->staffDetail->user_cnic_back) }}" class="btn btn-danger"  target="_blank">
                            User CNIC Back
                        </a>
                        @endif
                        </div>
                        <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between flex-wrap border-block-end-dashed pb-2" style="border-bottom: 1px dashed 	rgb(var(--primary-rgb));">
                           <p class="text-bold text-primary">Father Name</p>
                           <p >{{$user->staffDetail->father_name}}</p>
                        </div>

                         <div class="d-flex align-items-center justify-content-between flex-wrap border-block-end-dashed pb-2 pt-2" style="border-bottom: 1px dashed 	rgb(var(--primary-rgb));">
                           <p class="text-bold text-primary">Father CNIC</p>
                           <p >{{$user->staffDetail->father_cnic ?? 'N\A'}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap border-block-end-dashed pb-2 pt-2" style="border-bottom: 1px dashed 	rgb(var(--primary-rgb));">
                           <p class="text-bold text-primary">Salary</p>
                           <p >{{$user->staffDetail->salary ?? 'N\A'}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap border-block-end-dashed pb-2 pt-2" style="border-bottom: 1px dashed 	rgb(var(--primary-rgb));">
                           <p class="text-bold text-primary">Education</p>
                           <p >{{$user->staffDetail->education ?? 'N\A'}}</p>
                        </div>

                       
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3">
        <div class="card custom-card">
            <div class="list-group list-group-flush rounded-3">
                <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                    <div class="fw-medium fs-15">
                        Basic Info:
                    </div>
                </div>
                <div class="card-body border-bottom border-block-end-dashed p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item pt-2 border-0">
                            <div><span class="fw-medium me-2">Full Name :</span><span class="text-muted">{{ $user->name ?? 'N\A'}}</span></div>
                        </li>
                        <li class="list-group-item pt-2 border-0">
                            <div><span class="fw-medium me-2">Job Title :</span><span class="text-muted">Lead Product
                                    Designer</span></div>
                        </li>
                        <li class="list-group-item pt-2 border-0">
                            <div><span class="fw-medium me-2">Years of Experience :</span><span class="text-muted">{{ $user->staffDetail->work_experience  ?? 'N\A'}}</span></div>
                        </li>
                        <li class="list-group-item pt-2 border-0">
                            <div><span class="fw-medium me-2">Date of Birth :</span><span class="text-muted">{{ $user->staffDetail->birthday ?? 'N\A'}}
                                    </span></div>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item p-3">
                    <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                    <div class="text-muted">
                        <p class="mb-3">
                            <i class="ri-mail-line align-middle fs-15 me-1 d-inline-block text-primary"></i>
                            <span class="fw-medium text-default">Email : </span> {{$user->email ?? 'No Email'}}
                        </p>
                        <p class="mb-3">
                            <i class="ri-building-line align-middle fs-15 me-1 d-inline-block text-success"></i>
                            <span class="fw-medium text-default">Location : </span> {{$user->staffDetail->address ?? 'No Address'}}
                        </p>
                        <p class="mb-3">
                            <i class="ri-phone-line align-middle fs-15 me-1 d-inline-block text-info"></i>
                            <span class="fw-medium text-default">Phone : </span> {{$user->staffDetail->phone_number ?? 'N\A'}}
                        </p>
                        <p class="mb-3">
                            <i class="bi bi-globe align-middle fs-15 me-1 d-inline-block text-warning"></i>
                            <span class="fw-medium text-default">Country : </span> {{$user->staffDetail->country ?? 'N\A'}}
                        </p>
                        <p class="mb-3">
                            <i class="bi bi-map align-middle fs-15 me-1 d-inline-block text-danger"></i>
                            <span class="fw-medium text-default">State : </span> {{$user->staffDetail->state ?? 'N\A'}}
                        </p>

                        <p class="mb-3">
                            <i class="bi bi-map align-middle fs-15 me-1 d-inline-block text-success"></i>
                            <span class="fw-medium text-default">Pin Code : </span> {{$user->staffDetail->pincod ?? 'N\A'}}
                        </p>

                        <p class="mb-3">
                            <i class="bi bi-buildings  align-middle fs-15 me-1 d-inline-block text-primary"></i>
                            <span class="fw-medium text-default">City : </span> {{$user->staffDetail->city ?? 'N\A'}}
                        </p>
                        
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>


@endsection