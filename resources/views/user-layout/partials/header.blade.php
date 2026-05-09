<!-- End::app-sidebar -->
@php
$categories = App\Models\Category::where('status', 'active')->get(['id', 'name']);
@endphp
<nav class="navbar  border-bottom py-0"
    style="position: fixed; top: 0; left: 0; right: 0; z-index: 1030; height: 85px; background:var(--header-bg);">
    <div class="container-fluid gap-3 flex-nowrap">

        {{-- Logo --}}
        <a aria-label="anchor" class="navbar-brand flex-shrink-0" href="javascript:void(0);">
            <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt=""
                class="d-inline-block align-text-top">
        </a>

        {{-- Search bar - centered, hidden on mobile --}}
        <div class="d-none d-md-flex flex-grow-1 justify-content-center px-3">
            <form action="{{ route('products') }}" method="GET">
                <div class="d-flex gap-2" style="width: 100%; max-width: 420px;">

                    <input type="search" class="form-control" name="search" value="{{ request('search') }}"
                        placeholder="Search products...">

                    @php
                    $hasFilter = request()->has('search') && request('search') != '';
                    @endphp

                    {{-- Show Search button --}}
                    @if(!$hasFilter)
                    <button type="submit" class="btn btn-primary flex-shrink-0">
                        Search
                    </button>
                    @endif

                    {{-- Show Clear button --}}
                    @if($hasFilter)
                    <a href="{{ route('products') }}" class="btn btn-danger flex-shrink-0">
                        Clear
                    </a>
                    @endif

                </div>
            </form>

        </div>

        {{-- Right icons - always visible --}}
        <div class="d-flex align-items-center gap-2 flex-shrink-0">

            {{-- Mobile search toggle --}}
            <div class="d-flex d-md-none">
                <button class="btn btn-link header-link p-2" type="button" id="mobileSearchToggle" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                        width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
                </button>
            </div>

            {{-- Home --}}
            <a class="header-link p-2" href="{{ route('products')}}">
                <i class="fa fa-home fs-5" style="color: #5f6368;"></i>
            </a>

            {{-- Theme toggle --}}
            <div class="header-element header-theme-mode">
                <a href="javascript:void(0);" class="header-link layout-setting p-2">
                    <span class="light-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"
                            enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#5f6368">
                            <rect fill="none" height="24" width="24" />
                            <path
                                d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z" />
                        </svg>
                    </span>
                    <span class="dark-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px"
                            viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1zM11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408zm-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z" />
                        </svg>
                    </span>
                </a>
            </div>

            {{-- Cart --}}
            <div class="header-element cart-dropdown dropdown">
                <a href="javascript:void(0);" class="header-link dropdown-toggle p-2 position-relative"
                    data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                        width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0"
                        id="cart-icon-badge">0</span>
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
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll"></ul>
                    <div class="p-3 empty-header-item border-top d-none">
                        <div class="d-grid">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-sm text-nowrap">View Cart & Checkout</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                <i class="ri-shopping-cart-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-semibold mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy</span>
                            <a href="{{ route('products') }}" class="btn btn-primary btn-wave btn-sm text-nowrap m-1">
                                Continue Shopping <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Fullscreen --}}
            <div class="header-element header-fullscreen">
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon" height="24px"
                        viewBox="0 0 24 24" width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon" height="24px"
                        viewBox="0 0 24 24" width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                    </svg>
                </a>
            </div>

            {{-- Settings / Switcher --}}
            <div class="header-element">
                <a href="javascript:void(0);" class="header-link switcher-icon p-2" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                        width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                    </svg>
                </a>
            </div>

        </div>{{-- end right icons --}}
    </div>
</nav>


<div class="d-md-none bg-light border-bottom px-3 py-2"
    style="display: none !important; position: fixed; top: 64px; left: 0; right: 0; z-index: 1029;">
    <form action="{{ route('products') }}" method="GET">
        <div class="d-flex gap-2" style="width: 100%; max-width: 420px;">

            <input type="search" class="form-control" name="search" value="{{ request('search') }}"
                placeholder="Search products...">

            @php
            $hasFilter = request()->has('search') && request('search') != '';
            @endphp

            {{-- Show Search button --}}
            @if(!$hasFilter)
            <button type="submit" class="btn btn-primary flex-shrink-0">
                Search
            </button>
            @endif

            {{-- Show Clear button --}}
            @if($hasFilter)
            <a href="{{ route('products') }}" class="btn btn-danger flex-shrink-0">
                Clear
            </a>
            @endif

        </div>
    </form>
</div>

<script>
document.getElementById('mobileSearchToggle').addEventListener('click', function() {
    const bar = document.getElementById('mobileSearchBar');
    const isHidden = bar.style.display === 'none' || bar.style.display === '';
    bar.style.display = isHidden ? 'block' : 'none';
    if (isHidden) document.getElementById('mobileSearchInput').focus();
});
</script>


