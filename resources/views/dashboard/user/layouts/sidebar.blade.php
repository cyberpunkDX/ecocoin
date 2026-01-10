<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="/" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset(env('APP_LOGO_DARK')) }}" alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset(env('APP_FAVICON')) }}" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset(env('APP_LOGO_LIGHT')) }}" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{ asset(env('APP_FAVICON')) }}" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dash</li>

            <li class="side-nav-item">
                <a href="{{ route('user.dashboard') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('user.media.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-camera"></i></span>
                    <span class="menu-text"> Eco Media </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('user.deposit.pricing.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-wallet"></i></span>
                    <span class="menu-text"> Deposit </span>
                    
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('user.withdraw.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                    <span class="menu-text"> Withdraw </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('user.profile.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-user"></i></span>
                    <span class="menu-text"> Profile </span>
                </a>
            </li>


        </ul>

        <div class="clearfix"></div>
    </div>
</div>
