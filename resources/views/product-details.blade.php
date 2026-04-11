@extends('layouts.app')
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Product Details</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: Row-1 -->
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="sale-badge">Sale <span class="fs-10 op-8">30%OFF</span> </div>
                            <div class="card-body p-2 p-sm-5">
                                <div class="swiper swiper-preview-details bg-light product-details-page">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide p-4" id="img-container">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/10.png" alt="img">
                                        </div>
                                        <div class="swiper-slide p-4 image-container">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/11.png" alt="img">
                                        </div>
                                        <div class="swiper-slide p-4 image-container">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/9.png" alt="img">
                                        </div>
                                        <div class="swiper-slide p-4 image-container">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/12.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper swiper-view-details mt-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/10.png" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/11.png" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/9.png" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="../assets/images/ecommerce/png/12.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div> 
                                    <p class="fs-20 fw-semibold mb-3">RoyaliX Elegance Series - Premium Stainless Steel Wrist Chain Watch</p>
                                    <p class="fs-16 mb-3">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star-half text-warning"></i>
                                        <span class="fw-medium ms-1 fs-13">4.7<a class="text-muted ms-2" href="javascript:void(0);">(2.5k Reviews)</a></span>
                                    </p>
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-xl-7">
                                            <a href= "{{route('wishlist')}}" class="btn btn-outline-primary btn-w-lg me-2 mb-3"><i class="ri-heart-line fs-16 align-middle lh-1"></i> Add to Wishlist</a>
                                            <div class="mb-1"><span class="text-pink fw-semibold">Save Upto 30% Off</span> on M.R.P price</div>
                                            <div class="d-flex gap-3 align-items-center flex-wrap mb-1">
                                                <h2 class="fw-semibold">$578</h2>
                                                <div class="mb-0 text-muted fs-12">
                                                    <p class="mb-0"> <s>$879</s></p>
                                                </div>
                                            </div>
                                            <div class="mb-3 text-muted">Sale Ends in <span class="text-danger fw-semibold">: 3 Days Hurry Up!!!</span> </div>
                                            <div class="mb-3">
                                                <p class="fs-15 fw-semibold mb-1">Description :</p>
                                                <p class="text-muted mb-0 fs-13">
                                                    Experience the luxury of the RoyalX Elegance Series wristwatch, crafted with a premium stainless steel chain, sapphire glass, and water-resistant technology. Perfect for formal and casual occasions.
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center mb-3">
                                                <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Instock</p>
                                                <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> 1-Year Warranty</p>
                                            </div>
                                            <div class="d-flex gap-4 align-items-center mb-3 justify-content-between flex-wrap">
                                                <div class="d-flex gap-3 align-items-center flex-wrap">
                                                    <p class="fs-15 fw-semibold mb-1">Product Material :</p>
                                                    <div class="btn btn-light">Stainless Steel</div>
                                                    <div class="btn btn-light">Leather</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center mb-4">
                                                <div class="d-flex gap-4 align-items-center">
                                                    <p class="fs-15 fw-semibold mb-1">Quantity :</p>
                                                    <div class="product-quantity-container ecommerce-page-quantity">
                                                        <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                            <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light"><i class="ri-subtract-line"></i></button>
                                                            <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="1">
                                                            <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center flex-shrink-0 flex-wrap mb-4">
                                                <p class="fs-15 fw-semibold mb-0">Colors :</p>
                                                <p class="mb-0 d-flex align-items-center flex-wrap">
                                                    <a class="color-1 product-colors flex-shrink-0 selected" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-2 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-3 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-4 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-5 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <a href="{{route('check-out')}}" class="btn btn-primary btn-w-lg"><i class="bx bx-credit-card fs-16 align-middle"></i> Buy Now</a>
                                                <a href="{{route('cart')}}" class="btn btn-success btn-w-lg"><i class="bx bx-cart-add fs-16 align-middle"></i> Add to Cart</a>
                                            </div>
                                        </div>
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
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">5-star rated product in good condition</div>
                                                        <div class="lh-1 fs-14 text-warning"><i class="ri-star-fill"></i></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-1 justify-content-between flex-wrap mb-3 align-items-center p-2 bg-light rounded">
                                                    <div class="fw-medium">Get a Coupon :</div>
                                                    <span class="badge bg-pink fs-11 ms-3"><i class="ri-coupon-2-line me-1 align-middle d-inline-block"></i> Coupon</span>
                                                </div>
                                                <div class="p-3 border border-dashed rounded">
                                                    <h3 class="mb-1">30% Off <span class="fs-13 text-danger"> Special off on cauals</span>
                                                    </h3>
                                                    <div class="text-muted fs-12 mb-3">check below some of the offers on </div>
                                                    <div class="d-flex justify-content-center gap-2 mb-3 flex-wrap">
                                                        <span class="avatar avatar-xl p-1 bg-primary-transparent">
                                                            <img src="../assets/images/ecommerce/png/17.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-xl p-1 bg-primary-transparent">
                                                            <img src="../assets/images/ecommerce/png/16.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-xl p-1 bg-light">
                                                            <img src="../assets/images/ecommerce/png/18.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-xl p-1 bg-light">
                                                            <img src="../assets/images/ecommerce/png/28.png" alt="">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-secondary-light d-grid">
                                                        Check More Offers Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Featured Products 
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">View All</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="../assets/images/ecommerce/png/1.png" alt="" class>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-14 fw-semibold similar-product-name text-truncate">Ladies' Slim Bag </p>
                                                            <div class="mb-2">
                                                                <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                4.3
                                                            </div>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-17 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $854.00
                                                                </s>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-self-end">
                                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="../assets/images/ecommerce/png/2.png" alt="" class>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-1 fs-14 fw-semibold similar-product-name text-truncate">Wireless Headphones</p>
                                                            <div class="mb-2">
                                                                <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                4.3
                                                            </div>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-17 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $854.00
                                                                </s>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-self-end">
                                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="../assets/images/ecommerce/png/3.png" alt="" class>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-1 fw-semibold similar-product-name text-truncate">Wireless Earbuds</p>
                                                            <div class="mb-2">
                                                                <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                4.3
                                                            </div>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-17 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $854.00
                                                                </s>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-self-end">
                                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="../assets/images/ecommerce/png/4.png" alt="" class>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-1 fw-semibold similar-product-name text-truncate">Voluptatem Alarm Clock </p>
                                                            <div class="mb-2">
                                                                <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                4.3
                                                            </div>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-17 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $854.00
                                                                </s>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-self-end">
                                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="../assets/images/ecommerce/png/5.png" alt="" class>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-1 fw-semibold similar-product-name text-truncate">Lightweight Sneakers</p>
                                                            <div class="mb-2">
                                                                <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                4.3
                                                            </div>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-17 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $854.00
                                                                </s>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-self-end">
                                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2" id="myTab4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link bg-primary-transparent px-4 active" id="product-details" data-bs-toggle="tab" data-bs-target="#product-details-pane" type="button" role="tab" aria-controls="product-details-pane" aria-selected="true">Product Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link bg-primary-transparent px-4" id="key-features-tab" data-bs-toggle="tab" data-bs-target="#key-features-tab-pane" type="button" role="tab" aria-controls="key-features-tab-pane" aria-selected="false" tabindex="-1">Key Features</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content">
                                <div class="tab-pane show active overflow-hidden p-0 border-0 rounded-0" id="product-details-pane" role="tabpanel" aria-labelledby="product-details" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Brand
                                                    </th>
                                                    <td>RoyaliX</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Series
                                                    </th>
                                                    <td>
                                                        Elegance Series
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Material
                                                    </th>
                                                    <td>
                                                        Premium Stainless Steel
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Type
                                                    </th>
                                                    <td>
                                                        Wrist Chain Watch
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Water Resistance
                                                    </th>
                                                    <td>
                                                        Up to 50 meters
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-semibold">
                                                        Warranty
                                                    </th>
                                                    <td>
                                                        2 Years International Warranty
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>                                        
                                    </div>
                                </div>
                                <div class="tab-pane overflow-hidden p-0 border-0" id="key-features-tab-pane" role="tabpanel" aria-labelledby="key-features-tab" tabindex="1">
                                    <ul class="mb-0 ps-0">
                                        <li class="mb-3"><span class="fw-semibold">Design:</span> Sleek and sophisticated design crafted from premium stainless steel for a luxurious and durable finish.</li>
                                        <li class="mb-3"><span class="fw-semibold">Water Resistance:</span> Up to 50 meters of water resistance, making it perfect for daily wear and light water activities.</li>
                                        <li class="mb-3"><span class="fw-semibold">Movement:</span> Precision quartz movement ensures accurate timekeeping with minimal maintenance.</li>
                                        <li class="mb-3"><span class="fw-semibold">Strap:</span> Stainless steel wrist chain with a secure clasp for a comfortable yet elegant fit.</li>
                                        <li class="mb-3"><span class="fw-semibold">Warranty:</span> Backed by a 2-year international warranty, offering peace of mind for your purchase.</li>
                                        <li class="mb-3"><span class="fw-semibold">Dial:</span> Classic round dial with minimalistic markers for a timeless and refined look.</li>
                                        <li class="mb-3"><span class="fw-semibold">Luminous Hands:</span> Features glow-in-the-dark hands for easy readability, even in low-light conditions.</li>
                                        <li class="mb-0"><span class="fw-semibold">Style:</span> Perfectly suited for both formal occasions and everyday wear, elevating your fashion game effortlessly.</li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="p-3">
                                <div class="mb-3 fw-semibold fs-16">Reviews</div>
                                <div class="swiper swiper-reviews">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="d-sm-flex d-block align-items-start">
                                                <span class="avatar avatar-md avatar-rounded me-2 flex-shrink-0">
                                                    <img src="../assets/images/faces/1.jpg" alt="">
                                                </span>
                                                <div>
                                                    <div class="mb-3">
                                                        <p class="fw-semibold mb-1">Elegance and Durability Combined!</p>
                                                        <p class="mb-0 fs-11">The RoyaliX Elegance Series watch is a perfect blend of style and durability. The stainless steel design is stunning, and it's comfortable for daily wear. The water resistance is a great!</p>
                                                    </div>
                                                    <div class="fw-medium">-- Neelin Mehta</div>
                                                </div>
                                                <div class="ms-auto mt-sm-0 mt-2 text-end">
                                                    <div class="mb-3 fs-11 fw-normal text-nowrap">
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        4.8
                                                        <span class="text-muted fs-10">(3rd Mar,2024)</span>
                                                    </div><button class="btn btn-sm btn-light me-2">Report</button>
                                                    <button class="btn btn-sm btn-icon btn-primary-light me-2">
                                                        <i class="ri-thumb-up-line"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-primary-light">
                                                        <i class="ri-thumb-down-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-sm-flex d-block align-items-start">
                                                <span class="avatar avatar-md avatar-rounded me-2 flex-shrink-0">
                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                </span>
                                                <div>
                                                    <div class="mb-3">
                                                        <p class="fw-semibold mb-1">Stylish and Comfortable!</p>
                                                        <p class="mb-0 fs-11">I absolutely love my RoyaliX Elegance Series watch. The stainless steel wrist chain is both elegant and comfortable, and it fits perfectly. The luminous hands make it easy to read!</p>
                                                    </div>
                                                    <div class="fw-medium">-- Paramesh Jen</div>
                                                </div>
                                                <div class="ms-auto mt-sm-0 mt-2 text-end">
                                                    <div class="mb-3 fs-11 fw-normal text-nowrap">
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        <i class="bi bi-star-fill text-warning align-middle lh-1 me-1 fw-normal align-middle"></i> 
                                                        4.7
                                                        <span class="text-muted fs-10">(3rd Mar,2024)</span>
                                                    </div><button class="btn btn-sm btn-light me-2">Report</button>
                                                    <button class="btn btn-sm btn-icon btn-primary-light me-2">
                                                        <i class="ri-thumb-up-line"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-icon btn-primary-light">
                                                        <i class="ri-thumb-down-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card border">
                            <div class="card-header">
                                <div class="card-title">
                                    Additional Features
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="list-group list-group-flush bg-light rounded">
                                    <div class="list-group-item">
                                        <div class="text-muted"><span class="text-default fw-semibold">Waterproof Rating:</span> Rated for water resistance up to 50 meters, making it suitable for swimming and light diving.</div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="text-muted"><span class="text-default fw-semibold">Scratch-Resistant Glass:</span> Equipped with a durable, scratch-resistant sapphire crystal to maintain its clear and polished appearance.</div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="text-muted"><span class="text-default fw-semibold">Adjustable Bracelet:</span> The stainless steel wrist chain features an adjustable clasp for a secure and custom fit.</div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="d-flex gap-2 justify-content-between card-body flex-wrap">
                                <div class="flex-fill">
                                    <div class="mb-3 fw-semibold fs-16">Rating</div>
                                    <div class="mb-2 fw-medium">
                                        <span class="me-1">5 Star</span> <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                    </div>
                                    <div class="mb-2 fw-medium">
                                        <span class="me-1">4 Star</span> <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="mb-2 fw-medium">
                                        <span class="me-1">3 Star</span> <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="mb-2 fw-medium">
                                        <span class="me-1">2 Star</span> <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="mb-0 fw-medium">
                                        <span class="me-1">1 Star</span> <i class="bi bi-star-fill text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning me-1"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded p-3 pt-2 flex-fill">
                                    <div class="fs-2">
                                    4.3 
                                    </div>
                                    <span class="text-muted fs-13">(out of 5)</span>
                                    <p class="mb-3 mt-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                    </p>
                                    <a class="btn btn-success btn-sm w-100" href="javascript:void(0);">Leave Us a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: Row-1 -->

                <!-- Start:: Row-2 -->
                <h5>Related Products</h5>
                <p class="">Discover more products similar to this one and elevate your style.</p>
                <div class="swiper swiper-related-products">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card custom-card card-style-2">
                                <div class="card-body p-0">
                                    <div class="top-left-badge">
                                        <div class="badge bg-success d-inline-block">12% Off</div>
                                    </div>
                                    <div class="card-img-top">
                                        <div class="btns-container-1 align-items-center gap-1">
                                            <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                        </div>
                                        <div class="img-box-2">
                                            <a href="{{route('product-details')}}">
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
                                        <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Women's Luxury Slim Bag </a></h6>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="fw-semibold fs-17 text-pink">
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
                                            <a href="{{route('cart')}}" class="btn btn-primary btn-sm">
                                                <i class="bx bxs-cart-add"></i> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card custom-card card-style-2">
                                <div class="card-body p-0">
                                    <div class="top-left-badge">
                                        <span class="badge bg-info">15% Off</span>
                                    </div>
                                    <div class="card-img-top">
                                        <div class="btns-container-1 align-items-center gap-1">
                                            <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                        </div>
                                        <div class="img-box-2">
                                            <a href="{{route('product-details')}}">
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
                                        <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Handcrafted Scented Candles</a></h6>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="fw-semibold fs-17 text-pink">
                                                $35
                                            </div>
                                            <s class="text-muted fs-12">
                                                $50.00
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
                        <div class="swiper-slide">
                            <div class="card custom-card card-style-2">
                                <div class="card-body p-0">
                                    <div class="top-left-badge">
                                        <span class="badge bg-primary">24% Off</span>
                                    </div>
                                    <div class="card-img-top">
                                        <div class="btns-container-1 align-items-center gap-1">
                                            <a href="{{route('wishlist')}}" class="btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                        </div>
                                        <div class="img-box-2">
                                            <a href="{{route('product-details')}}">
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
                                        <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Designer Summer Top</a></h6>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="fw-semibold fs-17 text-pink">
                                                $80
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
                        <div class="swiper-slide">
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
                                            <div class="fw-semibold fs-17 text-pink">
                                                $130
                                            </div>
                                            <s class="text-muted fs-12">
                                                $200.00
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
                        <div class="swiper-slide">
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
                                        <h6 class="mt-1 mb-2 fw-semibold fs-14"><a href="{{route('product-details')}}">Ceramic Flowerpot</a></h6>
                                        <div class="d-flex gap-2 align-items-center mb-2">
                                            <div class="fw-semibold fs-17 text-pink">
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
                        <div class="swiper-slide">
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
                                            <div class="fw-semibold fs-17 text-pink">
                                                $350
                                            </div>
                                            <s class="text-muted fs-12">
                                                $450.00
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
                        <div class="swiper-slide">
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
                                            <div class="fw-semibold fs-17 text-pink">
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
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- End:: Row-2 -->    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    @endsection

 