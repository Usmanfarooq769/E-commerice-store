@extends('auth.layouts.auth')

@section('content')
<div class="row justify-content-center authentication authentication-basic align-items-center h-100">
    <div class="col-xxl-7 col-sm-8 col-12">
        <div class="card custom-card my-4 border">
            <div class="card-body">
                <div class="row mx-0 align-items-center">
                    <div class="col-xl-6">
                        <x-validation-errors class="mb-4" />

                        @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                        @endsession
                        <div class="p-3">
                            <div class="row gy-3">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="col-xl-12">
                                        <label class="form-label text-default" for="signin-email">
                                            Email Address <sup class="fs-12 text-danger">*</sup>
                                        </label>
                                        <input class="form-control signin-email-input" id="signin-email" name="email"
                                            value="{{ old('email') }}" placeholder="Enter your email address"
                                            type="email" required autofocus>
                                    </div>

                                    <div class="col-xl-12 mt-3">
                                        <label class="form-label text-default" for="signin-password">
                                            Password <sup class="fs-12 text-danger">*</sup>
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control signin-password-input" id="signin-password"
                                                name="password" placeholder="Enter your password" type="password"
                                                required>
                                            <button class="btn btn-primary-light show-password-button" type="button"
                                                onclick="createpassword('signin-password', this)">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 mt-3">
                                        <div class="form-check d-flex justify-content-between">
                                            <div>
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="rememberMe">
                                                <label class="form-check-label text-muted fw-normal fs-12"
                                                    for="rememberMe">
                                                    Remember me
                                                </label>
                                            </div>

                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="text-success fw-medium fs-12">
                                                Forgot Password?
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Log In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                        <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                            <img src="../assets/images/authentication/5.png" alt="Sign In"
                                class="img-fluid m-auto mb-3 flex-fill mt-4">
                            <div class="flex-fill text-center">
                                <h6 class="mb-2">Welcome Back!</h6>
                                <p class="mb-0 text-muted fw-normal fs-12">Sign in to your account to
                                    continue.</p>
                            </div>
                            <div class="d-flex mb-2 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                                <button
                                    class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-danger-light">
                                    <i class="ri-google-fill"></i>
                                    <span class="ms-2">Google</span>
                                </button>
                                <button
                                    class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-primary-light">
                                    <i class="ri-facebook-fill"></i>
                                    <span class="ms-2">Facebook</span>
                                </button>
                                <button
                                    class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-info-light">
                                    <i class="ri-twitter-x-line"></i>
                                    <span class="ms-2">Twitter</span>
                                </button>
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

@endsection