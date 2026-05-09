@extends('user-layout.app')

@section('content')
<style>
.cat-card-img-wrap {
    width: 100%;
    height: 150px;
    overflow: hidden;
    border-radius: 10px 10px 0 0;
}

.cat-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform .25s;
}

.cat-card-img-wrap:hover img {
    transform: scale(1.05);
}

.cat-img-fallback {
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: #aaa;
    background: #f4f4f4;
    border-radius: 10px 10px 0 0;
}

.cat-img-info {
    padding: 10px 12px 14px;
    text-align: center;
}

.cat-img-name {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--default-text-color);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.cat-img-count {
    font-size: 0.75rem;
    color: var(--text-muted);
    margin-top: 3px;
}
</style>
<style>
.zb-banner {
    background: rgba(var(--primary-rgb));
    overflow: hidden;
    font-family: var(--default-font-family);
    position: relative;
    min-height: 320px;
    width: 100%;
    border-radius: 0;
}

.zb-stripe {
    position: absolute;
    top: 0;
    right: 0;
    width: 55%;
    height: 100%;
    clip-path: polygon(12% 0, 100% 0, 100% 100%, 0% 100%);
}

.zb-accent {
    position: absolute;
    top: 0;
    right: 0;
    width: 30%;
    height: 100%;
    clip-path: polygon(18% 0, 100% 0, 100% 100%, 0% 100%);
}

.zb-dots {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.06;
    background-image: radial-gradient(circle, #fff 1px, transparent 1px);
    background-size: 28px 28px;
}

.zb-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px 48px;
    gap: 24px;
}

.zb-left {
    flex: 1;
    min-width: 0;
}

.zb-tag {
    display: inline-block;
    background: rgb(var(--secondary-rgb));
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 18px;
    font-family: var(--default-font-family);
}

.zb-title {
    font-size: 34px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    margin: 0 0 10px;
    font-family: var(--default-font-family);
}

.zb-title span {
    color: rgb(var(--secondary-rgb));
}

.zb-sub {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    margin: 0 0 28px;
    line-height: 1.6;
    max-width: 400px;
    font-family: var(--default-font-family);
}

.zb-btns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.zb-btn-main {
    background: rgb(var(--secondary-rgb));
    border: none;
    padding: 12px 26px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
    font-family: var(--default-font-family);
    transition: opacity .2s;
}

.zb-btn-main:hover {
    opacity: 0.88;
    
}

.zb-btn-sec {
    background: transparent;
    border: 1.5px solid var(--white-4);
    padding: 12px 26px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
    font-family: var(--default-font-family);
    transition: background .2s;
}

.zb-btn-sec:hover {
    background: rgba(255, 255, 255, 0.1);
}

.zb-right {
    display: flex;
    flex-direction: column;
    gap: 14px;
    flex-shrink: 0;
}

