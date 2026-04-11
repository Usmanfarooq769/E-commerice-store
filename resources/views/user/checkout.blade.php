@extends('user-layout.app')

@section('content')

<div class="row">
    <div class="col-xxl-9">
        <div class="card custom-card">
            <div class="card-body product-checkout">
                <div class="row">

                    {{-- Tab Navigation --}}
                    <div class="col-xl-3">
                        <div class="p-3 border border-dashed rounded mb-5">
                            <ul class="nav nav-tabs flex-column nav-style-5 gap-3 checkout-tabs" role="tablist">
                                <li class="nav-item m-0 flex-fill">
                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2 active"
                                        id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button">
                                        <i class="ri-truck-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                        Shipping
                                    </button>
                                </li>
                                <li class="nav-item m-0 flex-fill">
                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2"
                                        id="confirmed-tab" data-bs-toggle="tab" data-bs-target="#confirm-tab-pane" type="button">
                                        <i class="ri-user-3-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                        Personal Details
                                    </button>
                                </li>
                                <li class="nav-item m-0 flex-fill">
                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2"
                                        id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" type="button">
                                        <i class="ri-checkbox-circle-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                        Complete Order
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="{{ asset('assets/images/ecommerce/png/15.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                    {{-- Tab Content --}}
                    <div class="col-xl-9">
                        <div class="tab-content border border-dashed">

                            {{-- STEP 1: Shipping --}}
                            <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane">
                                <div class="p-3">
                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                    <p class="fs-15 fw-semibold text-success mb-3">Shipping Address:</p>

                                    <div class="row gy-3 mb-4">
                                        <div class="col-xl-6">
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ship_address" placeholder="Street address">
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ship_city" placeholder="City">
                                        </div>
                                        <div class="col-xl-4">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" id="ship_state" placeholder="State">
                                        </div>
                                        <div class="col-xl-4">
                                            <label class="form-label">Country <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ship_country" placeholder="Country">
                                        </div>
                                        <div class="col-xl-4">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" id="ship_pincode" placeholder="Pincode">
                                        </div>
                                    </div>

                                    <p class="fs-15 fw-semibold mb-3 text-success">Shipping Method:</p>
                                    <div class="row gy-3 mb-4">
                                        <div class="col-xl-6">
                                            <div class="border rounded border-dashed p-2 bg-light">
                                                <div class="form-check mb-0">
                                                    <input id="shipping-standard" name="shipping_method_select"
                                                        type="radio" class="form-check-input mt-3" value="standard" checked>
                                                    <label class="form-check-label" for="shipping-standard">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="shipping-partner-details">
                                                                <p class="mb-0 fw-semibold">Standard Shipping</p>
                                                                <p class="text-muted fs-11 mb-0">Delivered within 7 Days</p>
                                                            </div>
                                                            <div class="fw-semibold ms-auto">PKR 5.00</div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="border rounded border-dashed p-2 bg-light">
                                                <div class="form-check mb-0">
                                                    <input id="shipping-express" name="shipping_method_select"
                                                        type="radio" class="form-check-input mt-3" value="express">
                                                    <label class="form-check-label" for="shipping-express">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="shipping-partner-details">
                                                                <p class="mb-0 fw-semibold">Express Shipping</p>
                                                                <p class="text-muted fs-11 mb-0">Delivered within 1 Day</p>
                                                            </div>
                                                            <div class="fw-semibold ms-auto">PKR 20.00</div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-success" id="to-personal-btn">
                                            Next <i class="ri-arrow-right-fill ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 2: Personal Details --}}
                            <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane">
                                <div class="p-3">
                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">02</p>
                                    <p class="fs-15 fw-semibold mb-3">Personal Details:</p>
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="per_firstname"
                                                placeholder="First Name"
                                                value="{{ auth()->user()->name ? explode(' ', auth()->user()->name)[0] : '' }}">
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="per_lastname"
                                                placeholder="Last Name"
                                                value="{{ auth()->user()->name && str_contains(auth()->user()->name, ' ') ? explode(' ', auth()->user()->name, 2)[1] : '' }}">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="per_email"
                                                placeholder="Email" value="{{ auth()->user()->email }}">
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="per_phone" placeholder="Phone Number">
                                        </div>
                                         <div class="col-xl-6">
                                            <label class="form-label">Shop Name <span class="text-danger">*</span></label>
                                            <input type="text" name="shop_name" class="form-control" id="per_shop_name" placeholder="e.g. Ahmed General Store">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-top d-sm-flex justify-content-between">
                                    <button class="btn btn-primary" id="back-to-shipping-btn">
                                        <i class="ri-arrow-left-fill me-2"></i> Back
                                    </button>
                                    <button class="btn btn-success mt-sm-0 mt-2" id="to-payment-btn">
                                        Continue <i class="ri-arrow-right-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- STEP 3: Place Order (COD) --}}
                            <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane">
                                <div class="p-3">
                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">03</p>
                                    <p class="fs-15 fw-semibold mb-3">Payment Method:</p>

                                    <div class="row gy-3 mb-4">
                                        <div class="col-xl-6">
                                            <div class="border rounded border-dashed p-3 bg-light">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio"
                                                        name="payment_method_select" id="pay-cod" value="cod" checked>
                                                    <label class="form-check-label fw-semibold" for="pay-cod">
                                                        <i class="ri-money-dollar-circle-line me-2 text-success fs-18"></i>
                                                        Cash on Delivery
                                                        <p class="mb-0 text-muted fs-12 fw-normal">Pay when you receive your order</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="border rounded border-dashed p-3 bg-light">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio"
                                                        name="payment_method_select" id="pay-card" value="card">
                                                    <label class="form-check-label fw-semibold" for="pay-card">
                                                        <i class="ri-bank-card-line me-2 text-primary fs-18"></i>
                                                        Credit / Debit Card
                                                        <p class="mb-0 text-muted fs-12 fw-normal">Pay securely online</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Order Review --}}
                                    <div class="p-3 border border-dashed rounded bg-light mb-4">
                                        <p class="fw-semibold mb-3">Order Review:</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Shipping to: <strong id="review-address">—</strong></p>
                                                <p class="mb-1 text-muted">Method: <strong id="review-shipping">—</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Name: <strong id="review-name">—</strong></p>
                                                <p class="mb-1 text-muted">Email: <strong id="review-email">—</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 border-top d-sm-flex justify-content-between">
                                    <button class="btn btn-primary" id="back-to-personal-btn">
                                        <i class="ri-arrow-left-fill me-2"></i> Back
                                    </button>
                                    <button class="btn btn-success mt-sm-0 mt-2" id="place-order-btn">
                                        <span id="place-order-text">Place Order</span>
                                        <span id="place-order-spinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                                        <i class="ri-checkbox-circle-line ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- SUCCESS --}}
                            <div class="tab-pane fade border-0 p-0" id="success-tab-pane">
                                <div class="p-3 checkout-payment-success py-5 text-center">
                                    <div class="mb-4">
                                        <h5 class="text-success fw-semibold">Order Placed Successfully!</h5>
                                    </div>
                                    <div class="mb-4 p-3 bg-success-transparent d-inline-block rounded-circle">
                                        <i class="ri-checkbox-circle-fill text-success" style="font-size:100px;"></i>
                                    </div>
                                    <div class="mb-4">
                                        <p class="mb-1 fs-14">
                                            Your order <b id="success-order-number">—</b> has been placed.
                                            Payment method: <b id="success-payment-method">—</b>
                                        </p>
                                        <p class="text-muted">We appreciate your business and look forward to serving you again!</p>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center flex-wrap">
                                        <button class="btn btn-success" id="download-invoice-btn">
                                            <i class="ri-download-line me-1"></i> Download Invoice
                                        </button>
                                        <button class="btn btn-primary" id="print-invoice-btn">
                                            <i class="ri-printer-line me-1"></i> Print Invoice
                                        </button>
                                        <a href="{{ route('user.products') }}" class="btn btn-secondary">
                                            Continue Shopping <i class="bi bi-cart ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Checkout Summary (Right Sidebar) --}}
    <div class="col-xxl-3">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">Checkout Summary</div>
                <div class="badge bg-info">{{ $cartItems->sum('quantity') }} Items</div>
            </div>
            <div class="card-body p-0">
                <div class="p-3 text-center">

                    {{-- Cart Items List --}}
                    <div class="list-group mb-3 rounded text-start">
                        @foreach($cartItems as $item)
                        @php
                            $price    = $item->product->sale_price ?? $item->product->price;
                            $discount = $item->product->sale_price
                                ? round((($item->product->price - $price) / $item->product->price) * 100)
                                : null;
                        @endphp
                        <div class="list-group-item">
                            <div class="d-flex align-items-center flex-wrap">
                                <span class="avatar avatar-lg bg-secondary-transparent me-2">
                                    <img src="{{ $item->product->image_url ?? asset('assets/images/ecommerce/png/1.png') }}"
                                        alt="{{ $item->product->name }}">
                                </span>
                                <div class="flex-fill">
                                    <p class="mb-1 fw-semibold">
                                        {{ $item->product->name }}
                                        <span class="fs-12 fw-normal text-muted">({{ $item->quantity }} qty)</span>
                                    </p>
                                    @if($discount)
                                    <span class="badge bg-success-transparent fs-11">
                                        <i class="ri-discount-percent-line fs-10"></i> {{ $discount }}% OFF
                                    </span>
                                    @endif
                                </div>
                                <div class="ms-auto">
                                    <p class="mb-0 fs-14 fw-semibold text-pink">
                                        PKR {{ number_format($price * $item->quantity, 0) }}
                                        @if($item->product->sale_price)
                                        <span class="ms-1 text-muted fs-11 fw-normal">
                                            <s>PKR {{ number_format($item->product->price * $item->quantity, 0) }}</s>
                                        </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Totals --}}
                    <div class="list-group list-group-flush p-2 bg-light rounded mb-3">
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Sub Total</div>
                            <div class="fw-semibold fs-14">PKR {{ number_format($subtotal, 2) }}</div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Discount</div>
                            <div class="fw-semibold fs-14 text-success">PKR {{ number_format($discount, 2) }}</div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Delivery</div>
                            <div class="fw-semibold fs-14 text-danger" id="summary-delivery-checkout">
                                PKR {{ number_format($delivery, 2) }}
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Tax (18%)</div>
                            <div class="fw-semibold fs-14">PKR {{ number_format($tax, 2) }}</div>
                        </div>
                    </div>

                    <div class="text-muted mb-2 fs-14">Total:</div>
                    <h3 class="mb-3" id="summary-total-checkout">
                        PKR {{ number_format($total, 2) }}
                    </h3>

                    <a href="{{ route('user.products') }}" class="btn btn-primary-light btn-wave d-grid">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- Hidden printable invoice area --}}
