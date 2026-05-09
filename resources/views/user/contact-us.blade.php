@extends('user-layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <section class="section" id="contact">
            <div class="container text-center">
                <p class="fs-14 fw-medium text-success mb-1">
                    <span class="landing-section-heading text-success"><i
                            class="ti ti-inner-shadow-top-right-filled text-secondary me-1 fs-10"></i>Contact Us</span>
                </p>
                <h4 class="fw-semibold mt-3 mb-2">Have Questions? We're Here to Help!</h4>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <p class="text-muted fs-14 mb-5 fw-normal">Discover our extensive support resources! Get quick
                            answers to your questions and find the solutions you need.</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="card custom-card contactus-form contactus-form-left overflow-hidden p-4">
                            <div class="text-start">
                                <div class="row pt-0 justify-content-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row gy-3 text-start">
                                           <form id="contactForm" method="POST" action="{{ route('contact.us.store') }}">
                                             @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Full Name <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name">

                            <small class="text-danger error-name"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Email Address
                            </label>

                            <input type="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter your email">

                            <small class="text-danger error-email"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Phone Number <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                name="phone_number"
                                class="form-control"
                                placeholder="Enter phone number">

                            <small class="text-danger error-phone_number"></small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Description <span class="text-danger">*</span>
                            </label>

                            <textarea name="description"
                                rows="5"
                                class="form-control"
                                placeholder="Write your message here..."></textarea>

                            <small class="text-danger error-description"></small>
                        </div>

                        <div class="d-grid">
                            <button type="submit"
                                id="submitBtn"
                                class="btn btn-primary btn-lg">

                                <span class="submit-text">
                                    <i class="fa fa-paper-plane me-2"></i>
                                    Submit Message
                                </span>

                                <span class="loading-text d-none">
                                    <i class="fa fa-spinner fa-spin me-2"></i>
                                    Sending...
                                </span>

                            </button>
                        </div>

</form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card-body bg-primary mt-5 rounded-3 bg-opacity-25">
                                <div class="row justify-content-center gy-3 gy-xl-0">
                                    <div class="col-xl-4">
                                        <div class="card custom-card mb-0">
                                            <div class="card-body">
                                                <span class="avatar avatar-lg bg-primary avatar-rounded">
                                                    <i class="ri-map-pin-fill fs-18 lh-1 align-middle"></i>
                                                </span>
                                                <p class="fw-semibold fs-14 mb-1 mt-3"><span
                                                        class="text-muted fw-medium fs-12">Door.No:</span> 1352/A-12,
                                                </p>
                                                <p class="fw-semibold fs-14 mb-0">Street, Hyderabad.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card custom-card mb-0">
                                            <div class="card-body">
                                                <span class="avatar avatar-lg bg-info avatar-rounded">
                                                    <i class="ri-phone-fill fs-18 lh-1 align-middle"></i>
                                                </span>
                                                <p class="fw-semibold fs-14 mb-1 mt-3"><span
                                                        class="text-muted fw-medium fs-12">Landline: </span>+122 1234
                                                    32422</p>
                                                <p class="fw-semibold fs-14 mb-0"><span
                                                        class="text-muted fw-medium fs-12">Mobile: </span>+014 1234
                                                    32422</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card custom-card mb-0">
                                            <div class="card-body">
                                                <span class="avatar avatar-lg bg-pink avatar-rounded">
                                                    <i class="ri-mail-fill fs-18 lh-1 align-middle"></i>
                                                </span>
                                                <p class="fw-semibold fs-14 mb-1 mt-3"><span
                                                        class="text-muted fw-medium fs-12">Mail:
                                                    </span>arhakhan@mail.com</p>
                                                <p class="fw-semibold fs-14 mb-0"><span
                                                        class="text-muted fw-medium fs-12">Mail:
                                                    </span>official874@mail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
@push('script')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {

    $('#contactForm').submit(function (e) {

        e.preventDefault();

        $('.text-danger').text('');

        $('#submitBtn').prop('disabled', true);

        $('.submit-text').addClass('d-none');
        $('.loading-text').removeClass('d-none');

        $.ajax({

            url: "{{ route('contact.us.store') }}",
            type: "POST",
            data: $(this).serialize(),

            success: function (response) {

                $('#submitBtn').prop('disabled', false);

                $('.submit-text').removeClass('d-none');
                $('.loading-text').addClass('d-none');

                if (response.status == true) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonColor: '#3085d6'
                    });

                    $('#contactForm')[0].reset();

                    $('.text-danger').text('');
                }

            },

            error: function (xhr) {

                $('#submitBtn').prop('disabled', false);

                $('.submit-text').removeClass('d-none');
                $('.loading-text').addClass('d-none');

                if (xhr.status == 422) {

                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function (key, value) {

                        $('.error-' + key).text(value[0]);

                    });

                }

                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please fill all required fields correctly.',
                    confirmButtonColor: '#d33'
                });

            }

        });

    });

});
</script>

@endpush