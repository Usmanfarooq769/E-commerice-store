
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Wishlist</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Wishlist
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                                </th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Items</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Rating</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/13.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Smart Fitness Tracker</a></p>
                                                            <p class="fs-12 text-muted mb-0">FitLife</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Wearables</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $199
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $299.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>150</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line me-1"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/5.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Ultra-HD 4K TV</a></p>
                                                            <p class="fs-12 text-muted mb-0">VisionTech</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Home Electronics</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $1,599
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $2,199.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>42</td>
                                                <td><span class="badge bg-danger-transparent">Limited Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/7.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Noise Cancelling Earbuds</a></p>
                                                            <p class="fs-12 text-muted mb-0">SilencePro</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Audio</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $249
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $349.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>200</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/8.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Bronze Kettle</a></p>
                                                            <p class="fs-12 text-muted mb-0">GameMaster</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Utensils</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $79
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $129.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>320</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>  
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/8.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Portable Bluetooth Speaker</a></p>
                                                            <p class="fs-12 text-muted mb-0">AudioBlast</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Audio</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $129
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $199.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>180</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/9.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Smart Home Hub</a></p>
                                                            <p class="fs-12 text-muted mb-0">HomeSmart</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Home Automation</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $249
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $349.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>75</td>
                                                <td><span class="badge bg-danger-transparent">Limited Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/10.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Smart Thermostat</a></p>
                                                            <p class="fs-12 text-muted mb-0">EcoHome</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Home Automation</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $199
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $299.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>120</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="wishlist-list">
                                                <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product10" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-md avatar-square bg-light"><img src="../assets/images/ecommerce/png/11.png" class="w-100 h-100" alt="..."></span>
                                                        <div class="ms-2">
                                                            <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Wireless Charging Pad</a></p>
                                                            <p class="fs-12 text-muted mb-0">ChargeMax</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Accessories</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-17 text-pink">
                                                            $59
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $99.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>250</td>
                                                <td><span class="badge bg-success">In Stock</span></td>
                                                <td>
                                                    <div class="min-w-fit-content">
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{route('cart')}}" class="btn btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center flex-wrap overflow-auto">
                                    <div class="mb-2 mb-sm-0">
                                        Showing <b>1</b> to <b>8</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <ul class="pagination mb-0 overflow-auto">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    @endsection
  