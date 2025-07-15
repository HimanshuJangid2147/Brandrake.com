<div>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('44.png') }}" alt="Brandrake Logo">
        </a>

        <!-- Navigation Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}#hero" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('home') }}#about" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('home') }}#services" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('home') }}#portfolio" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{ route('home') }}#team" class="{{ request()->routeIs('team') ? 'active' : '' }}">Team</a></li>
                <li><a href="{{ route('home') }}#contact" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
