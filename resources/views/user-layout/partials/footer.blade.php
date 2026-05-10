
<!-- <footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted">
            Copyright © <span id="year"></span> 
            <a href="javascript:void(0);" class="text-dark fw-semibold">usman Farooq</a>.
    
  All rights reserved.
        </span>        
    </div>
</footer> -->







{{-- ================= FOOTER ================= --}}
<footer class="footer bg-primary pt-5 pb-3 mt-auto">

    <div class="container">

        <div class="row gy-4">

            {{-- About --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 text-white">
                    <i class="ri-store-2-line me-2"></i>
                    Zaroorat <span class="text-warning">Bazar</span>
                </h5>

                <p class=" mb-0">
                    Your trusted online mini mart for groceries,
                    kitchen essentials, snacks, beverages,
                    household items, and daily needs at affordable prices.
                </p>
            </div>

            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 ">Quick Links</h6>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="{{ route('products') }}"
                            class=" text-decoration-none">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('cart') }}"
                            class=" text-decoration-none">
                            Cart
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#"
                            class=" text-decoration-none">
                            Categories
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.us')}}"
                            class=" text-decoration-none">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Contact Info</h6>

                <p class="mb-2">
                    <i class="ri-phone-line me-2"></i>
                    +92 300 1234567
                </p>

                <p class="mb-2">
                    <i class="ri-mail-line me-2"></i>
                    help@zarooratbazar.com
                </p>

                <p class="mb-0">
                    <i class="ri-map-pin-line me-2"></i>
                    Pakistan
                </p>
            </div>

            {{-- Social --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Follow Us</h6>

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
        <hr class="border-secondary my-4">

        <div class="text-center  small">
            © <span id="year"></span>
            <span class="fw-semibold ">Zarooratbazar</span>.
            All Rights Reserved.
        </div>

    </div>

</footer>