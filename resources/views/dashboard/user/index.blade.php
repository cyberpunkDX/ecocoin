@extends('dashboard.user.layouts.master')
@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <h1 class="text-center mb-4 eco-green">{{ $title }}</h1>

        <!-- User Stats Row -->
        <div class="row g-4">
            <!-- Balance Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                       <div class="d-flex justify-content-between mb-1">
                            <span class="eco-green">Total Earned: {{ formatAmount($user->account->profit) }}</span>
                            <span class="eco-green">Total Deposit: {{ formatAmount($user->account->expenses) }}</span>
                        </div>
                    </div>
                    <div class="card-body text-center eco-bg-green">
                        <h2 class="card-title eco-green">{{ formatAmount($user->account->balance) }}</h2>
                        <p class="card-text">Available Balance</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('user.withdraw.index') }}">
                                <button class="btn btn-success"><span><i class="ti ti-wallet"></i></span> Withdraw</button>
                            </a>
                            <a href="{{ route('user.deposit.pricing.index') }}">
                                <button class="btn btn-primary"><span><i class="ti ti-plus"></i></span> Deposit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Media Uploaded Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Total Media Uploaded
                    </div>
                    <div class="card-body text-center eco-bg-green">
                        <h2 class="card-title eco-green">{{ $user->medias()->count() }}</h2>
                        <p class="card-text">Images & Videos</p>
                        <a href="{{ route('user.media.index') }}" class="btn btn-outline-success">View Media</a>
                    </div>
                </div>
            </div>
            <!-- Eco Impact Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Eco Impact
                    </div>
                    <div class="card-body text-center eco-bg-green">
                        <h2 class="card-title eco-green">3.2 Tons</h2>
                        <p class="card-text">CO2 Offset</p>
                        <a href="#" class="btn btn-outline-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity and Upload Section -->
        <div class="row g-4 mt-4">
            <!-- Recent Activity -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Recent Activity
                    </div>
                    <div class="card-body eco-bg-green">
                        <ul class="list-unstyled">
                            @forelse ($user->medias as $media)
                                <li class="activity-item">
                                    <strong>{{ $media->created_at->format('Y-m-d') }}</strong>: Uploaded
                                    "{{ $media->title }}"
                                </li>
                            @empty
                                <li>No recent activity</li>
                            @endforelse

                        </ul>
                        <a href="{{ route('user.media.index') }}" class="btn btn-outline-success w-100">View All
                            Activity</a>
                    </div>
                </div>
            </div>
            <!-- Upload Media -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Upload Eco-Friendly Media
                    </div>
                    <div class="card-body eco-bg-green">
                        <form action="{{ route('user.media.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">Photo or Video <span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="file" name="file" required
                                            accept="image/*,video/*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ old('title') }}" maxlength="255">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                            <a href="{{ route('user.media.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leaderboard -->
        <div class="row g-4 mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Community Leaderboard
                    </div>
                    <div class="card-body eco-bg-green">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Eco Coins</th>
                                    <th scope="col">Media Uploaded</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>GreenWarrior</td>
                                    <td>5,432 ECO</td>
                                    <td>128</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>EcoStar</td>
                                    <td>4,987 ECO</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>PlanetSaver</td>
                                    <td>3,214 ECO</td>
                                    <td>95</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-outline-success w-100">View Full Leaderboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
