
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Profile Settings</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row gap-3 justify-content-center">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-3 mb-0 profile-settings-tab gap-3" id="myTab4" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link fs-16 fw-medium active" id="edit-profile" data-bs-toggle="tab" data-bs-target="#edit-profile-pane" role="tab" aria-controls="edit-profile-pane" aria-selected="true">Edit Profile</a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link fs-16 fw-medium" id="Other-settings-tab" data-bs-toggle="tab" data-bs-target="#Other-settings-tab-pane" role="tab" aria-controls="Other-settings-tab-pane" aria-selected="false">Other Settings</a>
                                </li>
                            </ul>
                            <div class="p-3 border-bottom border-top border-block-end-dashed tab-content">
                                <div class="tab-pane pt-3 show active overflow-hidden p-0 border-0" id="edit-profile-pane" role="tabpanel" aria-labelledby="edit-profile" tabindex="0">
                                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1 p-2 bg-primary-transparent rounded">
                                        <div class="fw-semibold d-block fs-17">Edit Profile </div>
                                        <div class="btn btn-primary btn-sm"><i class="ri-loop-left-line lh-1 me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Profile Picture :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-dashed bg-light rounded-3">
                                                <div>
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="../assets/images/faces/9.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="btn-list mb-1">
                                                        <button class="btn btn-sm btn-info rounded-pill btn-wave"><i class="ri-upload-2-line me-1"></i>Change Image</button>
                                                        <button class="btn btn-sm btn-danger-light rounded-pill btn-wave"><i class="ri-delete-bin-line me-1"></i>Remove</button>
                                                    </div>
                                                    <span class="d-block fs-12 text-muted">Supported formats: JPEG, PNG, GIF. Recommended size: 200x200 pixels. Maximum file size: 5MB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-user-name" class="form-label">User Name :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="profile-user-name" value="" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-email" class="form-label">Email :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" id="profile-email" value="" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-designation" class="form-label">Designation :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="profile-designation" value="" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-language" class="form-label">Language :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" id="profile-language" data-trigger>
                                                <option value="fr">French</option>
                                                <option value="ar">Arabic</option>
                                                <option value="ko">Korean</option>
                                                <option value="es">Spanish</option>
                                                <option value="de">German</option>
                                                <option value="en">English (US)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-phn-no" class="form-label">Phone No :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="profile-phn-no" value="" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="website" class="form-label">Website :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="url" class="form-control bg-light" id="website" placeholder="Enter your website URL" value="https://www.website.com">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="profile-address" class="form-label">Address :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="profile-address" rows="3" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane pt-3 overflow-hidden p-0 border-0" id="Other-settings-tab-pane" role="tabpanel" aria-labelledby="Other-settings-tab" tabindex="0">
                                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1 p-2 bg-primary-transparent rounded">
                                        <div class="fw-semibold d-block fs-17">Notifications Settings </div>
                                        <div class="btn btn-primary btn-sm"><i class="ri-loop-left-line lh-1 me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="row gx-5 gy-3">
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-top justify-content-between px-3">
                                                <div class="mail-notification-settings">
                                                    <p class="fs-14 mb-1 fw-medium">Enable Push Alerts</p>
                                                    <p class="fs-12 mb-0 text-muted">Stay updated with real-time notifications on your mobile or desktop.</p>
                                                </div>
                                                <div class="toggle on toggle-success mb-0 float-sm-end" id="push-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-top justify-content-between px-3 mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="fs-14 mb-1 fw-medium">Receive Email Alerts</p>
                                                    <p class="fs-12 mb-0 text-muted">Get important updates sent directly to your email.</p>
                                                </div>
                                                <div class="toggle toggle-success mb-0 float-sm-end" id="email-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-top justify-content-between px-3 mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="fs-14 mb-1 fw-medium">Activate SMS Alerts</p>
                                                    <p class="fs-12 mb-0 text-muted">Receive text message alerts on your mobile phone.</p>
                                                </div>
                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="sms-notifications">
                                                    <span></span>
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1 p-2 bg-primary-transparent rounded mt-4">
                                        <div class="fw-semibold d-block fs-17">Security Settings </div>
                                        <div class="btn btn-primary btn-sm"><i class="ri-loop-left-line lh-1 me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="d-sm-flex d-block align-items-top justify-content-between px-3">
                                        <div class="w-50">
                                            <p class="fs-14 mb-1 fw-medium">Profile Verification</p>
                                            <p class="fs-12 mb-0 text-muted">Choose how you'd like to verify your profile information for added security and identity confirmation.</p>
                                        </div>
                                        <div class="d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="email-notifications01" checked="">
                                                <label class="form-check-label" for="email-notifications01">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="sms-notifications01">
                                                <label class="form-check-label" for="sms-notifications01">
                                                    SMS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="phone-notifications">
                                                <label class="form-check-label" for="phone-notifications">
                                                    Phone Call
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-sm-flex d-block align-items-top justify-content-between px-3 mt-3">
                                        <div class="w-50">
                                            <p class="fs-14 mb-1 fw-medium">Two-Factor Authentication</p>
                                            <p class="fs-12 mb-0 text-muted">Enable two-factor authentication to protect your account from unauthorized access, even if your password is compromised.</p>
                                        </div>
                                        <a href="javascript:void(0);" class="link-info text-decoration-underline fw-medium">Set Up Two-Factor Authentication</a>
                                    </div>
                                    
                                    <div class="d-sm-flex d-block align-items-top justify-content-between px-3 mt-3">
                                        <div class="w-50">
                                            <p class="fs-14 mb-1 fw-medium">Password Protection</p>
                                            <p class="fs-12 mb-0 text-muted">Enable additional verification when changing account settings to ensure the rightful account owner is making modifications.</p>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input form-checked-success" type="checkbox" value="" id="personal-details">
                                            <label class="form-check-label" for="personal-details">
                                                Require Identity Confirmation
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="p-2 bg-light d-flex gap-2 justify-content-between rounded">
                                    <button class="btn btn-danger-light btn-wave">Deactivate Account</button>
                                    <button class="btn btn-primary btn-wave">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 --> 
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    @endsection