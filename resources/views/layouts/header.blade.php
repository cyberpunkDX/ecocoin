<header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
    <!-- top navigation -->
    <div class="top-navigation-wrapper">
        <div class="top-navigation-container container">
            <div class="top-navigation-left">
                <div class="top-navigation-left-text">
                    Phone : {{ config('app.phone') }}      Email : <a
                        href="mailto:{{ config('app.email') }}" class="__cf_email__"
                        >{{ config('app.email') }}</a>
                </div>
            </div>
            <div class="top-navigation-right">
                <div class="top-social-wrapper">
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-flickr"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-pinterest-p"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-tumblr"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fa fa-vimeo"></i></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="greennature-header-substitute"></div>
    <div class="greennature-header-inner header-inner-header-style-5">
        <div class="greennature-header-container container">
            <div class="greennature-header-inner-overlay"></div>
            <!-- logo -->
            <div class="greennature-logo">
                <div class="greennature-logo-inner">
                    <a href="/">
                        <img src="{{ config('app.logo-dark') }}" alt="" /> </a>
                </div>
                <div class="greennature-responsive-navigation dl-menuwrapper"
                    id="greennature-responsive-navigation"><button class="dl-trigger">Open Menu</button>
                </div>
            </div>

            <!-- navigation -->
            @include('layouts.navbar')
            <div class="clear"></div>
        </div>
    </div>
</header>