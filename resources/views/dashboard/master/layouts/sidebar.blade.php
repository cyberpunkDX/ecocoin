<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"><img width="50" src="{{ asset(env('APP_LOGO_DARK')) }}" alt="{{ env('APP_NAME') }}"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"></a>

        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setActiveMenu(['master.dashboard']) }}">
                <a href="{{ route('master.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ setActiveMenu(['master.admin.*']) }}">
                <a href="{{ route('master.admin.index') }}" class="nav-link"><i
                        class="fas fa-user-tie"></i><span>Admins</span></a>
            </li>
            <li class="dropdown {{ setActiveMenu(['master.profile.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActiveMenu(['master.profile.*']) }}"><a class="nav-link"
                            href="{{ route('master.profile.index') }}">Profile</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
