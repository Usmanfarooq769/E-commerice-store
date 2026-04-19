@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Order Details</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
        <li class="breadcrumb-item active">{{ $order->order_number }}</li>
    </ol></nav>
</div>

<div class="row">
    <div class="col-xl-12">

        {{-- Main Details Card --}}
        <div class="card custom-card">
            <div class="card-header justify-content-between gap-2 align-items-center">
                <div>
                    <div class="card-title mb-1">Order Details</div>
                    <p class="mb-0 fs-12">
                        <span class="text-muted me-1">Ordered Date:</span>
                        {{ $order->created_at->format('jS M, Y') }}
                    </p>
                </div>
                <div class="d-flex gap-2 align-items-center">

                    {{-- Status Updater --}}
                    <select class="form-select form-select-sm" id="statusSelect" style="width:150px;">
                        @foreach(['pending','processing','shipped','delivered','cancelled'] as $s)
                        <option value="{{ $s }}" {{ $order->status === $s ? 'selected' : '' }}>
                            {{ ucfirst($s) }}
                        </option>
                        @endforeach
                    </select>
                    <button class="btn btn-sm btn-success" id="updateStatusBtn">Update</button>

                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary btn-sm rounded-pill py-2">
                        Go to List
                    </a>
                </div>
            </div>

            <div class="card-body">

                {{-- Customer + Shipping --}}
                <div class="row mb-4">
                    <div class="col-xl-4">
                        <div class="fs-15 fw-semibold mb-2">Customer Details:</div>
                        <p class="mb-1 fw-semibold">{{ $order->first_name }} {{ $order->last_name }}</p>
                        @if($order->shop_name)
                        <p class="mb-1 text-muted fs-13">
                            <i class="ri-store-line me-1"></i>{{ $order->shop_name }}
                        </p>
                        @endif
                        <p class="mb-1 text-muted fs-13"><i class="ri-phone-line me-1"></i>{{ $order->phone }}</p>
                        <p class="mb-1 text-muted fs-13"><i class="ri-mail-line me-1"></i>{{ $order->email }}</p>
                    </div>

                    <div class="col-xl-4">
                        <div class="fs-15 fw-semibold mb-2">Shipping Address:</div>
                        <p class="mb-1 fw-semibold">{{ $order->first_name }} {{ $order->last_name }}</p>
                        <p class="mb-0 text-muted fs-13">
                            {{ $order->address }},<br>
                            {{ $order->city }}@if($order->state), {{ $order->state }}@endif,<br>
                            @if($order->pincode){{ $order->pincode }}, @endif{{ $order->country }}
                        </p>
                    </div>

                    <div class="col-xl-4">
                        <div class="fs-15 fw-semibold mb-2">Delivery Person:</div>
                        @if($order->delivery_person_name)
                        <p class="mb-1 fw-semibold">
                            <i class="ri-user-line me-1 text-success"></i>
                            {{ $order->delivery_person_name }}
                        </p>
                        <p class="mb-1 text-muted fs-13">
                            <i class="ri-phone-line me-1"></i>{{ $order->delivery_person_phone }}
                        </p>
                        @else
                        <p class="text-muted fs-13">Not assigned yet.</p>
                        @endif
                        <button class="btn btn-sm btn-success-light mt-2 assign-delivery-btn"
                            data-id="{{ $order->id }}"
                            data-name="{{ $order->delivery_person_name }}"
                            data-phone="{{ $order->delivery_person_phone }}">
                            <i class="ri-truck-line me-1"></i>
                            {{ $order->delivery_person_name ? 'Update Delivery' : 'Assign Delivery' }}
                        </button>
                    </div>
                </div>

                {{-- Order Summary + Order Info --}}
                <div class="row mb-4 gy-3 gy-xl-0">
                    <div class="col-xl-6">
                        <div class="fs-15 fw-semibold mb-2">Order Summary:</div>
                        <div class="list-group list-group-flush p-2 bg-light rounded">
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Sub Total</div>
                                <div class="fw-semibold fs-14">PKR {{ number_format($order->subtotal, 2) }}</div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Discount</div>
                                <div class="fw-semibold fs-14 text-success">
                                    - PKR {{ number_format($order->discount, 2) }}
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Delivery Charges</div>
                                <div class="fw-semibold fs-14 text-danger">
                                    PKR {{ number_format($order->delivery_charge, 2) }}
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Service Tax (18%)</div>
                                <div class="fw-semibold fs-14">PKR {{ number_format($order->tax, 2) }}</div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted fs-14">Total:</div>
                                <h4 class="mb-0">
                                    <s class="text-muted fs-12 fw-normal me-1">
                                        PKR {{ number_format($order->subtotal, 2) }}
                                    </s>
                                    PKR {{ number_format($order->total, 2) }}
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="fs-15 fw-semibold mb-2">Order Info:</div>
                        <div class="list-group list-group-flush p-2 bg-light rounded">
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Order ID:</div>
                                <div class="fw-semibold fs-14">{{ $order->order_number }}</div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Total Items:</div>
                                <div class="badge bg-info rounded-pill">
                                    {{ $order->items->sum('quantity') }} Products
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Order Date:</div>
                                <div class="fw-semibold fs-14">{{ $order->created_at->format('jS M, Y') }}</div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Payment Method:</div>
                                <div class="fw-semibold fs-14">
                                    {{ $order->payment_method === 'cod' ? 'Cash on Delivery' : 'Card' }}
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Shipping Method:</div>
                                <div class="fw-semibold fs-14">
                                    {{ $order->shipping_method === 'express' ? 'Express (1 Day)' : 'Standard (7 Days)' }}
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="text-muted">Status:</div>
                                @php
                                    $colors = [
                                        'pending'    => 'secondary',
                                        'processing' => 'warning',
                                        'shipped'    => 'primary',
                                        'delivered'  => 'success',
                                        'cancelled'  => 'danger',
                                    ];
                                @endphp
                                <span class="badge bg-{{ $colors[$order->status] ?? 'secondary' }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Order Status Timeline --}}
                <div class="fs-14 fw-semibold mb-3">Order Timeline:</div>
                <div class="p-3 bg-light rounded">
                    <div class="row justify-content-between flex-column flex-sm-row">
                        @php
                            $steps = [
                                'pending'    => ['label' => 'Order Placed',  'num' => '01'],
                                'processing' => ['label' => 'Confirmed',     'num' => '02'],
                                'shipped'    => ['label' => 'Shipped',        'num' => '03'],
                                'delivered'  => ['label' => 'Delivered',      'num' => '04'],
                            ];
                            $statusOrder = ['pending','processing','shipped','delivered'];
                            $currentIdx  = array_search($order->status, $statusOrder);
                        @endphp
                        @foreach($steps as $key => $step)
                        @php $idx = array_search($key, $statusOrder); @endphp
                        <div class="order-tracking text-center {{ ($currentIdx !== false && $idx <= $currentIdx) ? 'completed' : '' }}">
                            <span class="is-complete mb-3 avatar avatar-sm"></span>
                            <p class="mb-1 fw-semibold">{{ $step['num'] }}</p>
                            <p class="mb-1">{{ $step['label'] }}</p>
                            <p>{{ $order->created_at->addDays($idx * 2)->format('jS M Y') }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        {{-- Ordered Products --}}
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">Ordered Products</div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Original Price</th>
                                <th>Quantity</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $i => $item)
                            @php
                                $discount = $item->original_price > $item->price
                                    ? round((($item->original_price - $item->price) / $item->original_price) * 100)
                                    : null;
                            @endphp
                            <tr>
                                <td class="fw-semibold">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="{{ $item->product?->image_url ?? asset('assets/images/ecommerce/png/1.png') }}"
                                                alt="{{ $item->product_name }}"
                                                class="product-img p-2 bg-secondary-transparent">
                                        </div>
                                        <div class="flex-fill">
                                            <div class="mb-1 fs-15 fw-semibold">{{ $item->product_name }}</div>
                                            @if($discount)
                                            <span class="badge bg-success-transparent fs-11">
                                                <i class="ri-discount-percent-line fs-10"></i> {{ $discount }}% OFF
                                            </span>
                                            @endif
                                            <div class="mt-1">
                                                <span class="me-1 fw-medium text-muted">Category:</span>
                                                <span class="fw-medium">
                                                    {{ $item->product?->category?->name ?? 'N/A' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold fs-16 text-pink">
                                        PKR {{ number_format($item->price, 2) }}
                                    </div>
                                </td>
                                <td>
                                    @if($item->original_price > $item->price)
                                    <s class="text-muted fs-13">PKR {{ number_format($item->original_price, 2) }}</s>
                                    @else
                                    <span class="text-muted">—</span>
                                    @endif
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td class="text-center">
                                    <div class="fs-15 fw-semibold">
                                        PKR {{ number_format($item->total, 2) }}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer border-top-0 d-flex align-items-center justify-content-between gap-2">
                <!-- <button class="btn btn-primary-light" onclick="window.print()">
                    <i class="ri-printer-line me-1"></i> Print
                </button> -->
                <a href="{{ route('admin.order.invoice', $order->id) }}" class="btn btn-primary">
                    <i class="ri-download-line me-1"></i> Download Invoice
                </a>
            </div>
        </div>

    </div>
</div>

{{-- Assign Delivery Modal --}}
<div class="modal fade" id="assignDeliveryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Delivery Person</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="assign_order_id" value="{{ $order->id }}">
                <div class="mb-3">
                    <label class="form-label">Delivery Person Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="delivery_name"
                        value="{{ $order->delivery_person_name }}" placeholder="e.g. Ahmed Ali">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="delivery_phone"
                        value="{{ $order->delivery_person_phone }}" placeholder="e.g. 0300-1234567">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="saveDeliveryBtn">
                    <span id="deliveryBtnText">Save</span>
                    <span id="deliveryBtnSpinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script>
const CSRF           = '{{ csrf_token() }}';
const ORDERS_BASE    = '{{ url("admin/orders") }}';
const ORDER_ID       = {{ $order->id }};

// ─── Update Status ────────────────────────────────────────────
$('#updateStatusBtn').on('click', function() {
    const status = $('#statusSelect').val();
    $.ajax({
        url: `${ORDERS_BASE}/${ORDER_ID}/status`,
        method: 'PUT',
        data: { _token: CSRF, status },
        success(res) {
            Swal.fire({ icon: 'success', title: res.message, timer: 1500, showConfirmButton: false });
        },
        error(xhr) {
            Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Error!' });
        }
    });
});

// ─── Open Assign Modal ────────────────────────────────────────
$(document).on('click', '.assign-delivery-btn', function() {
    bootstrap.Modal.getOrCreateInstance(document.getElementById('assignDeliveryModal')).show();
});

// ─── Save Delivery ────────────────────────────────────────────
$('#saveDeliveryBtn').on('click', function() {
    const name  = $('#delivery_name').val().trim();
    const phone = $('#delivery_phone').val().trim();

    if (!name || !phone) {
        Swal.fire({ icon: 'warning', title: 'Both fields are required!', timer: 1500, showConfirmButton: false });
        return;
    }

    $('#deliveryBtnSpinner').removeClass('d-none');
    $('#deliveryBtnText').text('Saving...');

    $.ajax({
        url: `${ORDERS_BASE}/${ORDER_ID}/assign`,
        method: 'POST',
        data: { _token: CSRF, delivery_person_name: name, delivery_person_phone: phone },
        success(res) {
            bootstrap.Modal.getOrCreateInstance(document.getElementById('assignDeliveryModal')).hide();
            Swal.fire({
                icon: 'success', title: res.message, timer: 2000, showConfirmButton: false
            }).then(() => location.reload());
        },
        error(xhr) {
            Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Error!' });
        },
        complete() {
            $('#deliveryBtnSpinner').addClass('d-none');
            $('#deliveryBtnText').text('Save');
        }
    });
});
</script>
@endpush