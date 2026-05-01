@extends('layouts.app')

@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Permission</h1>
    <nav><ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Setting</a></li>
        <li class="breadcrumb-item active">Permission</li>
    </ol></nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h6 class="card-title">All Permissions</h6>
                <span class="badge bg-primary">  {{ $totalPermissions }} total</span>

                <div class="d-flex align-items-center">
                    @can('create permissions')
                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> New Permission
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Permission Name</th>
                                <th>Assigned to Roles</th>
                                <th>Guard</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(function() {

    $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.permissions.data') }}", 

        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'roles',
                name: 'roles',
                orderable: false,
                searchable: false
            },
            {
                data: 'guard_name',
                name: 'guard_name'
            },
            {
                data: 'actions',
                name: 'actions',
                orderable: false,
                searchable: false
            },
        ]
    });

});


$(document).on('click', '.delete-btn', function () {

    let id = $(this).data('id');
    let name = $(this).data('name');

    Swal.fire({
        title: 'Are you sure?',
        text: "Delete permission: " + name + " ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: "/admin/permissions/" + id,
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: "DELETE"
                },
                success: function (response) {

                    Swal.fire(
                        'Deleted!',
                        response.message,
                        'success'
                    );

                    // 🔥 reload datatable without page refresh
                    $('.yajra-datatable').DataTable().ajax.reload();
                },
                error: function () {
                    Swal.fire(
                        'Error!',
                        'Something went wrong',
                        'error'
                    );
                }
            });

        }

    });

});

</script>

@endpush