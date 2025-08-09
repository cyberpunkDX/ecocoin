@extends('dashboard.master.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('master.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ $title }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('partials.validation_message')
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $title }}</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('master.profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" disabled value="{{ old('email', $user->email) }}"
                                            required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('dial_code') is-invalid @enderror"
                                                name="dial_code" value="{{ old('dial_code', $user->dial_code) }}"
                                                placeholder="+1" style="max-width: 100px;">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" value="{{ old('phone', $user->phone) }}"
                                                placeholder="Phone Number">
                                        </div>
                                        @error('dial_code')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                        @error('phone')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image">
                                        @if ($user->image)
                                            <div class="mt-2">
                                                <img src="{{ asset($user->image) }}" alt="Current Image"
                                                    class="img-thumbnail" width="200">
                                            </div>
                                        @endif
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 @error('gender') is-invalid @enderror"
                                            id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male"
                                                {{ old('gender', $user->gender) === 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female"
                                                {{ old('gender', $user->gender) === 'female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="other"
                                                {{ old('gender', $user->gender) === 'other' ? 'selected' : '' }}>Other
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date"
                                            class="form-control @error('date_of_birth') is-invalid @enderror"
                                            id="date_of_birth" name="date_of_birth"
                                            value="{{ old('date_of_birth', $user->date_of_birth) }}">
                                        @error('date_of_birth')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
