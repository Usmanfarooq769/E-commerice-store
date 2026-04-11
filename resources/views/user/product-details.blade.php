@extends('user-layout.app')

@section('content')

<div class="container-fluid">
    <div class="row">

        {{-- Product Images --}}
        <div class="col-xxl-4">
            <div class="card custom-card">
                @if($discount)
                <div class="sale-badge">Sale <span class="fs-10 op-8">{{ $discount }}% OFF</span></div>
                @endif
                <div class="card-body p-2 p-sm-5">
                    <div class="swiper swiper-preview-details bg-light product-details-page">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-4">
                                <img class="img-fluid"
                                    src="{{ $product->image_url ?? asset('assets/images/ecommerce/png/10.png') }}"
                                    alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper swiper-view-details mt-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid"
                                    src="{{ $product->image_url ?? asset('assets/images/ecommerce/png/10.png') }}"
                                    alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Product Info --}}
        <div class="col-xxl-8">
            <div class="card custom-card">
                <div class="card-body">
                    <p class="fs-20 fw-semibold mb-3">{{ $product->name }}</p>

                    <div class="row gy-3 gy-xl-0">
                        <div class="col-xl-7">
                            <a href="{{ route('user.wishlist') }}" class="btn btn-outline-primary btn-w-lg me-2 mb-3">
                                <i class="ri-heart-line fs-16 align-middle lh-1"></i> Add to Wishlist
                            </a>

                            @if($discount)
                            <div class="mb-1">
                                <span class="text-pink fw-semibold">Save Upto {{ $discount }}% Off</span> on M.R.P price
                            </div>
                            @endif

                            <div class="d-flex gap-3 align-items-center flex-wrap mb-1">
                                <h2 class="fw-semibold">
                                    PKR {{ number_format($product->sale_price ?? $product->price, 0) }}
                                </h2>
                                @if($product->sale_price)
                                <div class="mb-0 text-muted fs-12">
                                    <p class="mb-0"><s>PKR {{ number_format($product->price, 0) }}</s></p>
                                </div>
                                @endif
                            </div>

                            {{-- Stock Status --}}
                            <div class="mb-3">
                                @if($product->stock <= 0)
                                    <span class="text-danger fw-semibold">Out of Stock</span>
                                @elseif($product->stock <= 5)
                                    <span class="text-warning fw-semibold">Only {{ $product->stock }} left — Hurry Up!</span>
                                @else
                                    <span class="text-success fw-semibold">In Stock ({{ $product->stock }} available)</span>
                                @endif
                            </div>

                            @if($product->description)
                            <div class="mb-3">
                                <p class="fs-15 fw-semibold mb-1">Description:</p>
                                <p class="text-muted mb-0 fs-13">{{ $product->description }}</p>
                            </div>
                            @endif

                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12">
                                    <i class="ri-checkbox-circle-fill me-1"></i>
                                    {{ $product->stock > 0 ? 'Instock' : 'Out of Stock' }}
                                </p>
                            </div>

                            <div class="mb-3">
                                <span class="text-muted fs-13">
                                    <strong>SKU:</strong> {{ $product->sku ?? 'N/A' }} &nbsp;|&nbsp;
                                    <strong>Unit:</strong> {{ ucfirst($product->unit) }} &nbsp;|&nbsp;
                                    <strong>Category:</strong> {{ $product->category?->name ?? 'N/A' }}
                                </span>
                            </div>

                            {{-- Quantity --}}
                            <div class="d-flex gap-5 align-items-center mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <p class="fs-15 fw-semibold mb-1">Quantity:</p>
                                    <div class="product-quantity-container ecommerce-page-quantity">
                                        <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                            <button type="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus">
                                                <i class="ri-subtract-line"></i>
                                            </button>
                                            <input type="text" class="form-control form-control-sm text-center p-0" value="1" id="qty-input">
                                            <button type="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus">
                                                <i class="ri-add-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                @if($product->stock > 0)
                                <a href="{{ route('user.check-out') }}" class="btn btn-primary btn-w-lg">
                                    <i class="bx bx-credit-card fs-16 align-middle"></i> Buy Now
                                </a>
                                <a href="{{ route('user.cart') }}" class="btn btn-success btn-w-lg">
                                    <i class="bx bx-cart-add fs-16 align-middle"></i> Add to Cart
                                </a>
                                @else
                                <button class="btn btn-secondary btn-w-lg" disabled>Out of Stock</button>
                                @endif
                            </div>
                        </div>

                        {{-- Right Info Panel --}}
                        <div class="col-xl-5">
                            <div class="p-xl-3 text-center">
                                <div class="list-group list-group-flush p-2 bg-light rounded mb-3">
                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="text-muted">Free Shipping anywhere</div>
                                        <div class="lh-1 text-danger fs-14"><i class="ri-shake-hands-line"></i></div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="text-muted">100% secure payments</div>
                                        <div class="lh-1 fs-14 text-success"><i class="ri-secure-payment-line"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Products Sidebar --}}
        <div class="col-xxl-3">
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between">
                    <div class="card-title">Featured Products</div>
                    <a href="{{ route('user.products') }}" class="btn btn-sm btn-primary-light">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                @foreach($featuredProducts as $fp)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-top">
                                            <div class="similar-products-image me-2">
                                                <img src="{{ $fp->image_url ?? asset('assets/images/ecommerce/png/1.png') }}"
                                                    alt="{{ $fp->name }}">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fs-14 fw-semibold similar-product-name text-truncate">
                                                    {{ $fp->name }}
                                                </p>
                                                <div class="d-flex gap-2 align-items-center mt-1">
                                                    <div class="fw-semibold fs-17 text-pink">
                                                        PKR {{ number_format($fp->sale_price ?? $fp->price, 0) }}
                                                    </div>
                                                    @if($fp->sale_price)
                                                    <s class="text-muted fs-12">PKR {{ number_format($fp->price, 0) }}</s>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="ms-auto align-self-end">
                                                <a href="{{ route('user.cart') }}" class="btn btn-primary btn-sm">Add</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Product Details & Description Tabs --}}
        <div class="col-xxl-6">
            <div class="card custom-card">
                <div class="card-header">
                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2" id="myTab4" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-primary-transparent px-4 active"
                                data-bs-toggle="tab" data-bs-target="#product-details-pane" type="button">
                                Product Details
                            </button>
                        </li>
                        @if($product->description)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-primary-transparent px-4"
                                data-bs-toggle="tab" data-bs-target="#key-features-tab-pane" type="button">
                                Description
                            </button>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane show active overflow-hidden p-0 border-0 rounded-0" id="product-details-pane">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="fw-semibold">Name</th>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-semibold">Category</th>
                                        <td>{{ $product->category?->name ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-semibold">SKU</th>
                                        <td>{{ $product->sku ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-semibold">Unit</th>
                                        <td>{{ ucfirst($product->unit) }}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-semibold">Price</th>
                                        <td>PKR {{ number_format($product->price, 2) }}</td>
                                    </tr>
                                    @if($product->sale_price)
                                    <tr>
                                        <th class="fw-semibold">Sale Price</th>
                                        <td class="text-danger fw-semibold">PKR {{ number_format($product->sale_price, 2) }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th class="fw-semibold">Stock</th>
                                        <td>{{ $product->stock }}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-semibold">Status</th>
                                        <td>
                                            <span class="badge bg-{{ $product->status === 'active' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($product->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if($product->description)
                    <div class="tab-pane overflow-hidden p-0 border-0" id="key-features-tab-pane">
                        <p class="text-muted fs-13">{{ $product->description }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        @if($relatedProducts->count())
        <div class="col-12">
            <h5>Related Products</h5>
            <p class="text-muted">Discover more products similar to this one.</p>
            <div class="swiper swiper-related-products">
                <div class="swiper-wrapper">
                    @foreach($relatedProducts as $rp)
                    @php
                        $rpDiscount = $rp->sale_price
                            ? round((($rp->price - $rp->sale_price) / $rp->price) * 100)
                            : null;
                    @endphp
                    <div class="swiper-slide">
                        <div class="card custom-card card-style-2">
                            <div class="card-body p-0">
                                @if($rpDiscount)
                                <div class="top-left-badge">
                                    <span class="badge bg-success">{{ $rpDiscount }}% Off</span>
                                </div>
                                @endif
                                <div class="card-img-top">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a href="{{ route('user.wishlist') }}" class="btn btn-icon btn-success rounded-circle">
                                            <i class="bx bx-heart align-center"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <a href="{{ route('user.product-details', $rp->slug) }}">
                                            <img src="{{ $rp->image_url ?? asset('assets/images/ecommerce/png/1.png') }}"
                                                alt="{{ $rp->name }}"
                                                class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3">
                                        </a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <a href="javascript:void(0);" class="text-muted fs-12">{{ $rp->category?->name }}</a>
                                    <h6 class="mt-1 mb-2 fw-semibold fs-14">
                                        <a href="{{ route('user.product-details', $rp->slug) }}">{{ $rp->name }}</a>
                                    </h6>
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div class="fw-semibold fs-17 text-pink">
                                            PKR {{ number_format($rp->sale_price ?? $rp->price, 0) }}
                                        </div>
                                        @if($rp->sale_price)
                                        <s class="text-muted fs-12">PKR {{ number_format($rp->price, 0) }}</s>
                                        @endif
                                    </div>
                                    <div class="d-flex gap-1 justify-content-between flex-wrap">
                                        <a href="{{ route('user.check-out') }}" class="btn btn-success-light btn-sm">
                                            <i class="bx bx-credit-card-alt"></i> Buy Now
                                        </a>
                                        <a href="{{ route('user.cart') }}" class="btn btn-primary btn-sm">
                                            <i class="bx bxs-cart-add"></i> Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        @endif

    </div>
</div>

@endsection