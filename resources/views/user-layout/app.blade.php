<!DOCTYPE html>
<html lang="en">

<head>
    @include("user-layout.partials.mainhead")

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    @stack('styles')
    <!-- Stack for child styles -->
</head>




<body>
    @include("user-layout.partials.switcher")
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
    </div>



    <div class="page">

        @include("user-layout.partials.header")

        <div class="main-content app-content">

            <!-- Start::app-content -->

            <div class="container-fluid mt-4">
                @yield('content')
                <!-- Section for child content -->
            </div>

        </div>
        <!-- End::app-content -->

        @include("user-layout.partials.footer")
        @include("user-layout.partials.headersearch-modal")
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    window.Laravel = {
        csrfToken: '{{ csrf_token() }}',
        addToCartUrl: '{{ route("user.cart.add") }}',
        cartHeaderUrl: '{{ route("user.cart.header") }}',
        cartRemoveBase: '{{ url("user/cart") }}'
    };
</script>
 @include("user-layout.partials.add-cart-script")

    @stack('scripts')
    
    <!-- Stack for child scripts -->
   
    <!-- Common JS -->
    @include("user-layout.partials.commonjs")


    <!-- Internal Add/Edit Products JS -->
    <script src="{{ asset('assets/js/edit-products.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-switcher.js') }}"></script>



    <!-- /app-header -->
</body>

</html>