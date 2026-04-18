@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Users</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Profile</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol></nav>
</div>

<div class="row">
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card project-cards">
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-image" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700"
                style="overflow: hidden; display: block;" width="700" height="700">
                <defs></defs>
                <g transform="matrix(1 0 0 1 0 0)" opacity="1">
                    <path transform="matrix(1 0 0 1 350 350)"
                        d="M 313.575145 77.289331 C 327.418325 100.888095 325.88607 142.960095 304.220117 159.667034 C 265.072813 189.854105 203.777781 150.746207 155.968211 138.175778 C 127.632454 130.725541 97.286126 89.366794 73.200321 106.048974 C 48.904535 122.876591 101.253505 183.744908 74.18203 195.601938 C 50.517987 205.966548 43.060308 142.254872 17.228565 141.890005 C 0.152177 141.648805 -9.538631 164.041187 -21.409051 176.319393 C -51.356227 207.295347 -62.021731 272.752031 -104.928243 276.673037 C -128.295041 278.808409 -152.210092 253.451797 -159.565292 231.170234 C -171.75374 194.247013 -139.774237 154.720649 -131.708436 116.683492 C -128.052249 99.441436 -110.820892 77.599717 -122.186888 64.128625 C -152.811603 27.831908 -234.291089 100.858257 -266.089398 65.585146 C -280.675169 49.405495 -272.372712 16.880257 -258.603808 0 C -234.209946 -29.906132 -156.561687 1.159049 -147.444544 -36.341816 C -138.14693 -74.585002 -246.708634 -85.16433 -231.136647 -121.309871 C -218.5408 -150.547225 -165.464401 -111.184376 -134.686904 -119.322185 C -120.91794 -122.962806 -104.114407 -128.748541 -97.616554 -141.421993 C -74.961221 -185.609088 -150.883499 -262.459729 -110.492285 -291.344211 C -87.215157 -307.990102 -59.209242 -250.863798 -31.131535 -256.391251 C 2.097484 -262.932804 6.257205 -331.490286 40.101991 -330.269613 C 70.242514 -329.18254 72.151765 -274.510405 98.634602 -260.078072 C 120.402562 -248.215202 158.518591 -270.897147 173.197115 -250.919341 C 196.314453 -219.456117 129.211822 -166.340668 151.870597 -134.54561 C 167.557709 -112.533272 207.484031 -131.557043 232.845411 -122.2067 C 260.090725 -112.161779 309.849734 -104.774154 307.621019 -75.821772 C 302.707805 -11.996088 128.913373 -64.01432 129.069612 -0.000001 C 129.230729 66.012946 280.174093 20.349848 313.575145 77.289331 Z "
                        fill="rgba(var(--primary-rgb), 1)" stroke="undefined" stroke-width="1" stroke-opacity="1"
                        fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter"
                        stroke-miterlimit="4"></path>
                </g>
            </svg>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-2 fs-14">Total Users</p>
                        <h4 class="mb-0 fw-semibold mb-2">{{ $users->total() }}</h4>
                    </div>
                    <div>
                        <span class="avatar avatar-lg bg-primary avatar-rounded p-2 shadow-sm">
                            <i class="ti ti-file-check fs-21"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card custom-card ">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">All Users</h6>

                <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary me-2">
                    <i class="bi bi-shield-lock"></i> Add User
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width:50px">#</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th style="width:80px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td class="text-primary">{{ $loop->iteration }}</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width:34px;height:34px;background:#ede9fe;color:#5b21b6;font-size:.75rem;font-weight:600">
                                            {{ strtoupper(substr($user->name, 0, 2)) }}
                                        </div>
                                        <span class="fw-medium" style="font-size:.875rem">{{ $user->name }}</span>
                                    </div>
                                </td>

                                <td style="font-size:.875rem;color:#64748b">{{ $user->email }}</td>

                                <td>
                                    @forelse($user->roles as $role)
                                    <span class="role-badge {{ $role->name }}">{{ $role->name }}</span>
                                    @empty
                                    <span class="text-muted" style="font-size:.8rem">No role</span>
                                    @endforelse
                                </td>

                                <td>
                                    <a href="{{ route('admin.users.show', $user) }}"
                                        class="btn btn-sm btn-primary-light" title="Manage Roles">
                                        <i class="bi bi-person-gear"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">No users found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($users->hasPages())
            <div class="card-footer bg-white">
                {{ $users->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection