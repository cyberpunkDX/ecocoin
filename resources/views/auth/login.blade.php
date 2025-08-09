@extends('layouts.auth.master')
@section('content')
    <div class="login-card mx-2 text-light"  style="background-color: #3c3c3c; padding-bottom: 60;">
        <div class="card-header align-items-center d-flex justify-content-center" style="background-color:#253526;">
            <img src="{{ env('APP_LOGO_DARK') }}" class="w-50" alt="">
        </div>

        <div class="card-body p-4">
            <p class="text-light">Login with your email and password</p>
            <div style="border: 1px solid #90ee90; color: #ffff; border-radius: 4px; padding: 8px 12px; font-size: 0.95em; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-lock" style="color: #222;"></i>
                <span class="fw-bold">URL:</span> <span style="word-break: break-all;">{{ url('/login') }}</span>
            </div>
            @if (session('status'))
                <p class="text-success"> {{ session('status') }}</p>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Username or Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="email" class="form-control" required value="{{ old('email') }}" id="email"
                            type="email" placeholder="Email Address">
                    </div>
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password"
                            type="password" placeholder="Password ">

                    </div>
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-login text-white"><i class="fas fa-sign-in-alt"></i>
                        Login</button>
                </div>
                <div class="text-center">
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="/register" class="eco-green">Sign Up</a></p>
            </div>
        </div>
        
    </div>
    
@endsection
