@extends('layouts.app')

@section('content')
<!-- BEGIN login -->
<div class="login">
    <!-- BEGIN login-content -->
    <div class="login-content">
        <form action="{{ route('login') }}" method="POST" name="login_form">
            @csrf
            <h1 class="text-center">Sign In</h1>
            <div class="text-inverse text-opacity-50 text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <div class="mb-3">
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <input id="username" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                </div>
                <input type="password" id="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5 @error('password') is-invalid @enderror" required>
                @error('password')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
        </form>
    </div>
    <!-- END login-content -->
</div>
<!-- END login -->
@endsection