<div id="printable-invoice" class="d-none">
    <div style="font-family:Arial,sans-serif;padding:30px;max-width:800px;margin:auto;">
        <div style="display:flex;justify-content:space-between;margin-bottom:30px;">
            <div>
                <h2 style="margin:0;color:#333;">INVOICE</h2>
                <p style="margin:5px 0;color:#666;">Order #: <strong id="inv-order-number">—</strong></p>
                <p style="margin:5px 0;color:#666;">Date: <strong>{{ now()->format('d M Y') }}</strong></p>
            </div>
            <div style="text-align:right;">
                <h3 style="margin:0;color:#333;">Your Store</h3>
                <p style="margin:5px 0;color:#666;">Rawalpindi, Pakistan</p>
            </div>
        </div>

        <div style="display:flex;justify-content:space-between;margin-bottom:30px;">
            <div>
                <h4 style="margin:0 0 8px;color:#555;">Bill To:</h4>
                <p style="margin:3px 0;" id="inv-name">—</p>
                <p style="margin:3px 0;" id="inv-email">—</p>
                <p style="margin:3px 0;" id="inv-phone">—</p>
                <p style="margin:3px 0;" id="inv-address">—</p>
            </div>
            <div style="text-align:right;">
                <h4 style="margin:0 0 8px;color:#555;">Payment:</h4>
                <p style="margin:3px 0;" id="inv-payment">—</p>
                <p style="margin:3px 0;" id="inv-shipping">—</p>
            </div>
        </div>

        <table style="width:100%;border-collapse:collapse;margin-bottom:30px;">
            <thead>
                <tr style="background:#f5f5f5;">
                    <th style="padding:10px;text-align:left;border-bottom:2px solid #ddd;">Product</th>
                    <th style="padding:10px;text-align:center;border-bottom:2px solid #ddd;">Qty</th>
                    <th style="padding:10px;text-align:right;border-bottom:2px solid #ddd;">Price</th>
                    <th style="padding:10px;text-align:right;border-bottom:2px solid #ddd;">Total</th>
                </tr>
            </thead>
            <tbody id="inv-items">
            </tbody>
        </table>

        <div style="text-align:right;">
            <table style="margin-left:auto;">
                <tr><td style="padding:5px 15px;color:#666;">Subtotal:</td><td style="padding:5px 0;font-weight:bold;" id="inv-subtotal">—</td></tr>
                <tr><td style="padding:5px 15px;color:#666;">Discount:</td><td style="padding:5px 0;font-weight:bold;color:green;" id="inv-discount">—</td></tr>
                <tr><td style="padding:5px 15px;color:#666;">Delivery:</td><td style="padding:5px 0;font-weight:bold;" id="inv-delivery">—</td></tr>
                <tr><td style="padding:5px 15px;color:#666;">Tax (18%):</td><td style="padding:5px 0;font-weight:bold;" id="inv-tax">—</td></tr>
                <tr style="border-top:2px solid #ddd;">
                    <td style="padding:10px 15px;font-weight:bold;font-size:16px;">Total:</td>
                    <td style="padding:10px 0;font-weight:bold;font-size:16px;color:#e91e63;" id="inv-total">—</td>
                </tr>
            </table>
        </div>

        <div style="text-align:center;margin-top:40px;color:#999;font-size:12px;">
            Thank you for your purchase! For support contact: support@yourstore.com
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
const CSRF            = '{{ csrf_token() }}';
const PLACE_ORDER_URL = '{{ route("user.checkout.place-order") }}';
const INVOICE_BASE    = '{{ url("user/order") }}';

