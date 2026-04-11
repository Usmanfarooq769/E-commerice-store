@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Deliveries</h1>
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Deliveries</li>
        </ol>
    </nav>
</div>

{{-- Stats --}}
<div class="row">
    <div class="col-xl-3">
        <div class="card custom-card border border-primary border-opacity-10 bg-primary-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-truck-line fs-5 text-primary"></i>
                <h6 class="mb-0">Total</h6>
                <span class="badge bg-primary ms-auto">{{ $stats['total'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-warning border-opacity-25 bg-warning-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-truck-line fs-5 text-warning"></i>
                <h6 class="mb-0">Out for Delivery</h6>
                <span class="badge bg-warning text-dark ms-auto">{{ $stats['out_for_delivery'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-success border-opacity-10 bg-success-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-checkbox-circle-line fs-5 text-success"></i>
                <h6 class="mb-0">Delivered</h6>
                <span class="badge bg-success ms-auto">{{ $stats['delivered'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card custom-card border border-danger border-opacity-10 bg-danger-transparent">
            <div class="card-body d-flex align-items-center gap-2">
                <i class="ri-close-circle-line fs-5 text-danger"></i>
                <h6 class="mb-0">Failed</h6>
                <span class="badge bg-danger ms-auto">{{ $stats['failed'] }}</span>
            </div>
        </div>
    </div>
</div>

{{-- Table --}}
<div class="card custom-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">All Deliveries</h3>
        <button class="btn btn-primary" id="openAddDeliveryModal">
            <i class="ri-add-line me-1"></i> Assign Delivery
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table id="deliveriesTable" class="table  text-nowrap w-100">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Customer Phone</th>
                    <th>Delivery Person</th>
                    <th>Delivery Phone</th>
                    <th>Status</th>
                    <th>Order Total</th>
                    <th>Assigned At</th>
                    <th>Delivered At</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
</div>

{{-- Add / Edit Modal --}}
<div class="modal fade" id="deliveryModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deliveryModalTitle">Assign Delivery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="del_id">

                <div class="row g-3">
                    <div class="col-md-12" id="order_select_wrap">
                        <label class="form-label">Order <span class="text-danger">*</span></label>
                        <select class="form-select" id="del_order_id">
                            <option value="">-- Select Order --</option>
                            @foreach(\App\Models\Order::whereDoesntHave('delivery')->latest()->get() as $order)
                            <option value="{{ $order->id }}">
                                {{ $order->order_number }} — {{ $order->first_name }} {{ $order->last_name }}
                                (PKR {{ number_format($order->total, 2) }})
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Delivery Person Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="del_name" placeholder="e.g. Ahmed Ali">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="del_phone" placeholder="e.g. 0300-1234567">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="del_status">
                            <option value="assigned">Assigned</option>
                            <option value="out_for_delivery">Out for Delivery</option>
                            <option value="delivered">Delivered</option>
                            <option value="failed">Failed</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Notes</label>
                        <input type="text" class="form-control" id="del_notes" placeholder="Optional notes...">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveDeliveryBtn">
                    <span id="delBtnText">Save</span>
                    <span id="delBtnSpinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')


<script>
const CSRF = '{{ csrf_token() }}';
const DEL_DATA_URL = '{{ route("admin.deliveries.data") }}';
const DEL_STORE_URL = '{{ route("admin.deliveries.store") }}';
const DEL_BASE_URL = '{{ url("admin/deliveries") }}';

// ─── DataTable ────────────────────────────────────────────────
const table = $('#deliveriesTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: DEL_DATA_URL,
    columns: [{
            data: 'DT_RowIndex',
            name: 'id',
            orderable: false,
            searchable: false
        },
        {
            data: 'order_number',
            name: 'order.order_number'
        },
        {
            data: 'customer_col',
            name: 'order.first_name',
            orderable: false
        },
        {
            data: 'customer_phone',
            name: 'order.phone',
            orderable: false
        },
        {
            data: 'delivery_person_name',
            name: 'delivery_person_name'
        },
        {
            data: 'delivery_person_phone',
            name: 'delivery_person_phone'
        },
        {
            data: 'status_badge',
            name: 'status'
        },
        {
            data: 'order_total',
            name: 'order.total',
            orderable: false
        },
        {
            data: 'assigned_at_col',
            name: 'assigned_at'
        },
        {
            data: 'delivered_at_col',
            name: 'delivered_at'
        },
        {
            data: 'notes',
            name: 'notes',
            orderable: false
        },
        {
            data: 'actions',
            name: 'actions',
            orderable: false,
            searchable: false
        },
    ],
    order: [
        [0, 'desc']
    ],
    pageLength: 10,
    language: {
        processing: '<div class="spinner-border text-primary"></div>'
    }
});

// ─── Helpers ──────────────────────────────────────────────────
const modal = () => bootstrap.Modal.getOrCreateInstance(document.getElementById('deliveryModal'));

function resetModal(title = 'Assign Delivery') {
    $('#deliveryModalTitle').text(title);
    $('#del_id').val('');
    $('#del_order_id').val('');
    $('#del_name, #del_phone, #del_notes').val('');
    $('#del_status').val('assigned');
    $('#order_select_wrap').show();
}

// ─── Open Add Modal ───────────────────────────────────────────
$('#openAddDeliveryModal').on('click', function() {
    resetModal('Assign Delivery');
    modal().show();
});

// ─── Open Edit Modal ──────────────────────────────────────────
$(document).on('click', '.edit-delivery-btn', function() {
    const d = $(this).data();
    resetModal('Edit Delivery');
    $('#del_id').val(d.id);
    $('#del_name').val(d.name);
    $('#del_phone').val(d.phone);
    $('#del_status').val(d.status);
    $('#del_notes').val(d.notes || '');
    $('#order_select_wrap').hide(); // hide order select on edit
    modal().show();
});

// ─── Save ─────────────────────────────────────────────────────
$('#saveDeliveryBtn').on('click', function() {
    const id = $('#del_id').val();
    const url = id ? `${DEL_BASE_URL}/${id}` : DEL_STORE_URL;
    const method = id ? 'PUT' : 'POST';

    const data = {
        _token: CSRF,
        delivery_person_name: $('#del_name').val(),
        delivery_person_phone: $('#del_phone').val(),
        status: $('#del_status').val(),
        notes: $('#del_notes').val(),
    };

    if (!id) data.order_id = $('#del_order_id').val();

    $('#delBtnSpinner').removeClass('d-none');
    $('#delBtnText').text(id ? 'Updating...' : 'Saving...');

    $.ajax({
        url,
        method,
        data,
        success(res) {
            modal().hide();
            table.ajax.reload(null, false);
            Swal.fire({
                icon: 'success',
                title: res.message,
                timer: 2000,
                showConfirmButton: false
            });
        },
        error(xhr) {
            const msg = xhr.responseJSON?.errors ?
                Object.values(xhr.responseJSON.errors)[0][0] :
                (xhr.responseJSON?.message || 'Something went wrong!');
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: msg
            });
        },
        complete() {
            $('#delBtnSpinner').addClass('d-none');
            $('#delBtnText').text('Save');
        }
    });
});

// ─── Delete ───────────────────────────────────────────────────
$(document).on('click', '.delete-delivery-btn', function() {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Delete this delivery?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete!',
    }).then(({
        isConfirmed
    }) => {
        if (!isConfirmed) return;
        $.ajax({
            url: `${DEL_BASE_URL}/${id}`,
            method: 'DELETE',
            data: {
                _token: CSRF
            },
            success(res) {
                table.ajax.reload(null, false);
                Swal.fire({
                    icon: 'success',
                    title: res.message,
                    timer: 2000,
                    showConfirmButton: false
                });
            },
            error(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: xhr.responseJSON?.message || 'Delete failed!'
                });
            }
        });
    });
});
</script>
@endpush