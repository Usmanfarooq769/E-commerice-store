@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Orders</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active">Orders</li>
    </ol></nav>
</div>

{{-- Stats --}}
<div class="row">
    <div class="col-xl-3">
        <div class="card custom-card border border-primary border-opacity-10 bg-primary-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-box-2-fill fs-5 lh-1 text-primary"></i>
                <h6 class="mb-0">All Orders</h6>
                <span class="badge bg-primary ms-auto">{{ $stats['all'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-secondary border-opacity-25 bg-secondary-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-box-2-fill fs-5 lh-1 text-secondary"></i>
                <h6 class="mb-0">Pending</h6>
                <span class="badge bg-secondary ms-auto">{{ $stats['pending'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-danger border-opacity-10 bg-danger-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-box-2-fill fs-5 lh-1 text-danger"></i>
                <h6 class="mb-0">Cancelled</h6>
                <span class="badge bg-danger ms-auto">{{ $stats['cancelled'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-success border-opacity-10 bg-success-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-box-2-fill fs-5 lh-1 text-success"></i>
                <h6 class="mb-0">Delivered</h6>
                <span class="badge bg-success ms-auto">{{ $stats['delivered'] }}</span>
            </div>
        </div>
    </div>
</div>

{{-- Orders Table --}}
<div class="card custom-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">All Orders</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table id="ordersTable" class="table table-bordered text-nowrap w-100">
            <thead >
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
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
                <input type="hidden" id="assign_order_id">
                <div class="mb-3">
                    <label class="form-label">Delivery Person Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="delivery_name"
                        placeholder="e.g. Ahmed Ali">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="delivery_phone"
                        placeholder="e.g. 0300-1234567">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveDeliveryBtn">
                    <span id="deliveryBtnText">Assign</span>
                    <span id="deliveryBtnSpinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> -->


<script>
const CSRF             = '{{ csrf_token() }}';
const ORDERS_DATA_URL  = '{{ route("admin.orders.data") }}';
const ORDERS_BASE_URL  = '{{ url("admin/orders") }}';

// ─── DataTable ────────────────────────────────────────────────
const table = $('#ordersTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: ORDERS_DATA_URL,
    columns: [
        { data: 'DT_RowIndex',   name: 'id',           orderable: false, searchable: false },
        { data: 'order_number',  name: 'order_number' },
        { data: 'product_col',   name: 'product',      orderable: false },
        { data: 'customer_col',  name: 'first_name',   orderable: false },
        { data: 'phone',         name: 'phone' },
        { data: 'date_col',      name: 'created_at' },
        { data: 'status_badge',  name: 'status' },
        { data: 'payment_col',   name: 'payment_method', orderable: false },
        { data: 'cost_col',      name: 'total' },
        { data: 'actions',       name: 'actions',      orderable: false, searchable: false },
    ],
    order: [[0, 'desc']],
    pageLength: 10,
    language: { processing: '<div class="spinner-border text-primary"></div>' }
});

// ─── Open Assign Modal ────────────────────────────────────────
$(document).on('click', '.assign-delivery-btn', function() {
    const d = $(this).data();
    $('#assign_order_id').val(d.id);
    $('#delivery_name').val(d.name || '');
    $('#delivery_phone').val(d.phone || '');
    bootstrap.Modal.getOrCreateInstance(document.getElementById('assignDeliveryModal')).show();
});

// ─── Save Delivery ────────────────────────────────────────────
$('#saveDeliveryBtn').on('click', function() {
    const id    = $('#assign_order_id').val();
    const name  = $('#delivery_name').val().trim();
    const phone = $('#delivery_phone').val().trim();

    if (!name || !phone) {
        Swal.fire({ icon: 'warning', title: 'Both fields are required!', timer: 1500, showConfirmButton: false });
        return;
    }

    $('#deliveryBtnSpinner').removeClass('d-none');
    $('#deliveryBtnText').text('Saving...');

    $.ajax({
        url: `${ORDERS_BASE_URL}/${id}/assign`,
        method: 'POST',
        data: { _token: CSRF, delivery_person_name: name, delivery_person_phone: phone },
        success(res) {
            bootstrap.Modal.getOrCreateInstance(document.getElementById('assignDeliveryModal')).hide();
            table.ajax.reload(null, false);
            Swal.fire({ icon: 'success', title: res.message, timer: 2000, showConfirmButton: false });
        },
        error(xhr) {
            Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Error!' });
        },
        complete() {
            $('#deliveryBtnSpinner').addClass('d-none');
            $('#deliveryBtnText').text('Assign');
        }
    });
});

// ─── Delete Order ─────────────────────────────────────────────
$(document).on('click', '.delete-order-btn', function() {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Delete this order?',
        text: 'This cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete!',
    }).then(({ isConfirmed }) => {
        if (!isConfirmed) return;
        $.ajax({
            url: `${ORDERS_BASE_URL}/${id}`,
            method: 'DELETE',
            data: { _token: CSRF },
            success(res) {
                table.ajax.reload(null, false);
                Swal.fire({ icon: 'success', title: res.message, timer: 2000, showConfirmButton: false });
            },
            error(xhr) {
                Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Delete failed!' });
            }
        });
    });
});
</script>
@endpush