<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mx-auto">
            <a href="/"><img class="img-fluid w-75" src="{{ asset(env('APP_LOGO_LIGHT')) }}" alt="{{ env('APP_NAME') }}"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"></a>

        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setActiveMenu(['admin.dashboard']) }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ setActiveMenu(['admin.user.*']) }}">
                <a href="{{ route('admin.user.index') }}" class="nav-link"><i
                        class="fas fa-users"></i><span>Users</span></a>
            </li>
            <li class="{{ setActiveMenu(['admin.product.*']) }}">
                <a href="{{ route('admin.product.index') }}" class="nav-link"><i
                        class="fas fa-box"></i><span>Products</span></a>
            </li>
            <li class="{{ setActiveMenu(['admin.wallet.*']) }}">
                <a href="{{ route('admin.wallet.index') }}" class="nav-link"><i
                        class="fas fa-wallet"></i><span>Wallets</span></a>
            </li>
            <li class="{{ setActiveMenu(['admin.pricing.*']) }}">
                <a href="{{ route('admin.pricing.index') }}" class="nav-link"><i
                        class="fas fa-tag"></i><span>Pricings</span></a>
            </li>
            <li class="dropdown {{ setActiveMenu(['admin.profile.*', 'admin.general.setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i>
                    <span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActiveMenu(['admin.profile.*']) }}"><a class="nav-link"
                            href="{{ route('admin.profile.index') }}">Profile</a>
                    </li>
                    <li class="{{ setActiveMenu(['admin.general.setting.*']) }}"><a class="nav-link"
                            href="{{ route('admin.general.setting.index') }}">General Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
