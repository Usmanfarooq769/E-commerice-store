{{-- ============================================================
     HEADER — Laravel Blade | Bootstrap 5
     ──────────────────────────────────────────────────────────
     ALL DEVICES (always in navbar):
       Logo | Home | Theme | Cart | Hamburger(mobile only)

     DESKTOP ONLY (always in navbar):
       + Center Search | Settings | Sign Up

     HAMBURGER PANEL (mobile/tablet, on click):
       Search bar | Settings | Sign Up
     ============================================================ --}}

@php
    $categories = App\Models\Category::where('status', 'active')->get(['id', 'name']);
    $hasFilter  = request()->has('search') && request('search') != '';
@endphp

{{-- ── NAVBAR ─────────────────────────────────────────────── --}}
<nav id="mainNav" class="navbar border-bottom py-0">
    <div class="container-fluid flex-nowrap align-items-center px-2 px-sm-3">

        {{-- LOGO --}}
        <a class="navbar-brand flex-shrink-0 me-2" href="{{ route('products') }}" aria-label="Home">
            <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}"
                 alt="Logo" style="max-height:38px; width:auto;">
        </a>

        {{-- CENTER SEARCH — desktop only --}}
        <div class="d-none d-lg-flex flex-grow-1 justify-content-center px-3">
            <form action="{{ route('products') }}" method="GET"
                  class="d-flex gap-2 w-100" style="max-width:460px;">
                <input type="search" class="form-control form-control-sm"
                       name="search" value="{{ request('search') }}"
                       placeholder="Search products…">
                @if(!$hasFilter)
                    <button type="submit" class="btn btn-primary btn-sm flex-shrink-0">
                        <i class="bi bi-search me-1"></i>Search
                    </button>
                @else
                    <a href="{{ route('products') }}" class="btn btn-danger btn-sm flex-shrink-0">
                        <i class="bi bi-x-lg me-1"></i>Clear
                    </a>
                @endif
            </form>
        </div>

        {{-- RIGHT ICONS — all devices --}}
        <div class="d-flex align-items-center gap-1 ms-auto flex-shrink-0">

            {{-- Home --}}
            <a class="hdr-btn" href="{{ route('products') }}" aria-label="Home"
               title="Home">
                <i class="fa fa-home hdr-icon" style="font-size:19px;"></i>
            </a>

            {{-- Dark / Light theme toggle --}}
            <div class="header-theme-mode">
                <a href="javascript:void(0);" class="hdr-btn layout-setting" aria-label="Toggle theme" title="Toggle theme">
                    <span class="light-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 0 24 24" width="21" class="hdr-svg">
                            <rect fill="none" height="24" width="24"/>
                            <path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4
                                     c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19
                                     c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z
                                     M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9
                                     c0-0.46-0.04-0.92-0.1-1.36c-0.98,1.37-2.58,2.26-4.4,2.26
                                     c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4
                                     C12.92,3.04,12.46,3,12,3L12,3z"/>
                        </svg>
                    </span>
                    <span class="dark-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 0 24 24" width="21" class="hdr-svg">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1z
                                     M11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408z
                                     m-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3z
                                     m-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z
                                     m0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z
                                     m-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z"/>
                        </svg>
                    </span>
                </a>
            </div>

            {{-- CART — ALL devices ── --}}
            <div class="cart-dropdown dropdown">
                <a href="javascript:void(0);"
                   class="hdr-btn dropdown-toggle position-relative"
                   data-bs-auto-close="outside"
                   data-bs-toggle="dropdown"
                   aria-label="Cart"
                   title="Cart">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 0 24 24" width="21" class="hdr-svg">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49
                                 c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2
                                 l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45z
                                 M6.16 6h12.15l-2.76 5H8.53L6.16 6z
                                 M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2z
                                 m10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    <span class="badge bg-primary rounded-pill hdr-cart-badge"
                          id="cart-icon-badge">0</span>
                </a>

                {{-- Cart Dropdown --}}
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end shadow"
                     style="min-width:290px; max-width:min(340px, calc(100vw - 16px));"
                     data-popper-placement="none">
                    <div class="p-3 bg-light bg-opacity-75">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fw-semibold">Cart Items</p>
                            <span class="badge bg-pink" id="cart-data">0 Items</span>
                        </div>
                    </div>
                    <hr class="dropdown-divider my-0">
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll"></ul>
                    <div class="p-3 empty-header-item border-top d-none">
                        <div class="d-grid">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-sm text-nowrap">
                                View Cart &amp; Checkout
                            </a>
                        </div>
                    </div>
                    <div class="p-4 empty-item text-center">
                        <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                            <i class="ri-shopping-cart-2-line fs-2"></i>
                        </span>
                        <h6 class="fw-semibold mb-1 mt-3">Your Cart is Empty</h6>
                        <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy</span>
                        <a href="{{ route('products') }}" class="btn btn-primary btn-wave btn-sm m-1">
                            Continue Shopping <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- SETTINGS — desktop only --}}
            <a href="javascript:void(0);"
               class="hdr-btn switcher-icon d-none d-lg-inline-flex"
               data-bs-toggle="offcanvas"
               data-bs-target="#switcher-canvas"
               aria-label="Settings"
               title="Settings">
                <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 0 24 24" width="21" class="hdr-svg">
                    <path d="M0 0h24v24H0V0z" fill="none"/>
                    <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65
                             c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.37-.3-.59-.22l-2.49 1
                             c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4
                             c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1
                             c-.23-.09-.47 0-.59.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65
                             c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65
                             c-.19.15-.24.42-.12.64l2 3.46c.12.22.37.3.59.22l2.49-1
                             c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4
                             c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1
                             c.23.09.47 0 .59-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65z
                             M12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5
                             3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
                </svg>
            </a>

            {{-- SIGN UP — desktop only --}}
            <a href="{{ route('login') }}"
               class="btn btn-primary btn-sm hdr-signup d-none d-lg-inline-flex align-items-center gap-1">
                <i class="bi bi-person-plus"></i> Sign Up
            </a>

            {{-- HAMBURGER — mobile/tablet only --}}
            <button class="hdr-btn d-lg-none ms-1"
                    type="button"
                    id="mobileToggle"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                    aria-controls="mobilePanel">
                <svg id="icoHam" xmlns="http://www.w3.org/2000/svg"
                     height="24" viewBox="0 0 24 24" width="24" class="hdr-svg">
                    <path d="M0 0h24v24H0V0z" fill="none"/>
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <svg id="icoClose" xmlns="http://www.w3.org/2000/svg"
                     height="24" viewBox="0 0 24 24" width="24"
                     class="hdr-svg" style="display:none;">
                    <path d="M0 0h24v24H0V0z" fill="none"/>
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12
                             5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </button>

        </div>{{-- /right icons --}}
    </div>