.zb-products {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.zb-prod {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    padding: 14px 10px 10px;
    text-align: center;
    width: 90px;
    transition: background .2s;
    cursor: pointer;
}

.zb-prod:hover {
    background: rgba(255, 255, 255, 0.2);
}

.zb-prod-icon {
    font-size: 26px;
    display: block;
    margin-bottom: 6px;
    line-height: 1;
}

.zb-prod-name {
    font-size: 11px;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    font-family: var(--default-font-family);
}

.zb-stats {
    display: flex;
    gap: 10px;
}

.zb-stat {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    padding: 8px 14px;
    text-align: center;
    flex: 1;
}

.zb-stat-num {
    font-size: 16px;
    font-weight: 700;
    display: block;
    font-family: var(--default-font-family);
}

.zb-stat-label {
    font-size: 10px;
    color: var(--white-7);
    font-family: var(--default-font-family);
}

.zb-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.zb-logo {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 800;
    flex-shrink: 0;
    border: 1.5px solid rgba(255, 255, 255, 0.3);
}

.zb-brand-text {
    font-size: 22px;
    font-weight: 700;
    letter-spacing: -0.5px;
    font-family: var(--default-font-family);
}

.zb-brand-text span {
    color: rgb(var(--secondary-rgb));
}

.zb-ticker {
    background: rgba(0, 0, 0, 0.25);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 10px 48px;
    display: flex;
    align-items: center;
    gap: 10px;
    overflow: hidden;
}

.zb-ticker-label {
    background: rgb(var(--secondary-rgb));
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 3px 10px;
    border-radius: 4px;
    white-space: nowrap;
    letter-spacing: 0.8px;
    flex-shrink: 0;
    font-family: var(--default-font-family);
}

.zb-ticker-track {
    display: flex;
    gap: 40px;
    animation: zb-tick 22s linear infinite;
    white-space: nowrap;
}

.zb-ticker-item {
    font-size: 15px;
    color: rgba(255, 255, 255, 0.8);
    font-family: var(--default-font-family);
}

.zb-ticker-item::before {
    content: "●";
    margin-right: 8px;
    color: rgba(255,255,255, 0.5);
    font-size: 11px;
}

@keyframes zb-tick {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

@media (max-width: 991px) {
    .zb-content {
        padding: 32px 28px;
        gap: 20px;
    }

    .zb-prod {
        width: 76px;
    }

    .zb-title {
        font-size: 28px;
    }
}

@media (max-width: 767px) {
    .zb-content {
        flex-direction: column;
        padding: 28px 20px;
    }

    .zb-right {
        width: 100%;
    }

    .zb-products {
        grid-template-columns: repeat(6, 1fr);
        gap: 8px;
    }

    .zb-prod {
        width: auto;
        padding: 10px 6px 8px;
    }

    /* On mobile, hide stripes and use a subtle gradient instead */
    .zb-stripe,
    .zb-accent {
        display: none;
    }

    .zb-banner {
        background: linear-gradient(135deg, rgba(var(--primary-rgb), 1) 0%, rgba(var(--primary-rgb), 0.75) 100%);
    }

    .zb-title {
        font-size: 26px;
    }

    .zb-sub {
        font-size: 13px;
    }

    .zb-ticker {
        padding: 10px 16px;
    }
}

@media (max-width: 480px) {
    .zb-content {
        padding: 22px 16px;
    }

    .zb-title {
        font-size: 22px;
    }

    .zb-products {
        gap: 6px;
    }

    .zb-prod-name {
        font-size: 10px;
    }

    .zb-btns {
        gap: 8px;
    }

    .zb-btn-main,
    .zb-btn-sec {
        padding: 10px 18px;
        font-size: 13px;
    }

    .zb-stats {
        gap: 6px;
    }

    .zb-stat {
        padding: 6px 8px;
    }

    .zb-stat-num {
        font-size: 14px;
    }
}

</style>
<div class="row">
    <div class="col-md-12">

   
<div class="zb-banner main-banner-section">
    <div class="zb-dots custom-card profile-card"></div>
    <div class="zb-stripe  bg-black-transparent"></div>
    <div class="zb-accent bg-warning-transparent"></div>

    <div class="zb-content">
        <div class="zb-left">
            <div class="zb-brand">
                <div class="zb-logo text-white">Z</div>
                <div class="zb-brand-text text-white">Zaroorat<span>Bazar</span></div>
            </div>
            <div class="zb-tag">✦ Pakistan's Daily Essentials Store</div>
            <h1 class="zb-title">Sab Kuch<br><span>Ek Jagah.</span></h1>
            <p class="zb-sub" style="color:rgba(255,255,255, 0.8)">Grocery, kitchen, home & daily use products —
                delivered fresh to your doorstep. Quality
                you trust, prices that make sense.</p>
            <div class="zb-btns">
                <a href="{{ route('products') }}" class="zb-btn-main">Shop Now →</a>
                <a href="#deals" class="zb-btn-sec">View Deals</a>
            </div>
        </div>

        <div class="zb-right">
            <div class="zb-products">
                @foreach($categories->take(6) as $cat)
                <div class="zb-prod">
                    <span class="zb-prod-icon">
                        @if($cat->image)
                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}"
                            style="height:20px; width:20px">
                        @else
                        <div class="cat-img-fallback">
                            <i class="ri-image-line"></i>
                        </div>
                        @endif
                    </span>

                    <div class="zb-prod-name">{{ $cat->name ?? '' }}</div>
                </div>
                @endforeach
            </div>
            <div class="zb-stats">
                <div class="zb-stat"><span class="zb-stat-num">500+</span>
                    <div class="zb-stat-label">Products</div>
                </div>
                <div class="zb-stat"><span class="zb-stat-num">Fast</span>
                    <div class="zb-stat-label">Delivery</div>
                </div>
                <div class="zb-stat"><span class="zb-stat-num">100%</span>
                    <div class="zb-stat-label">Original</div>
                </div>
            </div>
        </div>
    </div>

    <div class="zb-ticker">
        <span class="zb-ticker-label">Hot Deals</span>

         
        <div class="zb-ticker-track">
            @forelse($products as $product)
            @php
            $discount = $product->sale_price
            ? round((($product->price - $product->sale_price) / $product->price) * 100)
            : null;
            $displayPrice = $product->sale_price ?? $product->price;
            @endphp
            <span class="zb-ticker-item"> {{ $product->name }} 
                 @if($discount)
                        
                          -   {{ $discount }}% Off
                        
                        @endif</span>
            
            @endforeach

             @forelse($products as $product)
            @php
            $discount = $product->sale_price
            ? round((($product->price - $product->sale_price) / $product->price) * 100)
            : null;
            $displayPrice = $product->sale_price ?? $product->price;
            @endphp
            <span class="zb-ticker-item"> {{ $product->name }} 
                 @if($discount)
                        
                          -   {{ $discount }}% Off
                        
                        @endif</span>
            
            @endforeach
        </div>
    </div>
</div>
 </div>
</div>

{{-- ── Shop by Category ── --}}

<h5 class="fw-bold  mb-3 mt-3">Shop by Category</h5>
<div class="row g-3">
    @foreach($categories as $cat)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
        <a href="{{ route('category', $cat->slug) }}" class="text-decoration-none d-block h-100">
            <div class="card custom-card h-100 card-style-2">
                <div class="card-body p-0">

                    <div class="cat-card-img-wrap">
                        @if($cat->image)
                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}">
                        @else
                        <div class="cat-img-fallback">
                            <i class="ri-image-line"></i>
                        </div>
                        @endif
                    </div>

                    <div class="cat-img-info">
                        <div class="cat-img-name">{{ $cat->name }}</div>
                        <div class="cat-img-count">{{ $cat->products_count }} products</div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

