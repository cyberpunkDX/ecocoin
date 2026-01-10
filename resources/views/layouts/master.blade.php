<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset(env('APP_FAVICON')) }}" />
  <link rel="stylesheet" href="{{ asset('home/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/libs/aos-master/dist/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/styles.css') }}" />
</head>

<body>

  <!-- Header -->
  @include('layouts.header')

  <!--  Page Wrapper -->
  @yield('content')

  @include('layouts.footer')


  <script src="{{ asset('home/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('home/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('home/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/libs/aos-master/dist/aos.js') }}"></script>
  <script src="{{ asset('home/js/custom.js') }}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>