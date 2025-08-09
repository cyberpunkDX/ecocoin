<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset(env('APP_FAVICON')) }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!--- Sweet Alert -->
    <script src="{{ asset('assets/js/sweet_alert.js') }}"></script>
    <style>
        .product-card {
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Sidenav Menu Start -->
        @include('dashboard.user.layouts.sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('dashboard.user.layouts.header')
        <!-- Topbar End -->

        <!-- Search Modal -->
        @include('dashboard.user.layouts.partials.search_modal')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">
            <div class="page-container">
                @include('dashboard.user.components.breadcrumb')
                @include('partials.sweet_alert')
                @yield('content')
                @include('dashboard.user.layouts.footer')
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('dashboard.user.layouts.partials.theme_setting')

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Apex Chart js -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Apex Chart Candlestick Demo js -->
    <script src="{{ asset('apexcharts/samples/assets/stock-prices.js') }}"></script>
    <script src="{{ asset('apexcharts/samples/assets/series1000.js') }}"></script>
    <script src="{{ asset('apexcharts/samples/assets/github-data.js') }}"></script>
    <script src="{{ asset('apexcharts/samples/assets/irregular-data-series.js') }}"></script>

    <!-- Wallet Dashboard js -->
    <script src="{{ asset('assets/js/pages/dashboard-wallet.js') }}"></script>
    
    @include('partials.live_chat')
</body>

</html>
