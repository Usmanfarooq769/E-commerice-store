<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{asset('assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- End::slide__category -->
                  @can('dashboard')
                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                            viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" />
                        </svg>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                @endcan
                 @can('view users')
                 <li class="slide">
                    <a href="{{ route('admin.users.index') }}" class="side-menu__item">
                        <i class="bi bi-person-badge me-1"></i>
                        <span class="side-menu__label">User</span>
                    </a>
                </li>
                @endcan
                @can('view category')
                <li class="slide">
                    <a href="{{ route('admin.categories.index') }}" class="side-menu__item">
                        <i class="ri-folder-add-line me-1"></i>
                        <span class="side-menu__label">Category</span>
                    </a>
                </li>
                @endcan
                @can('view products')
                <li class="slide">
                    <a href="{{ route('admin.products.index') }}" class="side-menu__item">
                        <i class="ri-shopping-bag-line me-1"></i>
                        <span class="side-menu__label">Products</span>
                    </a>
                </li>
                @endcan
                @can('view orders')
                <li class="slide">
                    <a href="{{ route('admin.orders.index') }}" class="side-menu__item">
                        <i class="ri-shopping-cart-line me-1"></i>
                        <span class="side-menu__label">Orders</span>
                    </a>
                </li>
                @endcan
                @can('view deliveries')
                <li class="slide">
                    <a href="{{ route('admin.deliveries.index') }}" class="side-menu__item">
                        <i class="ri-truck-line me-1"></i>
                        <span class="side-menu__label">Deliveries</span>
                    </a>
                </li>
                @endcan
                @can('view roles')
                <li class="slide">
                    <a href="{{ route('admin.roles.index') }}" class="side-menu__item">
                        <i class="bi bi-people-fill me-1"></i>
                        <span class="side-menu__label">Role</span>
                    </a>
                </li>
                @endcan
                @can('view permissions')
                <li class="slide">
                    <a href="{{ route('admin.permissions.index') }}" class="side-menu__item">
                        <i class="bi bi-shield-lock me-1"></i>
                        <span class="side-menu__label">Permission</span>
                    </a>
                </li>
                @endcan



            

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->