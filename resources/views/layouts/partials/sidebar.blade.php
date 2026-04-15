<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->


                <li class="slide">
                    <a href="{{ route('ecommerce') }}" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('admin.categories.index') }}" class="side-menu__item">
                          <i class="ri-folder-add-line me-1"></i>
                        <span class="side-menu__label">Add Category</span>
                    </a>
                </li>
                 <li class="slide">
                                    <a href="{{ route('admin.products.index') }}" class="side-menu__item">
                                        <i class="ri-shopping-bag-line me-1"></i>
                                        <span class="side-menu__label">Add Products</span>
                                    </a>
                                </li>
                                
                                <li class="slide">
                                    <a href="{{ route('admin.orders.index') }}" class="side-menu__item">
                                        <i class="ri-shopping-cart-line me-1"></i>
                                        <span class="side-menu__label">Orders</span>
                                    </a>
                                </li>
                                 <li class="slide">
                                    <a href="{{ route('admin.deliveries.index') }}" class="side-menu__item">
                                        <i class="ri-truck-line me-1"></i>
                                        <span class="side-menu__label">Deliveries</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('products') }}" class="side-menu__item">
                                        <i class="ri-shoppingBag-line me-1"></i>
                                        <span class="side-menu__label">Products</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a href= "{{ route('product-details') }}"  class="side-menu__item">
                                        <i class="ri-file-line me-1"></i>
                                        <span class="side-menu__label">Product Details</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a href= "{{ route('products-list') }}"  class="side-menu__item">
                                        <i class="ri-list-check me-1"></i>
                                        <span class="side-menu__label">Products List</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('wishlist') }}" class="side-menu__item">
                                        <i class="ri-heart-line me-1"></i>
                                        <span class="side-menu__label">Wishlist</span>
                                    </a>
                                </li>

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-mail-line me-1"></i> 
                        <span class="side-menu__label">Email</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Email</a>
                        </li>
                                  <li class="slide">
                                    <a href= "{{ route('mail') }}" class="side-menu__item">Mail App</a>
                                </li>
                                <li class="slide">
                                    <a href= "{{ route('mail-settings') }}" class="side-menu__item">Mail Settings</a>
                                </li>
                    
                               
                            
                                         
                    </ul>
                </li>
                <!-- End::slide -->

           

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Pages</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                        <span class="side-menu__label">Profile</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        
                        <li class="slide">
                            <a href="profile.html" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="profile-settings.html" class="side-menu__item">Profile Settings</a>
                        </li>
                                               
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg>
                        <span class="side-menu__label">Authentication</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Authentication</a>
                        </li>
                        <li class="slide">
                            <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Create Password
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>      
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="reset-password-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="reset-password-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-up-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-up-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign In
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-in-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-in-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="two-step-verification-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="two-step-verification-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide">
                            <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 13h-2v-2h2v2zm0-4h-2V7h2v6z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-5h2v2h-2zm0-8h2v6h-2z"/></svg>
                        <span class="side-menu__label">Settings</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Setting</a>
                        </li>
                        <li class="slide">
                            <a href="401-error.html" class="side-menu__item">401 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="404-error.html" class="side-menu__item">404 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="500-error.html" class="side-menu__item">500 - Error</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Web Apps</span></li>
                <!-- End::slide__category -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->