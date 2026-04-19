@extends('auth.layouts.auth')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
        <div class="col-xxl-7 col-sm-8 col-12">
            <div class="card custom-card my-4 border">
                <div class="card-body">
                    <div class="row mx-0 align-items-center">

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="col-xl-6">
                            <div class="p-3">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <div class="row gy-3">


                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <div class="col-xl-12">
                                            <label class="form-label text-default" for="email">Email<sup
                                                    class="fs-12 text-danger">*</sup></label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ old('email', $request->email) }}" required autofocus
                                                autocomplete="username">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label text-default" for="newpassword-password">New
                                                Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group">
                                                <input type="password" id="password" name="password"
                                                    class="form-control" required autocomplete="new-password">
                                                <button class="btn btn-primary-light show-password-button" type="button"
                                                    onclick="createpassword('newpassword-password', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-2">
                                            <label class="form-label text-default" for="create-confirmpassword">Confirm
                                                New Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group">
                                                <input type="password" id="password_confirmation"
                                                    name="password_confirmation" class="form-control" required
                                                    autocomplete="new-password">
                                                <button class="btn btn-primary-light show-password-button" type="button"
                                                    onclick="createpassword('create-confirmpassword',this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-lock-2-line lh-1 me-2 align-middle"></i>Reset Password
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div
                            class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                            <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                <img src="../assets/images/authentication/5.png" alt="Reset Password"
                                    class="img-fluid m-auto mb-3 flex-fill mt-4">
                                <div class="flex-fill text-center">
                                    <h6 class="mb-2">Reset Password</h6>
                                    <p class="mb-0 text-muted fw-normal fs-12">Set a strong password to keep your
                                        account secure!</p>
                                </div>
                                <a href="index.html">
                                    <img alt="logo" class="toggle-logo mb-4 pb-2"
                                        src="../assets/images/brand-logos/toggle-logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection