<!-- leftbar-tab-menu -->
<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="{{ route('admin.index') }}" class="logo">
            <span>
                {{-- You can use your site settings to dynamically load the logo --}}
                <img src="{{ asset('44.png') }}" height="140px" width="180px" alt="logo-small" class="logo-sm">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <i class="iconoir-dashboard-dots menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="menu-label">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Content Management</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.heroslider.index') }}">
                            <i class="iconoir-internet menu-icon"></i>
                            <span>Hero Slider</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.about.index') }}">
                            <i class="iconoir-user menu-icon"></i>
                            <span>About Section</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.service.index') }}">
                            <i class="iconoir-design-pencil menu-icon"></i>
                            <span>Services</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.portfolio.index') }}">
                            <i class="iconoir-mac-os-window menu-icon"></i>
                            <span>Portfolio</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                            <i class="iconoir-chat-bubble menu-icon"></i>
                            <span>Testimonials</span>
                        </a>
                    </li><!--end nav-item-->

                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.call_to_action.index') }}">
                            <i class="iconoir-megaphone menu-icon"></i>
                            <span>Call To Action</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="menu-label">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Settings</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.general_settings.index') }}">
                            <i class="iconoir-settings menu-icon"></i>
                            <span>General Settings</span>
                        </a>
                    </li><!--end nav-item-->

                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contact.index') }}">
                            <i class="iconoir-phone menu-icon"></i>
                            <span>Contact Info</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.profile') }}">
                            <i class="iconoir-profile-circle menu-icon"></i>
                            <span>Profile</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.session.index') }}">
                            <i class="iconoir-key-alt menu-icon"></i>
                            <span>Sessions</span>
                        </a>
                    </li><!--end nav-item-->

                </ul><!--end navbar-nav--->
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div>
<!--end startbar-->

<div class="startbar-overlay d-print-none"></div>
<!-- end leftbar-tab-menu-->
