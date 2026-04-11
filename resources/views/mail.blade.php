@extends('layouts.app')
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Mail</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <div class="main-mail-container mb-2 gap-2 d-flex">
                    <div class="mail-navigation border">
                        <div class="d-grid align-items-top p-3 border-bottom border-block-end-dashed">
                            <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                            data-bs-target="#mail-Compose">
                                <i class="ti ti-mail-plus fs-16 align-middle me-1"></i>Compose Mail
                            </button>
                        </div>
                        <div>
                            <ul class="list-unstyled mail-main-nav" id="mail-main-nav">
                                <li class="px-0 py-1">
                                    <div class="d-flex gap-1 justify-content-between align-items-center">
                                        <div class="fs-11 fw-medium text-success">MAILS </div>
                                    </div>
                                </li>
                                <li class="active mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-mail align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                All Mails
                                            </span>
                                            <span class="badge bg-secondary rounded-pill">2,142</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-inbox align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Inbox
                                            </span>
                                            <span class="badge bg-success rounded-pill">12</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-send align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Sent
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-notes align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Drafts
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-alert-circle align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Spam
                                            </span>
                                            <span class="badge bg-info rounded-pill">6</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-archive align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Archive
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-bookmark align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Important
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-trash align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Trash
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mail-type">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ti ti-star align-middle fs-16"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Starred
                                            </span>
                                            <span class="badge bg-warning rounded-pill">05</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 mt-2 py-1">
                                    <div class="d-flex gap-1 justify-content-between align-items-center">
                                        <div class="fs-11 fw-medium text-success">FOLDER LABELS </div>
                                        <a href="javascript:void(0);" class="fs-11 fw-medium text-primary"><i class="ri-add-line lh-1 align-middle me-1"></i>Add New</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-circle-fill align-middle fs-10 fw-medium text-secondary"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Mail
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-circle-fill align-middle fs-10 fw-medium text-success"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Home
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-circle-fill align-middle fs-10 fw-medium text-info"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Work
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 mt-2 py-1">
                                    <div class="d-flex gap-1 justify-content-between align-items-center">
                                        <div class="fs-11 text-muted fw-medium text-success">CONTACTS</div>
                                        <span class="badge bg-info rounded-pill">3 online</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-top lh-1">
                                            <div class="me-2">
                                                <span class="avatar avatar-sm online avatar-rounded">
                                                    <img src="../assets/images/faces/7.jpg" alt="Sender Image">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-default fw-medium mb-1">Sophia</p>
                                                <p class="fs-12 text-muted mb-0 fw-normal">Just sent the presentation.</p>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-top lh-1">
                                            <div class="me-2">
                                                <span class="avatar avatar-sm offline avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="Sender Image">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-default fw-medium mb-1">Michael</p>
                                                <p class="fs-12 text-muted mb-0 fw-normal">Will get back to you soon.</p>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-top lh-1">
                                            <div class="me-2">
                                                <span class="avatar avatar-sm online avatar-rounded">
                                                    <img src="../assets/images/faces/9.jpg" alt="Sender Image">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-default fw-medium mb-1">Daniel</p>
                                                <p class="fs-12 text-muted mb-0 fw-normal">Let's meet tomorrow at 10.</p>
                                            </div>
                                        </div>
                                    </a>    
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="total-mails border">
                        <div class="p-3 d-flex align-items-center border-bottom border-block-end-dashed flex-wrap gap-2">
                            <div class="input-group">
                                <input type="text" class="form-control shadow-none" placeholder="Search Email" aria-describedby="button-addon">
                                <button class="btn btn-primary" type="button" id="button-addon"><i class="ri-search-line me-1"></i> Search</button>
                            </div>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom flex-wrap gap-2">
                            <div class="me-3">
                                <input class="form-check-input check-all" type="checkbox" id="checkAll" value="" aria-label="...">
                            </div>
                            <div class="flex-fill">
                                <h6 class="fw-medium mb-0">Select All Mails <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="ms-2 text-danger"><i class="ri-delete-bin-line fs-15 lh-1"></i></a></h6>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-icon btn-light me-1 d-lg-none d-block total-mails-close btn-sm">
                                    <i class="ri-close-line"></i>
                                </button>
                                <div class="d-flex gap-1 align-items-center flex-wrap">
                                    <button class="btn btn-sm btn-secondary btn-wave" type="button" aria-expanded="false">
                                        <i class="ri-mail-unread-line me-1"></i> unread <span class="ms-1 fs-12 op-7">(5)</span>
                                    </button>
                                    <button class="btn btn-sm btn-success btn-wave" type="button" aria-expanded="false">
                                        <i class="ri-mail-line me-1"></i> Total Mails <span class="ms-1 fs-12 op-7">(2,275)</span>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-info btn-wave" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Recent</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Mark All Read</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete All</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mail-messages" id="mail-messages">
                            <ul class="list-unstyled mb-0 mail-messages-container">
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="Select mail">
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/8.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Jonathan Carter <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 9:45 PM, Yesterday
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Project Update</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        Here's the latest update on the project. We have completed the initial phase and are moving into development. Please review the attached documents for details.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 2 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 0 Docs</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="Select mail">
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/7.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Emily Green <i class="ri-circle-fill text-warning fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 3:15 PM, Today
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Budget Approval</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        We need your approval on the updated budget proposal. Please find the details in the attached files and let us know if everything looks good.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 4 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 1 Doc</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="Select mail" checked>
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/9.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Michael Stone <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 11:30 AM, Yesterday
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Sales Report Review</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        Please review the attached sales report for the last quarter. Let me know if you need any additional details or adjustments.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 5 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 2 Docs</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="Select mail">
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/10.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Sarah Johnson <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 4:20 PM, Today
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Client Feedback Request</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        I've attached the latest client feedback for your review. Please go through it and let me know if we need to make any adjustments to our approach.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 3 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 1 Doc</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="Select mail" checked>
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/11.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Daniel Clark <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 10:05 AM, Today
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">New Project Proposal</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        Please find attached the project proposal for your review. We've included the timeline and estimated costs. Let me know your thoughts.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 2 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 1 Doc</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="Select mail">
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/12.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Laura Davis <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 6:30 PM, Yesterday
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Team Meeting Notes</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        Here are the meeting notes from today's team session. Please review them and let me know if I missed anything important.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 1 Attachment</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 1 Doc</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="Select mail">
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/13.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Alex Turner <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 8:45 AM, Today
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Product Launch Details</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        Please review the final details for the product launch next week. Let me know if there are any last-minute changes we should address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 3 Attachments</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 2 Docs</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <div class="me-3 mt-1">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="Select mail" checked>
                                        </div>
                                        <div class="me-1 lh-1 text-center d-flex flex-column justify-content-between">
                                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                <img src="../assets/images/faces/14.jpg" alt="Sender Image">
                                            </span>
                                            <i class="ri-star-fill fs-14 d-block lh-1 text-warning mail-starred true pb-1" title="Starred"></i>
                                        </div>
                                        <div class="flex-fill text-truncate">
                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap mb-1">
                                                    <p class="mb-0 fw-medium text-primary">
                                                        Rachel Adams <i class="ri-circle-fill text-danger fs-7 lh-1 align-middle"></i>
                                                    </p>
                                                    <span class="badge bg-primary-transparent border border-primary border-opacity-10 fs-11 fw-medium">
                                                        <i class="ri-time-line align-middle me-1 align-middle"></i> 2:30 PM, Yesterday
                                                    </span>
                                                </div>
                                            </a>    
                                            <div class="mail-msg mb-1 d-flex gap-1 justify-content-between align-items-start w-100 text-truncate">
                                                <div class="text-truncate">
                                                    <span class="d-block mb-1 fw-medium text-truncate fs-14">Client Contract Renewal</span>
                                                    <div class="fs-12 text-muted text-truncate mail-msg-content">
                                                        The client has sent over the revised contract for renewal. Please review and provide feedback before we proceed with the final approval.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-medium align-self-end fs-12">
                                                <span class="text-success"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 1 Attachment</span>
                                                <span class="text-info ms-3"><i class="ri-file-text-line align-middle fs-14 lh-1"></i> 1 Doc</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
           
        <!-- End::app-content -->

        <!-- Start::mail information offcanvas -->
        <div class="offcanvas offcanvas-end mail-info-offcanvas" tabindex="-1" id="offcanvasRight"
            > 
            <div class="offcanvas-body p-0">
                <div class="mails-information">
                        <div class="mail-info-header d-flex flex-wrap gap-2 align-items-center">
                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar me-1">
                                <img src="../assets/images/faces/7.jpg" alt="">
                            </span>
                            <div class="flex-fill">
                                <h6 class="mb-0 fw-medium">Emily Green</h6>
                                <span class="text-muted fs-11">emilygreen8792@gmail.com</span>
                            </div>
                            <div class="mail-action-icons">
                                <button class="btn btn-icon btn-sm btn-primary-light border" title="Starred">
                                    <i class="ri-star-line lh-1 align-middle"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-secondary-light border ms-1" title="Archive">
                                    <i class="ri-inbox-archive-line lh-1 align-middle"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-success-light border ms-1" title="Report spam">
                                    <i class="ri-spam-2-line lh-1 align-middle"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-info-light border ms-1" title="Delete">
                                    <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-danger-light border ms-1" title="Reply">
                                    <i class="ri-reply-line lh-1 align-middle"></i>
                                </button>
                                <button type="button" class="btn-sm btn btn-outline-light border mail-offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ri-close-line lh-1 align-middle"></i></button>
                            </div>
                            <div class="responsive-mail-action-icons">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-star-line me-1 align-middle d-inline-block"></i>Starred</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line me-1 align-middle d-inline-block"></i>Archive</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-spam-2-line me-1 align-middle d-inline-block"></i>Report Spam</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-reply-line me-1 align-middle d-inline-block"></i>Reply</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-icon btn-light ms-1 close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mail-info-body p-3" id="mail-info-body">
                            <div class="mb-4">
                                <p class="fs-20 fw-medium mb-1">Exciting News: Upcoming Product Launch!</p>
                                <span class="fs-11 badge bg-primary-transparent">Date: Oct 22, 2024 | Time: 03:05 PM</span>
                            </div>
                            <div class="main-mail-content mb-3">
                                <h2 class="fs-16 fw-semibold mb-3">Dear Mr. Jacksul Monish &#128400;,</h2>
                                <p class="mb-2 text-muted">We are thrilled to announce the launch of our latest product, <strong>"Innovative Solutions for Everyday Challenges."</strong> This cutting-edge solution is designed to enhance your productivity and streamline your workflow, making it an essential tool for professionals in today's fast-paced environment.</p>
                                <h6 class="fw-semibold">Key Features of Our New Product:</h6>
                                <ol class="text-muted my-3">
                                    <li class="mb-2">User-friendly interface for seamless navigation</li>
                                    <li class="mb-2">Advanced analytics to drive informed decision-making</li>
                                    <li class="mb-2">24/7 customer support to assist you anytime</li>
                                </ol>
                                
                                <p class="mb-2 text-muted">We are excited to see how this new product will positively impact your daily tasks. May it bring you efficiency and success in all your endeavors!</p>
                                <div class="mb-0 mt-4 text-muted">
                                    <p class="fw-medium mb-3">Thank you for being a valued part of our community.</p>
                                </div>
                                <p class="mb-0 fw-medium ">Best regards,</p>
                                <p class="mb-0">Emily Green</p>
                            </div>                        
                            <div class="mail-attachments mb-3">
                                <div class="fw-medium mb-3 d-flex gap-3 align-items-center justify-content-between">
                                    <span class="text-success fs-14"><i class="ri-attachment-2 align-middle fs-14 lh-1"></i> 2 Attachment</span>
                                    <a class="btn-sm btn btn-info-light ms-auto">Download all</a>
                                </div>
                                <div class="mt-2 d-flex flex-wrap gap-3 p-2 bg-light rounded">
                                    <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2 flex-fill bg-white">
                                        <div class="lh-1">
                                            <span class="avatar avatar-md bg-primary-transparent avatar-rounded">
                                                <i class="ri-file-pdf-2-line fs-18 lh-1 align-middle"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 fs-12 fw-medium">
                                                    Instructions_file.pdf
                                                </p>
                                            </a>
                                            <div class="fs-12 text-muted text-wrap">2.1KB</div>  
                                        </div>
                                        <div class="ms-auto">
                                            <div class="btn btn-white border shadow-sm rounded-circle btn-icon">
                                                <i class="ri-eye-line lh-1 align-middle text-info fs-17"></i>
                                            </div>
                                            <div class="btn btn-white border shadow-sm rounded-circle btn-icon">
                                                <i class="ri-download-cloud-line lh-1 align-middle text-success fs-17"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2 flex-fill bg-white">
                                        <div class="me-1 lh-1">
                                            <span class="avatar avatar-md bg-primary-transparent avatar-rounded">
                                                <i class="ri-file-pdf-line fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 fs-12 fw-medium">
                                                    Complete_Folder.doc
                                                </p>
                                            </a>
                                            <div class="fs-12 text-muted text-wrap">1.5KB</div>  
                                        </div>
                                        <div class="ms-auto">
                                            <div class="btn btn-white border shadow-sm rounded-circle btn-icon">
                                                <i class="ri-eye-line lh-1 align-middle text-info fs-17"></i>
                                            </div>
                                            <div class="btn btn-white border shadow-sm rounded-circle btn-icon">
                                                <i class="ri-download-cloud-line lh-1 align-middle text-success fs-17"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <span class="fs-14 fw-medium"><i class="ri-reply-all-line me-1 align-middle d-inline-block"></i>Reply:</span>
                            </div>
                            <div class="mail-reply">
                                <div id="mail-reply-editor"></div>
                            </div>
                        </div>
                        <div class="mail-info-footer d-flex flex-wrap gap-2 align-items-center justify-content-between">
                            <div>
                                <button class="btn btn-icon btn-primary-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                    <i class="ri-printer-line"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                    <i class="ri-mail-open-line"></i>
                                </button>
                                <button class="btn btn-icon btn-success-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reload">
                                    <i class="ri-refresh-line"></i>
                                </button>
                            </div>
                            <div>
                                <button class="btn btn-secondary">
                                    <i class="ri-share-forward-line me-1 d-inline-block align-middle"></i>Forward
                                </button>
                                <button class="btn btn-danger ms-1">
                                    <i class="ri-reply-all-line me-1 d-inline-block align-middle"></i>Reply
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End::mail information offcanvas -->
        
        <!-- Start::mail modal -->
        <div class="modal modal-lg fade" id="mail-Compose" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="mail-ComposeLabel">Compose Mail</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6 mb-2">
                                <label for="fromMail" class="form-label">From<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                <input type="email" class="form-control" id="fromMail" value="henrymilo2345@gmail.com">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="toMail" class="form-label">To<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                <select class="form-control" name="toMail" id="toMail" multiple>
                                    <option value="Choice 1" selected>jay@gmail.com</option>
                                    <option value="Choice 2">kia@gmail.com</option>
                                    <option value="Choice 3">don@gmail.com</option>
                                    <option value="Choice 4">kimo@gmail.com</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="mailCC" class="form-label text-dark fw-medium">Cc</label>
                                <input type="email" class="form-control" id="mailCC">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="mailBcc" class="form-label text-dark fw-medium">Bcc</label>
                                <input type="email" class="form-control" id="mailBcc">
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label for="Subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="Subject" placeholder="Subject">
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label">Content :</label>
                                <div class="mail-compose">
                                    <div id="mail-compose-editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::mail modal -->

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    @endsection