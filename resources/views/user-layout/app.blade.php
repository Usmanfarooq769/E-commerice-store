<!DOCTYPE html>
<html lang="en">

<head>
   @include("layouts.partials.mainhead")

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    @stack('styles') <!-- Stack for child styles -->
</head>




<body>
    @include("user-layout.partials.switcher")
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
    </div>



    <div class="page mx-0 px-0">

        @include("user-layout.partials.header")

       @if(request()->routeIs('products'))
            @include('user.hero-section')
        @endif


        <div class="main-content main-content">

            <!-- Start::app-content -->

            <div class="container-fluid mt-2">
                @yield('content')
                <!-- Section for child content -->
            </div>

        </div>
        <!-- End::app-content -->

        @include("user-layout.partials.footer")
        @include("layouts.partials.headersearch-modal")
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    window.Laravel = {
        csrfToken: '{{ csrf_token() }}',
        addToCartUrl: '{{ route("cart.add") }}',
        cartHeaderUrl: '{{ route("cart.header") }}',
        cartRemoveBase: '{{ url("cart") }}'
    };
</script>
 @include("layouts.partials.add-cart-script")

    @stack('scripts')
    
    <!-- Stack for child scripts -->
   
    <!-- Common JS -->
    @include("layouts.partials.commonjs")


    <!-- Internal Add/Edit Products JS -->
    <script src="{{ asset('assets/js/edit-products.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-switcher.js') }}"></script>



    <!-- /app-header -->
</body>

</html>