let placedOrderId     = null;
let placedOrderData   = null;

// ─── Tab helpers ──────────────────────────────────────────────
function goToTab(targetId) {
    const tab = document.querySelector(`[data-bs-target="${targetId}"]`);
    if (tab) bootstrap.Tab.getOrCreateInstance(tab).show();
}

// ─── Update delivery charge on shipping change ────────────────
$('input[name="shipping_method_select"]').on('change', function() {
    const charge = $(this).val() === 'express' ? 20 : 5;
    $('#summary-delivery-checkout').text('PKR ' + charge.toFixed(2));

    // Recalculate total
    const subtotal  = {{ $subtotal }};
    const discount  = {{ $discount }};
    const tax       = {{ $tax }};
    const total     = subtotal - discount + tax + charge;
    $('#summary-total-checkout').text('PKR ' + total.toFixed(2));
});

// ─── Step 1 → Step 2 ─────────────────────────────────────────
$('#to-personal-btn').on('click', function() {
    const address = $('#ship_address').val().trim();
    const city    = $('#ship_city').val().trim();
    const country = $('#ship_country').val().trim();

    if (!address || !city || !country) {
        Swal.fire({ icon: 'warning', title: 'Please fill required shipping fields', timer: 2000, showConfirmButton: false });
        return;
    }
    goToTab('#confirm-tab-pane');
});

