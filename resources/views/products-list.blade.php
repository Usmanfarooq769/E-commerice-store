
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Products List</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">   
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                            <span class="ms-2"> Select All</span>
                                        </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Publisher</th>
                                        <th scope="col">Published On</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/1.png" class="w-100 h-100" alt="Women's Slim Bag">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Women's Slim Bag</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: SoundWave</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$1,299</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">283</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2"> Accessories</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="Mayor Kelly">
                                                </span>
                                                <a href="javascript:void(0);">Mayor Kelly</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">24, Nov 2023 - 04:42PM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/7.png" class="w-100 h-100" alt="Wall Clock">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Wall Clock</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: SoundWave</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$1,299</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">283</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2">Electronics</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="Mayor Kelly">
                                                </span>
                                                <a href="javascript:void(0);">Mayor Kelly</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">24, Nov 2023 - 04:42PM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" id="product2" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/2.png" class="w-100 h-100" alt="Beautiful Candle Set">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Beautiful Candle Set</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: TimeMaster</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$899</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">150</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2">Wearables</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/5.jpg" alt="Sarah Connor">
                                                </span>
                                                <a href="javascript:void(0);">Sarah Connor</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">22, Nov 2023 - 02:15PM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i> Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" id="product3" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/3.png" class="w-100 h-100" alt="Printed Designer Top">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Printed Designer Top</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: GamerPro</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$2,499</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">75</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2">Laptops</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="John Doe">
                                                </span>
                                                <a href="javascript:void(0);">John Doe</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">20, Nov 2023 - 11:30AM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i> Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" id="product4" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/4.png" class="w-100 h-100" alt="Men's Casual Sneakers">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Men's Casual Sneakers</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: SoundWave</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$299</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">420</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2">Audio</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/7.jpg" alt="Alice Johnson">
                                                </span>
                                                <a href="javascript:void(0);">Alice Johnson</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">18, Nov 2023 - 01:05PM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i> Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox">
                                            <input class="form-check-input" type="checkbox" id="product5" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/5.png" class="w-100 h-100" alt="Flower Pot">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Flower Pot</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: TechPro</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$999</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">520</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2">Mobile</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="Tom Harris">
                                                </span>
                                                <a href="javascript:void(0);">Tom Harris</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">15, Nov 2023 - 09:45AM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i> Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/8.png" class="w-100 h-100" alt="Electric Kettle">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Electric Kettle</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: AquaBoil</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$79.99</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">158</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2"> Kitchen Appliances</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="Manager John">
                                                </span>
                                                <a href="javascript:void(0);">Manager John</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">03, Dec 2024 - 11:15AM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="me-3 product-checkbox">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img src="../assets/images/ecommerce/png/34.png" class="w-100 h-100" alt="Sofa Chair">
                                                </span>
                                                <div class="ms-3">
                                                    <div class="mb-1 fw-medium text-truncate product-title-text"><a href="javascript:void(0);">Luxury Sofa Chair</a></div>
                                                    <p class="fs-12 text-muted mb-0">Brand: ComfortHome</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-2 fs-15 fw-semibold text-pink">$499.99</p>
                                        </td>
                                        <td>
                                            <p class="mb-2 fw-medium">142</p>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary mb-2">Published</span>
                                        </td>
                                        <td>
                                            <p class="fw-medium mb-2"> Furniture</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="Manager Lisa">
                                                </span>
                                                <a href="javascript:void(0);">Manager Lisa</a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-12 text-muted mb-0">02, Dec 2024 - 02:20PM</p>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{route('edit-products')}}" class="btn btn-sm btn-primary-light"><i class="ri-edit-line me-1"></i> Edit Product</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                        </td>
                                    </tr>                                                            
                                </tbody>
                            </table>
                        </div>
                        <div class="my-3 px-3">
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
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                        </li>
                                    </ul>
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