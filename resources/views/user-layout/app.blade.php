<!DOCTYPE html>
<html lang="en">
<head>
    @include("user-layout.partials.mainhead")

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    @stack('styles') <!-- Stack for child styles -->
</head>
<body>
    @include("user-layout.partials.switcher")
    @include("user-layout.partials.loader")

     @include("user-layout.partials.header")

    <div class="page" style="margin-top:60px">
       
     

        <!-- Start::app-content -->
        
            <div class="container-fluid mt-4">
                @yield('content') <!-- Section for child content -->
            </div>
        
        <!-- End::app-content -->

        @include("user-layout.partials.footer")
        @include("user-layout.partials.headersearch-modal")
    </div>

    <!-- Common JS -->
    @include("user-layout.partials.commonjs")

    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sales-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Date & Time Picker JS -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Quill Editor JS -->
    <script src="{{ asset('assets/libs/quill/quill.js') }}"></script>

    <!-- Filepond JS -->
    <script src="{{ asset('assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}"></script>
    <script src="{{ asset('assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}"></script>

    <!-- Internal Add/Edit Products JS -->
    <script src="{{ asset('assets/js/edit-products.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts') <!-- Stack for child scripts -->
    @include("user-layout.partials.custom-switcherjs")

    {{-- Header Cart JS --}}
<script>
const CART_HEADER_URL = '{{ route("user.cart.header") }}';
const CART_REMOVE_BASE = '{{ url("user/cart") }}';
const CSRF = '{{ csrf_token() }}';

function loadHeaderCart() {
    $.get(CART_HEADER_URL, function(res) {
        const count = res.count;
        $('#cart-icon-badge').text(count);
        $('#cart-data').text(count + ' Item' + (count != 1 ? 's' : ''));

        const $list    = $('#header-cart-items-scroll').empty();
        const $footer  = $('.empty-header-item');
        const $empty   = $('.empty-item');

        if (!res.items.length) {
            $footer.addClass('d-none');
            $empty.removeClass('d-none');
            return;
        }

        $empty.addClass('d-none');
        $footer.removeClass('d-none');

        res.items.forEach(item => {
            $list.append(`
                <li class="dropdown-item">
                    <div class="d-flex align-items-center gap-3">
                        <div class="lh-1">
                            <span class="avatar avatar-lg bg-light">
                                <img src="${item.image}" alt="${item.name}">
                            </span>
                        </div>
                        <div class="flex-fill">
                            <div class="fw-medium">
                                <a href="{{ route('user.cart') }}">${item.name}</a>
                            </div>
                            <span class="text-muted fs-12">${item.category}</span>
                            <div class="fs-11 fw-medium text-default">
                                <span class="text-muted">Qty: </span>${item.qty}
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="javascript:void(0);"
                                class="header-cart-remove float-end dropdown-item-close remove-header-cart"
                                data-id="${item.id}">
                                <i class="ti ti-trash"></i>
                            </a>
                            <div class="fw-semibold fs-14 text-default">PKR ${item.price}</div>
                        </div>
                    </div>
                </li>
            `);
        });
    });
}

// Load on page load
loadHeaderCart();

// Remove from header dropdown
$(document).on('click', '.remove-header-cart', function() {
    const id = $(this).data('id');
    $.ajax({
        url: `${CART_REMOVE_BASE}/${id}`,
        method: 'DELETE',
        data: { _token: CSRF },
        success() { loadHeaderCart(); }
    });
});
</script>
<!-- /app-header -->
</body>
</html>