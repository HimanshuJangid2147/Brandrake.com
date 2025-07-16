    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="{{ route('admin.index') }}" class="logo">
                <span>
                    <img src="{{ asset('img/pp.svg') }}" alt="logo-small" class="logo-sm">
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
                            <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="iconoir-home-simple menu-icon"></i>
                                <span>Dashboards</span>
                            </a>
                            <div class="collapse " id="sidebarDashboards">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Analytics</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarDashboards-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>Applications</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                            <span>Analytics</span>
                                        </a>
                                        <div class="collapse " id="sidebarAnalytics">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                                        </div>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                            <span>Projects</span>
                                        </a>
                                        <div class="collapse " id="sidebarProjects">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-clients.html">Clients</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-team.html">Team</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-project.html">Project</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-task.html">Task</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-kanban-board.html">Kanban
                                                        Board</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-chat.html">Chat</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-users.html">Users</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-create.html">Project Create</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                                        </div>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                            <span>Ecommerce</span>
                                        </a>
                                        <div class="collapse " id="sidebarEcommerce">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-products.html">Products</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-customers.html">Customers</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="ecommerce-customer-details.html">Customer Details</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-orders.html">Orders</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-order-details.html">Order
                                                        Details</a>
                                                </li><!--end nav-item-->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-refunds.html">Refunds</a>
                                                </li><!--end nav-item-->
                                            </ul><!--end nav-->
                                        </div>
                                    </li><!--end nav-item-->

                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-chat.html">Chat</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-contact-list.html">Contact List</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarEmail">
                                <i class="iconoir-mail menu-icon"></i>
                                <span>Email</span>
                            </a>
                            <div class="collapse " id="sidebarEmail">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-inbox.html">Inbox</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-read.html">Read Email</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-compose.html">Compose Email</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarEmail-->
                        </li><!--end nav-item-->
                        <li class="menu-label mt-2">
                            <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small>
                            <span>Management</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarUsers">
                                <i class="iconoir-user-square menu-icon"></i>
                                <span>Users</span>
                            </a>
                            <div class="collapse " id="sidebarUsers">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.users.list') }}">List</a>
                                    </li><!--end nav-item-->
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="users-profile.html">Profile</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="users-settings.html">Settings</a>
                                    </li><!--end nav-item--> --}}
                                </ul><!--end nav-->
                            </div><!--end startbarUsers-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCategories" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Categories</span>
                            </a>
                            <div class="collapse " id="sidebarCategories">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.categories') }}">Categories</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.subcategories') }}">Sub
                                            Categories</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-extrude menu-icon"></i>
                                <span>Product</span>
                            </a>
                            <div class="collapse " id="sidebarProducts">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.projects.list') }}">List</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.projects.create') }}">Create</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href=#sidebarCoupons data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-cash menu-icon"></i>
                                <span>Coupons</span>
                            </a>
                            <div class="collapse " id="sidebarCoupons">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.coupons.list') }}">List</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.coupons.create') }}">Create</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarReferrals" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Referrals</span>
                            </a>
                            <div class="collapse " id="sidebarReferrals">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.referrals.index') }}">List</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-star menu-icon"></i>
                                <span>Pages</span>
                            </a>
                            <div class="collapse " id="sidebarPages">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.pages.combined') }}">Combined Pages</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-cart-alt menu-icon"></i>
                                <span>Orders</span>
                            </a>
                            <div class="collapse " id="sidebarOrders">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        {{-- <a class="nav-link" href="{{ route('admin.orders.list') }}">List</a> --}}
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="menu-label mt-2">
                            <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small>
                            <span>Components</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarElements">
                                <i class="iconoir-compact-disc menu-icon"></i>
                                <span>UI Elements</span>
                            </a>
                            <div class="collapse " id="sidebarElements">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-badges.html">Badges</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-cards.html">Cards</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-grids.html">Grids</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-images.html">Images</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-list.html">List</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-modals.html">Modals</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-navs.html">Navs</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-progress.html">Progress</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-typography.html">Typography</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-videos.html">Videos</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarElements-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                <i class="iconoir-peace-hand menu-icon"></i>
                                <span>Advanced UI</span><span
                                    class="badge rounded text-success bg-success-subtle ms-1">New</span>
                            </a>
                            <div class="collapse " id="sidebarAdvancedUI">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-animation.html">Animation</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-files.html">File Manager</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarAdvancedUI-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarForms">
                                <i class="iconoir-journal-page menu-icon"></i>
                                <span>Forms</span>
                            </a>
                            <div class="collapse " id="sidebarForms">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-validation.html">Validation</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-editors.html">Editors</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarForms-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCharts">
                                <i class="iconoir-candlestick-chart menu-icon"></i>
                                <span>Charts</span>
                            </a>
                            <div class="collapse " id="sidebarCharts">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-apex.html">Apex</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarCharts-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTables">
                                <i class="iconoir-table-rows menu-icon"></i>
                                <span>Tables</span>
                            </a>
                            <div class="collapse " id="sidebarTables">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-basic.html">Basic</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-editable.html">Editable</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarTables-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarIcons">
                                <i class="iconoir-trophy menu-icon"></i>
                                <span>Icons</span>
                            </a>
                            <div class="collapse " id="sidebarIcons">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-fontawesome.html">Font Awesome</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-lineawesome.html">Line Awesome</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-icofont.html">Icofont</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-iconoir.html">Iconoir</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarIcons-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="iconoir-navigator-alt menu-icon"></i>
                                <span>Maps</span>
                            </a>
                            <div class="collapse " id="sidebarMaps">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-google.html">Google Maps</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarMaps-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                <i class="iconoir-send-mail menu-icon"></i>
                                <span>Email Templates</span>
                            </a>
                            <div class="collapse " id="sidebarEmailTemplates">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarEmailTemplates-->
                        </li><!--end nav-item-->
                        <li class="menu-label mt-2">
                            <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small>
                            <span>Crafted</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="iconoir-page-star menu-icon"></i>
                                <span>Pages</span>
                            </a>
                            <div class="collapse " id="sidebarPages">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-profile.html">Profile</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-notifications.html">Notifications</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-treeview.html">Treeview</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-starter.html">Starter Page</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-blogs.html">Blogs</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-faq.html">FAQs</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarPages-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                                <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
                                <span>Authentication</span>
                            </a>
                            <div class="collapse " id="sidebarAuthentication">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-login.html">Log in</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-register.html">Register</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-maintenance.html">Maintenance</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-404.html">Error 404</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-500.html">Error 500</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarAuthentication-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div>
    <!--end startbar-->

    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->