<style>
.marquee {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding: 12px 0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.marquee-content {
    display: flex;
    width: max-content;
    animation: marquee-scroll 18s linear infinite;
}

.marquee-content span {
    margin-right: 80px;
    font-size: 17px;
    font-weight: 600;
    white-space: nowrap;
    letter-spacing: 0.5px;

}

@keyframes marquee-scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

.marquee:hover .marquee-content {
    animation-play-state: paused;
}

.marquee::before,
.marquee::after {
    content: "";
    position: absolute;
    top: 0;
    width: 60px;
    height: 100%;
    z-index: 2;
}

.marquee::before {
    left: 0;
}

.marquee::after {
    right: 0;
}
</style>
<div class="row mb-3 w-100">
    <div class="col-md-12">
        <div class="marquee bg-primary-transparent">
            <div class="marquee-content">
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>

                <!-- duplicate -->
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>
                <span>⚠️ کم از کم آرڈر 5000 روپے ہے</span>
            </div>
        </div>
    </div>
</div>

 @php
 $categories = App\Models\Category::where('status', 'active')->get(['id', 'name']);
 @endphp
<!-- ROW 1: Title + Actions -->
<div class="d-flex flex-column flex-xl-row align-items-stretch align-items-xl-center justify-content-between gap-3 mb-3">

    <!-- Title -->
    <h5 class="fw-bold mb-0 flex-shrink-0 text-center text-xl-start">
        All Products
    </h5>

    <!-- Controls -->
    <form action="{{ route('products') }}"
          method="GET"
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-xl-end gap-2 flex-grow-1">

        <!-- Keep values -->
        <input type="hidden" name="search" value="{{ request('search') }}">
        <input type="hidden" name="sort" value="{{ request('sort') }}">

        <!-- Sort -->
        <div class="btn-group">
            <button class="btn btn-primary-light btn-sm dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown">
                <i class="ti ti-sort-descending-2 me-1"></i> Sort
            </button>

            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item"
                       href="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}">
                        Newest
                    </a>
                </li>

                <li>
                    <a class="dropdown-item"
                       href="{{ request()->fullUrlWithQuery(['sort' => 'oldest']) }}">
                        Oldest
                    </a>
                </li>

                <li>
                    <a class="dropdown-item"
                       href="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}">
                        Low → High
                    </a>
                </li>

                <li>
                    <a class="dropdown-item"
                       href="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}">
                        High → Low
                    </a>
                </li>
            </ul>
        </div>

        <!-- Min Price -->
        <input type="number"
               name="min_price"
               value="{{ request('min_price') }}"
               placeholder="Min Price"
               class="form-control  flex-grow-1"
               style="min-width: 150px; max-width: 230px;">

        <!-- Max Price -->
        <input type="number"
               name="max_price"
               value="{{ request('max_price') }}"
               placeholder="Max Price"
               class="form-control  flex-grow-1"
               style="min-width: 150px; max-width: 230px;">

        <!-- Apply -->
        <button type="submit" class="btn btn-primary ">
            <i class="ri-filter-line"></i>
        </button>

        <!-- Clear -->
        <a href="{{ route('products') }}"
           class="btn btn-outline-secondary ">
            Clear
        </a>

    </form>
</div>

<div class="row">

    {{-- Products Grid --}}
    <div class="col-xl-12">
        <div class="row">

            @forelse($products as $product)
            @php
            $discount = $product->sale_price
            ? round((($product->price - $product->sale_price) / $product->price) * 100)
            : null;
            $displayPrice = $product->sale_price ?? $product->price;
            @endphp

            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6 mb-3">
                <div class="card custom-card card-style-2 h-100">
                    <div class="card-body p-0">

                        @if($discount)
                        <div class="top-left-badge">
                            <span class="badge bg-success">{{ $discount }}% Off</span>
                        </div>
                        @endif

                        <div class="card-img-top">
                            <div class="btns-container-1 align-items-center gap-1">
                                <a href="#" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip"
                                    title="Add to Wishlist">
                                    <i class="bx bx-heart align-center"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon btn-info rounded-circle"
                                    data-bs-toggle="tooltip" title="Compare">
                                    <i class="bx bx-adjust"></i>
                                </a>
                            </div>
                            <div class="img-box-2" style=" overflow: hidden;">
                                <a href="{{ route('product-details', $product->slug) }}">
                                    @if($product->image_url)
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                        class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3 card-img-top"
                                        style="object-fit: cover; height: 200px;">
                                    @else
                                    <img src="{{ asset('assets/images/ecommerce/png/1.png') }}"
                                        alt="{{ $product->name }}"
                                        class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3 "
                                        style="object-fit: cover;">
                                    @endif
                                </a>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <a href="javascript:void(0);" class="text-muted fs-12">
                                    {{ $product->category?->name ?? '' }}
                                </a>
                            </div>
                            <h6 class="mt-1 mb-2 fw-semibold fs-14">
                                <a href="{{ route('product-details', $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h6>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="fw-semibold fs-20 text-pink">
                                    PKR {{ number_format($displayPrice, 0) }}
                                </div>
                                @if($product->sale_price)
                                <s class="text-muted fs-12">PKR {{ number_format($product->price, 0) }}</s>
                                @endif
                            </div>

                            {{-- Stock badge --}}
                            @if($product->stock <= 0) <span class="badge bg-danger mb-2">Out of Stock</span>
                                @elseif($product->stock <= 5) <span class="badge bg-warning text-dark mb-2">Only
                                    {{ $product->stock }} left</span>
                                    @endif

                                    <div class="d-flex gap-1 justify-content-between flex-wrap">
                                        <a href="{{ route('check-out') }}" class="btn btn-success-light btn-sm">
                                            <i class="bx bx-credit-card-alt"></i> Buy Now
                                        </a>
                                        <button class="btn btn-primary-light btn-sm add-to-cart-btn"
                                            data-id="{{ $product->id }}">
                                            <i class="bx bxs-cart-add"></i> Add to Cart
                                        </button>
                                    </div>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card custom-card">
                    <div class="card-body text-center py-5">
                        <i class="ri-inbox-line fs-1 text-muted"></i>
                        <h5 class="mt-3 text-muted">No products found</h5>
                        <a href="{{ route('products') }}" class="btn btn-primary mt-2">Clear Filters</a>
                    </div>
                </div>
            </div>
            @endforelse

            {{-- Pagination --}}
            @if($products->hasPages())
            <div class="col-md-12">
                <nav class="pagination-style-4 mt-3">
                    <ul class="pagination text-center justify-content-center gap-1">

                        {{-- Prev --}}
                        <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $products->previousPageUrl() }}">Prev</a>
                        </li>

                        {{-- Pages --}}
                        @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        @if($page == $products->currentPage())
                        <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @elseif($page == 1 || $page == $products->lastPage() || abs($page - $products->currentPage()) <=
                            1) <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @elseif(abs($page - $products->currentPage()) == 2)
                            <li class="page-item"><a class="page-link"><i class="bi bi-three-dots"></i></a></li>
                            @endif
                            @endforeach

                            {{-- Next --}}
                            <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link text-primary" href="{{ $products->nextPageUrl() }}">Next</a>
                            </li>

                    </ul>
                </nav>
            </div>
            @endif

        </div>
    </div>



</div>


@endsection
@push('scripts')



@endpush