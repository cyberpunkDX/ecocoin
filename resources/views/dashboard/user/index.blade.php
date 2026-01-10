@extends('dashboard.user.layouts.master')
@section('content')
    <style>
        .welcome-banner {
            background: linear-gradient(135deg, #1e8449 0%, #27ae60 50%, #2ecc71 100%);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
        .welcome-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        .welcome-banner::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }
        .stat-card {
            border-radius: 16px;
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .eco-progress {
            height: 8px;
            border-radius: 10px;
            background: #e9ecef;
            overflow: hidden;
        }
        .eco-progress-bar {
            height: 100%;
            border-radius: 10px;
            background: linear-gradient(90deg, #27ae60, #2ecc71);
            transition: width 1s ease;
        }
        .activity-item {
            padding: 15px;
            border-radius: 12px;
            background: #f8f9fa;
            margin-bottom: 12px;
            transition: all 0.2s ease;
            border-left: 4px solid #27ae60;
        }
        .activity-item:hover {
            background: #e9f7ef;
            transform: translateX(5px);
        }
        .leaderboard-item {
            padding: 12px 15px;
            border-radius: 10px;
            transition: all 0.2s ease;
        }
        .leaderboard-item:hover {
            background: #e9f7ef;
        }
        .rank-badge {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }
        .rank-1 { background: linear-gradient(135deg, #f1c40f, #f39c12); color: white; }
        .rank-2 { background: linear-gradient(135deg, #bdc3c7, #95a5a6); color: white; }
        .rank-3 { background: linear-gradient(135deg, #e67e22, #d35400); color: white; }
        .quick-action {
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            text-decoration: none;
            display: block;
        }
        .quick-action:hover {
            border-color: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(39, 174, 96, 0.15);
        }
        .quick-action-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 28px;
        }
        .upload-zone {
            border: 2px dashed #27ae60;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            background: linear-gradient(135deg, #f0fff4 0%, #e9f7ef 100%);
            transition: all 0.3s ease;
        }
        .upload-zone:hover {
            background: linear-gradient(135deg, #e9f7ef 0%, #d5f5e3 100%);
            border-color: #1e8449;
        }
        .nature-illustration {
            position: absolute;
            right: 20px;
            bottom: 0;
            opacity: 0.9;
        }
        .eco-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .impact-card {
            background: linear-gradient(135deg, #e8f6f3 0%, #d1f2eb 100%);
            border-radius: 16px;
            border: none;
        }
        .floating-leaf {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>

    <div class="container-fluid py-4">
        <!-- Welcome Banner -->
        <div class="welcome-banner p-4 p-lg-5 mb-4 text-white position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8 position-relative z-1">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="eco-badge bg-white text-success">
                            <i class="ti ti-leaf"></i> Eco Warrior
                        </span>
                    </div>
                    <h2 class="mb-2 fw-bold">Welcome back, {{ $user->name }}!</h2>
                    <p class="mb-4 opacity-75 fs-5">Keep making a positive impact on our planet. Every action counts!</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('user.media.index') }}" class="btn btn-light btn-lg px-4">
                            <i class="ti ti-photo me-2"></i>View Your Impact
                        </a>
                        <a href="{{ route('user.deposit.pricing.index') }}" class="btn btn-outline-light btn-lg px-4">
                            <i class="ti ti-plus me-2"></i>Earn More Coins
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-none d-lg-block position-relative z-1">
                    <img src="{{ asset('home/images/svgs/primary-leaf.svg') }}" alt="Eco" class="floating-leaf" style="width: 120px; height: 120px;">
                </div>
            </div>
        </div>

        <!-- Stats Cards Row -->
        <div class="row g-4 mb-4">
            <!-- Balance Card -->
            <div class="col-md-6 col-xl-3">
                <div class="card stat-card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="ti ti-wallet fs-3 text-success"></i>
                            </div>
                            <span class="badge bg-success-subtle text-success">
                                <i class="ti ti-trending-up me-1"></i>Active
                            </span>
                        </div>
                        <h3 class="mb-1 fw-bold text-success">{{ formatAmount($user->account->balance) }}</h3>
                        <p class="text-muted mb-3">Available Balance</p>
                        <div class="d-flex gap-2">
                            <a href="{{ route('user.withdraw.index') }}" class="btn btn-success btn-sm flex-fill">
                                <i class="ti ti-arrow-up me-1"></i>Withdraw
                            </a>
                            <a href="{{ route('user.deposit.pricing.index') }}" class="btn btn-outline-success btn-sm flex-fill">
                                <i class="ti ti-plus me-1"></i>Deposit
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Earned Card -->
            <div class="col-md-6 col-xl-3">
                <div class="card stat-card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="stat-icon bg-primary bg-opacity-10">
                                <i class="ti ti-coin fs-3 text-primary"></i>
                            </div>
                            <img src="{{ asset('home/images/svgs/secondary-leaf.svg') }}" alt="" width="24" class="floating-leaf">
                        </div>
                        <h3 class="mb-1 fw-bold text-primary">{{ formatAmount($user->account->profit) }}</h3>
                        <p class="text-muted mb-3">Total Earned</p>
                        <div class="eco-progress">
                            <div class="eco-progress-bar" style="width: 75%;"></div>
                        </div>
                        <small class="text-muted mt-2 d-block">75% to next milestone</small>
                    </div>
                </div>
            </div>

            <!-- Media Uploaded Card -->
            <div class="col-md-6 col-xl-3">
                <div class="card stat-card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="stat-icon bg-info bg-opacity-10">
                                <i class="ti ti-photo fs-3 text-info"></i>
                            </div>
                            <span class="badge bg-info-subtle text-info">
                                <i class="ti ti-camera me-1"></i>Media
                            </span>
                        </div>
                        <h3 class="mb-1 fw-bold text-info">{{ $user->medias()->count() }}</h3>
                        <p class="text-muted mb-3">Photos & Videos</p>
                        <a href="{{ route('user.media.index') }}" class="btn btn-outline-info btn-sm w-100">
                            <i class="ti ti-eye me-1"></i>View Gallery
                        </a>
                    </div>
                </div>
            </div>

            <!-- Eco Impact Card -->
            <div class="col-md-6 col-xl-3">
                <div class="card stat-card h-100 shadow-sm" style="background: linear-gradient(135deg, #1e8449, #27ae60);">
                    <div class="card-body p-4 text-white">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="stat-icon bg-white bg-opacity-25">
                                <i class="ti ti-tree fs-3 text-white"></i>
                            </div>
                            <i class="ti ti-leaf fs-3 opacity-50 floating-leaf"></i>
                        </div>
                        <h3 class="mb-1 fw-bold">3.2 Tons</h3>
                        <p class="mb-3 opacity-75">CO2 Offset</p>
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-white bg-opacity-25 rounded-pill px-3 py-1">
                                <small><i class="ti ti-plant me-1"></i>12 Trees Planted</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <h5 class="mb-3 fw-bold"><i class="ti ti-bolt text-warning me-2"></i>Quick Actions</h5>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('user.media.create') }}" class="quick-action card shadow-sm">
                    <div class="quick-action-icon bg-success bg-opacity-10">
                        <i class="ti ti-upload text-success"></i>
                    </div>
                    <h6 class="mb-1 text-dark">Upload Media</h6>
                    <small class="text-muted">Share eco activities</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('user.deposit.pricing.index') }}" class="quick-action card shadow-sm">
                    <div class="quick-action-icon bg-primary bg-opacity-10">
                        <i class="ti ti-coin text-primary"></i>
                    </div>
                    <h6 class="mb-1 text-dark">Earn Coins</h6>
                    <small class="text-muted">Complete activities</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('user.withdraw.index') }}" class="quick-action card shadow-sm">
                    <div class="quick-action-icon bg-warning bg-opacity-10">
                        <i class="ti ti-cash text-warning"></i>
                    </div>
                    <h6 class="mb-1 text-dark">Withdraw</h6>
                    <small class="text-muted">Cash out earnings</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('user.profile.index') }}" class="quick-action card shadow-sm">
                    <div class="quick-action-icon bg-info bg-opacity-10">
                        <i class="ti ti-user text-info"></i>
                    </div>
                    <h6 class="mb-1 text-dark">Profile</h6>
                    <small class="text-muted">Manage account</small>
                </a>
            </div>
        </div>

        <!-- Main Content Row -->
        <div class="row g-4 mb-4">
            <!-- Recent Activity -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100" style="border-radius: 16px;">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold"><i class="ti ti-activity text-success me-2"></i>Recent Activity</h5>
                            <a href="{{ route('user.media.index') }}" class="btn btn-sm btn-success-subtle">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        @forelse ($user->medias->take(5) as $media)
                            <div class="activity-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-success bg-opacity-10 p-2">
                                        <i class="ti ti-photo text-success"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">{{ Str::limit($media->title, 30) ?: 'Untitled Media' }}</h6>
                                        <small class="text-muted">
                                            <i class="ti ti-calendar me-1"></i>{{ $media->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                    <span class="badge bg-success-subtle text-success">+10 ECO</span>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <img src="{{ asset('home/images/svgs/primary-leaf.svg') }}" alt="" width="80" class="mb-3 opacity-50">
                                <h6 class="text-muted">No activity yet</h6>
                                <p class="text-muted small mb-3">Start uploading eco-friendly media to earn rewards!</p>
                                <a href="{{ route('user.media.create') }}" class="btn btn-success btn-sm">
                                    <i class="ti ti-upload me-1"></i>Upload Now
                                </a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Upload Media -->
            <div class="col-lg-6">
                <div class="card shadow-sm h-100" style="border-radius: 16px;">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 px-4">
                        <h5 class="mb-0 fw-bold"><i class="ti ti-cloud-upload text-primary me-2"></i>Upload Eco-Friendly Media</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('user.media.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="upload-zone mb-4">
                                <i class="ti ti-cloud-upload fs-1 text-success mb-3 d-block"></i>
                                <h6 class="mb-2">Drop your files here</h6>
                                <p class="text-muted small mb-3">or click to browse</p>
                                <input type="file" class="form-control" id="file" name="file" required accept="image/*,video/*">
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="title" class="form-label fw-semibold">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Give your media a title" maxlength="255">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label fw-semibold">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Describe your eco-friendly activity...">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-4">
                                <button type="submit" class="btn btn-success flex-fill">
                                    <i class="ti ti-upload me-2"></i>Upload Media
                                </button>
                                <a href="{{ route('user.media.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leaderboard & Impact Section -->
        <div class="row g-4">
            <!-- Leaderboard -->
            <div class="col-lg-8">
                <div class="card shadow-sm" style="border-radius: 16px;">
                    <div class="card-header bg-transparent border-0 pt-4 pb-0 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold"><i class="ti ti-trophy text-warning me-2"></i>Community Leaderboard</h5>
                            <span class="badge bg-warning-subtle text-warning">Top Eco Warriors</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr class="text-muted small">
                                        <th>RANK</th>
                                        <th>USER</th>
                                        <th>ECO COINS</th>
                                        <th>MEDIA</th>
                                        <th>IMPACT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="leaderboard-item">
                                        <td><span class="rank-badge rank-1"><i class="ti ti-crown"></i></span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle" width="40">
                                                <div>
                                                    <h6 class="mb-0">GreenWarrior</h6>
                                                    <small class="text-muted">Joined 2024</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="fw-bold text-success">5,432 ECO</span></td>
                                        <td>128</td>
                                        <td><span class="badge bg-success">5.2 tons CO2</span></td>
                                    </tr>
                                    <tr class="leaderboard-item">
                                        <td><span class="rank-badge rank-2">2</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle" width="40">
                                                <div>
                                                    <h6 class="mb-0">EcoStar</h6>
                                                    <small class="text-muted">Joined 2024</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="fw-bold text-success">4,987 ECO</span></td>
                                        <td>110</td>
                                        <td><span class="badge bg-success">4.8 tons CO2</span></td>
                                    </tr>
                                    <tr class="leaderboard-item">
                                        <td><span class="rank-badge rank-3">3</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle" width="40">
                                                <div>
                                                    <h6 class="mb-0">PlanetSaver</h6>
                                                    <small class="text-muted">Joined 2023</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="fw-bold text-success">3,214 ECO</span></td>
                                        <td>95</td>
                                        <td><span class="badge bg-success">3.1 tons CO2</span></td>
                                    </tr>
                                    <tr class="leaderboard-item">
                                        <td><span class="rank-badge bg-light text-dark">4</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle" width="40">
                                                <div>
                                                    <h6 class="mb-0">NatureLover</h6>
                                                    <small class="text-muted">Joined 2024</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="fw-bold text-success">2,890 ECO</span></td>
                                        <td>78</td>
                                        <td><span class="badge bg-success">2.7 tons CO2</span></td>
                                    </tr>
                                    <tr class="leaderboard-item">
                                        <td><span class="rank-badge bg-light text-dark">5</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle" width="40">
                                                <div>
                                                    <h6 class="mb-0">EarthHero</h6>
                                                    <small class="text-muted">Joined 2024</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="fw-bold text-success">2,456 ECO</span></td>
                                        <td>65</td>
                                        <td><span class="badge bg-success">2.3 tons CO2</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Your Impact Summary -->
            <div class="col-lg-4">
                <div class="card impact-card shadow-sm h-100" style="border-radius: 16px;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="position-relative d-inline-block">
                                <img src="{{ asset('home/images/svgs/primary-leaf.svg') }}" alt="" width="100" class="floating-leaf">
                            </div>
                            <h5 class="mt-3 fw-bold text-success">Your Eco Impact</h5>
                            <p class="text-muted small">Making a difference every day</p>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="bg-white rounded-3 p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-tree text-success fs-4"></i>
                                        <span>Trees Equivalent</span>
                                    </div>
                                    <span class="fw-bold text-success">12</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-droplet text-info fs-4"></i>
                                        <span>Water Saved</span>
                                    </div>
                                    <span class="fw-bold text-info">340 L</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-bolt text-warning fs-4"></i>
                                        <span>Energy Saved</span>
                                    </div>
                                    <span class="fw-bold text-warning">89 kWh</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-recycle text-primary fs-4"></i>
                                        <span>Items Recycled</span>
                                    </div>
                                    <span class="fw-bold text-primary">156</span>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-success w-100">
                                <i class="ti ti-chart-bar me-2"></i>View Full Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
