<!DOCTYPE html>
<html lang="en" data-startbar="light" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Pitara - Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('5.png') }}">

    {{-- CSS Files --}}
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    {{-- Header --}}
    @include('partials.admin-header')

    {{-- Sidebar --}}
    @include('partials.admin-sidebar')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- JS Files --}}
    <script src="{{ asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/data/stock-prices.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/index.init.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
