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

{{-- ── Shop by Category ── --}}

<h5 class="fw-bold  mb-3">Shop by Category</h5>
<div class="row g-3">
    @foreach($categories as $cat)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
        <a href="{{ route('user.category', $cat->slug) }}" class="text-decoration-none d-block h-100">
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
<div class="row mb-3">
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


<h5 class="fw-bold mb-3">All Products</h5>

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
                                <a href="{{ route('user.wishlist') }}" class="btn btn-icon btn-success rounded-circle"
                                    data-bs-toggle="tooltip" title="Add to Wishlist">
                                    <i class="bx bx-heart align-center"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon btn-info rounded-circle"
                                    data-bs-toggle="tooltip" title="Compare">
                                    <i class="bx bx-adjust"></i>
                                </a>
                            </div>
                            <div class="img-box-2" style="height:230px; overflow: hidden;">
                                <a href="{{ route('user.product-details', $product->slug) }}">
                                    @if($product->image_url)
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                        class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3 card-img-top" style="object-fit: cover;">
                                    @else
                                    <img src="{{ asset('assets/images/ecommerce/png/1.png') }}"
                                        alt="{{ $product->name }}"
                                        class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3 " style="object-fit: cover;">
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
                                <a href="{{ route('user.product-details', $product->slug) }}">
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
                                        <a href="{{ route('user.check-out') }}" class="btn btn-success-light btn-sm">
                                            <i class="bx bx-credit-card-alt"></i> Buy Now
                                        </a>
                                        <!-- <a href="{{ route('user.cart') }}" data-id="{{ $product->id }}" class="btn btn-primary btn-sm add-to-cart-btn">
                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                </a> -->

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
                        <a href="{{ route('user.products') }}" class="btn btn-primary mt-2">Clear Filters</a>
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