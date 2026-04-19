@extends('auth.layouts.auth')

@section('content')

<div class="row justify-content-center authentication authentication-basic align-items-center h-100">
    <div class="col-xxl-7 col-sm-8 col-12">
        <div class="card custom-card my-4 border">
            <div class="card-body">
                <div class="row mx-0 align-items-center">
                    <div class="col-xl-6">

                        {{-- Success Message --}}
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{-- Error Messages --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-2">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="mb-4 small text-muted">
                            Forgot your password? No problem. Just let us know your email address and we will email
                            you a password reset link that will allow you to choose a new one.
                        </div>
                        <div class="p-3">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row gy-3">

                                    <div class="col-xl-12">
                                        <label class="form-label text-default" for="email">Email<sup
                                                class="fs-12 text-danger">*</sup></label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="{{ old('email') }}" required autofocus autocomplete="username">
                                   
                                </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-lock-2-line lh-1 me-2 align-middle"></i>Reset Password
                            </button>
                        </div>
                        </form>
                        <div class="text-center">
                            <p class="text-muted mt-3 mb-0">Want to go back? <a
                                    class="text-primary fw-medium text-decoration-underline"
                                    href="{{ route('login') }}">Click
                                    here</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                    <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                        <img src="{{ asset('assets/images/authentication/5.png') }}" alt="Reset Password"
                            class="img-fluid m-auto mb-3 flex-fill mt-4">
                        <div class="flex-fill text-center">
                            <h6 class="mb-2">Reset Password</h6>
                            <p class="mb-0 text-muted fw-normal fs-12">Set a strong password to keep your account
                                secure!</p>
                        </div>
                        <a href="index.html">
                            <img alt="logo" class="toggle-logo mb-4 pb-2"
                                src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection