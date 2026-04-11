@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Products</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol></nav>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title mb-0">All Products</h3>
        <button class="btn btn-primary" id="openAddProductModal">
            <i class="ri-add-line me-1"></i> Add Product
        </button>
    </div>
    <div class="card-body table-responsive">
        <table id="productsTable" class="table table-bordered  text-nowrap w-100">
            <thead >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Status</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

{{-- Add / Edit Modal --}}
<div class="modal fade" id="productModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalTitle">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="prod_id">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="form-select" id="prod_category">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Product Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="prod_name" placeholder="e.g. Mineral Water 1L">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">SKU</label>
                        <input type="text" class="form-control" id="prod_sku" placeholder="Auto-generated if empty">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Price (PKR) <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control" id="prod_price" placeholder="0.00">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Sale Price</label>
                        <input type="number" step="0.01" class="form-control" id="prod_sale_price" placeholder="Optional">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Stock <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="prod_stock" placeholder="0">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Unit <span class="text-danger">*</span></label>
                        <select class="form-select" id="prod_unit">
                            <option value="piece">Piece</option>
                            <option value="kg">KG</option>
                            <option value="gram">Gram</option>
                            <option value="liter">Liter</option>
                            <option value="dozen">Dozen</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="prod_status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="prod_description" rows="2" placeholder="Optional..."></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" id="prod_image" accept="image/*">
                        <div id="imagePreviewWrap" class="mt-2 d-none">
                            <img id="imagePreview" src="" style="height:80px;border-radius:6px;object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-end">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="prod_featured" role="switch">
                            <label class="form-check-label" for="prod_featured">Mark as Featured</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveProductBtn">
                    <span id="prodBtnText">Save</span>
                    <span id="prodBtnSpinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
{{-- DataTables CSS & JS --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
const CSRF             = '{{ csrf_token() }}';
const PROD_DATA_URL    = '{{ route("admin.products.data") }}';
const PROD_STORE_URL   = '{{ route("admin.products.store") }}';
const PROD_UPDATE_BASE = '{{ url("admin/products") }}';

// ─── Init DataTable ───────────────────────────────────────────
const table = $('#productsTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: PROD_DATA_URL,
    columns: [
        { data: 'DT_RowIndex',    name: 'id',         orderable: false, searchable: false },
        { data: 'image_col',      name: 'image',      orderable: false, searchable: false },
        { data: 'name',           name: 'name' },
        { data: 'sku',            name: 'sku' },
        { data: 'category_name',  name: 'category.name' },
        { data: 'price_col',      name: 'price' },
        { data: 'sale_price_col', name: 'sale_price',  orderable: false },
        { data: 'stock',          name: 'stock' },
        { data: 'unit',           name: 'unit' },
        { data: 'status_badge',   name: 'status' },
        { data: 'featured_badge', name: 'is_featured' },
        { data: 'created_by',     name: 'creator.name', orderable: false },
        { data: 'created_at',     name: 'created_at' },
        { data: 'updated_at',     name: 'updated_at' },
        { data: 'actions',        name: 'actions',    searchable: false },
    ],
    order: [[0, 'desc']],
    pageLength: 10,
    language: { processing: '<div class="spinner-border text-primary"></div>' }
});

// ─── Helpers ──────────────────────────────────────────────────
const modal = () => bootstrap.Modal.getOrCreateInstance(document.getElementById('productModal'));

function resetModal(title = 'Add Product') {
    $('#productModalTitle').text(title);
    $('#prod_id, #prod_name, #prod_sku, #prod_price, #prod_sale_price, #prod_stock, #prod_description').val('');
    $('#prod_category').val('');
    $('#prod_unit').val('piece');
    $('#prod_status').val('active');
    $('#prod_featured').prop('checked', false);
    $('#prod_image').val('');
    $('#imagePreviewWrap').addClass('d-none');
}

// ─── Image Preview ────────────────────────────────────────────
$('#prod_image').on('change', function () {
    const file = this.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
        $('#imagePreview').attr('src', e.target.result);
        $('#imagePreviewWrap').removeClass('d-none');
    };
    reader.readAsDataURL(file);
});

// ─── Open Add Modal ───────────────────────────────────────────
$('#openAddProductModal').on('click', function () {
    resetModal('Add Product');
    modal().show();
});

// ─── Open Edit Modal ──────────────────────────────────────────
$(document).on('click', '.editProdBtn', function () {
    const d = $(this).data();
    resetModal('Edit Product');
    $('#prod_id').val(d.id);
    $('#prod_category').val(d.category_id);
    $('#prod_name').val(d.name);
    $('#prod_sku').val(d.sku !== 'N/A' ? d.sku : '');
    $('#prod_price').val(d.price);
    $('#prod_sale_price').val(d.sale_price || '');
    $('#prod_stock').val(d.stock);
    $('#prod_unit').val(d.unit);
    $('#prod_status').val(d.status);
    $('#prod_featured').prop('checked', d.featured == 1);
    $('#prod_description').val(d.description);
    if (d.image) {
        $('#imagePreview').attr('src', d.image);
        $('#imagePreviewWrap').removeClass('d-none');
    }
    modal().show();
});

// ─── Save (Add / Update) ──────────────────────────────────────
$('#saveProductBtn').on('click', function () {
    const id  = $('#prod_id').val();
    const url = id ? `${PROD_UPDATE_BASE}/${id}` : PROD_STORE_URL;

    const formData = new FormData();
    formData.append('_token',       CSRF);
    formData.append('category_id',  $('#prod_category').val());
    formData.append('name',         $('#prod_name').val());
    formData.append('sku',          $('#prod_sku').val());
    formData.append('price',        $('#prod_price').val());
    formData.append('sale_price',   $('#prod_sale_price').val());
    formData.append('stock',        $('#prod_stock').val());
    formData.append('unit',         $('#prod_unit').val());
    formData.append('status',       $('#prod_status').val());
    formData.append('description',  $('#prod_description').val());
    formData.append('is_featured',  $('#prod_featured').is(':checked') ? 1 : 0);
    if (id) formData.append('_method', 'PUT');

    const imageFile = $('#prod_image')[0].files[0];
    if (imageFile) formData.append('image', imageFile);

    $('#prodBtnSpinner').removeClass('d-none');
    $('#prodBtnText').text(id ? 'Updating...' : 'Saving...');

    $.ajax({
        url, method: 'POST', data: formData,
        processData: false, contentType: false,
        success(res) {
            modal().hide();
            table.ajax.reload(null, false); // reload without resetting page
            Swal.fire({ icon: 'success', title: res.message, timer: 2000, showConfirmButton: false });
        },
        error(xhr) {
            const errors = xhr.responseJSON?.errors;
            const msg    = errors ? Object.values(errors)[0][0] : (xhr.responseJSON?.message || 'Something went wrong!');
            Swal.fire({ icon: 'error', title: 'Error', text: msg });
        },
        complete() {
            $('#prodBtnSpinner').addClass('d-none');
            $('#prodBtnText').text('Save');
        }
    });
});

// ─── Delete ───────────────────────────────────────────────────
$(document).on('click', '.deleteProdBtn', function () {
    const id   = $(this).data('id');
    const name = $(this).data('name');

    Swal.fire({
        title: `Delete "${name}"?`,
        text: 'Product image will also be removed.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then(({ isConfirmed }) => {
        if (!isConfirmed) return;
        $.ajax({
            url: `${PROD_UPDATE_BASE}/${id}`,
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