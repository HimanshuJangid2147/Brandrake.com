<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Brandrake - Admin')</title>
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}">
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="{{ route('admin.index') }}">
                <img src="{{ asset('44.png') }}" width="50" height="50" alt="Pitara Programming">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.about.index') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.contact.index') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.testimonial.index') }}">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.service.index') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.call_to_action.index') }}">Call to Action</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.heroslider.index') }}">Hero Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.general_settings.index') }}">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-wrapper">
        <div class="page-content" style="margin: 0;">
            <div class="container-xxl">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @yield('breadcrumbs')
                    </ol>
                </nav>
                <h1>@yield('header')</h1>
                <p>@yield('subheader')</p>
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer text-center text-sm-start d-print-none">
        <div class="container-xxl">
            <p class="text-muted mb-0">
                © <script>document.write(new Date().getFullYear())</script> Pitara Programming
            </p>
        </div>
    </footer>

    <script src="{{ asset('admin-assets/js/charts.js') }}"></script>
</body>
</html>
