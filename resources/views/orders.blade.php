

@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Orders</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card border border-primary border-opacity-10 bg-primary-transparent">
                            <div class="card-body d-flex align-items-center gap-2">
                                <span> <i class="ri-box-2-fill fs-5 lh-1 text-primary"></i></span>
                                <h6 class="mb-0">All Orders</h6>
                                <span class="badge bg-primary ms-auto">45 Orders</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card border border-secondary border-opacity-25 bg-secondary-transparent">
                            <div class="card-body d-flex align-items-center gap-2">
                                <span> <i class="ri-box-2-fill fs-5 lh-1 text-secondary"></i></span>
                                <h6 class="mb-0">Orders Pending</h6>
                                <span class="badge bg-secondary ms-auto">03 Orders</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card border border-danger border-opacity-10 bg-danger-transparent">
                            <div class="card-body d-flex align-items-center gap-2">
                                <span> <i class="ri-box-2-fill fs-5 lh-1 text-danger"></i></span>
                                <h6 class="mb-0">Cancelled</h6>
                                <span class="badge bg-danger ms-auto">15 Orders</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card border border-success border-opacity-10 bg-success-transparent">
                            <div class="card-body d-flex align-items-center gap-2">
                                <span> <i class="ri-box-2-fill fs-5 lh-1 text-success"></i></span>
                                <h6 class="mb-0">Delivered</h6>
                                <span class="badge bg-success ms-auto">23 Orders</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            All Orders List
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
                        <div class="input-group p-3 bg-light rounded">
                            <input type="text" class="form-control" placeholder="Search your Orders with Order Id.." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ti ti-search"></i></a>
                        </div> 
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Ordered Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="order-list">
                                        <td>#1154632</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/1.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Women's Slim Bag</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/3.jpg" alt="">
                                                </span>Emma Watson
                                            </div>
                                        </td>
                                        <td>(123) 456-7890</td>
                                        <td>
                                            10 Feb 2024
                                        </td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>Credit Card</td>
                                        <td class="fw-semibold">$120.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1154634</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/2.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Beautiful Candle Set</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/9.jpg" alt="">
                                                </span>Michael Smith
                                            </div>
                                        </td>
                                        <td>(321) 654-9876</td>
                                        <td>
                                            22 Feb 2024
                                        </td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                        <td>PayPal</td>
                                        <td class="fw-semibold">$180.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1173652</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/3.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Printed Designer Top</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                </span>Sophia Johnson
                                            </div>
                                        </td>
                                        <td>(987) 654-3210</td>
                                        <td>
                                            5 Mar 2024
                                        </td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                        <td>Debit Card</td>
                                        <td class="fw-semibold">$150.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1185634</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/4.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Men's Casual Sneakers</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="">
                                                </span>Chris Evans
                                            </div>
                                        </td>
                                        <td>(456) 789-0123</td>
                                        <td>
                                            15 Mar 2024
                                        </td>
                                        <td><span class="badge bg-success">Shipped</span></td>
                                        <td>Cash On Delivery</td>
                                        <td class="fw-semibold">$95.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1257842</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/5.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Flower Pot</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                </span>David Harper
                                            </div>
                                        </td>
                                        <td>(789) 123-4567</td>
                                        <td>
                                            22 Apr 2024
                                        </td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                        <td>Credit Card</td>
                                        <td class="fw-semibold">$299.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1257845</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/7.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Decorative Wall Clock</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/13.jpg" alt="">
                                                </span>Jessica Parker
                                            </div>
                                        </td>
                                        <td>(567) 234-9876</td>
                                        <td>
                                            29 Apr 2024
                                        </td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>PayPal</td>
                                        <td class="fw-semibold">$899.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="order-list">
                                        <td>#1257847</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="../assets/images/ecommerce/png/6.png" class="w-100 h-100" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="{{route('order-details')}}">Wrist watch</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/14.jpg" alt="">
                                                </span>Michael Johnson
                                            </div>
                                        </td>
                                        <td>(987) 456-7891</td>
                                        <td>
                                            2 May 2024
                                        </td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                        <td>Debit Card</td>
                                        <td class="fw-semibold">$179.00</td>
                                        <td>
                                            <a href="{{route('order-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="d-flex align-items-center flex-wrap overflow-auto">
                            <div class="mb-2 mb-sm-0">
                                Showing <b>1</b> to <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
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
                <!--End::row-1 -->
   
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    @endsection
 