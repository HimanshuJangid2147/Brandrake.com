<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Brandrake</title>

    <!-- Favicons -->
    <link href="{{ asset('5.png') }}" rel="icon">
    <link href="{{ asset('5.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Main Admin CSS -->
    <link href="{{ asset('assets/css/modern_admin.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="admin-header">
        <a href="{{ route('admin.dashboard') }}" class="brand-logo">
            <span class="brand-icon">B</span>
            <span>Brandrake</span>
        </a>
        <div class="header-actions">
            <button class="mobile-menu-toggle" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="user-menu">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
                </div>
            </div>
             <form method="POST" action="{{ route('admin.logout') }}" class="d-none d-sm-block">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="admin-sidebar">
        <div class="sidebar-content">
            <nav class="nav-section">
                <p class="nav-section-title">Menu</p>
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid-fill nav-icon"></i>
                    <span>Dashboard</span>
                </a>
            </nav>
            <nav class="nav-section">
                <p class="nav-section-title">Content Management</p>
                <a class="nav-link" href="#"><i class="bi bi-images nav-icon"></i><span>Hero Slider</span></a>
                <a class="nav-link" href="#"><i class="bi bi-file-person-fill nav-icon"></i><span>About Section</span></a>
                <a class="nav-link" href="#"><i class="bi bi-gear-wide-connected nav-icon"></i><span>Services</span></a>
                <a class="nav-link" href="#"><i class="bi bi-briefcase-fill nav-icon"></i><span>Portfolio</span></a>
                <a class="nav-link" href="#"><i class="bi bi-people-fill nav-icon"></i><span>Team Members</span></a>
                <a class="nav-link" href="#"><i class="bi bi-chat-quote-fill nav-icon"></i><span>Testimonials</span></a>
            </nav>
            <nav class="nav-section">
                <p class="nav-section-title">Settings</p>
                <a class="nav-link" href="#"><i class="bi bi-telephone-fill nav-icon"></i><span>Contact Info</span></a>
                <a class="nav-link" href="#"><i class="bi bi-sliders nav-icon"></i><span>Site Settings</span></a>
            </nav>
        </div>
    </aside>

    <div class="sidebar-backdrop"></div>

    <!-- Main Content -->
    <main class="admin-main">
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.querySelector('.admin-sidebar');
            const backdrop = document.querySelector('.sidebar-backdrop');
            const toggleButton = document.querySelector('.mobile-menu-toggle');

            function toggleSidebar() {
                sidebar.classList.toggle('show');
                backdrop.classList.toggle('show');
            }

            if (toggleButton) {
                toggleButton.addEventListener('click', toggleSidebar);
            }

            if (backdrop) {
                backdrop.addEventListener('click', toggleSidebar);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
