<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ (isset($pageTitle)) ? $pageTitle : '' }} | {{ config('app.name', 'Laravel') }}</title>


    @include('backend/layouts/partials.links')
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="layout-fixed sidebar-expand-lg bg-light-subtle">

    {{-- @include('backend/layouts/partials.system-alerts') --}}

    <div class="app-wrapper">
        @include('backend/layouts/partials.navbar')
        @include('backend/layouts/partials.asidebar')
        <main class="app-main">
            <div class="container-fluid p-0 position-relative">

                @include('backend/partials.page-title')

                <div class="page-content">

                    @yield('content')
                </div>
            </div>
        </main>
        <footer class="app-footer mt-4">

            <div class="float-end d-none d-sm-inline">
                <small>
                    <a href="https://iseeyou.pl" class="text-decoration-none">iseeyou.pl</a>
                </small>
            </div>

            <small>
                Copyright &copy; 2014-2024&nbsp; All rights reserved.
            </small>

        </footer>
    </div>



    @include('backend/layouts/partials.scripts')
    @stack('scripts')
    @livewireScripts

</body>
</html>
