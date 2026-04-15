@extends('user-layout.app')

@section('content')

{{-- Header --}}
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    <a href="{{ route('user.products') }}" class="text-muted me-1">All Products</a>
                    <span class="text-muted me-1">/</span>
                    {{ $category->name }}
                </div>
                <div class="btn-group mb-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}">Newest</a></li>
                        <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'oldest']) }}">Oldest</a></li>
                        <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}">Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}">Price: High to Low</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.category', $category->slug) }}" method="GET">
                    <div class="input-group p-3 bg-light rounded mb-3">
                        <input type="text" class="form-control" name="search"
                            value="{{ request('search') }}"
                            placeholder="Search in {{ $category->name }}...">
                        <button type="submit" class="btn btn-primary"><i class="ti ti-search"></i></button>
                    </div>
                </form>
                <h6 class="mb-0">
                    Showing <span class="fw-semibold text-primary">{{ $products->total() }}</span>
                    product{{ $products->total() != 1 ? 's' : '' }} in <strong>{{ $category->name }}</strong>
                    @if(request('search')) matching "<strong>{{ request('search') }}</strong>" @endif
                </h6>
            </div>
        </div>
    </div>
</div>

{{-- Category image banner --}}
@if($category->image)
<div class="row mb-3">
    <div class="col-12">
        <div class="card custom-card overflow-hidden" style="max-height: 180px;">
            <img src="{{ asset('storage/' . $category->image) }}"
                 alt="{{ $category->name }}"
                 class="w-100 object-fit-cover" style="max-height:180px; object-fit:cover;">
        </div>
    </div>
</div>
@endif

<div class="row">

    {{-- Products Grid --}}
    <div class="col-xl-9">
        <div class="row">

            @forelse($products as $product)
            @php
                $discount = $product->sale_price
                    ? round((($product->price - $product->sale_price) / $product->price) * 100)
                    : null;
                $displayPrice = $product->sale_price ?? $product->price;
            @endphp
            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                <div class="card custom-card card-style-2">
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
                            </div>
                            <div class="img-box-2">
                                <a href="{{ route('user.product-details', $product->slug) }}">
                                    @if($product->image_url)
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                            class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3">
                                    @else
                                        <img src="{{ asset('assets/images/ecommerce/png/1.png') }}" alt="{{ $product->name }}"
                                            class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3">
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="p-3">
                            <a href="javascript:void(0);" class="text-muted fs-12">{{ $product->category?->name ?? '' }}</a>
                            <h6 class="mt-1 mb-2 fw-semibold fs-14">
                                <a href="{{ route('user.product-details', $product->slug) }}">{{ $product->name }}</a>
                            </h6>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="fw-semibold fs-20 text-pink">PKR {{ number_format($displayPrice, 0) }}</div>
                                @if($product->sale_price)
                                <s class="text-muted fs-12">PKR {{ number_format($product->price, 0) }}</s>
                                @endif
                            </div>
                            @if($product->stock <= 0)
                                <span class="badge bg-danger mb-2">Out of Stock</span>
                            @elseif($product->stock <= 5)
                                <span class="badge bg-warning text-dark mb-2">Only {{ $product->stock }} left</span>
                            @endif
                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                <a href="{{ route('user.check-out') }}" class="btn btn-success-light btn-sm">
                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                </a>
                                <button class="btn btn-primary-light btn-sm add-to-cart-btn" data-id="{{ $product->id }}">
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
                        <h5 class="mt-3 text-muted">No products in this category</h5>
                        <a href="{{ route('user.products') }}" class="btn btn-primary mt-2">Browse All Products</a>
                    </div>
                </div>
            </div>
            @endforelse

            {{-- Pagination --}}
            @if($products->hasPages())
            <div class="col-md-12">
                <nav class="pagination-style-4 mt-3">
                    <ul class="pagination text-center justify-content-center gap-1">
                        <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $products->previousPageUrl() }}">Prev</a>
                        </li>
                        @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            @if($page == $products->currentPage())
                                <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @elseif($page == 1 || $page == $products->lastPage() || abs($page - $products->currentPage()) <= 1)
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @elseif(abs($page - $products->currentPage()) == 2)
                                <li class="page-item"><a class="page-link"><i class="bi bi-three-dots"></i></a></li>
                            @endif
                        @endforeach
                        <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link text-primary" href="{{ $products->nextPageUrl() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            @endif

        </div>
    </div>

    {{-- Sidebar Filter --}}
    <div class="col-xl-3">
        <div class="card custom-card products-navigation-card">
            <div class="card-header justify-content-between">
                <div class="card-title">Filter</div>
                <a href="{{ route('user.category', $category->slug) }}" class="text-decoration-underline fw-medium text-secondary">Clear All</a>
            </div>
            <div class="card-body p-0">
                <form action="{{ route('user.category', $category->slug) }}" method="GET" id="filterForm">
                    <input type="hidden" name="search" value="{{ request('search') }}">
                    <input type="hidden" name="sort" value="{{ request('sort') }}">

                    {{-- Other categories --}}
                    <div class="p-3 border-bottom">
                        <h6 class="fw-semibold mb-2">Other Categories</h6>
                        @foreach($categories as $cat)
                        <div class="mb-1">
                            <a href="{{ route('user.category', $cat->slug) }}"
                               class="text-decoration-none {{ $cat->id == $category->id ? 'text-primary fw-semibold' : 'text-muted' }}">
                                {{ $cat->name }}
                                <span class="fs-11">({{ $cat->products_count }})</span>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    {{-- Price Range --}}
                    <div class="p-3 border-bottom">
                        <h6 class="fw-semibold mb-3">Price Range (PKR)</h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="number" class="form-control form-control-sm"
                                    name="min_price" placeholder="Min" value="{{ request('min_price') }}">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control form-control-sm"
                                    name="max_price" placeholder="Max" value="{{ request('max_price') }}">
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
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>
const ADD_CART_URL = '{{ route("user.cart.add") }}';
const CSRF = '{{ csrf_token() }}';

$(document).on('click', '.add-to-cart-btn', function() {
    const productId = $(this).data('id');
    $.ajax({
        url: ADD_CART_URL,
        method: 'POST',
        data: { _token: CSRF, product_id: productId, quantity: 1 },
        success(res) {
            $('#cart-icon-badge').text(res.count);
            $('#cart-data').text(res.count + ' Item' + (res.count != 1 ? 's' : ''));
            loadHeaderCart();
            Swal.fire({ icon: 'success', title: res.message, timer: 1500, showConfirmButton: false, position: 'top-end', toast: true });
        },
        error(xhr) {
            Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Error adding to cart' });
        }
    });
});
</script>
@endpush