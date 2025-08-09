@extends('auth.layout.master')
@section('content')
    <div class="login-card mx-2 text-light" style="background-color: #1d1d1d; padding-bottom: 60;">
        <div class="card-header align-items-center d-flex justify-content-center" style="background-color:#253526;">
            <img src="{{ env('APP_LOGO_DARK') }}" class="w-50" alt="">
        </div>
        <div class="card-body p-4">
            <div style="background-color: #90ee90; color: #222; border-radius: 4px; padding: 8px 12px; font-size: 0.95em; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-lock" style="color: #222;"></i>
                <span class="fw-bold">URL:</span> <span style="word-break: break-all;">{{ url('/reset-password') }}</span>
            </div>
            <h3 class="text-light text-capitalize">{{ $title }}</h3>
            <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <label for="exampleInputEmail" class="form-label text-white">Email</label>
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="email" placeholder="Enter email address..."
                                    value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control form-control-user" id="password" name="password"
                                    placeholder="Enter password" required autocomplete="new-password">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label text-white">Confirm Password</label>
                                <input type="password" class="form-control form-control-user" id="password_confirmation"
                                    name="password_confirmation" placeholder="Password confirmation" required
                                    autocomplete="new-password">
                                @if ($errors->has('password_confirmation'))
                                    <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-5">
                                Reset Password
                            </button>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0 text-primary">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-warning ms-5">Register account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
