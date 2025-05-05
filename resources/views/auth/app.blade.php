<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ (isset($pageTitle)) ? $pageTitle : '' }} {{ config('app.name', 'Laravel') }}</title>
    @include('backend/layouts/partials.links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

@yield('content')

@include('backend/layouts/partials.scripts')

</html>
