
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Order details</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between gap-2 align-items-center">
                                        <div>
                                            <div class="card-title mb-1">
                                                Order Details
                                            </div>
                                            <p class="mb-0 fs-12"><span class="text-muted me-1">Ordered Date:</span> 5th Mar,2024</p>
                                        </div>
                                         <a href="route{{('orders')}}" class="btn btn-primary btn-sm rounded-pill btn-w-md py-2"> Go to List</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-semibold mb-2">Customer Details: </div>
                                                <div class="d-flex gap-5 flex-wrap">
                                                    <div>
                                                        <p class="mb-1 fw-semibold">Sophia Mitchell</p>
                                                        <span class="text-muted mb-1 fs-12"> Phone Number:</span>
                                                        <div>+44-7896-123456</div>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="text-muted mb-1 fs-12"> Email ID:</span>
                                                        <div>sophiamitchell@mail.mail</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-semibold mb-2">Shipping Address: </div>
                                                <div class="d-flex gap-5 flex-wrap">
                                                    <div>
                                                        <p class="mb-1 fw-semibold">Sophia Mitchell</p>
                                                        <p class="mb-1  fs-13">sophiamitchell@mail.mail</p>
                                                        <p class="mb-0  fs-13">+44-7896-123456</p>
                                                    </div>
                                                    <p class="mb-0">
                                                        55B Baker Street, Suite 22,<br>
                                                        Kensington Square,<br>
                                                        Near City Tower, 45678, London, UK
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3 gy-3 gy-xl-0">
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-semibold mb-2">Order Summary: </div>
                                                <div class="list-group list-group-flush p-2 bg-light rounded">
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Sub Total</div>
                                                        <div class="fw-semibold fs-14">$680.98</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Discount</div>
                                                        <div class="fw-semibold fs-14 text-success">20% - $136.20</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Delivery Charges</div>
                                                        <div class="fw-semibold fs-14 text-danger">- $5</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Service Tax (18%)</div>
                                                        <div class="fw-semibold fs-14">- $119.56</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted mb-2 fs-14">Total:</div>
                                                        <h4 class="mb-0">
                                                            <s class="text-muted fs-12 fw-normal me-1">
                                                                $680.98
                                                            </s>$420.22
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-semibold mb-2">Order Info: </div>
                                                <div class="list-group list-group-flush p-2 bg-light rounded">
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Order ID :</div>
                                                        <div class="fw-semibold fs-14">#477945119</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Total Items :</div>
                                                        <div class="badge bg-info rounded-pill">02 Products</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Order Date :</div>
                                                        <div class="fw-semibold fs-14">05th Mar, 2024</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted">Delivered By:</div>
                                                        <div class="fw-semibold fs-14">16th Mar, 2024</div>
                                                    </div>
                                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                                        <div class="text-muted mb-2 fs-14">Status:</div>
                                                        <div class="badge rounded-pill bg-primary">Shipping...</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-14 fw-semibold mb-4">Order Status: </div>
                                        <div class="p-3 bg-light rounded">
                                            <div class="row justify-content-between flex-column flex-sm-row">
                                                <div class="order-tracking text-center completed">
                                                    <span class="is-complete mb-3 avatar avatar-sm">
                                                    </span>
                                                    <p class="mb-1 fw-semibold">01</p>
                                                    <p class="mb-1">Order Placed</p>
                                                    <p>05th, Mar 2024</p>
                                                </div>
                                                <div class="order-tracking text-center completed">
                                                    <span class="is-complete mb-3 avatar avatar-sm"></span>
                                                    <p class="mb-1 fw-semibold">02</p>
                                                    <p class="mb-1">Comfirmed</p>
                                                    <p>08th, Mar 2024</p>
                                                </div>
                                                <div class="order-tracking text-center completed">
                                                    <span class="is-complete mb-3 avatar avatar-sm"></span>
                                                    <p class="mb-1 fw-semibold">03</p>
                                                    <p class="mb-1">Shipped</p>
                                                    <p>05th, Mar 2024</p>
                                                </div>
                                                <div class="order-tracking text-center">
                                                    <span class="is-complete mb-3 avatar avatar-sm"></span>
                                                    <p class="mb-1 fw-semibold">04</p>
                                                    <p class="mb-1">Delivered </p>
                                                    <p>16th, Mar 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title">
                                            Ordered Products
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            S.no
                                                        </th>
                                                        <th>
                                                            Product Name
                                                        </th>
                                                        <th>
                                                            Price
                                                        </th>
                                                        <th>
                                                            Quantity
                                                        </th>
                                                        <th>
                                                            Tracking ID
                                                        </th>
                                                        <th class="text-center">
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-semibold">
                                                            01.
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="../assets/images/ecommerce/png/1.png" alt="" class="product-img p-2 bg-secondary-transparent">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-2 fs-16 fw-semibold">
                                                                        <a href="javascript:void(0);">Women's Slim Bag</a>
                                                                    </div><span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>20 OFF</span>
                                                                    <div class="my-2">
                                                                        <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Grey</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">Compact</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-20 text-pink">
                                                                    $545
                                                                </div>
                                                                <s class="text-muted fs-12"> $854.00</s>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            01
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-light text-default"> #18A78Y65K62O2P49P</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="fs-15 fw-semibold">
                                                                $545
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">
                                                            02.
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="../assets/images/ecommerce/png/2.png" alt="" class="product-img p-2 bg-pink-transparent">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-2 fs-16 fw-semibold">
                                                                        <a href="javascript:void(0);">Beautiful Candle Set</a>
                                                                    </div>
                                                                    <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>15% OFF</span>
                                                                    <div class="my-2">
                                                                        <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Blue</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">42</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="fw-semibold fs-20 text-pink">
                                                                    $85
                                                                </div>
                                                                <s class="text-muted fs-12">
                                                                    $100.00
                                                                </s>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            02
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-light text-default"> #87492652JTTD8969</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="fs-15 fw-semibold">
                                                                $85
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top-0 d-flex align-items-center justify-content-between gap-2">
                                        <button class="btn btn-primary-light btn-wave   " onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                        <button class="btn btn-primary btn-wave "><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Share Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                @endsection
    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

