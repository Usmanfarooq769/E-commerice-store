 <!-- app-header -->
 <header class="app-header">

     <!-- Start::main-header-container -->
     <div class="main-header-container container-fluid">

         <!-- Start::header-content-left -->
         <div class="header-content-left">

             <!-- Start::header-element -->
             <div class="header-element">
                 <div class="horizontal-logo">
                     <a href="index.html" class="header-logo">
                         <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                             class="desktop-logo">
                         <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                             class="toggle-logo">

                         <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                             class="desktop-white">

                         <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                             class="toggle-white">
                     </a>
                 </div>
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element mx-lg-0 mx-2">
                 <a aria-label="Hide Sidebar"
                     class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                     data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->


             <!-- End::header-element -->
         </div>
         <!-- End::header-content-left -->

         <!-- Start::header-content-right -->
         <div class="header-content-right">


             <div class="header-element ">
                 <ul class="main-menu ms-auto d-flex align-items-center gap-5 list-unstyled mb-0  ">
                     <!-- Start::slide -->
                     <li class="slide">
                         <a class="side-menu__item" href="{{ route('user.products')}}">
                             <span class="side-menu__label  fs-6 fw-semibold">Home</span>
                         </a>
                     </li>
                     <!-- End::slide -->
                     <!-- Start::slide -->
                     <li class="slide">
                         <a href="#about" class="side-menu__item">
                             <span class="side-menu__label  fs-6 fw-semibold">About</span>
                         </a>
                     </li>
                     <!-- End::slide -->
                     <!-- Start::slide -->
                     <li class="slide">
                         <a href="{{route('user.cart')}}" class="side-menu__item">
                             <span class="side-menu__label  fs-6 fw-semibold">Add Cart</span>

                         </a>

                     </li>
                     <!-- End::slide -->

                     <!-- Start::slide -->
                     <li class="slide">
                         <a href="#pricing" class="side-menu__item">
                             <span class="side-menu__label  fs-6 fw-semibold">Pricing</span>
                         </a>
                     </li>
                     <!-- End::slide -->

                     <!-- Start::slide -->
                     <li class="slide">
                         <a href="#contact" class="side-menu__item">
                             <span class="side-menu__label  fs-6 fw-semibold">Contact Us</span>
                         </a>
                     </li>
                     <!-- End::slide -->

                 </ul>
             </div>

             <!-- Start::header-element -->
             <div class="header-element header-theme-mode">
                 <!-- Start::header-link|layout-setting -->
                 <a href="javascript:void(0);" class="header-link layout-setting">
                     <span class="light-layout">
                         <!-- Start::header-link-icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"
                             enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                             fill="#5f6368">
                             <rect fill="none" height="24" width="24" />
                             <path
                                 d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z" />
                         </svg>
                         <!-- End::header-link-icon -->
                     </span>
                     <span class="dark-layout">
                         <!-- Start::header-link-icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px"
                             viewBox="0 0 24 24" width="24px" fill="#5f6368">
                             <path d="M0 0h24v24H0V0z" fill="none" />
                             <path
                                 d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1zM11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408zm-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z" />
                         </svg>
                         <!-- End::header-link-icon -->
                     </span>
                 </a>
                 <!-- End::header-link|layout-setting -->
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element cart-dropdown dropdown">
                 <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                     data-bs-toggle="dropdown">
                     <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                         width="24px" fill="#5f6368">
                         <path d="M0 0h24v24H0V0z" fill="none" />
                         <path
                             d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                     </svg>
                     <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">0</span>
                 </a>

                 <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                     <div class="p-3 bg-light bg-opacity-75">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 fw-semibold">Cart Items</p>
                             <span class="badge bg-pink" id="cart-data">0 Items</span>
                         </div>
                     </div>
                     <div>
                         <hr class="dropdown-divider">
                     </div>

                     {{-- Items list --}}
                     <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                         {{-- Filled by JS --}}
                     </ul>

                     {{-- Has items footer --}}
                     <div class="p-3 empty-header-item border-top d-none">
                         <div class="d-grid">
                             <a href="{{ route('user.cart') }}" class="btn btn-primary">View Cart & Checkout</a>
                         </div>
                     </div>

                     {{-- Empty state --}}
                     <div class="p-5 empty-item">
                         <div class="text-center">
                             <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                 <i class="ri-shopping-cart-2-line fs-2"></i>
                             </span>
                             <h6 class="fw-semibold mb-1 mt-3">Your Cart is Empty</h6>
                             <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy</span>
                             <a href="{{ route('user.products') }}" class="btn btn-primary btn-wave btn-sm m-1">
                                 Continue Shopping <i class="bi bi-arrow-right ms-1"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>


             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element notifications-dropdown dropdown">

                 <!-- End::header-link|dropdown-toggle -->
                 <!-- Start::main-header-dropdown -->
                 <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                     <div class="p-3 bg-light bg-opacity-75">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 fw-semibold">Notifications</p>
                             <span class="badge bg-pink" id="notifiation-data">5 Unread</span>
                         </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <ul class="list-unstyled mb-0" id="header-notification-scroll">
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md offline bg-primary-transparent avatar-rounded">
                                         <img src="../assets/images/faces/1.jpg" alt="Sonia Agarwal">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.html">Sonia Agarwal</a></p>
                                         <div class="fw-normal header-notification-text text-muted">
                                             <span class="fw-medium fs-12 text-success">Approval</span> for the
                                             Insurance
                                         </div>
                                         <span class="text-muted header-notification-text fs-11">7 mins ago</span>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                             <i class="ti ti-trash fs-16"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md offline bg-primary-transparent avatar-rounded">
                                         <img src="../assets/images/faces/12.jpg" alt="Rajesh Kumar">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.html">Rajesh Kumar</a></p>
                                         <div class="fw-normal header-notification-text text-muted">
                                             <span class="fw-medium fs-12 text-warning">Urgent Request</span> for
                                             project
                                         </div>
                                         <span class="text-muted header-notification-text fs-11">3 hours ago</span>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                             <i class="ti ti-trash fs-16"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md offline bg-success-transparent avatar-rounded">
                                         <img src="../assets/images/faces/3.jpg" alt="Ayesha Malik">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.html">Ayesha Malik</a></p>
                                         <div class="fw-normal header-notification-text text-muted">
                                             <span class="fw-medium fs-12 text-info">Task Completed</span> for redesign
                                         </div>
                                         <span class="text-muted header-notification-text fs-11">2 hours ago</span>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                             <i class="ti ti-trash fs-16"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md online bg-danger-transparent avatar-rounded">
                                         <img src="../assets/images/faces/14.jpg" alt="Mohan Desai">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.html">Mohan Desai</a></p>
                                         <div class="fw-normal header-notification-text text-muted">
                                             <span class="fw-medium fs-12 text-danger">New Message</span> about client
                                             meeting
                                         </div>
                                         <span class="text-muted header-notification-text fs-11">15 mins ago</span>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                             <i class="ti ti-trash fs-16"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md offline bg-warning-transparent avatar-rounded">
                                         <img src="../assets/images/faces/5.jpg" alt="Priya Sharma">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.html">Priya Sharma</a></p>
                                         <div class="fw-normal header-notification-text text-muted">
                                             <span class="fw-medium fs-12 text-warning">Meeting Reminder</span>
                                             scheduled for 3:00 PM
                                         </div>
                                         <span class="text-muted header-notification-text fs-11">30 mins ago</span>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                             <i class="ti ti-trash fs-16"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>
                     <div class="p-3 empty-header-item1 border-top">
                         <div class="d-grid">
                             <a href="chat.html" class="btn btn-primary">View All</a>
                         </div>
                     </div>
                     <div class="p-5 empty-item1  ">
                         <div class="text-center">
                             <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                 <i class="ri-notification-off-line fs-2"></i>
                             </span>
                             <h6 class="fw-semibold mt-3">No New Notifications</h6>
                         </div>
                     </div>
                 </div>
                 <!-- End::main-header-dropdown -->
             </div>
             <!-- End::header-element -->



             <!-- Start::header-element -->
             <div class="header-element header-fullscreen">
                 <!-- Start::header-link -->
                 <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                     <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon" height="24px"
                         viewBox="0 0 24 24" width="24px" fill="#5f6368">
                         <path d="M0 0h24v24H0V0z" fill="none" />
                         <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                     </svg>
                     <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon  " height="24px"
                         viewBox="0 0 24 24" width="24px" fill="#5f6368">
                         <path d="M0 0h24v24H0V0z" fill="none" />
                         <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                     </svg>
                 </a>
                 <!-- End::header-link -->
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element dropdown">
                 <!-- Start::header-link|dropdown-toggle -->
                 <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                     data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                     <span class="avatar avatar-sm avatar-rounded">
                         <img src="../assets/images/faces/14.jpg" alt="img" class="img-fluid">
                     </span>
                 </a>
                 <!-- End::header-link|dropdown-toggle -->
                 <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                     aria-labelledby="mainHeaderProfile">
                     <li class="p-3 bg-light bg-opacity-75 border-bottom">
                         <div class="d-flex align-items-center justify-content-between gap-4">
                             <div>
                                 <p class="mb-0 fw-semibold lh-1">Usman Farooq</p>
                                 <span class="fs-11 text-muted">shanusmanfarooq@gmail.com</span>
                             </div>

                         </div>
                     </li>
                     <li><a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}"><i
                                 class="ti ti-user-circle fs-18 me-2 text-gray fw-normal"></i>My Profile</a></li>
                     <li><a class="dropdown-item d-flex align-items-center" href="{{route('mail')}}"><i
                                 class="ti ti-inbox fs-18 me-2 text-gray fw-normal"></i>Mail Inbox <span
                                 class="badge bg-success ms-auto">06</span></a></li>
                     <li><a class="dropdown-item d-flex align-items-center" href="{{route('mail-settings')}}"><i
                                 class="ti ti-adjustments-horizontal fs-18 me-2 text-gray fw-normal"></i>Account
                             Settings</a></li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item d-flex align-items-center" href="{{route('sign-in-cover')}}"><i
                                 class="ti ti-logout fs-18 me-2 text-gray fw-normal"></i>Sign Out</a></li>
                 </ul>
             </div>


             <div class="header-element">
                 <!-- Start::header-link|switcher-icon -->
                 <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                     data-bs-target="#switcher-canvas">
                     <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                         width="24px" fill="#5f6368">
                         <path d="M0 0h24v24H0V0z" fill="none" />
                         <path
                             d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h5c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                     </svg>
                 </a>
                 <!-- End::header-link|switcher-icon -->
             </div>

         </div>
         <!-- End::header-content-right -->

     </div>
     <!-- End::main-header-container -->

 </header>

 @php
 $categories = App\Models\Category::where('status', 'active')->get(['id', 'name']);
 @endphp


 <!-- Start::app-sidebar -->
 <aside class="app-sidebar sticky" id="sidebar">

     <!-- Start::main-sidebar-header -->
     <div class="main-sidebar-header">
         <a href="index.html" class="header-logo">
             <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
             <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">

             <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">

             <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
         </a>
     </div>
     <!-- End::main-sidebar-header -->

     <!-- Start::main-sidebar -->
     <div class="main-sidebar" id="sidebar-scroll">

         <!-- Start::nav -->
         <nav class="main-menu-container nav nav-pills flex-column sub-open">
             <div class="main-menu ps-3 pe-3">

                 <h5 class="text-primary mb-3 mt-3 text-center fw-bold"><i class="bi bi-sliders me-2"></i> Filters</h5>

                 <a href="{{ route('user.products') }}"
                     class="btn btn-primary-light btn-sm btn-lg mb-3 mt-3 w-100">Clear All Filters</a>

                 <form action="{{ route('user.products') }}" method="GET">
                     <div class="input-group  ">
                         <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                             placeholder="Search products by name...">
                         <button type="submit" class="btn btn-primary"><i class="ti ti-search"></i></button>
                     </div>
                 </form>


                 <div class="btn-group mb-2 mt-3">
                     <button class="btn btn-success-light dropdown-toggle w-100" type="button"
                         data-bs-toggle="dropdown">
                         <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                     </button>
                     <ul class="dropdown-menu w-100">
                         <li><a class="dropdown-item sort-link"
                                 href="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}">Newest</a>
                         </li>
                         <li><a class="dropdown-item sort-link"
                                 href="{{ request()->fullUrlWithQuery(['sort' => 'oldest']) }}">Oldest</a>
                         </li>
                         <li><a class="dropdown-item sort-link"
                                 href="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}">Price:
                                 Low to High</a></li>
                         <li><a class="dropdown-item sort-link"
                                 href="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}">Price:
                                 High to Low</a></li>
                     </ul>
                 </div>
                 {{-- Categories Filter --}}
                 <form action="{{ route('user.products') }}" method="GET" id="filterForm">
                     <input type="hidden" name="search" value="{{ request('search') }}">
                     <input type="hidden" name="sort" value="{{ request('sort') }}">

                     <div class="p-3 border-bottom">
                         <h5 class="fw-semibold text-primary text-center mb-3">Categories</h5>

                         @foreach($categories as $cat)
                         <div class="form-check mb-2 p-0">
                             <input class="form-check-input float-end category-check" type="radio" name="category"
                                 value="{{ $cat->id }}" id="cat-{{ $cat->id }}"
                                 {{ request('category') == $cat->id ? 'checked' : '' }}>
                             <h5 class="form-check-label text-wrap pe-3 text-muted text-2xl" for="cat-{{ $cat->id }}">
                                 {{ $cat->name }}
                                 <span class="fs-11 fw-normal text-primary">({{ $cat->products_count }})</span>
                             </h5>
                         </div>
                         @endforeach

                     </div>

                     {{-- Price Range --}}
                     <div class="p-3 border-bottom text-primary">
                         <h5 class="fw-bold mb-3 text-primary">Price Range</h5>
                         <div class="row g-2">
                             <div class="col-12">
                                 <input type="number" class="form-control form-control-sm" name="min_price"
                                     placeholder="Min" value="{{ request('min_price') }}">
                             </div>
                             <div class="col-12">
                                 <input type="number" class="form-control form-control-sm" name="max_price"
                                     placeholder="Max" value="{{ request('max_price') }}">
                             </div>
                         </div>
                     </div>

                     <div class="p-3">
                         <button type="submit" class="btn btn-primary w-100 btn-sm">
                             <i class="ri-filter-line me-1"></i> Apply Filter
                         </button>
                     </div>

                 </form>



             </div>



         </nav>
         <!-- End::nav -->

     </div>
     <!-- End::main-sidebar -->

 </aside>
 <!-- End::app-sidebar -->