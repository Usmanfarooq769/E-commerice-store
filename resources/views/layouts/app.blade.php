<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.partials.mainhead")

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    @stack('styles') <!-- Stack for child styles -->
</head>
<body>
    @include("layouts.partials.switcher")
    @include("layouts.partials.loader")

    <div class="page">
        @include("layouts.partials.header")
        @include("layouts.partials.sidebar")

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                @yield('content') <!-- Section for child content -->
            </div>
        </div>
        <!-- End::app-content -->

        @include("layouts.partials.footer")
        @include("layouts.partials.headersearch-modal")
    </div>

    <!-- Common JS -->
    @include("layouts.partials.commonjs")

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
    @include("layouts.partials.custom-switcherjs")
</body>
</html>