// ─── Step 2 → Step 3 ─────────────────────────────────────────
$('#to-payment-btn').on('click', function() {
    const fname = $('#per_firstname').val().trim();
    const lname = $('#per_lastname').val().trim();
    const email = $('#per_email').val().trim();
    const phone = $('#per_phone').val().trim();
    const shop_name = $('#per_shop_name').val().trim();

    if (!fname || !lname || !email || !phone) {
        Swal.fire({ icon: 'warning', title: 'Please fill all personal details', timer: 2000, showConfirmButton: false });
        return;
    }

    // Fill review section
    $('#review-name').text(fname + ' ' + lname);
    $('#review-email').text(email);
    $('#review-address').text($('#ship_address').val() + ', ' + $('#ship_city').val());
    $('#review-shipping').text($('input[name="shipping_method_select"]:checked').next('label').find('p').first().text());

    goToTab('#delivery-tab-pane');
});

// ─── Back buttons ─────────────────────────────────────────────
$('#back-to-shipping-btn').on('click', () => goToTab('#order-tab-pane'));
$('#back-to-personal-btn').on('click', () => goToTab('#confirm-tab-pane'));

// ─── Place Order ──────────────────────────────────────────────
$('#place-order-btn').on('click', function() {
    $('#place-order-spinner').removeClass('d-none');
    $('#place-order-text').text('Placing...');

    const data = {
        _token:          CSRF,
        first_name:      $('#per_firstname').val(),
        last_name:       $('#per_lastname').val(),
        email:           $('#per_email').val(),
        phone:           $('#per_phone').val(),
        shop_name:       $('#per_shop_name').val(),
        address:         $('#ship_address').val(),
        city:            $('#ship_city').val(),
        state:           $('#ship_state').val(),
        country:         $('#ship_country').val(),
        pincode:         $('#ship_pincode').val(),
        shipping_method: $('input[name="shipping_method_select"]:checked').val(),
        payment_method:  $('input[name="payment_method_select"]:checked').val(),
    };

    $.ajax({
        url: PLACE_ORDER_URL,
        method: 'POST',
        data: data,
        success(res) {
            placedOrderId   = res.order_id;
            placedOrderData = { ...data, order_number: res.order_number };

            // Fill success tab
            $('#success-order-number').text(res.order_number);
            $('#success-payment-method').text(
                data.payment_method === 'cod' ? 'Cash on Delivery' : 'Card'
            );

            // Fill printable invoice
            fillInvoice(res, data);

            // Update header cart badge
            $('#cart-icon-badge').text(0);
            $('#cart-data').text('0 Items');

            goToTab('#success-tab-pane');

            Swal.fire({
                icon: 'success',
                title: 'Order Placed!',
                text: res.order_number,
                timer: 2500,
                showConfirmButton: false,
                toast: true,
                position: 'top-end',
            });
        },
        error(xhr) {
            const msg = xhr.responseJSON?.message || 'Something went wrong!';
            Swal.fire({ icon: 'error', title: 'Error', text: msg });
        },
        complete() {
            $('#place-order-spinner').addClass('d-none');
            $('#place-order-text').text('Place Order');
        }
    });
});

