@extends('dashboard.user.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <p>We’ve sent a 6-digit code to your email address. Please enter it below.</p>
                    <form action="{{ route('user.submit.verification') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="code">Verification Code</label>
                            <input type="text" name="code" id="code" class="form-control" required>
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Verify</button>

                        <a href="{{ route('user.resend.verification') }}"
                            class="link-primary d-flex justify-content-center align-items-center">Resend
                            Verification</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