</nav>


{{-- ── MOBILE PANEL (hamburger dropdown) ──────────────────── --}}
<div id="mobilePanel"
     class="d-lg-none border-bottom shadow-sm"
     style="display:none;
            position:fixed; top:65px; left:0; right:0; z-index:1029;
            background:var(--header-bg, #fff);
            padding:14px 16px 16px;">

    {{-- Search --}}
    <form action="{{ route('products') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="search"
                   class="form-control"
                   name="search"
                   id="mobilePanelSearch"
                   value="{{ request('search') }}"
                   placeholder="Search products…">
            @if(!$hasFilter)
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            @else
                <a href="{{ route('products') }}" class="btn btn-danger">
                    <i class="bi bi-x-lg"></i> Clear
                </a>
            @endif
        </div>
    </form>

    {{-- Settings + Sign Up --}}
    <div class="d-flex align-items-center gap-2 pt-1">

        <a href="javascript:void(0);"
           class="hdr-btn switcher-icon d-inline-flex align-items-center gap-1 text-muted text-decoration-none"
           data-bs-toggle="offcanvas"
           data-bs-target="#switcher-canvas"
           aria-label="Settings">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20" class="hdr-svg">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65
                         c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.37-.3-.59-.22l-2.49 1
                         c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4
                         c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1
                         c-.23-.09-.47 0-.59.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65
                         c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65
                         c-.19.15-.24.42-.12.64l2 3.46c.12.22.37.3.59.22l2.49-1
                         c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4
                         c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1
                         c.23.09.47 0 .59-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65z
                         M12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5
                         3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
            </svg>
            <span class="small fw-medium">Settings</span>
        </a>

        <div class="flex-grow-1"></div>

        <a href="{{ route('login') }}"
           class="btn btn-primary hdr-signup d-inline-flex align-items-center gap-1">
            <i class="bi bi-person-plus"></i> Sign Up
        </a>

    </div>
</div>


{{-- ── STYLES ───────────────────────────────────────────────── --}}
<style>
    /* Body offset for fixed navbar */
    body { padding-top: 65px; }

    /* Navbar base */
    #mainNav {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 1030;
        height: 65px;
        background: var(--header-bg, #fff);
    }

    /* Icon button — used everywhere */
    .hdr-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 7px;
        border-radius: 8px;
        background: transparent;
        border: none;
        cursor: pointer;
        text-decoration: none;
        flex-shrink: 0;
        transition: background .15s ease;
    }
    .hdr-btn:hover  { background: rgba(0,0,0,.07); }
    .hdr-btn:focus-visible {
        outline: 2px solid rgba(var(--bs-primary-rgb), .5);
        outline-offset: 2px;
    }

    /* SVG & icon colour */
    .hdr-svg  { fill: #5f6368; display: block; }
    .hdr-icon { color: #5f6368; }

    /* Cart badge */
    .hdr-cart-badge {
        position: absolute !important;
        top: 2px !important;
        right: 2px !important;
        font-size: .56rem;
        min-width: 16px;
        height: 16px;
        padding: 0 4px;
        line-height: 16px;
        pointer-events: none;
    }

    /* Sign Up pill button */
    .hdr-signup {
        border-radius: 20px;
        white-space: nowrap;
        font-size: .82rem;
        padding: .35rem 1rem;
        transition: transform .15s ease, box-shadow .15s ease;
    }
    .hdr-signup:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 14px rgba(var(--bs-primary-rgb), .35);
    }

    /* Mobile panel slide-in animation */
    #mobilePanel.panel-open {
        display: block !important;
        animation: hdrSlideIn .2s ease forwards;
    }
    @keyframes hdrSlideIn {
        from { opacity: 0; transform: translateY(-10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Dark mode */
    [data-theme-mode="dark"] #mainNav,
    [data-theme-mode="dark"] #mobilePanel {
        --header-bg: #1e2533;
        border-color: rgba(255,255,255,.08) !important;
    }
    [data-theme-mode="dark"] .hdr-svg  { fill: #adb5bd !important; }
    [data-theme-mode="dark"] .hdr-icon { color: #adb5bd !important; }
    [data-theme-mode="dark"] #mobilePanel { background: #1e2533 !important; }

    /* Very small phones */
    @media (max-width: 360px) {
        .navbar-brand img { max-height: 30px; }
        .hdr-btn { padding: 5px; }
        .hdr-signup { padding: .3rem .75rem; font-size: .78rem; }
    }
</style>


{{-- ── SCRIPT ───────────────────────────────────────────────── --}}
<script>
(function () {
    var toggle   = document.getElementById('mobileToggle');
    var panel    = document.getElementById('mobilePanel');
    var icoHam   = document.getElementById('icoHam');
    var icoClose = document.getElementById('icoClose');

    if (!toggle || !panel) return;

    function openPanel() {
        panel.style.display = 'block';
        panel.classList.add('panel-open');
        icoHam.style.display   = 'none';
        icoClose.style.display = 'block';
        toggle.setAttribute('aria-expanded', 'true');
        var inp = document.getElementById('mobilePanelSearch');
        if (inp) setTimeout(function () { inp.focus(); }, 60);
    }

    function closePanel() {
        panel.classList.remove('panel-open');
        panel.style.display    = 'none';
        icoHam.style.display   = 'block';
        icoClose.style.display = 'none';
        toggle.setAttribute('aria-expanded', 'false');
    }

    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        panel.classList.contains('panel-open') ? closePanel() : openPanel();
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
        if (!panel.contains(e.target) && !toggle.contains(e.target)) {
            closePanel();
        }
    });

    // Close when resized to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) closePanel();
    });
})();
</script>