// ─── Fill Invoice ─────────────────────────────────────────────
function fillInvoice(res, data) {
    $('#inv-order-number').text(res.order_number);
    $('#inv-name').text(data.first_name + ' ' + data.last_name);
    $('#inv-email').text(data.email);
    $('#inv-phone').text(data.phone);
    $('#inv-address').text(data.address + ', ' + data.city + ', ' + data.country);
    $('#inv-payment').text(data.payment_method === 'cod' ? 'Cash on Delivery' : 'Card');
    $('#inv-shipping').text(data.shipping_method === 'express' ? 'Express (1 Day)' : 'Standard (7 Days)');

    // Items from summary sidebar
    let itemsHtml = '';
    @foreach($cartItems as $item)
    @php $p = $item->product->sale_price ?? $item->product->price; @endphp
    itemsHtml += `
        <tr>
            <td style="padding:8px;border-bottom:1px solid #eee;">{{ $item->product->name }}</td>
            <td style="padding:8px;text-align:center;border-bottom:1px solid #eee;">{{ $item->quantity }}</td>
            <td style="padding:8px;text-align:right;border-bottom:1px solid #eee;">PKR {{ number_format($p, 2) }}</td>
            <td style="padding:8px;text-align:right;border-bottom:1px solid #eee;">PKR {{ number_format($p * $item->quantity, 2) }}</td>
        </tr>`;
    @endforeach
    $('#inv-items').html(itemsHtml);

    $('#inv-subtotal').text('PKR {{ number_format($subtotal, 2) }}');
    $('#inv-discount').text('PKR {{ number_format($discount, 2) }}');
    $('#inv-tax').text('PKR {{ number_format($tax, 2) }}');

    const delivery = data.shipping_method === 'express' ? 20 : 5;
    $('#inv-delivery').text('PKR ' + delivery.toFixed(2));
    $('#inv-total').text('PKR ' + ({{ $subtotal }} - {{ $discount }} + {{ $tax }} + delivery).toFixed(2));
}

// ─── Print Invoice ────────────────────────────────────────────
$('#print-invoice-btn').on('click', function() {
    const content   = document.getElementById('printable-invoice').innerHTML;
    const printWin  = window.open('', '_blank', 'width=900,height=700');
    printWin.document.write(`
        <html><head><title>Invoice</title></head>
        <body>${content}</body></html>
    `);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
});

// ─── Download Invoice PDF ─────────────────────────────────────
$('#download-invoice-btn').on('click', function() {
    if (!placedOrderId) return;
    window.location.href = `${INVOICE_BASE}/${placedOrderId}/invoice`;
});
</script>
@endpush