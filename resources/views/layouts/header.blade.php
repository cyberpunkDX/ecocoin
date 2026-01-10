<header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
    <div class="container">
        <div class="header-wrapper d-flex align-items-center justify-content-between">
            <div class="logo w-25 mw-50">
                <a href="/" class="logo-white">
                    <img src="{{ config('app.logo-dark') }}" alt="logo" class="img-fluid">
                </a>
                <a href="/" class="logo-dark">
                    <img src="{{ config('app.logo-light') }}" alt="logo" class="img-fluid">
                </a>
            </div>

            <div class="d-flex align-items-center gap-4">

                <div class="btn-group">
                    <button
                        class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
                        type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <iconify-icon icon="solar:hamburger-menu-line-duotone"
                            class="menu-icon fs-8 text-dark"></iconify-icon>
                    </button>
                    @include('layouts.navbar')
                </div>
            </div>
        </div>
    </div>
</header>
