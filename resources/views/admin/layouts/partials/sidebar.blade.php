<div class="sidebar" data-background-color="dark">
    <br>
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark" style="padding: 15px;">

            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="navbar brand" class="navbar-brand"
                    style="height: 100px; width: auto;" />
            </a>

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <br>
    <br>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/menu-categories*') ? 'active' : '' }}">
                    <a href="{{ route('menu-categories.index') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Menu Category</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/menus*') ? 'active' : '' }}">
                    <a href="{{ route('menus.index') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-utensils"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                    <a href="{{ route('testimonials.index') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-quote-left"></i>
                        <p>Testimonial</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('admin/reservations*') ? 'active' : '' }}">
                    <a href="{{ route('reservations.index') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i>
                        <p>Reservations</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>