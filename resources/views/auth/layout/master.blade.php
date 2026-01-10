<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from invest.coinrave.co.uk/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 15:46:28 GMT -->
<!-- Added by HTTrack -->

<!-- Mirrored from newdawnmarketfx.com/main/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 12:24:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Authenticate | {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('guest-assets/css/appsf488f488.css') }}">
    {!! config('app.live-chat') !!}
    <style>
        body {
            top: 0px !important;
        }

        .translate-con {
            border: 1px solid blue;
            width: 160px;
            overflow: hidden;
            padding: 6px 10px;
        }

        .skiptranslate {
            display: none;
        }

        .translate-con .skiptranslate {
            display: block !important;
        }


        .translate-con #google_translate_element {
            width: 100%;
        }

        .translate-con select {
            background-color: transparent;
            border: none;
        }
    </style>
</head>

<body class="nk-body npc-cryptlite pg-auth is-dark">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">

                <div class="brand-logo text-center mb-2 pb-4"><a class="logo-link" href="/">
                        <img class="logo-img logo-light logo-img-lg" src='{{ asset(env('APP_LOGO_DARK')) }}'
                            alt="{{ config('app.name') }}"></a>
                </div>
                @yield('content')
                <p id="error" style='display: none'></p>
            </div>

            <div class="nk-footer nk-auth-footer-full">
                <div class="container wide-lg">
                    <div class="row g-3">
                        <div class="col-lg-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="/" target="_blank">Return to
                                        Homepage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="terms">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="nk-block-content text-center text-lg-left">
                                <p class="text-soft">{{ config('app.name') }} &copy; 2013-2025. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('guest-assets/js/bundle.js') }}"></script>
            <script src="{{ asset('guest-assets/js/app.js') }}"></script>
            <script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
            <script>
                var error = document.getElementById('error');

                if (error.textContent == 'empty') {
                    swal("ERROR!", "Input's cannot be empty!", "warning");
                } else if (error.textContent == "success") {
                    swal("SUCCESS!", "Access Granted", "success");
                    setTimeout(() => {
                        window.location.href = 'session.html'
                    }, 3000);
                } else if (error.textContent == "error") {
                    swal("ERROR!", "Incorrect E-mail address or Password", "warning");
                }
            </script>

            <div id="google_translate_element"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
</body>

</html>
