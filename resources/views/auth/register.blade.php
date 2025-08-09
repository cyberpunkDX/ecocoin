@extends('layouts.auth.master')
@section('content')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto col-md-8 col-sm-12 mt-5">
            <div class="mx-2 mt-5 text-light" style="background-color: #3c3c3c; padding-bottom: 60;">
                <div class="card-header align-items-center d-flex justify-content-center" style="background-color:#253526;">
                    <img src="{{ env('APP_LOGO_DARK') }}" class="w-25" alt="">
                </div>
                <div class="card-body text-light p-4">
                    <h4>Create an account</h4>
                    <p>Get started with earning crypto by carrying out eco-friendly activities</p>
                    <div class="col-lg-5 mx-auto col-md-5 col-sm-12"
                        style="border: 1px solid #90ee90; color: #ffff; border-radius: 4px; padding: 8px 12px; font-size: 0.95em; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-lock" style="color: #ffff;"></i>
                        <span class="fw-bold">URL:</span> <span style="word-break: break-all;">{{ url('/register') }}</span>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-6 border-end">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label text-white">Full Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label text-white">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="phone" class="form-label text-white">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input type="text" class="form-control" id="dial_code" name="dial_code"
                                            placeholder="+1" style="width: 80px;">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Enter phone number">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label text-white">Gender</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="" selected>Select gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="date_of_birth" class="form-label text-white">Date of Birth</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label text-white">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label text-white">Confirm
                                                Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="d-grid mt-3 mb-3">
                                <button type="submit" class="btn btn-login text-white fw-bold"><i
                                        class="fas fa-user-plus"></i>
                                    Register</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}" class="login-link">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
