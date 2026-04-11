@extends('layouts.app')
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Mail Settings</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-body pb-0">
                                <ul class="nav nav-tabs tab-style-8 scaleX gap-xl-5 gap-2" role="tablist">
                                    <li class="nav-item me-0">
                                        <a class="nav-link pb-3 fs-14 fw-medium active" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#general-settings" aria-selected="true">
                                            <i class="ti ti-mail me-2 d-inline-block align-middle fs-16 lh-1 text-success"></i>General Settings
                                        </a>
                                    </li>
                                    <li class="nav-item me-0">
                                        <a class="nav-link pb-3 fs-14 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#security" aria-selected="true">
                                            <i class="ti ti-lock me-2 d-inline-block align-middle fs-16 lh-1 text-success"></i>Security Settings
                                        </a>
                                    </li>
                                    <li class="nav-item me-0">
                                        <a class="nav-link pb-3 fs-14 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#account-settings" aria-selected="true">
                                            <i class="ti ti-user-shield me-2 d-inline-block align-middle fs-16 lh-1 text-success"></i>Account Settings
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="general-settings" role="tabpanel">
                                        <div class="main-mail-settings">
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Notification Preferences</h3>
                                                        <p class="text-muted mb-0">Choose how you would like to receive notifications for new messages.</p>
                                                    </div>
                                                    <div class="form-check ms-auto">
                                                        <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                                                        <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                                                    </div>
                                                    <div class="form-check ms-auto">
                                                        <input class="form-check-input" type="checkbox" id="smsNotifications">
                                                        <label class="form-check-label" for="smsNotifications">SMS Notifications</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <h3 class="fs-16 fw-semibold">Email Signature</h3>
                                                <p class="text-muted">Create a custom email signature that will be added to the end of your messages.</p>
                                                <textarea class="form-control form-control-light border" rows="4" placeholder="Enter your email signature here..."></textarea>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Spam Filter Settings</h3>
                                                        <p class="text-muted mb-0">Manage your spam filter preferences to control what gets flagged as spam.</p>
                                                    </div>
                                                    <div class="form-check form-switch ms-auto">
                                                        <input class="form-check-input" type="checkbox" id="enableSpamFilter" checked>
                                                        <label class="form-check-label" for="enableSpamFilter">Enable Spam Filter</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-3 mb-2 flex-wrap">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Auto-Reply Settings</h3>
                                                        <p class="text-muted mb-0">Set up an automatic reply for when you are unavailable.</p>
                                                    </div>
                                                    <div class="form-check form-switch ms-auto">
                                                        <input class="form-check-input" type="checkbox" id="enableAutoReply">
                                                        <label class="form-check-label" for="enableAutoReply">Enable Auto-Reply</label>
                                                    </div>
                                                </div>
                                                <textarea class="form-control form-control-light border mt-2" rows="4" placeholder="Enter your auto-reply message..."></textarea>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <h3 class="fs-16 fw-semibold">Theme Settings</h3>
                                                <p class="text-muted">Choose a theme for your email interface.</p>
                                                <select class="form-select" id="themesetting" data-trigger>
                                                    <option selected>Default</option>
                                                    <option>Dark Mode</option>
                                                    <option>Light Mode</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="security" role="tabpanel">
                                        
                                        <div class="main-security-settings">
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Two-Factor Authentication</h3>
                                                        <p class="text-muted mb-0">Add an extra layer of security to your account by enabling two-factor authentication (2FA).</p>
                                                        <p class="text-muted mt-2 mb-0">Once enabled, you will receive a verification code via SMS or an authenticator app every time you log in.</p>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap ms-auto gap-3 justify-content-end text-end">
                                                        <div class="toggle toggle-success on mb-0">
                                                            <span></span>
                                                        </div>
                                                        <label class="form-check-label" for="enableSpamFilter">Enable Two-Factor Authentication</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Password Management</h3>
                                                        <p class="text-muted mb-0">Ensure your password is strong and secure. Consider changing your password regularly.</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button class="btn btn-secondary btn-sm btn-w-lg">Change Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <h3 class="fs-16 fw-semibold">Security Questions</h3>
                                                <p class="text-muted">Set security questions to help verify your identity if you forget your password.</p>
                                                <div class="mb-2 ps-3">
                                                    <label for="securityQuestion1" class="form-label">Security Question 1</label>
                                                    <select class="form-select" id="securityQuestion1" data-trigger>
                                                        <option selected>Select a question...</option>
                                                        <option>What is your mother's maiden name?</option>
                                                        <option>What was the name of your first pet?</option>
                                                        <option>What city were you born in?</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="Answer">
                                                </div>
                                                <div class="mb-2 ps-3">
                                                    <label for="securityQuestion2" class="form-label">Security Question 2</label>
                                                    <select class="form-select" id="securityQuestion2" data-trigger>
                                                        <option selected>Select a question...</option>
                                                        <option>What is your favorite book?</option>
                                                        <option>What was your childhood nickname?</option>
                                                        <option>What is the name of your best friend?</option>
                                                    </select>
                                                    <input type="text" class="form-control mt-2" placeholder="Answer">
                                                </div>
                                            </div>
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Recent Activity</h3>
                                                        <p class="text-muted mb-0">Review your recent login activity to ensure there are no unauthorized access attempts.</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button class="btn btn-primary-light ">View Recent Activity</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Logout from All Devices</h3>
                                                        <p class="text-muted mb-0">If you suspect any unauthorized access, you can log out from all devices.</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button class="btn btn-danger-light ">Logout from All Devices</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="tab-pane" id="account-settings" role="tabpanel">
                                        <div class="main-account-settings">
                                            <div class="setting-item mb-4">
                                                <h3 class="fs-16 fw-semibold">Personal Information</h3>
                                                <p class="text-muted">Update your personal information to ensure accurate communication.</p>
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="fullName" class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="phone" class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                                    </div>
                                                </form>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <h3 class="fs-16 fw-semibold">Change Password</h3>
                                                <p class="text-muted">Update your password to maintain account security.</p>
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="currentPassword" class="form-label">Current Password</label>
                                                        <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="newPassword" class="form-label">New Password</label>
                                                        <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
                                                    </div>
                                                </form>
                                            </div>
                                        
                                            <div class="setting-item mb-4">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Account Preferences</h3>
                                                        <p class="text-muted mb-0">Customize your account settings according to your preferences.</p>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap ms-auto gap-3 justify-content-end text-end">
                                                        <div class="toggle toggle-success on mb-0">
                                                            <span></span>
                                                        </div>
                                                        <label class="form-check-label">Receive Promotional Emails</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="setting-item">
                                                <div class="d-flex pe-xl-3 align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <h3 class="fs-16 fw-semibold">Delete Account</h3>
                                                        <p class="text-muted mb-0">If you wish to delete your account, please be aware that this action is irreversible.</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button class="btn btn-danger-light btn-sm btn-w-lg">Delete My Account</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top-0 d-flex justify-content-between gap-2 flex-wrap align-items-center bg-light m-3 rounded">
                                <div>
                                    <h3 class="fs-16 fw-semibold">Save Changes</h3>
                                    <p class="text-muted mb-0">Once you have made your changes, click the button below to save.</p>
                                </div>
                                <button class="btn btn-primary">Save Settings</button>
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