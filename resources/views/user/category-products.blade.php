@extends('user-layout.app')

@section('content')

{{-- Header --}}
<div class="card custom-card mb-4">

    {{-- Top: breadcrumb + count --}}
    <div class="card-header justify-content-between flex-wrap gap-2">
        <div class="d-flex align-items-center gap-1 fs-13 text-muted">
            <a href="{{ route('user.products') }}" class="text-muted text-decoration-none">All Products</a>
            <span>/</span>
            <span class="text-dark fw-medium">{{ $category->name }}</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-light text-secondary border fs-12 fw-normal rounded-pill px-3 py-1">
                Showing <span class="text-primary fw-semibold">{{ $products->total() }}</span>
                product{{ $products->total() != 1 ? 's' : '' }}
                @if(request('search')) for "<strong>{{ request('search') }}</strong>" @endif
            </span>
            <a href="{{ route('user.category', $category->slug) }}" class="btn btn-primary btn-sm">
                Clear all
            </a>
        </div>
    </div>

    {{-- Body: all filters in one row --}}
    <div class="card-body p-0">
        <form action="{{ route('user.category', $category->slug) }}" method="GET">
            <input type="hidden" name="search" value="{{ request('search') }}">

            <div class="d-flex align-items-center flex-wrap border-top" style="gap:0">

                {{-- Category pills --}}
                <div class="d-flex align-items-center gap-2 px-3 py-2 flex-nowrap overflow-auto border-end" style="scrollbar-width:none;max-width:260px">
                    <span class="text-muted text-uppercase fs-10 fw-semibold text-nowrap" style="letter-spacing:.5px">Categories</span>
                    @foreach($categories as $cat)
                    <a href="{{ route('user.category', $cat->slug) }}"
                        class="badge rounded-pill text-decoration-none fw-normal fs-12 text-nowrap {{ $cat->id == $category->id ? 'bg-primary-transparent text-primary border border-primary' : 'bg-light text-muted border' }}">
                        {{ $cat->name }}
                        <span class="opacity-75">({{ $cat->products_count }})</span>
                    </a>
                    @endforeach
                </div>

                {{-- Search --}}
                <div class="px-3 py-2 border-end">
                    <div class="input-group input-group-sm" style="min-width:180px">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="ti ti-search fs-13"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 bg-light ps-0 fs-13"
                            name="search" value="{{ request('search') }}"
                            placeholder="Search in {{ $category->name }}...">
                    </div>
                </div>

                {{-- Price range --}}
                <div class="d-flex align-items-center gap-2 px-3 py-2 border-end">
                    <span class="text-muted text-uppercase fs-10 fw-semibold text-nowrap" style="letter-spacing:.5px">PKR</span>
                    <input type="number" class="form-control form-control-sm bg-light" style="width:80px"
                        name="min_price" placeholder="Min" value="{{ request('min_price') }}">
                    <span class="text-muted">—</span>
                    <input type="number" class="form-control form-control-sm bg-light" style="width:80px"
                        name="max_price" placeholder="Max" value="{{ request('max_price') }}">
                </div>

                {{-- Sort --}}
                <div class="px-3 py-2 border-end">
                    <select class="form-select form-select-sm bg-light fs-13" name="sort" style="min-width:140px">
                        <option value="">Sort by</option>
                        <option value="newest"     {{ request('sort')=='newest'     ? 'selected' : '' }}>Newest first</option>
                        <option value="oldest"     {{ request('sort')=='oldest'     ? 'selected' : '' }}>Oldest first</option>
                        <option value="price_asc"  {{ request('sort')=='price_asc'  ? 'selected' : '' }}>Price: low → high</option>
                        <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected' : '' }}>Price: high → low</option>
                    </select>
                </div>

                {{-- Apply --}}
                <div class="px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm px-3">
                        <i class="ri-filter-line me-1"></i> Apply
                    </button>
                </div>

            </div>
        </form>
    </div>

</div>
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
                        <a href="#" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip"
                            title="Add to Wishlist">
                            <i class="bx bx-heart align-center"></i>
                        </a>
                    </div>
                    <div class="img-box-2">
                        <a href="{{ route('user.product-details', $product->slug) }}">
                            @if($product->image_url)
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3 "
                                style="height: 200px;object-fit: cover;">
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
                    <div class="d-flex gap-2 align-items-center justify-content-between  mb-2">
                        <div class="fw-semibold fs-20 text-pink">PKR {{ number_format($displayPrice, 0) }}

                            @if($product->sale_price)
                            <s class="text-muted fs-12 me-3">PKR {{ number_format($product->price, 0) }}</s>
                            @endif
                        </div>

                        <div class="div">
                            @if($product->stock <= 0) <span class="badge bg-danger mb-2">Out of Stock</span>
                                @elseif($product->stock <= 5) <span class="badge bg-warning text-dark mb-2">Only
                                    {{ $product->stock }} left</span>
                                    @endif
                        </div>
                    </div>

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
                @elseif($page == 1 || $page == $products->lastPage() || abs($page - $products->currentPage()) <= 1) <li
                    class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
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
        data: {
            _token: CSRF,
            product_id: productId,
            quantity: 1
        },
        success(res) {
            $('#cart-icon-badge').text(res.count);
            $('#cart-data').text(res.count + ' Item' + (res.count != 1 ? 's' : ''));
            loadHeaderCart();
            Swal.fire({
                icon: 'success',
                title: res.message,
                timer: 1500,
                showConfirmButton: false,
                position: 'top-end',
                toast: true
            });
        },
        error(xhr) {
            Swal.fire({
                icon: 'error',
                title: xhr.responseJSON?.message || 'Error adding to cart'
            });
        }
    });
});
</script>
@endpush