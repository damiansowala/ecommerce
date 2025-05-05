<aside class="app-sidebar bg-primary-subtle" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ url('/dashboard') }}" class="brand-link">
            <img src="{{ asset('library/adminlte/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light"> {{ config('app.name', 'Laravel') }}</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="true">
                @include('backend/layouts/partials.menu')
            </ul>
        </nav>
    </div>
</aside>
