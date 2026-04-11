<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Pages  </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{asset('assets/libs/node-waves/waves.min.css')}}" rel="stylesheet">

    <!-- SwiperJS Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

    <script>
        if (localStorage.rixzodarktheme) {
            document.querySelector("html").setAttribute("data-theme-mode", "dark")
        }
        if (localStorage.rixzortl) {
            document.querySelector("html").setAttribute("dir", "rtl")
            document.querySelector("#style")?.setAttribute("href", "{{asset('assets/libs/bootstrap/css/bootstrap.rtl.min.css')}}");
        }
    </script>


</head>

<body class="landing-body">

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style gx-0">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-light-theme">
                                Light
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-dark-theme">
                                Dark
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <p class="switcher-style-head">Directions:</p>
                <div class="row switcher-style gx-0">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-ltr">
                                LTR
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-rtl">
                                RTL
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary"
                            id="switcher-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary"
                            id="switcher-primary1">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                            id="switcher-primary2">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                            id="switcher-primary3">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                            id="switcher-primary4">
                    </div>
                    <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                        <div class="theme-container-primary"></div>
                        <div class="pickr-container-primary"></div>
                    </div>
                </div>
            </div>
            <div>
                <p class="switcher-style-head">reset:</p>
                <div class="text-center">
                    <button id="reset-all" class="btn btn-danger mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div class="landing-page-wrapper">

        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="#" class="header-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line fs-20"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element align-items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="btn-list d-lg-none d-flex">
                            <a href="sign-up-basic.html" class="btn btn-success-light">
                                Sign Up
                            </a>
                            <button class="btn btn-icon btn-primary switcher-icon d-flex align-items-center justify-content-center rounded-circle" data-bs-toggle="offcanvas"
                                data-bs-target="#switcher-canvas">
                                <i class="ri-settings-3-line"></i>
                            </button>
                        </div>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <div class="container-xl">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar shadow-none">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills sub-open">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="#" class="header-logo">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo"
                                        class="desktop-white">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="main-menu ms-auto">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <span class="side-menu__label me-2">More</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="#services" class="side-menu__item">Services</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#expectations" class="side-menu__item">Expectations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#features" class="side-menu__item">Features</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2.1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2.2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2.2.1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2.2.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#team" class="side-menu__item">
                                    <span class="side-menu__label">Team</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Pricing</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faqs" class="side-menu__item">
                                    <span class="side-menu__label">FAQ's</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#testimonials" class="side-menu__item">
                                    <span class="side-menu__label">Testimonials</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact Us</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                        <div class="d-lg-flex d-none">
                            <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                <a href="sign-up-basic.html" class="btn btn-wave btn-success rounded-pill btn-w-md">
                                    Sign Up
                                </a>
                                <button class="btn btn-wave btn-icon btn-primary switcher-icon rounded-circle" data-bs-toggle="offcanvas"
                                    data-bs-target="#switcher-canvas">
                                    <i class="ri-settings-3-line lh-1 align-middle"></i>
                                </button>
                            </div>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content landing-main px-0">

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section main-banner-section">
                    <div class="container main-banner-container pb-lg-0">
                        <div class="row pt-xl-3">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                                <div class="banner-content">
                                    <p class="fs-14 fw-medium text-success mb-3">
                                        <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Optimized and Accessible</span>
                                    </p>
                                    <h6 class="landing-banner-heading mb-3 text-fixed-white">Simplify Your Design with the <span class="fw-semibold text-warning">Rixzo</span> Template for Unique Needs.</h6>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">Discover an intuitive admin template crafted for efficiency, featuring a sleek and modern interface that streamlines management tasks and boosts productivity.</div>
                                    <a href="index.html" class="m-1 btn btn-lg rounded-pill px-4 bg-success text-fixed-white">
                                        View Demos
                                        <i class="ri-eye-line ms-2 align-middle"></i>
                                    </a>
                                    <a href="index.html" class="m-1 btn btn-lg rounded-pill px-4 btn-primary btn-wave waves-effect waves-light">
                                        Learn More
                                        <i class="ri-arrow-right-line ms-2 align-middle"></i>
                                    </a>                                    
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 my-auto">
                                <div class="text-end landing-main-image landing-heading-img">
                                    <img src="../assets/images/media/media-72.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class="section" id="about">
                <div class="container position-relative">
                    <div class="text-center">
                        <p class="fs-14 fw-medium text-success mb-1">
                            <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Overview</span>
                        </p>
                        <h4 class="fw-semibold mb-1 mt-3">Why Choose Us?</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Our mission is to empower you to reach your goals through innovative solutions and dedicated support.</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card landing-first-cards primary border border-primary border-opacity-25 shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-primary-transparent avatar-rounded border-3 border border-opacity-50 border-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Design and</h6>
                                    <h6 class="fw-semibold">Customization</h6>
                                    <p class="text-muted">We provide tailored designs to meet your business needs.</p>
                                    <a href="javascript:void(0);" class="fw-semibold text-primary">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-first-cards secondary border border-secondary border-opacity-25 shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-secondary-transparent avatar-rounded border-3 border border-opacity-50 border-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">24/7</h6>
                                    <h6 class="fw-semibold">Support</h6>
                                    <p class="text-muted">Our support team is available round the clock for your assistance.</p>
                                    <a href="javascript:void(0);" class="fw-semibold text-secondary">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-first-cards success border border-success border-opacity-25 shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-success-transparent avatar-rounded border-3 border border-opacity-50 border-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Innovative</h6>
                                    <h6 class="fw-semibold">Solutions</h6>
                                    <p class="text-muted">We offer cutting-edge solutions to ensure business growth.</p>
                                    <a href="javascript:void(0);" class="fw-semibold text-success">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-first-cards info border border-info border-opacity-25 shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-info-transparent avatar-rounded border-3 border border-opacity-50 border-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Reliable</h6>
                                    <h6 class="fw-semibold">Performance</h6>
                                    <p class="text-muted">Our services guarantee stable and high-performance results.</p>
                                    <a href="javascript:void(0);" class="fw-semibold text-info">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section bg-white overflow-hidden" id="expectations">
                <div class="container">
                    <div class="row gx-5 mx-0 align-items-end">
                        <div class="col-xl-5 d-none d-xl-block">
                            <div class="home-proving-image rounded-3 border border-primary border-opacity-25">
                                <img src="../assets/images/media/media-80.png" alt="" class="img-fluid about-image">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                        <div class="col-xl-7 my-auto">
                            <div class="heading-section text-start mb-4">
                                <p class="fs-14 fw-medium text-success mb-1">
                                    <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>About Us</span>
                                </p>
                                <h4 class="mt-3 fw-semibold mb-2">Our Commitment to Excellence</h4>
                                <div class="heading-description fs-14">Welcome to rixzo, where our commitment transcends mere words; it forms the foundation of all our endeavors. We strive for excellence in every interaction, project, and outcome, ensuring they reflect our dedication to quality.</div>                                
                            </div>
                            <div class="row gy-4 mb-0">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="avatar avatar-lg bg-primary-transparent avatar-rounded border-3 border border-opacity-50 border-primary me-2 flex-shrink-0">
                                            01.
                                        </div>
                                        <div>
                                            <span class="fs-14">
                                                <strong>Extensive Industry Experience:</strong> With over 4 years in the industry, we have honed our skills and built a reputation for delivering quality and reliability.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="avatar avatar-lg bg-secondary-transparent avatar-rounded border-3 border border-opacity-50 border-secondary me-2 flex-shrink-0">
                                            02.
                                        </div>
                                        <div>
                                            <span class="fs-14">
                                                <strong>Dedicated Professionals:</strong> Our team comprises skilled professionals committed to providing exceptional service and innovative solutions.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="avatar avatar-lg bg-success-transparent avatar-rounded border-3 border border-opacity-50 border-success me-2 flex-shrink-0">
                                            03.
                                        </div>
                                        <div>
                                            <span class="fs-14">
                                                <strong>Customized Solutions:</strong> We believe in a personalized approach, tailoring our services to fit the unique requirements and preferences of each client.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="avatar avatar-lg bg-info-transparent avatar-rounded border-3 border border-opacity-50 border-info me-2 flex-shrink-0">
                                            04.
                                        </div>
                                        <div>
                                            <span class="fs-14">
                                                <strong>Comprehensive Support:</strong> Our support team is available 24/7, ensuring that help is always just a call away, no matter the time or day.
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class="section section-bg" id="services">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-primary border-opacity-10 bg-primary-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 17v4m3.2-16.1l-.9-.4m.9 2.6l-.9.4m2.6-4.3l-.4-.9m.4 6.5l-.4.9m3-7.4l-.4.9m.4 6.5l-.4-.9m2.6-4.3l-.9.4m.9 2.6l-.9-.4M22 13v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7M8 21h8"/><circle cx="18" cy="6" r="3"/></g></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0"> Web Development</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">We specialize in creating custom websites tailored to your business needs, ensuring.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-info border-opacity-10 bg-info-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-info">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m8 11l2 2l4-4"/><circle cx="11" cy="11" r="8"/><path d="m21 21l-4.3-4.3"/></g></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0">SEO Optimization</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">Boost your website's visibility on search engines with our expert SEO strategies.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-info">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card mt-xl-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-secondary border-opacity-10 bg-secondary-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="17" r="3"/><path d="M4.2 15.1A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.2m-4.3 2.2l-.9-.3m-5.6-2.2l-.9-.3m2.3 5.1l.3-.9m2.2-5.6l.3-.9m.2 7.4l-.4-1m-2.4-5.4l-.4-1m-2.1 5.3l1-.4m5.4-2.4l1-.4"/></g></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0">Cloud Hosting</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">Get scalable cloud hosting solutions for high performance and availability.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-secondary">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-success border-opacity-10 bg-success-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></g></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0">App Development</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">Developing high-performance mobile applications for Android and iOS platforms.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-success">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card mt-xl-5">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-teal border-opacity-10 bg-teal-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-teal">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></g></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0">E-commerce Development</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">Launch a robust online store with our e-commerce development services.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-teal">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="border border-2 border-pink border-opacity-10 bg-pink-transparent rounded-4">
                                                        <div class="p-1 bg-white rounded-circle border">
                                                            <span class="avatar avatar-md avatar-rounded bg-pink">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6M2 12a9 9 0 0 1 8 8m-8-4a5 5 0 0 1 4 4m-4 0h.01"/></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-semibold mb-0">Digital Marketing</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted">Boost your brand presence with targeted digital marketing strategies.</p>
                                            <a href="javascript:void(0);" class="fw-semibold text-pink">Read More<i class="ti ti-arrow-narrow-right ms-1 fs-16 lh-1 align-middle d-inline-block rtl-icon-transform"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="heading-section text-end mb-4">
                                <p class="fs-14 fw-medium text-success mb-1">
                                    <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Our Services</span>
                                </p>
                                <h4 class="mt-3 fw-semibold mb-2">Explore Our Premier Services</h4>
                                <div class="heading-description fs-14 mb-3">Welcome to rixzo, where our commitment goes beyond mere words; its the foundation of everything we do. We are dedicated.</div>                                
                                <a href="javascript:void(0);" class="btn btn-wave btn-secondary rounded-pill">
                                    Get started Now
                                </a>
                            </div>
                            <img src="../assets/images/media/media-79.png" alt="" class="img-fluid ps-5 d-none d-xl-block">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class="section landing-Features" id="features">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="heading-section text-center mb-0">
                                <p class="fs-14 fw-medium text-success mb-1">
                                    <span class="landing-section-heading landing-section-heading-dark text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Features</span>
                                </p>
                                <h4 class="text-fixed-white text-center mt-3 fw-medium">Key Features of Our Services</h4>
                                <div class="fs-14 text-fixed-white text-center op-8 mb-4">Discover the unique features that set us apart, designed to enhance your experience and deliver exceptional value.</div>                                
                            </div>
                        </div>
                        <div class="col-xl-10 my-auto">
                            <div
                                class="d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img"><img src="../assets/images/media/landing/web/1.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="../assets/images/media/landing/web/2.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="../assets/images/media/landing/web/4.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="../assets/images/media/landing/web/5.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="../assets/images/media/landing/web/3.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            <section class="section" id="team">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-14 fw-medium text-success mb-1">
                            <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Our Team</span>
                        </p>
                        <h4 class="fw-semibold mt-3 mb-2">Meet the Dedicated Individuals Behind Our Success</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Our team comprises talented professionals who are committed to excellence and passionate about driving results.</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-success bg-opacity-25 shadow-sm">
                                            <img src="../assets/images/faces/8.jpg" class="card-img rounded-circle" alt="Xavier Holt">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Xavier Holt</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF FINANCIAL OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Xavier brings over 20 years of financial expertise to the company, ensuring our financial stability and growth.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-info bg-opacity-25 shadow-sm">
                                            <img src="../assets/images/faces/10.jpg" class="card-img rounded-circle" alt="Mateo Cruz">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Mateo Cruz</h6>
                                        <p class="mb-0 text-primary fw-semibold">HEAD OF PRODUCT DEVELOPMENT</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Mateo oversees the entire product development lifecycle, ensuring that our solutions meet market.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-secondary bg-opacity-25 shadow-sm">
                                            <img src="../assets/images/faces/5.jpg" class="card-img rounded-circle" alt="...">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Ariana Wolfe</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF OPERATIONS OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Ariana has over a decade of experience in operational excellence and business strategies, ensuring smooth.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-primary bg-opacity-25 shadow-sm">
                                            <img src="../assets/images/faces/7.jpg" class="card-img rounded-circle" alt="...">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Selena Rivera</h6>
                                        <p class="mb-0 text-primary fw-semibold">MARKETING DIRECTOR</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Selena is an expert in digital marketing strategies and brand building, helping our company reach a global audience.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-14 fw-medium text-success mb-1">
                            <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Pricing</span>
                        </p>
                        <h4 class="fw-semibold mt-3 mb-2">Flexible Plans Tailored to Your Needs</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Choose from a range of adaptable plans designed to meet your evolving needs, giving you the freedom to scale your services effortlessly.</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="text-center mb-5">
                                <div class="tab-style-1 border p-1 bg-white shadow-sm rounded-pill d-inline-block">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link rounded-pill active fw-medium" data-bs-toggle="pill" data-bs-target="#pills-monthly">Monthly</button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link rounded-pill fw-medium" data-bs-toggle="pill" data-bs-target="#pills-yearly">Annually </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active p-0 border-0" id="pills-monthly">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center">
                                                <div class="card-body p-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(var(--primary-rgb), 0.25)" fill-rule="evenodd" d="M497.4 348.5c-7.7-10.3-23.8-7.6-35.6-2.4-30.7 13.4-56.7 35.9-87.1 49.8-45.3 20.8-97 21.2-146.9 21.3v-12.4c30.2-2.1 60.4-4.3 90.6-6.4 10.7-.8 21.9-1.7 31.2-7.3 9.2-5.6 15.6-17.4 11.5-27.3-5.5-13.2-23.6-14.1-37.9-13.5-35.6 1.7-71.4-.4-106.5-6.1-19-3.1-38-7.2-57.2-7.2-19.7 0-45.9 5.4-58 21.2v-4.5c0-19.7-16-35.7-35.7-35.7H47c-19.7 0-35.7 16-35.7 35.7v116.7c0 19.7 16 35.7 35.7 35.7h18.6c17.6 0 32.2-12.7 35.1-29.5 60.8-.1 121.5-.1 182.3-.2 20.1 0 40.5-.1 59.7-6.2 16-5.1 30.4-14.3 44.6-23.4 29.8-19.1 59.7-38.2 89.5-57.3 7.2-4.6 14.7-9.5 19.5-16.6 4.8-7.3 6.3-17.5 1.1-24.4z" clip-rule="evenodd"></path>
                                                        <path fill="rgba(var(--primary-rgb), 1)" fill-rule="evenodd" d="m444.1 140.2-16.8-2c-4.3-.5-7.9-3.6-9-7.7-2.8-9.7-6.6-18.9-11.4-27.5-2.1-3.8-1.8-8.5.9-11.9l10.5-13.4c3.4-4.3 3-10.4-.9-14.3L396 42.2c-3.9-3.9-10-4.2-14.3-.9l-13.4 10.5c-3.4 2.7-8.1 3-11.9.9-10.6-5.9-22.2-10.4-34.4-13.1l-2.9-24.1c-.5-5.4-5.1-9.5-10.5-9.5h-30.1c-5.4 0-10 4.1-10.7 9.5l-2 16.8c-.5 4.3-3.6 7.9-7.7 9-9.7 2.8-18.9 6.6-27.5 11.4-3.8 2.1-8.5 1.8-11.9-.9l-13.4-10.5c-4.3-3.4-10.4-3-14.3.9l-21.3 21.2c-3.9 3.9-4.2 10-.9 14.3l10.5 13.4c2.7 3.4 3 8.1.9 11.9-4.8 8.6-8.7 17.8-11.4 27.5-1.2 4.2-4.7 7.2-9 7.7l-16.8 2c-5.4.7-9.5 5.2-9.5 10.7V181c0 5.4 4.1 10 9.5 10.7l16.8 2c4.3.5 7.9 3.6 9 7.7 2.8 9.7 6.6 18.9 11.4 27.5 2.1 3.8 1.8 8.5-.9 11.9L169 254.2c-3.4 4.3-3 10.4.9 14.3l21.3 21.3c3.9 3.9 10 4.2 14.3.9l13.3-10.5c3.4-2.7 8.1-3 11.9-.9 8.6 4.8 17.8 8.7 27.5 11.4 4.2 1.2 7.2 4.7 7.7 9l2 16.8c.7 5.4 5.2 9.5 10.7 9.5h30.1c5.4 0 10-4.1 10.7-9.5l2-16.8c.5-4.3 3.6-7.9 7.7-9 9.7-2.8 18.9-6.6 27.5-11.4 3.8-2.1 8.5-1.8 11.9.9l13.3 10.5c4.3 3.4 10.4 3 14.3-.9l21.3-21.3c3.9-3.9 4.2-10 .9-14.3l-10.5-13.4c-2.7-3.4-3-8.1-.9-11.9 4.8-8.6 8.7-17.8 11.4-27.5 1.2-4.2 4.7-7.2 9-7.7l16.8-2c5.4-.7 9.5-5.2 9.5-10.7v-30.1c-.1-5.4-4.1-10-9.5-10.7zM221.7 94.1c16.2-16.3 38-27 62.2-29.3v33.9c-29.9 4.2-53.6 27.8-58 57.6h-33.5c2.3-24.2 13-46 29.3-62.2zm62.2 173.1c-24.2-2.3-45.9-13.1-62.2-29.3-16.2-16.3-27-38-29.3-62.2h33.3c4.1 30.3 27.9 54.3 58.2 58.6v32.9zM252.8 166c0-22.5 18.2-40.7 40.7-40.7 22.5 0 40.7 18.2 40.7 40.7s-18.2 40.7-40.7 40.7c-22.4 0-40.7-18.2-40.7-40.7zm112.7 71.9c-16.3 16.2-38 27-62.2 29.3v-32.9c30.2-4.3 54.1-28.3 58.2-58.6h33.3c-2.3 24.2-13.1 45.9-29.3 62.2zm-4.2-81.6c-4.5-29.8-28.1-53.3-58-57.6V64.8c24.2 2.3 45.9 13.1 62.2 29.3 16.3 16.3 27 38 29.3 62.2h-33.5z" clip-rule="evenodd"></path>
                                                    </svg>                                                        
                                                    <h6 class="mb-1">Standard</h6>
                                                    <p class="fs-12 text-muted">Access enhanced features for growing businesses.</p>
                                                    <div class="fs-1 fw-semibold lh-1">
                                                        <sup class="fs-16 text-muted align-middle fw-medium">$</sup>50<span class="text-muted fw-semibold fs-12 ms-1 align-end">.00</span><span class="text-muted fw-normal fs-12 ms-1 align-end">/ Per Month</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">24/7</strong> Customer Support
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Round-the-clock assistance for your business needs"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">50GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Ample storage for all your project files"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Unlimited Projects
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Manage as many projects as needed"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Customizable Dashboard</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tailor your dashboard to fit your workflow"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Free Monthly Updates
                                                                </span>
                                                                <div class="ms-auto">
                                                                    <div class="badge bg-pink rounded-pill">New</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 text-muted px-2 mb-4">Get access to essential tools for scaling your business without breaking the bank.</p>
                                                    <button type="button" class="btn btn-primary btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center bg-primary">
                                                <div class="card-body p-4 text-fixed-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(255, 255, 255, .7)" d="M318.5 180.4c2.7-2 1.3-6.3-2-6.3h-41.2c-1.5 0-2.8-1-3.3-2.4l-12.7-39.1c-1-3.2-5.6-3.2-6.6 0L240 171.7c-.5 1.4-1.8 2.4-3.3 2.4h-41.2c-3.4 0-4.8 4.3-2 6.3l33.3 24.2c1.2.9 1.7 2.4 1.3 3.9l-12.7 39.1c-1 3.2 2.6 5.9 5.3 3.9l33.3-24.2c1.2-.9 2.9-.9 4.1 0l33.3 24.2c2.7 2 6.4-.7 5.3-3.9L284 208.5c-.5-1.4 0-3 1.3-3.9l33.2-24.2z"></path>
                                                        <path fill="rgba(255, 255, 255, 1)" d="m438.5 180.1-31.9-18.5 22.5-29.3c4.4-5.7 1.7-12.7-5.4-14l-36.4-6.5 11.2-35.2c2.2-6.9-2.7-12.5-9.8-11.3l-36.4 6.3-1.6-36.9c-.3-7.2-6.8-10.8-13.1-7.2l-32 18.4-14.1-34.1c-2.8-6.7-10.1-7.8-14.8-2.3L253 37.7l-24.9-27.3c-4.9-5.3-12.2-3.9-14.7 2.9L200.7 48 168 30.9c-6.4-3.3-12.8.5-12.8 7.7l-.2 37-36.6-4.9c-7.2-1-11.8 4.9-9.4 11.6l12.5 34.7-36 8c-7 1.6-9.5 8.6-4.8 14.2l23.7 28.3-31.2 19.8c-6.1 3.9-5.9 11.3.3 15l31.9 18.5-22.5 29.3c-4.4 5.7-1.7 12.7 5.4 14l36.4 6.5-11.2 35.2c-2.2 6.9 2.7 12.5 9.8 11.3l36.4-6.3 1.6 36.9c.3 7.2 6.8 10.8 13.1 7.2l32-18.4 14.1 34.1c2.8 6.7 10.1 7.8 14.8 2.3l23.8-28.2L284 372c4.9 5.3 12.2 3.9 14.7-2.9l12.7-34.7 32.7 17.1c6.4 3.3 12.8-.5 12.8-7.7l.1-36.9 36.6 4.9c7.2 1 11.8-4.9 9.4-11.6l-12.5-34.7 36.1-7.9c7-1.6 9.5-8.6 4.8-14.2l-23.7-28.3 31.2-19.8c6-4.1 5.9-11.6-.4-15.2zM256 292.1c-55.8 0-101-45.2-101-101s45.2-101 101-101 101 45.2 101 101-45.2 101-101 101z"></path>
                                                        <path fill="rgba(255, 255, 255, .7)" d="M380.3 336.6v7.2c0 11.6-5.8 22.1-15.3 27.8-9.6 5.8-21.5 6-31.8.6l-9.1-4.7-3.5 9.6c-1.8 5-4.7 9.3-8.4 12.8l44.5 113.7c1.3 3.2 5.8 3.3 7.1 0l18.9-47.2 45.9 21.9c3.1 1.5 6.5-1.6 5.2-4.9l-53.5-136.8zm-181.5 42.9-3.9-9.5-8.9 5.1c-10.1 5.8-22 6-31.8.6s-15.9-15.6-16.4-27.2l-.4-10.2-6.9 1.2-52.4 133.9c-1.3 3.2 2.1 6.3 5.2 4.9l45.9-21.9 18.9 47.2c1.3 3.2 5.9 3.2 7.1 0L201.6 385c-1-1.8-2-3.6-2.8-5.5z"></path>
                                                    </svg>                                 
                                                    <h6 class="mb-1 text-fixed-white">Professional</h6>
                                                    <p class="fs-12 text-muted text-fixed-white op-7">Advanced features for professionals and growing teams.</p>
                                                    <div class="fs-1 fw-semibold lh-1  text-fixed-white">
                                                        <sup class="fs-16 text-muted align-middle fw-medium op-7  text-fixed-white">$</sup>75<span class="text-muted fw-semibold fs-12 ms-1 align-end op-7  text-fixed-white">.00</span><span class="text-muted fw-normal fs-12 ms-1 align-end  text-fixed-white op-7">/ Per Month</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">Priority</strong> Customer Support
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get priority access to customer support for quicker assistance"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">100GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Expanded storage for professional projects and media"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    Advanced Analytics
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get deeper insights with advanced analytics and reporting"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Custom Integrations</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Integrate with external apps and services with custom APIs"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    Monthly Feature Updates
                                                                </span>
                                                                <div class="ms-auto">
                                                                    <div class="badge bg-pink rounded-pill">Updated</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 px-2 mb-4">Unlock professional-grade tools and support, designed for teams and individuals.</p>
                                                    <button type="button" class="btn btn-light btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center pricing-card3">
                                                <div class="card-body p-4">
                                                    <span class="ribbon-4 ribbon-success top-right"> <span>20%off</span> </span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(var(--primary-rgb), 1)" d="M209.6 339.2h67.8v139.9h-67.8zM302.8 279.9h67.8v199.2h-67.8z"></path>
                                                        <path fill="rgba(var(--primary-rgb), 1)" d="m505 231.9-69.1-116.3c-2.7-4.6-9.4-4.6-12.1 0l-69.1 116.3c-2.8 4.7.6 10.6 6.1 10.6H396V479h67.8V242.6H499c5.4 0 8.8-6 6-10.7z"></path>
                                                        <path fill="rgba(var(--primary-rgb), .25)" d="M9.5 254.3c3.4 5.5 8.5 9.8 13.5 14.1 18.5 15.6 37.1 31.1 55.6 46.7 2.9 48 5.8 96.1 8.7 144.1.3 4.5.6 9.2 2.7 13.3 2.1 4 6.5 7.2 11 6.5 4.3-.7 7.3-4.8 9-8.9 2.2-5.2 3.1-10.9 4-16.5 5.3-35.5 8.5-71.3 10.3-107.1 1.8 35.8 5 71.6 10.3 107.1.8 5.6 1.7 11.3 4 16.5 1.7 4.1 4.7 8.1 9 8.9 4.5.8 8.9-2.4 11-6.5 2.1-4 2.4-8.7 2.7-13.3 4.7-78.3 9.4-156.6 14.1-234.8 6.8 10.1 13.8 20.4 23.8 27.2 8.3 5.6 18.2 8.5 28 10.7 14.1 3.1 28.4 5.1 42.8 5.7 5.1.2 11.1 1.1 15.1-2.2 12.7-10.2-1-19.5-9.5-20.9-19-3.1-37.1-10.3-54.3-18.9-2.3-1.1-4.6-2.3-6.4-4.1-2.3-2.3-3.7-5.3-5.2-8.2-5.8-11.8-13.2-22.8-22-32.6-6.5-7.3-13.9-14-22.7-18.3-2.6-1.2-5.2-2.2-7.9-3-2.4-.7-4.9-1.3-7.4-1.8-.4.9-6 23.8-8.4 33.7-.6 2.6-3 4.4-5.7 4.4h-3.1l-2.9-20.7 2.2-11.2c.3-1.4-.3-2.9-1.4-3.9l-3.9-3.4c-2-1.7-5.1-1.7-7.1 0l-3.9 3.4c-1.2 1-1.7 2.5-1.4 3.9l2.2 11.2-2.9 20.7h-3.1c-2.7 0-5-1.8-5.7-4.4-2.2-9.1-7.1-29.1-8.2-33-1.5.3-3.1.6-4.6 1.1-2.7.8-5.4 1.8-7.9 3-3.7 1.8-7.2 4.1-10.5 6.7v.2c-8.8 6.2-17 13.8-23.7 20-13.4 12.3-25.4 25.9-37.3 39.5-1.8 2.1-3.7 4.2-4.8 6.7-2.9 5.9-1.5 12.9 1.9 18.4zm41.8-17c6.8-6.5 14.1-12.3 21.9-17.6v4.7c1 17.1 2.1 34.1 3.1 51.2-1.1-1.6-2.6-2.9-4.2-4.1-7-5.5-13.9-11-20.9-16.4-2.3-1.8-4.7-3.8-5.4-6.5-1-4.3 2.3-8.3 5.5-11.3z"></path>
                                                        <ellipse cx="122.3" cy="107.6" fill="rgba(var(--primary-rgb), .25)" rx="34.8" ry="42.2"></ellipse>
                                                        <path fill="rgba(var(--primary-rgb), .25)" fill-rule="evenodd" d="M379.1 121.9c0-49.1-39.8-88.9-88.9-88.9s-88.9 39.8-88.9 88.9 39.8 88.9 88.9 88.9 88.9-39.8 88.9-88.9zm-38.2 44.7c-12.1 12-27.9 18.7-44.5 18.7-13.9 0-27.7-4.9-38.9-13.8-10.5-8.3-18.3-19.8-22-32.3h-8.1c-2.7 0-5.2-1.6-6.3-4.1l-.1-.3c-1-2.2-.8-4.6.5-6.6s3.5-3.2 5.8-3.2h5.8c-.1-1.1-.1-2.1-.1-3.1s0-2.1.1-3.1h-5.7c-2.7 0-5.2-1.6-6.3-4.1l-.1-.3c-1-2.2-.8-4.6.5-6.6s3.5-3.2 5.8-3.2h8.2c3.8-12.6 11.6-24.1 22.1-32.4 11.2-8.8 24.9-13.6 38.8-13.6 14.6 0 29 5.3 40.4 15 1.6 1.3 2.5 3.3 2.5 5.3v.1c0 2.7-1.5 5.1-4 6.3-2.5 1.1-5.3.8-7.4-1-8.9-7.5-20.1-11.6-31.5-11.6-20.3 0-38.8 13-46 31.8h63.2c2.7 0 5.2 1.6 6.3 4.1l.1.3c1 2.2.8 4.6-.5 6.6s-3.5 3.2-5.8 3.2h-66.5c-.1 1-.1 2.1-.1 3.1 0 .9 0 2 .1 3.1h75.5c2.7 0 5.2 1.6 6.3 4.1l.1.3c1 2.2.8 4.6-.5 6.6s-3.5 3.2-5.8 3.2h-72.5c7.1 18.9 25.6 31.8 46 31.8 13.7 0 25.3-4.8 34.7-14.2 1.6-1.6 3.9-2.4 6.2-2 2.2.4 4.2 1.9 5.1 4 1.2 2.7.6 5.9-1.4 7.9z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <h6 class="mb-1">Business Plan</h6>
                                                    <p class="fs-12 text-muted">Comprehensive tools and resources for growth.</p>
                                                    <div class="fs-1 fw-semibold lh-1">
                                                        <sup class="fs-16 text-muted align-middle fw-medium">$</sup>150<span class="text-muted fw-semibold fs-12 ms-1 align-end">.00</span><span class="text-muted fw-normal fs-12 ms-1 align-end">/ Per Month</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">Dedicated</strong> Account Manager
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get personalized assistance from a dedicated account manager"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">250GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="High-capacity cloud storage for all your business needs"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Advanced Reporting & Analytics
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Access detailed reports and analytics for deeper business insights"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Team Collaboration Tools</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Enhance productivity with built-in collaboration features for teams"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Enterprise-Level Security
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get advanced security features to protect your business"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 text-muted px-2 mb-4">A complete solution designed for businesses looking for advanced tools and scalability.</p>
                                                    <button type="button" class="btn btn-primary btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="pills-yearly">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center">
                                                <div class="card-body p-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(var(--primary-rgb), 0.25)" fill-rule="evenodd" d="M497.4 348.5c-7.7-10.3-23.8-7.6-35.6-2.4-30.7 13.4-56.7 35.9-87.1 49.8-45.3 20.8-97 21.2-146.9 21.3v-12.4c30.2-2.1 60.4-4.3 90.6-6.4 10.7-.8 21.9-1.7 31.2-7.3 9.2-5.6 15.6-17.4 11.5-27.3-5.5-13.2-23.6-14.1-37.9-13.5-35.6 1.7-71.4-.4-106.5-6.1-19-3.1-38-7.2-57.2-7.2-19.7 0-45.9 5.4-58 21.2v-4.5c0-19.7-16-35.7-35.7-35.7H47c-19.7 0-35.7 16-35.7 35.7v116.7c0 19.7 16 35.7 35.7 35.7h18.6c17.6 0 32.2-12.7 35.1-29.5 60.8-.1 121.5-.1 182.3-.2 20.1 0 40.5-.1 59.7-6.2 16-5.1 30.4-14.3 44.6-23.4 29.8-19.1 59.7-38.2 89.5-57.3 7.2-4.6 14.7-9.5 19.5-16.6 4.8-7.3 6.3-17.5 1.1-24.4z" clip-rule="evenodd"></path>
                                                        <path fill="rgba(var(--primary-rgb), 1)" fill-rule="evenodd" d="m444.1 140.2-16.8-2c-4.3-.5-7.9-3.6-9-7.7-2.8-9.7-6.6-18.9-11.4-27.5-2.1-3.8-1.8-8.5.9-11.9l10.5-13.4c3.4-4.3 3-10.4-.9-14.3L396 42.2c-3.9-3.9-10-4.2-14.3-.9l-13.4 10.5c-3.4 2.7-8.1 3-11.9.9-10.6-5.9-22.2-10.4-34.4-13.1l-2.9-24.1c-.5-5.4-5.1-9.5-10.5-9.5h-30.1c-5.4 0-10 4.1-10.7 9.5l-2 16.8c-.5 4.3-3.6 7.9-7.7 9-9.7 2.8-18.9 6.6-27.5 11.4-3.8 2.1-8.5 1.8-11.9-.9l-13.4-10.5c-4.3-3.4-10.4-3-14.3.9l-21.3 21.2c-3.9 3.9-4.2 10-.9 14.3l10.5 13.4c2.7 3.4 3 8.1.9 11.9-4.8 8.6-8.7 17.8-11.4 27.5-1.2 4.2-4.7 7.2-9 7.7l-16.8 2c-5.4.7-9.5 5.2-9.5 10.7V181c0 5.4 4.1 10 9.5 10.7l16.8 2c4.3.5 7.9 3.6 9 7.7 2.8 9.7 6.6 18.9 11.4 27.5 2.1 3.8 1.8 8.5-.9 11.9L169 254.2c-3.4 4.3-3 10.4.9 14.3l21.3 21.3c3.9 3.9 10 4.2 14.3.9l13.3-10.5c3.4-2.7 8.1-3 11.9-.9 8.6 4.8 17.8 8.7 27.5 11.4 4.2 1.2 7.2 4.7 7.7 9l2 16.8c.7 5.4 5.2 9.5 10.7 9.5h30.1c5.4 0 10-4.1 10.7-9.5l2-16.8c.5-4.3 3.6-7.9 7.7-9 9.7-2.8 18.9-6.6 27.5-11.4 3.8-2.1 8.5-1.8 11.9.9l13.3 10.5c4.3 3.4 10.4 3 14.3-.9l21.3-21.3c3.9-3.9 4.2-10 .9-14.3l-10.5-13.4c-2.7-3.4-3-8.1-.9-11.9 4.8-8.6 8.7-17.8 11.4-27.5 1.2-4.2 4.7-7.2 9-7.7l16.8-2c5.4-.7 9.5-5.2 9.5-10.7v-30.1c-.1-5.4-4.1-10-9.5-10.7zM221.7 94.1c16.2-16.3 38-27 62.2-29.3v33.9c-29.9 4.2-53.6 27.8-58 57.6h-33.5c2.3-24.2 13-46 29.3-62.2zm62.2 173.1c-24.2-2.3-45.9-13.1-62.2-29.3-16.2-16.3-27-38-29.3-62.2h33.3c4.1 30.3 27.9 54.3 58.2 58.6v32.9zM252.8 166c0-22.5 18.2-40.7 40.7-40.7 22.5 0 40.7 18.2 40.7 40.7s-18.2 40.7-40.7 40.7c-22.4 0-40.7-18.2-40.7-40.7zm112.7 71.9c-16.3 16.2-38 27-62.2 29.3v-32.9c30.2-4.3 54.1-28.3 58.2-58.6h33.3c-2.3 24.2-13.1 45.9-29.3 62.2zm-4.2-81.6c-4.5-29.8-28.1-53.3-58-57.6V64.8c24.2 2.3 45.9 13.1 62.2 29.3 16.3 16.3 27 38 29.3 62.2h-33.5z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <h6 class="mb-1">Standard Plan</h6>
                                                    <p class="fs-12 text-muted">Essential features for small teams and individuals.</p>
                                                    <div class="fs-1 fw-semibold lh-1">
                                                        <sup class="fs-16 text-muted align-middle fw-medium">$</sup>265<span class="text-muted fw-semibold fs-12 ms-1 align-end">.66</span><span class="text-muted fw-normal fs-12 ms-1 align-end">/ Per Year</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">24/7</strong> Customer Support
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Round-the-clock assistance"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">40GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Ample storage for your projects"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Unlimited Projects
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Manage unlimited projects"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Customizable Dashboard</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Personalize your dashboard"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Free Monthly Updates
                                                                </span>
                                                                <div class="ms-auto">
                                                                    <div class="badge bg-pink rounded-pill">New</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 text-muted px-2 mb-4">Access essential tools to support your business, with great value.</p>
                                                    <button type="button" class="btn btn-primary btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center bg-primary">
                                                <div class="card-body p-4 text-fixed-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(255, 255, 255, .7)" d="M318.5 180.4c2.7-2 1.3-6.3-2-6.3h-41.2c-1.5 0-2.8-1-3.3-2.4l-12.7-39.1c-1-3.2-5.6-3.2-6.6 0L240 171.7c-.5 1.4-1.8 2.4-3.3 2.4h-41.2c-3.4 0-4.8 4.3-2 6.3l33.3 24.2c1.2.9 1.7 2.4 1.3 3.9l-12.7 39.1c-1 3.2 2.6 5.9 5.3 3.9l33.3-24.2c1.2-.9 2.9-.9 4.1 0l33.3 24.2c2.7 2 6.4-.7 5.3-3.9L284 208.5c-.5-1.4 0-3 1.3-3.9l33.2-24.2z"></path>
                                                        <path fill="rgba(255, 255, 255, 1)" d="m438.5 180.1-31.9-18.5 22.5-29.3c4.4-5.7 1.7-12.7-5.4-14l-36.4-6.5 11.2-35.2c2.2-6.9-2.7-12.5-9.8-11.3l-36.4 6.3-1.6-36.9c-.3-7.2-6.8-10.8-13.1-7.2l-32 18.4-14.1-34.1c-2.8-6.7-10.1-7.8-14.8-2.3L253 37.7l-24.9-27.3c-4.9-5.3-12.2-3.9-14.7 2.9L200.7 48 168 30.9c-6.4-3.3-12.8.5-12.8 7.7l-.2 37-36.6-4.9c-7.2-1-11.8 4.9-9.4 11.6l12.5 34.7-36 8c-7 1.6-9.5 8.6-4.8 14.2l23.7 28.3-31.2 19.8c-6.1 3.9-5.9 11.3.3 15l31.9 18.5-22.5 29.3c-4.4 5.7-1.7 12.7 5.4 14l36.4 6.5-11.2 35.2c-2.2 6.9 2.7 12.5 9.8 11.3l36.4-6.3 1.6 36.9c.3 7.2 6.8 10.8 13.1 7.2l32-18.4 14.1 34.1c2.8 6.7 10.1 7.8 14.8 2.3l23.8-28.2L284 372c4.9 5.3 12.2 3.9 14.7-2.9l12.7-34.7 32.7 17.1c6.4 3.3 12.8-.5 12.8-7.7l.1-36.9 36.6 4.9c7.2 1 11.8-4.9 9.4-11.6l-12.5-34.7 36.1-7.9c7-1.6 9.5-8.6 4.8-14.2l-23.7-28.3 31.2-19.8c6-4.1 5.9-11.6-.4-15.2zM256 292.1c-55.8 0-101-45.2-101-101s45.2-101 101-101 101 45.2 101 101-45.2 101-101 101z"></path>
                                                        <path fill="rgba(255, 255, 255, .7)" d="M380.3 336.6v7.2c0 11.6-5.8 22.1-15.3 27.8-9.6 5.8-21.5 6-31.8.6l-9.1-4.7-3.5 9.6c-1.8 5-4.7 9.3-8.4 12.8l44.5 113.7c1.3 3.2 5.8 3.3 7.1 0l18.9-47.2 45.9 21.9c3.1 1.5 6.5-1.6 5.2-4.9l-53.5-136.8zm-181.5 42.9-3.9-9.5-8.9 5.1c-10.1 5.8-22 6-31.8.6s-15.9-15.6-16.4-27.2l-.4-10.2-6.9 1.2-52.4 133.9c-1.3 3.2 2.1 6.3 5.2 4.9l45.9-21.9 18.9 47.2c1.3 3.2 5.9 3.2 7.1 0L201.6 385c-1-1.8-2-3.6-2.8-5.5z"></path>
                                                    </svg>                                 
                                                    <h6 class="mb-1 text-fixed-white">Professional</h6>
                                                    <p class="fs-12 text-muted text-fixed-white op-7">Advanced features for professionals and growing teams.</p>
                                                    <div class="fs-1 fw-semibold lh-1  text-fixed-white">
                                                        <sup class="fs-16 text-muted align-middle fw-medium op-7  text-fixed-white">$</sup>275<span class="text-muted fw-semibold fs-12 ms-1 align-end op-7  text-fixed-white">.00</span><span class="text-muted fw-normal fs-12 ms-1 align-end  text-fixed-white op-7">/ Per Year</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">Priority</strong> Customer Support
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get priority access to customer support for quicker assistance"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">100GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Expanded storage for professional projects and media"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    Advanced Analytics
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Get deeper insights with advanced analytics and reporting"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Custom Integrations</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Integrate with external apps and services with custom APIs"><i class="fe fe-info text-fixed-white fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-white-transparent text-fixed-white border-white border-opacity-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-fixed-white op-7"></i>
                                                                </span>
                                                                <span>
                                                                    Monthly Feature Updates
                                                                </span>
                                                                <div class="ms-auto">
                                                                    <div class="badge bg-pink rounded-pill">Updated</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 px-2 mb-4">Unlock professional-grade tools and support, designed for teams and individuals.</p>
                                                    <button type="button" class="btn btn-light btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card text-center pricing-card3">
                                                <div class="card-body p-4">
                                                    <span class="ribbon-4 ribbon-success top-right"> <span>20%off</span> </span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="38" height="38" class="mb-3">
                                                        <path fill="rgba(var(--primary-rgb), 1)" d="M209.6 339.2h67.8v139.9h-67.8zM302.8 279.9h67.8v199.2h-67.8z"></path>
                                                        <path fill="rgba(var(--primary-rgb), 1)" d="m505 231.9-69.1-116.3c-2.7-4.6-9.4-4.6-12.1 0l-69.1 116.3c-2.8 4.7.6 10.6 6.1 10.6H396V479h67.8V242.6H499c5.4 0 8.8-6 6-10.7z"></path>
                                                        <path fill="rgba(var(--primary-rgb), .25)" d="M9.5 254.3c3.4 5.5 8.5 9.8 13.5 14.1 18.5 15.6 37.1 31.1 55.6 46.7 2.9 48 5.8 96.1 8.7 144.1.3 4.5.6 9.2 2.7 13.3 2.1 4 6.5 7.2 11 6.5 4.3-.7 7.3-4.8 9-8.9 2.2-5.2 3.1-10.9 4-16.5 5.3-35.5 8.5-71.3 10.3-107.1 1.8 35.8 5 71.6 10.3 107.1.8 5.6 1.7 11.3 4 16.5 1.7 4.1 4.7 8.1 9 8.9 4.5.8 8.9-2.4 11-6.5 2.1-4 2.4-8.7 2.7-13.3 4.7-78.3 9.4-156.6 14.1-234.8 6.8 10.1 13.8 20.4 23.8 27.2 8.3 5.6 18.2 8.5 28 10.7 14.1 3.1 28.4 5.1 42.8 5.7 5.1.2 11.1 1.1 15.1-2.2 12.7-10.2-1-19.5-9.5-20.9-19-3.1-37.1-10.3-54.3-18.9-2.3-1.1-4.6-2.3-6.4-4.1-2.3-2.3-3.7-5.3-5.2-8.2-5.8-11.8-13.2-22.8-22-32.6-6.5-7.3-13.9-14-22.7-18.3-2.6-1.2-5.2-2.2-7.9-3-2.4-.7-4.9-1.3-7.4-1.8-.4.9-6 23.8-8.4 33.7-.6 2.6-3 4.4-5.7 4.4h-3.1l-2.9-20.7 2.2-11.2c.3-1.4-.3-2.9-1.4-3.9l-3.9-3.4c-2-1.7-5.1-1.7-7.1 0l-3.9 3.4c-1.2 1-1.7 2.5-1.4 3.9l2.2 11.2-2.9 20.7h-3.1c-2.7 0-5-1.8-5.7-4.4-2.2-9.1-7.1-29.1-8.2-33-1.5.3-3.1.6-4.6 1.1-2.7.8-5.4 1.8-7.9 3-3.7 1.8-7.2 4.1-10.5 6.7v.2c-8.8 6.2-17 13.8-23.7 20-13.4 12.3-25.4 25.9-37.3 39.5-1.8 2.1-3.7 4.2-4.8 6.7-2.9 5.9-1.5 12.9 1.9 18.4zm41.8-17c6.8-6.5 14.1-12.3 21.9-17.6v4.7c1 17.1 2.1 34.1 3.1 51.2-1.1-1.6-2.6-2.9-4.2-4.1-7-5.5-13.9-11-20.9-16.4-2.3-1.8-4.7-3.8-5.4-6.5-1-4.3 2.3-8.3 5.5-11.3z"></path>
                                                        <ellipse cx="122.3" cy="107.6" fill="rgba(var(--primary-rgb), .25)" rx="34.8" ry="42.2"></ellipse>
                                                        <path fill="rgba(var(--primary-rgb), .25)" fill-rule="evenodd" d="M379.1 121.9c0-49.1-39.8-88.9-88.9-88.9s-88.9 39.8-88.9 88.9 39.8 88.9 88.9 88.9 88.9-39.8 88.9-88.9zm-38.2 44.7c-12.1 12-27.9 18.7-44.5 18.7-13.9 0-27.7-4.9-38.9-13.8-10.5-8.3-18.3-19.8-22-32.3h-8.1c-2.7 0-5.2-1.6-6.3-4.1l-.1-.3c-1-2.2-.8-4.6.5-6.6s3.5-3.2 5.8-3.2h5.8c-.1-1.1-.1-2.1-.1-3.1s0-2.1.1-3.1h-5.7c-2.7 0-5.2-1.6-6.3-4.1l-.1-.3c-1-2.2-.8-4.6.5-6.6s3.5-3.2 5.8-3.2h8.2c3.8-12.6 11.6-24.1 22.1-32.4 11.2-8.8 24.9-13.6 38.8-13.6 14.6 0 29 5.3 40.4 15 1.6 1.3 2.5 3.3 2.5 5.3v.1c0 2.7-1.5 5.1-4 6.3-2.5 1.1-5.3.8-7.4-1-8.9-7.5-20.1-11.6-31.5-11.6-20.3 0-38.8 13-46 31.8h63.2c2.7 0 5.2 1.6 6.3 4.1l.1.3c1 2.2.8 4.6-.5 6.6s-3.5 3.2-5.8 3.2h-66.5c-.1 1-.1 2.1-.1 3.1 0 .9 0 2 .1 3.1h75.5c2.7 0 5.2 1.6 6.3 4.1l.1.3c1 2.2.8 4.6-.5 6.6s-3.5 3.2-5.8 3.2h-72.5c7.1 18.9 25.6 31.8 46 31.8 13.7 0 25.3-4.8 34.7-14.2 1.6-1.6 3.9-2.4 6.2-2 2.2.4 4.2 1.9 5.1 4 1.2 2.7.6 5.9-1.4 7.9z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <h6 class="mb-1">Business Plan</h6>
                                                    <p class="fs-12 text-muted">Comprehensive tools and resources for scaling.</p>
                                                    <div class="fs-1 fw-semibold lh-1">
                                                        <sup class="fs-16 text-muted align-middle fw-medium">$</sup>250<span class="text-muted fw-semibold fs-12 ms-1 align-end">.89</span><span class="text-muted fw-normal fs-12 ms-1 align-end">/ Per Year</span>
                                                    </div>
                                                    <ul class="list-group mt-3 mb-3 py-1 px-2">
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">Dedicated</strong> Account Manager
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Personalized support from a dedicated manager"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 d-inline-block">250GB</strong> Cloud Storage
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Large storage for your business needs"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Advanced Reporting & Analytics
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Detailed analytics and reporting"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span class="me-1 d-inline-block">Team Collaboration Tools</span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tools for team collaboration"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item bg-light">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 fs-14 lh-1">
                                                                    <i class="ri-check-double-line fw-medium fs-18 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Enterprise-Level Security
                                                                </span>
                                                                <span class="align-middle ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Advanced security features for your business"><i class="fe fe-info text-info fw-medium"></i></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p class="fs-12 text-muted px-2 mb-4">A complete solution for businesses looking to scale and grow with advanced tools.</p>
                                                    <button type="button" class="btn btn-primary btn-wave waves-effect waves-light rounded-pill">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section" id="faqs">
                <div class="container text-center">
                    <p class="fs-14 fw-medium text-success mb-1">
                        <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>FAQs</span>
                    </p>
                    <h4 class="fw-semibold mt-3 mb-2">Common Questions and Answers</h4>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-muted fs-14 mb-5 fw-normal">Weve compiled a list of the most common questions to assist you in finding the information you need.</p>
                        </div>
                    </div>                    
                    <div class="row text-start">
                        <div class="col-xl-12">
                            <div class="row gy-2">
                                <div class="col-xl-6">
                                    <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-separate" id="accordionFAQ5">
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2TwentyOne">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon2TwentyOne" aria-expanded="true"
                                                    aria-controls="collapsecustomicon2TwentyOne">
                                                    1. How do I update my account settings?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2TwentyOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon2TwentyOne"
                                                data-bs-parent="#accordionFAQ5">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    You can update your account settings by going to the settings page, where you can change your personal information, password, and notification preferences.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2TwentyTwo">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyTwo"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2TwentyTwo">
                                                    2. How can I reset my password?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2TwentyTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2TwentyTwo"
                                                data-bs-parent="#accordionFAQ5">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    To reset your password, go to the login page and click on the "Forgot Password" link. You will receive an email with instructions to reset your password.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2TwentyThree">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyThree"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2TwentyThree">
                                                    3. How do I change my email address?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2TwentyThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2TwentyThree"
                                                data-bs-parent="#accordionFAQ5">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    To change your email address, navigate to the account settings page, where you can enter a new email address and verify it through a confirmation email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2TwentyFour">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFour"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2TwentyFour">
                                                    4. How can I enable two-factor authentication?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2TwentyFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2TwentyFour"
                                                data-bs-parent="#accordionFAQ5">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    To enable two-factor authentication, go to your account settings and click on the "Security" tab. You can enable two-factor authentication using an authenticator app or SMS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2TwentyFive">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFive"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2TwentyFive">
                                                    5. How do I delete my account?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2TwentyFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2TwentyFive"
                                                data-bs-parent="#accordionFAQ5">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    If you want to delete your account, please visit the account settings page and follow the instructions under the "Delete Account" section. Note that this action is irreversible.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-separate" id="accordionFAQ1">
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2One">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2One"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2One">
                                                    1. How can I update my privacy settings?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2One" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2One"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    To update your privacy settings, navigate to the "Privacy & Security" section in your account settings. Here, you can manage data sharing options, control who sees your profile information, and adjust permissions for third-party apps.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2Two">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                    2. How do I enable two-factor authentication?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Two"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    To enable two-factor authentication, go to the "Security Settings" and choose the two-factor authentication option. You can set it up using an authenticator app or receive codes via SMS for enhanced account security.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2Three">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                    3. How do I manage my data sharing preferences?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Three" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon2Three"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    You can manage your data sharing preferences by visiting the "Privacy Settings" page. Here, you can control how your data is shared with third-party services.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2Four">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                    4. How do I secure my account if I suspect unauthorized access?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Four"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    If you suspect unauthorized access to your account, go to the "Security" section and review your recent activity. You can log out of all devices, reset your password, and enable two-factor authentication for added protection.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item shadow-sm">
                                            <h2 class="accordion-header" id="headingcustomicon2Five">
                                                <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                                    5. How can I delete my personal data from the platform?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Five"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                    You can request the deletion of your personal data by navigating to the "Privacy Settings" page and selecting the option to delete your data. Note that this action is irreversible, and your data will be permanently removed from the platform.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class="section landing-Features py-4" id="testimonials">
                <div class="container reviews-container">
                    <div class="row justify-content-center pb-3">
                        <div class="col-xl-10">
                            <div class="text-center mb-0 mt-4 heading-section">
                                <p class="fs-14 fw-medium text-success mb-1">
                                    <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Testimonials</span>
                                </p>
                                <h4 class="mt-3 text-fixed-white mb-1">Hear From Our Satisfied Customers</h4>
                                <div class="fs-14 text-fixed-white mb-5 op-8">Explore genuine reviews and testimonials to see how our products and services have made a positive impact.</div>                                
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="swiper pagination-dynamic testimonialSwiperService">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-info rounded-circle bg-opacity-75">
                                                        <img src="../assets/images/faces/19.jpg" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-3 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "The team went above and beyond to ensure that all my questions were answered. Their dedication to customer satisfaction is truly commendable. I'm extremely happy with my purchase!"
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-18">Flora Mary</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Customer Support Specialist</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-half-fill text-warning"></i> 
                                                                <span class="ms-2">4.5</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-warning rounded-circle bg-opacity-75">
                                                        <img src="../assets/images/faces/18.jpg" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-3 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "This product exceeded my expectations! The quality is excellent, and the customer service team was helpful and responsive. I would highly recommend this to anyone."
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-18">James Carter</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Operations Manager</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i> 
                                                                <span class="ms-2">5.0</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-success rounded-circle bg-opacity-75">
                                                        <img src="../assets/images/faces/17.jpg" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-3 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "The team went above and beyond to ensure that all my questions were answered. Their dedication to customer satisfaction is truly commendable. I'm extremely happy with my purchase!"
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-18">Flora Mary</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Customer Support Specialist</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-fill text-warning fs-14"></i>
                                                                <i class="ri-star-half-fill text-warning"></i> 
                                                                <span class="ms-2">4.5</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section" id="contact">
                <div class="container text-center">
                    <p class="fs-14 fw-medium text-success mb-1">
                        <span class="landing-section-heading text-success"><i class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Contact Us</span>
                    </p>
                    <h4 class="fw-semibold mt-3 mb-2">Have Questions? We're Here to Help!</h4>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <p class="text-muted fs-14 mb-5 fw-normal">Discover our extensive support resources! Get quick answers to your questions and find the solutions you need.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-9">
                            <div class="card custom-card contactus-form contactus-form-left overflow-hidden p-4">
                                <div class="text-start">
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="row gy-3 text-start">
                                                <div class="col-xl-12">
                                                    <label class="form-label" for="contact-address-firstname">First Name :</label> 
                                                    <input class="form-control rounded-pill bg-light" id="contact-address-firstname" placeholder="Enter Name" type="text">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label" for="contact-address-email">Email Id :</label> 
                                                    <input class="form-control rounded-pill bg-light" id="contact-address-email" placeholder="Enter Email Id" type="email">
                                                </div>
                                                <div class="col-xl-7">
                                                    <label class="form-label" for="contact-mail-message">Message :</label> 
                                                    <textarea class="form-control rounded-pill bg-light" id="contact-mail-message" rows="1" placeholder="Write Here.."></textarea>
                                                </div>
                                                <div class="col-xl-5 align-self-end">
                                                    <button class="btn btn-primary btn-wave btn-w-lg waves-effect waves-light w-100 rounded-pill">Submit Message</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                                            <img src="../assets/images/media/media-78.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-primary mt-5 rounded-3 bg-opacity-25">
                                    <div class="row justify-content-center gy-3 gy-xl-0">
                                        <div class="col-xl-4">
                                            <div class="card custom-card mb-0">
                                                <div class="card-body">
                                                    <span class="avatar avatar-lg bg-primary avatar-rounded">
                                                        <i class="ri-map-pin-fill fs-18 lh-1 align-middle"></i>
                                                    </span>
                                                    <p class="fw-semibold fs-14 mb-1 mt-3"><span class="text-muted fw-medium fs-12">Door.No:</span> 1352/A-12,</p>
                                                    <p class="fw-semibold fs-14 mb-0">Street, Hyderabad.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card mb-0">
                                                <div class="card-body">
                                                    <span class="avatar avatar-lg bg-info avatar-rounded">
                                                        <i class="ri-phone-fill fs-18 lh-1 align-middle"></i>
                                                    </span>
                                                    <p class="fw-semibold fs-14 mb-1 mt-3"><span class="text-muted fw-medium fs-12">Landline: </span>+122 1234 32422</p>
                                                    <p class="fw-semibold fs-14 mb-0"><span class="text-muted fw-medium fs-12">Mobile: </span>+014 1234 32422</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card mb-0">
                                                <div class="card-body">
                                                    <span class="avatar avatar-lg bg-pink avatar-rounded">
                                                        <i class="ri-mail-fill fs-18 lh-1 align-middle"></i>
                                                    </span>
                                                    <p class="fw-semibold fs-14 mb-1 mt-3"><span class="text-muted fw-medium fs-12">Mail: </span>arhakhan@mail.com</p>
                                                    <p class="fw-semibold fs-14 mb-0"><span class="text-muted fw-medium fs-12">Mail: </span>official874@mail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section landing-footer text-fixed-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="px-4">
                                <p class="mb-2 fw-medium fs-14 text-secondary">Subscribe :</p>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li>
                                        <div class="input-group p-1 border bg-white rounded-pill gap-2 mb-4">
                                            <input type="text" class="form-control rounded-pill border-0 bg-transparent" placeholder="Subscribe to our news letter..">
                                            <div class="btn btn-success rounded-pill">Subscribe</div>
                                        </div>
                                        <p class="mb-2 fw-medium fs-14 text-secondary">Follow Us On :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button
                                                    class="btn btn-sm btn-icon footer-btn rounded-pill btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line fw-bold lh-1 align-middle"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon footer-btn rounded-pill btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line fw-bold lh-1 align-middle"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon footer-btn rounded-pill btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line fw-bold lh-1 align-middle"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon footer-btn rounded-pill btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line fw-bold lh-1 align-middle"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon footer-btn rounded-pill btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line fw-bold lh-1 align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium fs-14 text-secondary text-decoration-underline link-offset-3">PAGES</h6>
                                <ul class="list-unstyled op-8 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Projects</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium fs-14 text-secondary text-decoration-underline link-offset-3">INFO</h6>
                                <ul class="list-unstyled op-8 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                            <div class="px-4">
                                <p class="fw-medium mb-3">
                                    <a href="index.html"><img src="../assets/images/brand-logos/desktop-white.png" alt="" class="landing-footer-logo"></a>
                                </p>
                                <p class="mb-2 op-6 fw-normal">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam,<br>
                                    fuga est mollitia  eius, quo illum illo inventore optio aut quas omnis rem. Dolores
                                    accusan.
                                </p>
                                <div class="d-flex gap-4 op-9 mt-4">
                                    <a href="javascript:void(0);" class="text-secondary fw-medium fs-14 text-decoration-underline link-offset-1">Contact Us</a>
                                    <span class="op-3">|</span>
                                    <a href="javascript:void(0);" class="text-success fw-medium fs-14 text-decoration-underline link-offset-1">Terms & Conditions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <div class="text-center landing-main-footer py-3 text-muted">
                <span class="text-muted fs-15">
                    Copyright © 
                    <span id="year"></span> 
                    <a href="javascript:void(0);" class="text-primary fw-medium"><u>Usman Farooq</u></a>
                    <i class="fa fa-heart text-danger"></i> 
                    All rights reserved.
                </span>
            </div>

        </div>
        <!-- End::app-content -->

    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="{{asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Color Picker JS -->
    <script src="{{asset('assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

    <!-- Choices JS -->
    <script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <!-- Swiper JS -->
    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{asset('assets/js/defaultmenu.js')}}"></script>

    <!-- Internal Landing JS -->
    <script src="{{asset('assets/js/landing.js')}}"></script>

    <!-- Node Waves JS-->
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- Landing Sticky JS -->
    <script src="{{asset('assets/js/sticky.js')}}"></script>

</body>

</html>