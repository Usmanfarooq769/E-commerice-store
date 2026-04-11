@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Categories</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </ol></nav>
</div>

<div class="card custom-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">All Categories</h3>
        <button class="btn btn-primary" id="openAddModal">
            <i class="ri-add-line me-1"></i> Add Category
        </button>
    </div>
    <div class="card-body">
        <table id="categoriesTable" class="table table-bordered  text-nowrap w-100">
            <thead >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
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
<div class="modal fade" id="categoryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalTitle">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="cat_id">

                <div class="mb-3">
                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cat_name" placeholder="e.g. Beverages">
                    <div class="invalid-feedback" id="err_name"></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="cat_description" rows="2" placeholder="Optional..."></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status <span class="text-danger">*</span></label>
                    <select class="form-select" id="cat_status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveCategoryBtn">
                    <span id="saveBtnText">Save</span>
                    <span id="saveBtnSpinner" class="spinner-border spinner-border-sm d-none ms-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
const CSRF            = '{{ csrf_token() }}';
const CAT_DATA_URL    = '{{ route("admin.categories.data") }}';
const CAT_STORE_URL   = '{{ route("admin.categories.store") }}';
const CAT_UPDATE_BASE = '{{ url("admin/categories") }}';

// ─── Init DataTable ───────────────────────────────────────────
const table = $('#categoriesTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: CAT_DATA_URL,
    columns: [
        { data: 'DT_RowIndex',     name: 'id',          orderable: false, searchable: false },
        { data: 'name',            name: 'name' },
        { data: 'slug_col',        name: 'slug' },
        { data: 'description_col', name: 'description', orderable: false },
        { data: 'status_badge',    name: 'status' },
        { data: 'created_by',      name: 'creator.name', orderable: false },
        { data: 'created_at',      name: 'created_at' },
        { data: 'updated_at',      name: 'updated_at' },
        { data: 'actions',         name: 'actions',     orderable: false, searchable: false },
    ],
    order: [[0, 'desc']],
    pageLength: 10,
    language: { processing: '<div class="spinner-border text-primary"></div>' }
});

// ─── Helpers ──────────────────────────────────────────────────
const modal = () => bootstrap.Modal.getOrCreateInstance(document.getElementById('categoryModal'));

function resetModal(title = 'Add Category') {
    $('#categoryModalTitle').text(title);
    $('#cat_id').val('');
    $('#cat_name').val('').removeClass('is-invalid');
    $('#cat_description').val('');
    $('#cat_status').val('active');
    $('#err_name').text('');
}

// ─── Open Add Modal ───────────────────────────────────────────
$('#openAddModal').on('click', function () {
    resetModal('Add Category');
    modal().show();
});

// ─── Open Edit Modal ──────────────────────────────────────────
$(document).on('click', '.editCatBtn', function () {
    const d = $(this).data();
    resetModal('Edit Category');
    $('#cat_id').val(d.id);
    $('#cat_name').val(d.name);
    $('#cat_description').val(d.description);
    $('#cat_status').val(d.status);
    modal().show();
});

// ─── Save (Add / Update) ──────────────────────────────────────
$('#saveCategoryBtn').on('click', function () {
    const id   = $('#cat_id').val();
    const name = $('#cat_name').val().trim();

    if (!name) {
        $('#cat_name').addClass('is-invalid');
        $('#err_name').text('Category name is required.');
        return;
    }
    $('#cat_name').removeClass('is-invalid');

    const url    = id ? `${CAT_UPDATE_BASE}/${id}` : CAT_STORE_URL;
    const method = id ? 'PUT' : 'POST';

    $('#saveBtnSpinner').removeClass('d-none');
    $('#saveBtnText').text(id ? 'Updating...' : 'Saving...');

    $.ajax({
        url, method,
        data: {
            _token:      CSRF,
            name:        name,
            description: $('#cat_description').val(),
            status:      $('#cat_status').val(),
        },
        success(res) {
            modal().hide();
            table.ajax.reload(null, false);
            Swal.fire({ icon: 'success', title: res.message, timer: 2000, showConfirmButton: false });
        },
        error(xhr) {
            const errors = xhr.responseJSON?.errors;
            if (errors?.name) {
                $('#cat_name').addClass('is-invalid');
                $('#err_name').text(errors.name[0]);
            } else {
                Swal.fire({ icon: 'error', title: xhr.responseJSON?.message || 'Something went wrong!' });
            }
        },
        complete() {
            $('#saveBtnSpinner').addClass('d-none');
            $('#saveBtnText').text('Save');
        }
    });
});

// ─── Delete ───────────────────────────────────────────────────
$(document).on('click', '.deleteCatBtn', function () {
    const id   = $(this).data('id');
    const name = $(this).data('name');

    Swal.fire({
        title: `Delete "${name}"?`,
        text: 'This cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then(({ isConfirmed }) => {
        if (!isConfirmed) return;
        $.ajax({
            url: `${CAT_UPDATE_BASE}/${id}`,
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