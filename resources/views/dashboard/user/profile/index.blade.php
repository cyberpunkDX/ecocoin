@extends('dashboard.user.layouts.master')
@section('content')

    <body>
        <div class="container mt-5 mb-5">
            <h1 class="text-center mb-4">User Profile</h1>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Profile Card -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <!-- Profile Picture -->
                                <div class="col-md-4 text-center mb-3 mb-md-0">
                                    <img src="{{ $user->profile_picture ?? 'https://via.placeholder.com/150' }}"
                                        alt="Profile Picture" class="profile-img img-fluid mb-3">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>

                                <!-- Profile Details -->
                                <div class="col-md-8">
                                    <h5 class="mb-3">About Me</h5>
                                    <p>{{ $user->bio ?? 'No bio provided.' }}</p>

                                    <hr>

                                    <h5 class="mb-3">Details</h5>
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4">Country:</dt>
                                        <dd class="col-sm-8">{{ $user->country ?? 'N/A' }}</dd>

                                        <dt class="col-sm-4">Joined:</dt>
                                        <dd class="col-sm-8">{{ $user->created_at->format('F j, Y') }}</dd>

                                        <dt class="col-sm-4">Location:</dt>
                                        <dd class="col-sm-8">{{ $user->location ?? 'Not specified' }}</dd>

                                        <dt class="col-sm-4">Account Balance:</dt>
                                        <dd class="col-sm-8">{{ formatAmount($user->account->balance) }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer with Actions -->
                        <div class="card-footer d-flex text-center">
                            <a href="{{ route('user.profile.update') }}" class="btn btn-primary me-2">Edit Profile</a>
                            <a href="{{ route('user.dashboard') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
                        </div>
                    </div>

                    <!-- Additional Info (e.g., Recent Activity) -->

                </div>
            </div>
        </div>
    @endsection
