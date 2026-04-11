@extends('layouts.app')
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Profile</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card profile-card overflow-hidden">
                            <div class="main-profile-cover text-fixed-white">
                                <div class="p-xl-5 p-2 z-1">
                                    <div class="p-4 bg-black-transparent rounded-3 border border-opacity-10 border-white">
                                        <div class="d-flex gap-3 align-items-center flex-wrap">
                                            <div>
                                                <img src="../assets/images/faces/14.jpg" alt="" class="img-fluid rounded-circle p-2 bg-success bg-opacity-25 shadow">
                                            </div>
                                            <div>
                                                <h4 class="text-fixed-white mb-1">Ashwin Seth </h4>
                                                <p class="mb-1 op-6 fs-15"><i class="ri-briefcase-fill lh-1 align-middle me-2 d-inline-block"></i>Lead Product Designer</p>
                                                <div class="d-flex gap-3 align-items-center flex-wrap">
                                                    <p class="mb-0 op-6 fs-15"><i class="ri-map-pin-line lh-1 align-middle me-2 d-inline-block"></i>settle, Usa</p>
                                                    <span class="op-3">|</span>
                                                    <p class="mb-0 op-6 fs-15"><i class="ri-mail-line lh-1 align-middle me-2 d-inline-block"></i>ashwinseth.mail.com</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto align-self-end pb-2">
                                                <div class="d-flex flex-wrap gap-xl-5 gap-2">
                                                    <div class="text-center">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <i class="ri-user-add-line fs-11 lh-1 p-2 bg-info rounded-circle text-fixed-white"></i>
                                                            <div class="">
                                                                <p class="mb-0 op-7 fs-14">FOLLOWERS</p>
                                                            </div>
                                                        </div>
                                                        <p class="fw-semibold fs-25 mb-0">172</p>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-start">
                                                        <i class="ri-user-follow-line fs-11 lh-1 p-2 bg-secondary rounded-circle text-fixed-white"></i>
                                                        <div class="">
                                                            <p class="mb-0 op-7 fs-14">FOLLOWING</p>
                                                            <p class="fw-semibold fs-25 mb-0">37.1k</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-start ms-auto">
                                                        <i class="ri-heart-line fs-11 lh-1 p-2 bg-danger rounded-circle text-fixed-white"></i>
                                                        <div class="">
                                                            <p class="mb-0 op-7 fs-14">LIKES</p>
                                                            <p class="fw-semibold fs-25 mb-0">200</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 position-relative">
                                <div class="profile-content">
                                    <div class="card custom-card rounded-0 mb-0">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-style-6 mb-3 p-0" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link w-100 text-start" id="edit-profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#edit-profile-tab-pane" type="button" role="tab"
                                                        aria-controls="edit-profile-tab-pane" aria-selected="true">Edit Profile</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link w-100 text-start" id="timeline-tab" data-bs-toggle="tab"
                                                        data-bs-target="#timeline-tab-pane" type="button" role="tab"
                                                        aria-controls="timeline-tab-pane" aria-selected="false">Timeline</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="posts-tab" data-bs-toggle="tab"
                                                        data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                        aria-controls="posts-tab-pane" aria-selected="false">Posts</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link w-100 text-start" id="gallery-tab" data-bs-toggle="tab"
                                                        data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                        aria-controls="gallery-tab-pane" aria-selected="false">Gallery</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link w-100 text-start" id="friends-tab" data-bs-toggle="tab"
                                                        data-bs-target="#friends-tab-pane" type="button" role="tab"
                                                        aria-controls="friends-tab-pane" aria-selected="false">Friends</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="profile-tabs">
                                                <div class="tab-pane p-0 border-0" id="edit-profile-tab-pane" role="tabpanel"
                                                aria-labelledby="edit-profile-tab" tabindex="0">
                                                    <ul class="list-group list-group-flush border rounded-3">
                                                        <li class="list-group-item p-3">
                                                            <span class="fw-medium fs-15 d-block mb-3">Personal Info :</span>
                                                            <div class="row gy-3 align-items-center">
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Username :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="alex.mason">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">First Name :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="Alexandra">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Last Name :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="Mason">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Designation :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="Lead Product Designer">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Years of Experience :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="number" class="form-control" placeholder="Enter Ashwin Sethr experience" value="7">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Date of Birth :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="date" class="form-control" value="1994-10-15">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item p-3">
                                                            <span class="fw-medium fs-15 d-block mb-3">Social Info :</span>
                                                            <div class="row gy-3 align-items-center">
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Github :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="github.com/alexmason">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Twitter :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com/alexdesigns">
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Portfolio :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" class="form-control" placeholder="Placeholder" value="ashwinseth.design">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item p-3">
                                                            <span class="fw-medium fs-15 d-block mb-3">About Info :</span>
                                                            <div class="row gy-3 align-items-center">
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Biographical Info :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <textarea class="form-control" id="text-area" rows="4">
                                                                        Hi, I'm Ashwin Seth, a Senior Product Designer living in the vibrant city of San Francisco, USA. My passion lies in crafting seamless and visually appealing user experiences that make a real impact.

                                                                        With a focus on product design and UI/UX, I'm always looking for ways to innovate and enhance user interactions. Having led key design initiatives at Apple Inc., I'm driven by the challenge of pushing creative boundaries and look forward to new and exciting projects in the future.
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </li>                                                        
                                                        <li class="list-group-item p-3">
                                                            <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                                            <div class="row gy-3 align-items-center">
                                                                <div class="col-xl-3">
                                                                    <div class="lh-1">
                                                                        <span class="fw-medium">Skills :</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input class="form-control" id="choices-text-preset-values" type="text" value="UI/UX Design, Product Design, Prototyping, User Research, Design Systems, Wireframing, Agile Methodologies, Collaboration, Problem Solving, Design Thinking, Interaction Design, Visual Communication" placeholder="This is a placeholder">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane ps-0 pb-0" id="timeline-tab-pane" role="tabpanel" 
                                                    aria-labelledby="timeline-tab" tabindex="0">
                                                    <ul class="list-unstyled profile-timeline">
                                                        <li>
                                                            <div>
                                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                    <img src="../assets/images/faces/4.jpg" alt="Ethan's hiking adventure">
                                                                </span>
                                                                <div class="mb-3">
                                                                    <p class="mb-0">
                                                                        <span class="fw-semibold">Ethan </span>shared photos from his recent hiking adventure. "The view at the top was breathtaking! A much-needed escape from the city." <span class="text-primary fw-medium text-decoration-underline">#MountainViews</span>.
                                                                    </p>
                                                                    <span class="text-end ms-auto fs-11 text-muted"><i class="ri-calendar-line me-2"></i>12, Sep 2024 - 09:20AM</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-info me-1 fs-12">#OutdoorLife</span>
                                                                    </a>
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-pink me-1 fs-12">#Adventure</span>
                                                                    </a>
                                                                </div>
                                                                <p class="text-muted">
                                                                    “There's nothing like reaching the summit and soaking in the beauty of nature. Can't wait for the next adventure!”
                                                                </p>
                                                                <img src="../assets/images/media/media-48.jpg" alt="Hiking Adventure" class="img-fluid me-1 rounded">
                                                                <img src="../assets/images/media/media-52.jpg" alt="Mountain View" class="img-fluid me-1 rounded">
                                                                <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap mt-3">
                                                                    <div class="btn-list">
                                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 15 Comments</button>
                                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 25 Likes</button>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-success-light btn-wave waves-effect waves-light ms-auto"><i class="ri-share-line"></i> Share</button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                    <img src="../assets/images/faces/6.jpg" alt="Oliver's cooking masterpiece">
                                                                </span>
                                                                <div class="mb-3">
                                                                    <p class="mb-0">
                                                                        <span class="fw-semibold">Oliver </span>shared his latest cooking masterpiece. "Tried out a new recipe today, and it turned out amazing! Can't wait to experiment with more flavors." <span class="text-primary fw-medium text-decoration-underline">#FoodieLife</span>.
                                                                    </p>
                                                                    <span class="text-end ms-auto fs-11 text-muted"><i class="ri-calendar-line me-2"></i>21, Aug 2023 - 07:10PM</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-info me-1 fs-12">#HomeCooking</span>
                                                                    </a>
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-pink me-1 fs-12">#ChefInTheMaking</span>
                                                                    </a>
                                                                </div>
                                                                <p class="text-muted">
                                                                    “There's something special about creating delicious food from scratch. Here’s to many more culinary adventures!”
                                                                </p>
                                                                <img src="../assets/images/media/media-54.jpg" alt="Cooking Dish" class="img-fluid me-1 rounded">
                                                                <img src="../assets/images/media/media-55.jpg" alt="Kitchen Setup" class="img-fluid me-1 rounded">
                                                                <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap mt-3">
                                                                    <div class="btn-list">
                                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 20 Comments</button>
                                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 30 Likes</button>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-success-light btn-wave waves-effect waves-light ms-auto"><i class="ri-share-line"></i> Share</button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                    <img src="../assets/images/faces/8.jpg" alt="Ivy's art exhibition">
                                                                </span>
                                                                <div class="mb-3">
                                                                    <p class="mb-0">
                                                                        <span class="fw-semibold">Ivy </span>shared photos from her recent art exhibition. "So thrilled to finally showcase my artwork! The support from everyone has been overwhelming." <span class="text-primary fw-medium text-decoration-underline">#ArtExhibition</span>.
                                                                    </p>
                                                                    <span class="text-end ms-auto fs-11 text-muted"><i class="ri-calendar-line me-2"></i>15, Jul 2023 - 02:45PM</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-info me-1 fs-12">#CreativeJourney</span>
                                                                    </a>
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-pink me-1 fs-12">#Inspiration</span>
                                                                    </a>
                                                                </div>
                                                                <p class="text-muted">
                                                                    “This has been such an exciting milestone for me as an artist. I’m incredibly grateful for the experience!”
                                                                </p>
                                                                <img src="../assets/images/media/media-56.jpg" alt="Art Display" class="img-fluid me-1 rounded">
                                                                <img src="../assets/images/media/media-57.jpg" alt="Exhibition Setup" class="img-fluid me-1 rounded">
                                                                <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap mt-3">
                                                                    <div class="btn-list">
                                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 12 Comments</button>
                                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 18 Likes</button>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-success-light btn-wave waves-effect waves-light ms-auto"><i class="ri-share-line"></i> Share</button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                    <img src="../assets/images/faces/5.jpg" alt="Sofia's yoga retreat">
                                                                </span>
                                                                <div class="mb-3">
                                                                    <p class="mb-0">
                                                                        <span class="fw-semibold">Sofia </span>shared her experience from a recent yoga retreat. "The retreat was life-changing! Feeling so much more centered and calm." <span class="text-primary fw-medium text-decoration-underline">#YogaRetreat</span>.
                                                                    </p>
                                                                    <span class="text-end ms-auto fs-11 text-muted"><i class="ri-calendar-line me-2"></i>18, Jun 2023 - 07:30AM</span>
                                                                </div>
                                                                <p class="text-muted">
                                                                    “The yoga sessions, the peaceful surroundings, and the amazing group of people made this retreat unforgettable.”
                                                                    <a href="javascript:void(0);">
                                                                        <span class="text-pink me-1 fs-12">#Mindfulness</span>
                                                                    </a>
                                                                </p>
                                                                <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap mt-3">
                                                                    <div class="btn-list">
                                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 22 Comments</button>
                                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 40 Likes</button>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-success-light btn-wave waves-effect waves-light ms-auto"><i class="ri-share-line"></i> Share</button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane show active fade p-0 border-0" id="posts-tab-pane"
                                                    role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                                    <ul class="list-group">
                                                        <li class="list-group-item bg-primary-transparent">
                                                            <textarea rows="4" class="form-control" placeholder="Write Something" aria-label="Write Something"></textarea>
                                                            <div class="d-flex gap-2 align-items-center lh-1 mt-3 flex-wrap">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg" alt="">
                                                                </span>
                                                                <div class="fw-semibold lh-1">Ashwin Seth</div>
                                                                <div class="ms-auto">
                                                                    <div class="btn-list">
                                                                        <button class="btn btn-icon btn-sm rounded-circle btn-info btn-wave" type="button"><i class="bi bi-camera"></i></button>
                                                                        <button class="btn btn-icon btn-sm rounded-circle btn-success btn-wave" type="button"><i class="bi bi-emoji-smile"></i></button>
                                                                        <button class="btn btn-icon btn-sm rounded-circle btn-secondary btn-wave" type="button"><i class="bi bi-paperclip"></i></button>
                                                                        <button class="btn btn-sm btn-pill btn-primary btn-wave btn-w-md" type="button">Post</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row gy-3">
                                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="rounded border">
                                                                        <div class="p-3 d-flex align-items-top flex-xl-nowrap flex-wrap">
                                                                            <div class="me-2">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="../assets/images/faces/14.jpg" alt="Profile Image">
                                                                                </span>
                                                                            </div>
                                                                            <div class="flex-fill">
                                                                                <div class="d-flex gap-2 flex-wrap">
                                                                                    <div>
                                                                                        <p class="mb-1 fw-semibold lh-1">Ashwin Seth</p>
                                                                                        <p class="fs-12 text-muted mb-0">Enjoying a great weekend at the beach with family. The view is amazing and the weather couldn't be better!</p>
                                                                                        <p class="fs-12 text-info mb-2">#WeekendVibes #BeachDay</p>
                                                                                        <p class="fs-12 text-muted fw-medium"><i class="ri-calendar-line me-2"></i>12, Oct - 02:14PM</p>
                                                                                    </div>
                                                                                    <div class="ms-auto">
                                                                                        <div class="dropdown">
                                                                                            <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Hide from Timeline</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-between mt-1 flex-wrap gap-2">
                                                                                    <div class="btn-list">
                                                                                        <button class="btn btn-primary btn-sm btn-wave">
                                                                                            <i class="ri-message-line"></i> Comment
                                                                                        </button>
                                                                                        <button class="btn btn-sm btn-secondary btn-wave">
                                                                                            <i class="ri-thumb-up-line"></i> Like
                                                                                        </button>
                                                                                    </div>
                                                                                    <button class="btn btn-sm btn-success btn-wave ms-auto">
                                                                                        <i class="ri-share-line"></i> Share
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                    </div>  
                                                                </div>
                                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="rounded border">
                                                                        <div class="p-3 d-flex align-items-top flex-xl-nowrap flex-wrap">
                                                                            <div class="me-2">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="../assets/images/faces/7.jpg" alt="Profile Image">
                                                                                </span>
                                                                            </div>
                                                                            <div class="flex-fill">
                                                                                <div class="d-flex gap-2 flex-wrap">
                                                                                    <div>
                                                                                        <p class="mb-1 fw-semibold lh-1">Lila Emerson</p>
                                                                                        <p class="fs-12 text-muted mb-0">Had an amazing time hiking with the family over the weekend. Nature at its best!</p>
                                                                                        <p class="fs-12 text-info mb-2">#HikingAdventures #FamilyTime</p>
                                                                                        <div class="d-flex gap-2 flex-wrap">
                                                                                            <img src="../assets/images/media/media-8.jpg" alt="Hiking Adventure" class="rounded mb-2 img-fluid me-2">
                                                                                            <img src="../assets/images/media/media-9.jpg" alt="Hiking Adventure1" class="rounded mb-2 img-fluid me-2">
                                                                                        </div>
                                                                                        <p class="fs-12 text-muted fw-medium"><i class="ri-calendar-line me-2"></i>10, Nov - 03:30PM</p>
                                                                                    </div>
                                                                                    <div class="ms-auto">
                                                                                        <div class="dropdown">
                                                                                            <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Hide from Timeline</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-between mt-1 flex-wrap gap-2">
                                                                                    <div class="btn-list">
                                                                                        <button class="btn btn-primary btn-sm btn-wave">
                                                                                            <i class="ri-message-line"></i> Comment
                                                                                        </button>
                                                                                        <button class="btn btn-sm btn-secondary btn-wave">
                                                                                            <i class="ri-thumb-up-line"></i> Like
                                                                                        </button>
                                                                                    </div>
                                                                                    <button class="btn btn-sm btn-success btn-wave ms-auto">
                                                                                        <i class="ri-share-line"></i> Share
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="rounded border">
                                                                        <div class="p-3 d-flex align-items-top flex-xl-nowrap flex-wrap">
                                                                            <div class="me-2">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="../assets/images/faces/9.jpg" alt="Profile Image">
                                                                                </span>
                                                                            </div>
                                                                            <div class="flex-fill">
                                                                                <div class="d-flex gap-2 flex-wrap">
                                                                                    <div class="flex-wrap">
                                                                                        <p class="mb-1 fw-semibold lh-1">Leo Finch</p>
                                                                                        <p class="fs-12 text-muted mb-0">The city looks absolutely stunning at night. Took a stroll and captured this beauty.</p>
                                                                                        <p class="fs-12 text-info mb-2">#CityNights #Photography</p>
                                                                                        <img src="../assets/images/media/media-55.jpg" alt="Cakes" class="rounded mb-2 img-fluid me-2">
                                                                                        <img src="../assets/images/media/media-56.jpg" alt="Icecream" class="rounded mb-2 img-fluid me-2">
                                                                                        <img src="../assets/images/media/media-57.jpg" alt="Icecream2" class="rounded mb-2 img-fluid me-2">
                                                                                        <p class="fs-12 text-muted fw-medium"><i class="ri-calendar-line me-2"></i>05, Oct - 09:00PM</p>
                                                                                    </div>
                                                                                    <div class="ms-auto">
                                                                                        <div class="dropdown">
                                                                                            <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit Post</a></li>
                                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Hide from Timeline</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center justify-content-between mt-1 flex-wrap gap-2">
                                                                                    <div class="btn-list">
                                                                                        <button class="btn btn-primary btn-sm btn-wave">
                                                                                            <i class="ri-message-line"></i> Comment
                                                                                        </button>
                                                                                        <button class="btn btn-sm btn-secondary btn-wave">
                                                                                            <i class="ri-thumb-up-line"></i> Like
                                                                                        </button>
                                                                                    </div>
                                                                                    <button class="btn btn-sm btn-success btn-wave ms-auto">
                                                                                        <i class="ri-share-line"></i> Share
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                <button class="btn btn-primary-light btn-wave btn-sm">Show More Posts</button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                                    aria-labelledby="gallery-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-40.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-41.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-41.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-42.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-43.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-43.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-44.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-44.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-45.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-45.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-46.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-60.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-60.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-22.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-22.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-32.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-32.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-30.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-30.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-31.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-31.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-46.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-59.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-59.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-61.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-61.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                            <a href="../assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                                                                <img src="../assets/images/media/media-42.jpg" alt="image" >
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-0 border-0" id="friends-tab-pane" role="tabpanel"
                                                    aria-labelledby="friends-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-pink-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/10.jpg" alt="" class="rounded-circle frd-profile-img">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-pink text-fixed-white"><i class="fe fe-check"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">HR Manager</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Lila Emerson</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-secondary btn-wave me-0 flex-fill">Unfollow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-success-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/2.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-success text-fixed-white"><i class="fe fe-check"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Product Designer</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Della Jasmine</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-secondary btn-wave me-0 flex-fill">Unfollow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-info-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/14.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-info text-fixed-white"><i class="fe fe-plus"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">UX Researcher</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Alden Moon</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-success btn-wave me-0 flex-fill">follow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-warning-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/5.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-warning text-fixed-white"><i class="fe fe-check"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Software Engineer</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Leo Finch</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-secondary btn-wave me-0 flex-fill">Unfollow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-danger-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/11.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-danger text-fixed-white"><i class="fe fe-plus"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Marketing Specialist</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Nia Harper</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-success btn-wave me-0 flex-fill">follow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-primary-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/7.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-primary text-fixed-white"><i class="fe fe-check"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Content Strategist</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Kaiya Blake</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-secondary btn-wave me-0 flex-fill">Unfollow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-purple-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/8.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-purple text-fixed-white"><i class="fe fe-plus"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Data Analyst</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Elias Quinn</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-success btn-wave me-0 flex-fill">follow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card custom-card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="text-center mb-3">
                                                                        <div class="p-2 position-relative d-inline-block bg-teal-transparent rounded-circle mb-2">
                                                                            <img src="../assets/images/faces/9.jpg" alt="" class="rounded-circle">
                                                                            <a href="javascript:void(0);" class="frd-profile bg-teal text-fixed-white"><i class="fe fe-check"></i></a>
                                                                        </div>
                                                                        <p class="fs-12 mb-1 text-muted">Sales Executive</p>
                                                                        <h6 class="fw-semibold"><a href="javascript:void(0);">Zayne Foster</a></h6>
                                                                    </div>
                                                                    <div class="d-flex gap-2 flex-wrap justify-content-center w-100">
                                                                        <button class="btn btn-sm btn-secondary btn-wave me-0 flex-fill">Unfollow</button>
                                                                        <button class="btn btn-sm btn-primary btn-wave me-0 flex-fill">View Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="text-center">
                                                                <button class="btn btn-primary-light btn-wave">Show All</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="list-group list-group-flush rounded-3">
                                <div class="list-group-item p-3"> 
                                    <span class="fw-medium fs-15 d-block mb-3">About Info :</span>
                                    <p class="text-muted mb-2">
                                        Hi, I'm Ashwin Seth, a Senior Product Designer living in the vibrant city of San Francisco, USA. My passion lies in crafting seamless and visually appealing user experiences that make a real impact. 
                                    </p>
                                    <p class="text-muted mb-0">
                                        With a focus on product design and UI/UX, I'm always looking for ways to innovate and enhance user interactions. Having led key design initiatives at Apple Inc., I'm driven by the challenge of pushing creative boundaries and look forward to new and exciting projects in the future.
                                    </p>
                                </div>
                                <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                                    <div class="fw-medium fs-15">
                                        Basic Info:
                                    </div>
                                </div>
                                <div class="card-body border-bottom border-block-end-dashed p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pt-2 border-0">
                                            <div><span class="fw-medium me-2">Full Name :</span><span class="text-muted">Ashwin Seth</span></div>
                                        </li>
                                        <li class="list-group-item pt-2 border-0">
                                            <div><span class="fw-medium me-2">Job Title :</span><span class="text-muted">Lead Product Designer</span></div>
                                        </li>
                                        <li class="list-group-item pt-2 border-0">
                                            <div><span class="fw-medium me-2">Years of Experience :</span><span class="text-muted">7 Years</span></div>
                                        </li>
                                        <li class="list-group-item pt-2 border-0">
                                            <div><span class="fw-medium me-2">Date of Birth :</span><span class="text-muted">October 15, 1994</span></div>
                                        </li>
                                    </ul>
                                </div>                              
                                <div class="list-group-item p-3">
                                    <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                    <div class="text-muted">
                                        <p class="mb-3">
                                            <i class="ri-mail-line align-middle fs-15 me-1 d-inline-block text-primary"></i>
                                            <span class="fw-medium text-default">Email : </span> alex.mason@example.com
                                        </p>
                                        <p class="mb-3">
                                            <i class="ri-building-line align-middle fs-15 me-1 d-inline-block text-success"></i>
                                            <span class="fw-medium text-default">Location : </span> San Francisco, USA
                                        </p>
                                        <p class="mb-3">
                                            <i class="ri-phone-line align-middle fs-15 me-1 d-inline-block text-info"></i>
                                            <span class="fw-medium text-default">Phone : </span> +1 (415) 987 - 6543
                                        </p>
                                        <p class="mb-0">
                                            <i class="ri-map-pin-line align-middle fs-15 me-1 d-inline-block text-secondary"></i>
                                            <span class="fw-medium text-default">Website : </span> www.ashwinseth.design
                                        </p>
                                    </div>
                                </div>
                                <div class="list-group-item p-3">
                                    <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                    <div>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">UI/UX Design</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Product Design</span>
                                        </a>    
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Prototyping</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">User Research</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Design Systems</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Wireframing</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Agile Methodologies</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Collaboration</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Problem Solving</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Design Thinking</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Interaction Design</span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="badge bg-light text-muted m-1 border">Visual Communication</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item p-3">
                                    <span class="fw-medium fs-15 d-block mb-3">Social Media :</span>
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <div class="d-flex align-items-center gap-3 me-2">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary"><i class="ri-github-line fs-16"></i></span>
                                            </div>
                                            <div>
                                                <span class="d-block fw-medium text-primary">Github</span>
                                                <span class="text-muted fw-medium">github.com/alexmason</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 me-2">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-secondary"><i class="ri-twitter-x-line fs-16"></i></span>
                                            </div>
                                            <div>
                                                <span class="d-block fw-medium text-secondary">Twitter</span>
                                                <span class="text-muted fw-medium">twitter.com/alexdesigns</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-success"><i class="ri-briefcase-line fs-16"></i></span>
                                            </div>
                                            <div>
                                                <span class="d-block fw-medium text-success">Portfolio</span>
                                                <span class="text-muted fw-medium">ashwinseth.design</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-info"><i class="ri-twitter-x-line fs-16"></i></span>
                                            </div>
                                            <div>
                                                <span class="d-block fw-medium text-info">Twitter</span>
                                                <span class="text-muted fw-medium">ashwinseth.design</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="list-group-item p-3">
                                    <span class="fw-medium fs-15 d-block mb-3">Links:</span>
                                    <div class="mb-0">
                                        <p class="mb-2">
                                            <a href="https://www.spruko.com/" class="text-primary"><u>https://www.spruko.com/</u></a>
                                        </p>
                                        <p class="mb-0">
                                            <a href="https://themeforest.net/user/spruko/portfolio" class="text-primary"><u>https://themeforest.net/user/spruko/portfolio</u></a>
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Followers:
                                </div>
                            </div>
                            <div class="card-body p-0 py-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="Emily Carter">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Emily Carter</span>
                                                <p class="fs-12 text-muted mb-0">Product Manager</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow </button> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/14.jpg" alt="Jordan Baker">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Jordan Baker</span>
                                                <p class="fs-12 text-muted mb-0">UX Designer</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow</button> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/15.jpg" alt="Zyrah Thorn">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Zyrah Thorn</span>
                                                <p class="fs-12 text-muted mb-0">Digital Strategist</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow</button> 
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/3.jpg" alt="Sophia Jackson">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Sophia Jackson</span>
                                                <p class="fs-12 text-muted mb-0">Software Engineer</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow</button> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/9.jpg" alt="Ashwin Seth">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Ashwin Seth</span>
                                                <p class="fs-12 text-muted mb-0">Senior Product Designer</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow</button> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/10.jpg" alt="Ethan Daniels">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-medium">Ethan Daniels</span>
                                                <p class="fs-12 text-muted mb-0">Lead UX Researcher</p>
                                            </div>
                                            <div> 
                                                <button class="btn btn-sm btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> Follow</button> 
                                            </div>
                                        </div>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                @endsection