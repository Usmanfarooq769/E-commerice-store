@extends('user-layout.app')

@section('content')

@php
    $subtotal = $cartItems->sum(fn($i) => ($i->product->sale_price ?? $i->product->price) * $i->quantity);
    $discount = $cartItems->sum(fn($i) => $i->product->sale_price
        ? ($i->product->price - $i->product->sale_price) * $i->quantity : 0);
    $tax      = $subtotal * 0.18;
    $delivery = $subtotal > 0 ? 5 : 0;
    $total    = $subtotal - $discount + $tax + $delivery;
@endphp

<div class="row">

    {{-- Cart Items --}}
    <div class="col-xl-9">

        @if($cartItems->count())
        <div class="card custom-card" id="cart-container-delete">
            <div class="card-header">
                <div class="card-title">
                    Cart Items
                    <span class="text-pink fs-11">({{ $cartItems->sum('quantity') }} Items)</span>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Availability</th>
                                <th>Quantity</th>
                                <th class="text-center">Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="cart-table-body">
                            @foreach($cartItems as $item)
                            @php
                                $price     = $item->product->sale_price ?? $item->product->price;
                                $origPrice = $item->product->price;
                                $discount  = $item->product->sale_price
                                    ? round((($origPrice - $price) / $origPrice) * 100)
                                    : null;
                                $itemTotal = $price * $item->quantity;
                                $inStock   = $item->product->stock > 0;
                            @endphp
                            <tr id="cart-row-{{ $item->id }}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="{{ $item->product->image_url ?? asset('assets/images/ecommerce/png/1.png') }}"
                                                alt="{{ $item->product->name }}"
                                                class="product-img p-2 bg-secondary-transparent">
                                        </div>
                                        <div class="flex-fill">
                                            <div class="mb-2 fs-16 fw-semibold">
                                                <a href="{{ route('user.product-details', $item->product->slug) }}">
                                                    {{ $item->product->name }}
                                                </a>
                                            </div>
                                            @if($discount)
                                            <span class="badge bg-success-transparent fs-11">
                                                <i class="ri-discount-percent-line fs-10"></i>
                                                {{ $discount }}% OFF
                                            </span>
                                            @endif
                                            <div class="my-2">
                                                <span class="me-1 fw-medium text-muted">Category:</span>
                                                <span class="fw-medium">{{ $item->product->category?->name ?? 'N/A' }}</span>
                                            </div>
                                            <div>
                                                <span class="me-1 fw-medium text-muted">Unit:</span>
                                                <span class="fw-medium">{{ ucfirst($item->product->unit) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="fw-semibold fs-20 text-pink">
                                            PKR {{ number_format($price, 0) }}
                                        </div>
                                        @if($item->product->sale_price)
                                        <s class="text-muted fs-12">
                                            PKR {{ number_format($origPrice, 0) }}
                                        </s>
                                        @endif
                                    </div>
                                </td>

                                <td>
                                    @if($inStock)
                                        <span class="badge bg-success">In Stock</span>
                                    @else
                                        <span class="badge bg-danger">Out of Stock</span>
                                    @endif
                                </td>

                                <td class="product-quantity-container">
                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                        <button type="button"
                                            class="btn btn-icon btn-wave btn-sm btn-primary cart-qty-minus"
                                            data-id="{{ $item->id }}"
                                            {{ !$inStock ? 'disabled' : '' }}>
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input type="text"
                                            class="form-control form-control-sm text-center p-0 cart-qty-input"
                                            data-id="{{ $item->id }}"
                                            value="{{ $item->quantity }}"
                                            {{ !$inStock ? 'disabled' : '' }}>
                                        <button type="button"
                                            class="btn btn-icon btn-wave btn-sm btn-primary cart-qty-plus"
                                            data-id="{{ $item->id }}"
                                            {{ !$inStock ? 'disabled' : '' }}>
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="fs-15 fw-semibold cart-item-total" id="item-total-{{ $item->id }}">
                                        @if($inStock)
                                            PKR {{ number_format($itemTotal, 0) }}
                                        @else
                                            N/A
                                        @endif
                                    </div>
                                </td>

                                <td>
                                    <a href="{{ route('user.wishlist') }}"
                                        class="btn btn-icon btn-secondary btn-sm me-1"
                                        data-bs-toggle="tooltip" title="Move To Wishlist">
                                        <i class="ri-heart-line lh-1 align-middle"></i>
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-icon btn-info btn-sm remove-cart-btn"
                                        data-id="{{ $item->id }}"
                                        data-bs-toggle="tooltip" title="Remove From Cart">
                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        <div class="card custom-card">
            <div class="card-body">
                <div class="cart-empty text-center py-5">
                    <i class="ri-shopping-cart-2-line fs-1 text-muted"></i>
                    <h3 class="fw-bold mb-1 mt-3">Your Cart is Empty</h3>
                    <h5 class="mb-3 text-muted">Add some items to make me happy :)</h5>
                    <a href="{{ route('user.products') }}" class="btn btn-primary btn-wave m-3">
                        Continue Shopping <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        @endif

    </div>

    {{-- Order Summary --}}
    <div class="col-xl-3">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Order Summary</div>
            </div>
            <div class="card-body p-0">
                <div class="p-3 text-center border-bottom border-block-end-dashed">
                    <div class="list-group list-group-flush p-2 bg-light rounded mb-3" id="order-summary">
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Sub Total</div>
                            <div class="fw-semibold fs-14" id="summary-subtotal">
                                PKR {{ number_format($subtotal, 2) }}
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Discount</div>
                            <div class="fw-semibold fs-14 text-success" id="summary-discount">
                                PKR {{ number_format($discount, 2) }}
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Delivery Charges</div>
                            <div class="fw-semibold fs-14 text-danger" id="summary-delivery">
                                PKR {{ number_format($delivery, 2) }}
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="text-muted">Service Tax (18%)</div>
                            <div class="fw-semibold fs-14" id="summary-tax">
                                PKR {{ number_format($tax, 2) }}
                            </div>
                        </div>
                    </div>
                    <div class="text-muted mb-2 fs-15">Total:</div>
                    <h3 class="mb-3" id="summary-total">
                        PKR {{ number_format($total, 2) }}
                        @if($discount > 0)
                        <s class="text-muted fs-12 fw-normal">PKR {{ number_format($subtotal, 2) }}</s>
                        @endif
                    </h3>
                    <a href="{{ route('user.check-out') }}" class="btn btn-primary d-grid">Checkout</a>
                </div>

                <div class="p-3 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 fw-semibold">Choose Delivery:</p>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping1">
                            <label class="form-check-label fw-medium" for="shipping1">Standard Shipping</label>
                        </div>
                        <div>
                            <div class="fw-medium mb-1 text-end"><span class="text-muted">Charges:</span> PKR 5.00</div>
                            <div class="fs-11 text-muted text-end">Within 5-7 Days</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping2" checked>
                            <label class="form-check-label fw-medium" for="shipping2">Express Shipping</label>
                        </div>
                        <div>
                            <div class="fw-medium mb-1 text-end"><span class="text-muted">Charges:</span> PKR 20.00</div>
                            <div class="fs-11 text-muted text-end">1 Day</div>
                        </div>
                    </div>
                </div>

                <div class="p-3">
                    <a href="{{ route('user.products') }}" class="btn btn-success-light btn-wave d-grid">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
const CSRF            = '{{ csrf_token() }}';
const CART_UPDATE_URL = '{{ url("user/cart") }}';

// ─── Quantity + ───────────────────────────────────────────────
$(document).on('click', '.cart-qty-plus', function() {
    const id    = $(this).data('id');
    const $input = $(`input.cart-qty-input[data-id="${id}"]`);
    updateCartQty(id, parseInt($input.val()) + 1);
});

// ─── Quantity - ───────────────────────────────────────────────
$(document).on('click', '.cart-qty-minus', function() {
    const id     = $(this).data('id');
    const $input = $(`input.cart-qty-input[data-id="${id}"]`);
    const newQty = parseInt($input.val()) - 1;
    if (newQty < 1) return;
    updateCartQty(id, newQty);
});

// ─── AJAX Update Qty ──────────────────────────────────────────
function updateCartQty(id, qty) {
    $.ajax({
        url: `${CART_UPDATE_URL}/${id}`,
        method: 'PUT',
        data: { _token: CSRF, quantity: qty },
        success(res) {
            $(`input.cart-qty-input[data-id="${id}"]`).val(res.quantity);
            $(`#item-total-${id}`).text('PKR ' + res.item_total);
            updateSummaryUI(res.summary);
            loadHeaderCart(); // refresh header badge
        }
    });
}

// ─── Remove Item ──────────────────────────────────────────────
$(document).on('click', '.remove-cart-btn', function() {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Remove item?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, remove it!',
    }).then(({ isConfirmed }) => {
        if (!isConfirmed) return;
        $.ajax({
            url: `${CART_UPDATE_URL}/${id}`,
            method: 'DELETE',
            data: { _token: CSRF },
            success(res) {
                $(`#cart-row-${id}`).fadeOut(300, function() {
                    $(this).remove();
                    updateSummaryUI(res.summary);
                    loadHeaderCart();
                    if (res.count === 0) location.reload();
                });
            }
        });
    });
});

// ─── Update Summary Panel ─────────────────────────────────────
function updateSummaryUI(s) {
    $('#summary-subtotal').text('PKR ' + s.subtotal);
    $('#summary-discount').text('PKR ' + s.discount);
    $('#summary-delivery').text('PKR ' + s.delivery);
    $('#summary-tax').text('PKR ' + s.tax);
    $('#summary-total').html('PKR ' + s.total);
}
</script>
@endpush