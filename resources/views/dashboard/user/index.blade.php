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
                        Eco Coin Balance
                    </div>
                    <div class="card-body text-center eco-bg-green">
                        <h2 class="card-title eco-green">1,245.67 ECO</h2>
                        <p class="card-text">Available Balance</p>
                        <button class="btn btn-success">Withdraw</button>
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
                        <h2 class="card-title eco-green">42</h2>
                        <p class="card-text">Images & Videos</p>
                        <a href="#" class="btn btn-outline-success">View Media</a>
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
                            <li class="activity-item">
                                <strong>2025-07-28</strong>: Uploaded recycling video (+5 ECO)
                            </li>
                            <li class="activity-item">
                                <strong>2025-07-27</strong>: Shared eco-friendly tips (+2 ECO)
                            </li>
                            <li class="activity-item">
                                <strong>2025-07-26</strong>: Uploaded tree planting photo (+3 ECO)
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">View All Activity</a>
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
                        <div class="mb-3">
                            <label for="mediaUpload" class="form-label">Upload Image or Video</label>
                            <input type="file" class="form-control" id="mediaUpload" accept="image/*,video/*">
                        </div>
                        <div class="mb-3">
                            <label for="mediaDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="mediaDescription" rows="3" placeholder="Describe your eco-friendly action"></textarea>
                        </div>
                        <button class="btn btn-success w-100">Submit Media</button>
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
