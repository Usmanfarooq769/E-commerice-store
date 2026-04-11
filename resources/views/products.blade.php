<link rel="stylesheet" href="../assets/libs/nouislider/nouislider.min.css">
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Products</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: Row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Products
                                </div>
                                <div class="btn-group mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-sort-descending-2 me-1 d-inline-block"></i> Sort By
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Created Date</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Orders</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Product Name</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group p-3 bg-light rounded mb-3">
                                    <input type="text" class="form-control" placeholder="Search your Orders with Order Id.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="ti ti-search"></i></a>
                                </div>
                                <h6 class="mb-0"> Showing <span class="fw-semibold text-PRIMARY">87,949</span>  products found matching your search.</h6> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9">                             
                        <div class="row">
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <div class="badge bg-success d-inline-block">12% Off</div>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href= "{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href= "{{route('product-details')}}">
                                                    <img src="../assets/images/ecommerce/png/1.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Elite Travel Collection</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}" >Women's Luxury Slim Bag </a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $120
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $180.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href="{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href= "{{route('cart')}}"  class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-info">15% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href= "{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href= "{{route('product-details')}}" >
                                                    <img src="../assets/images/ecommerce/png/2.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Home Fragrance Essentials</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href= "{{route('product-details')}}">Handcrafted Scented Candles</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $35
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $50.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href= "{{route('check-out')}}"  class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href= "{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primary">24% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href= "{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href= "{{route('product-details')}}">
                                                    <img src="../assets/images/ecommerce/png/3.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Fashion Forward</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href= "{{route('product-details')}}">Designer Summer Top</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $80
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $110.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href= "{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href= "{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-success">60% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href= "{{route('product-details')}}">
                                                    <img src="../assets/images/ecommerce/png/4.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Urban Sports Gear</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Lightweight Sneakers</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $130
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $200.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href= "{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-secondary">10% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <img src="../assets/images/ecommerce/png/5.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Floral Decor</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href= "{{route('product-details')}}">Ceramic Flowerpot</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $60
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $90.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href="{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-success">60% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href="{{route('product-details')}}">
                                                    <img src="../assets/images/ecommerce/png/6.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Precision Timepieces</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Luxury Wrist Watch</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $350
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $450.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href= "{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-warning">15% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <a href="{{route('product-details')}}">
                                                    <img src="../assets/images/ecommerce/png/7.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Home Decor Collection</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Vintage Wall Clock</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $75
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $110.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href="{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-danger">50% Off</span>
                                        </div>
                                        <div class="card-img-top">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2">
                                                <img src="../assets/images/ecommerce/png/8.png" alt="img" class="scale-img img-fluid w-100 bg-gray-400 rounded-top p-3"> 
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between">
                                                <a href="javascript:void(0);" class="text-muted fs-12">Kitchen Essentials</a>
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                            </div>
                                            <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Steel Electric Kettle</a></h6>
                                            <div class="d-flex gap-2 align-items-center mb-2">
                                                <div class="fw-semibold fs-20 text-pink">
                                                    $45
                                                </div>
                                                <s class="text-muted fs-12">
                                                    $65.00
                                                </s>
                                            </div>
                                            <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                <a href="{{route('check-out')}}" class="btn btn-success-light btn-sm">
                                                    <i class="bx bx-credit-card-alt"></i> Buy Now
                                                </a>
                                                <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Start::pagination -->
                                <nav aria-label="Page navigation" class="pagination-style-4 mt-3">
                                    <ul class="pagination text-center justify-content-center gap-1">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0)">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-primary" href="javascript:void(0)">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- End::pagination -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card products-navigation-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Filter
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-decoration-underline fw-medium text-Secondary">Clear All</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="fw-semibold mb-0">Categories</h6>
                                    <div class="py-3 pb-0">
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="c-1" checked>
                                            <label class="form-check-label text-wrap pe-3" for="c-1">
                                                Home Appliances <span class="fs-11 fw-normal text-muted">(5,894)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="c-2">
                                            <label class="form-check-label text-wrap pe-3" for="c-2">
                                                Fashion & Accessories <span class="fs-11 fw-normal text-muted">(3,120)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="c-3" checked>
                                            <label class="form-check-label text-wrap pe-3" for="c-3">
                                                Furniture & Decor <span class="fs-11 fw-normal text-muted">(9,432)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="c-4" checked>
                                            <label class="form-check-label text-wrap pe-3" for="c-4">
                                                Beauty & Wellness <span class="fs-11 fw-normal text-muted">(6,589)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="c-5">
                                            <label class="form-check-label text-wrap pe-3" for="c-5">
                                                Outdoor & Sports Equipment <span class="fs-11 fw-normal text-muted">(4,786)</span>
                                            </label>
                                        </div>
                                        <div class="collapse" id="category-more">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-6">
                                                <label class="form-check-label text-wrap pe-3" for="c-6">
                                                    Books & Stationery <span class="fs-11 fw-normal text-muted">(3,512)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-7">
                                                <label class="form-check-label text-wrap pe-3" for="c-7">
                                                    Food & Beverages <span class="fs-11 fw-normal text-muted">(1,987)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link mt-3 d-block" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                    </div>
                                </div>
                                
                                <div class="p-3 border-bottom">
                                    <h6 class="fw-semibold mb-0">Price Range</h6>
                                    <div class="py-3 pb-0">
                                        <div id="nonlinear"></div>
                                        <div class="d-flex mt-4">
                                            <div class="fw-semibold h6">$<span id="lower-value"></span></div>
                                            &nbsp; -- &nbsp; 
                                            <div class="fw-semibold h6">$<span id="upper-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <h6 class="fw-semibold mb-0">Colors</h6>
                                    <div class="py-3 pb-0">
                                        <p class="mb-0 d-flex align-items-center">
                                            <a class="color-1 product-colors flex-shrink-0" href="javascript:void(0)">
                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                            </a>
                                            <a class="color-2 product-colors flex-shrink-0" href="javascript:void(0)">
                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                            </a>
                                            <a class="color-3 product-colors flex-shrink-0" href="javascript:void(0)">
                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                            </a>
                                            <a class="color-4 product-colors flex-shrink-0 selected" href="javascript:void(0)">
                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                            </a>
                                            <a class="color-5 product-colors flex-shrink-0" href="javascript:void(0)">
                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                            </a>
                                        </p>                                        
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <h6 class="fw-semibold mb-0">Brand</h6>
                                    <div class="py-3 pb-0">
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="j-1" checked>
                                            <label class="form-check-label text-wrap pe-3" for="j-1">
                                                Zenith <span class="fs-11 fw-normal text-muted">(1,223)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="j-2" checked>
                                            <label class="form-check-label text-wrap pe-3" for="j-2">
                                                FlexWear <span class="fs-11 fw-normal text-muted">(3,145)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="j-3" checked>
                                            <label class="form-check-label text-wrap pe-3" for="j-3">
                                                OmegaTech <span class="fs-11 fw-normal text-muted">(895)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="j-4">
                                            <label class="form-check-label text-wrap pe-3" for="j-4">
                                                ProActive <span class="fs-11 fw-normal text-muted">(512)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-0 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="j-5">
                                            <label class="form-check-label text-wrap pe-3" for="j-5">
                                                Griffin & Co. <span class="fs-11 fw-normal text-muted">(1,894)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="p-3">
                                    <h6 class="fw-semibold mb-0">Sizes</h6>
                                    <div class="py-3 pb-0">
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="e-1" checked>
                                            <label class="form-check-label text-wrap pe-3" for="e-1">
                                                Petite (P) <span class="fs-11 fw-normal text-muted">(432)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="e-2">
                                            <label class="form-check-label text-wrap pe-3" for="e-2">
                                                Small (S) <span class="fs-11 fw-normal text-muted">(1,219)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 p-0">
                                            <input class="form-check-input float-end" type="checkbox" value="" id="e-3" checked>
                                            <label class="form-check-label text-wrap pe-3" for="e-3">
                                                Regular Medium (M) <span class="fs-11 fw-normal text-muted">(10,842)</span>
                                            </label>
                                        </div>
                                        <div class="collapse" id="sizes-more">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-4">
                                                    Large (L) <span class="fs-11 fw-normal text-muted">(897)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="s-5">
                                                <label class="form-check-label text-wrap pe-3" for="s-5">
                                                    Extra Large (XL) <span class="fs-11 fw-normal text-muted">(1,025)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="s-6">
                                                <label class="form-check-label text-wrap pe-3" for="s-6">
                                                    XXL <span class="fs-11 fw-normal text-muted">(156)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-0 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="s-7">
                                                <label class="form-check-label text-wrap pe-3" for="s-7">
                                                    XXXL <span class="fs-11 fw-normal text-muted">(402)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <a class="ecommerce-more-link mt-3 d-block" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                    </div>
                                </div>                                
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- End:: Row-1 -->

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    @endsection