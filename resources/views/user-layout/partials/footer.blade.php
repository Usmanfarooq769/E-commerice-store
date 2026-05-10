<style>
    .white-color{
        color:#fff;
    }
    .dark-white-color{
        color:rgba(255, 255, 255, .8);
    }
</style>
<footer class="footer bg-primary pt-5 pb-3 mt-auto">

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 white-color">
                    <i class="ri-store-2-line me-2"></i>
                    Zaroorat <span class="text-warning">Bazar</span>
                </h5>

                <p class=" mb-0 dark-white-color">
                    Your trusted online mini mart for groceries,
                    kitchen essentials, snacks, beverages,
                    household items, and daily needs at affordable prices.
                </p>
            </div>

            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 white-color">Quick Links</h6>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="{{ route('products') }}"
                            class=" text-decoration-none white-color">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('cart') }}"
                            class=" text-decoration-none white-color">
                            Cart
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#"
                            class=" text-decoration-none white-color">
                            Categories
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.us')}}"
                            class=" text-decoration-none white-color">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 white-color">Contact Info</h6>

                <p class="mb-2 white-color">
                    <i class="ri-phone-line me-2"></i>
                    +92 300 1234567
                </p>

                <p class="mb-2 white-color">
                    <i class="ri-mail-line me-2"></i>
                    help@zarooratbazar.com
                </p>

                <p class="mb-0 white-color">
                    <i class="ri-map-pin-line me-2"></i>
                    Pakistan
                </p>
            </div>

            {{-- Social --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 white-color">Follow Us</h6>

                <div class="d-flex gap-2">

                    <a href="#"
                        class="btn btn-warning btn-icon rounded-circle">
                        <i class="ri-facebook-fill"></i>
                    </a>

                    <a href="#"
                        class="btn btn-danger btn-icon rounded-circle">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="#"
                        class="btn btn-info btn-icon rounded-circle">
                        <i class="ri-twitter-x-line"></i>
                    </a>

                    <a href="#"
                        class="btn btn-success btn-icon rounded-circle">
                        <i class="ri-whatsapp-line"></i>
                    </a>

                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <hr class="border-warning my-4">

        <div class="text-center  medium-emphasis text-warning">
            © <span id="year"></span>
            <span class="fw-semibold white-color">Zarooratbazar</span>
            All Rights Reserved.
        </div>

    </div>

</footer>