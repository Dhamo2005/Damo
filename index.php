<?php
error_reporting(0);
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <title>TN School Study Materials | Damo Softwares</title>
    <meta name="description" content="TN School Study Materials | An Outstanding Solutions For Students & Teachers & Educators | Powered By Damo Softwares.">
    <meta name="keywords" content="10th, 11th, 12th, 1-8th School Study Materials & Books & Guieds Free Download | PDF">
    <link rel="canonical">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/media/logos/Damo Softwares Fevicon.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
</head>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative noselect" data-kt-sticky-landing-header="on" data-kt-scrolltop="on">
    <div class="d-lg-block p-5 p-lg-0 drawer drawer-start" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}" style="width: 200px !important;">
        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
            <div class="menu-item"><a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a></div>
            <div class="menu-item"><a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Feature</a></div>
            <div class="menu-item"><a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Achievements</a></div>
            <div class="menu-item"><a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About Me</a></div>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-equal"><button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle"><span class="svg-icon svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"></rect>
                                                <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg></span></button><a href="landing.php"><img alt="Logo" src="assets/media/logos/logo-landing.svg" class="logo-default h-25px h-lg-30px"><img alt="Logo" src="assets/media/logos/logo-landing-dark.svg" class="logo-sticky h-20px h-lg-25px"></a></div>
                            <div class="d-lg-block" id="kt_header_nav_wrapper"></div>
                            <div class="flex-equal text-end ms-1"><a href="
                            <?php if (!isset($_SESSION['email'])) {
                                echo "pages/sign-in.php";
                            } else {
                                echo "home.php";
                            } ?>" class="btn btn-success">
                                    <?php if (!isset($_SESSION['email'])) {
                                        echo "Sign In";
                                    } else {
                                        echo "Home";
                                    } ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="mb-10 mb-lg-20 d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <h1 class="mb-15 text-white lh-base fw-bolder fs-2x fs-lg-3x">An Outstanding Solutions For Students, Teachers & Educators
                            <br>For
                            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="tp_title"></span>
                            </span>
                        </h1>
                        <a href="<?php if (!isset($_SESSION['email'])) {
                                        echo "pages/sign-in.php";
                                    } else {
                                        echo "home.php";
                                    } ?>" class="btn btn-primary"><?php if (!isset($_SESSION['email'])) {
                                                                            echo "Sign In";
                                                                        } else {
                                                                            echo "Home";
                                                                        } ?></a>
                    </div>
                </div>
                    
            </div>
            
            <div class="mb-n10 mb-lg-n20 z-index-2">
                <div class="container">
                    <div class="text-center mb-17">
                        <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Features</h3>
                        <div class="fs-5 text-muted fw-bold">We Provide Multiple Service For Free<br>Our Main Services Are Given Below</div>
                    </div>
                    <div class="row w-100 gy-10 mb-md-20">
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0"><img src="assets/media/illustrations/process-2.png" class="mh-125px mb-9" alt>
                                <div class="d-flex flex-center mb-5"><span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                    <div class="fs-5 fs-lg-3 fw-bolder text-dark">Powerful Dashboard</div>
                                </div>
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">Dashboard System For Scaling Your Mind.<br>Multiple Options With User Friendly System</div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0"><img src="assets/media/illustrations/process-3.png" class="mh-125px mb-9" alt>
                                <div class="d-flex flex-center mb-5"><span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
                                    <div class="fs-5 fs-lg-3 fw-bolder text-dark">Easy Profile Managementation</div>
                                </div>
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">Ever Seen Powerfull Solution For Manage Your Profile With Easy by using single tool for different</div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0"><img src="assets/media/illustrations/process-4.png" class="mh-125px mb-9" alt>
                                <div class="d-flex flex-center mb-5"><span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
                                    <div class="fs-5 fs-lg-3 fw-bolder text-dark">Easy File Uploader</div>
                                </div>
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">Upload Your Materials, Books, PDF, PPT etc...<br>by using single Upload System</div>
                            </div>
                        </div>
                    </div>
                    <div class="tns tns-default tns-initiazlied">
                        <div class="tns-outer" id="tns1-ow">
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">3</span>of 4</div>
                            <div id="tns1-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns1-iw">
                                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1" class=" tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-33.3333%, 0px, 0px);">
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1"><img src="assets/media/product-demos/demo1.png" class="card-rounded d-shadow mw-100" alt></div>
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1"><img src="assets/media/product-demos/demo1.png" class="card-rounded d-shadow mw-100" alt></div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1" aria-controls="tns1" tabindex="-1" data-controls="prev"><span class="svg-icon svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <pathd="m6.70710678,15.7071068 c6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 c4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 l11.2928932,8.29289322 c11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 l18.6757246,13.7628459 c19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 c18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 l12.0300757,10.3841378 l6.70710678,15.7071068 z"fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)"></pathd="m6.70710678,15.7071068>
                                    </g>
                                </svg></span></button><button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1" aria-controls="tns1" tabindex="-1" data-controls="next"><span class="svg-icon svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <pathd="m6.70710678,15.7071068 c6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 c4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 l11.2928932,8.29289322 c11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 l18.6757246,13.7628459 c19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 c18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 l12.0300757,10.3841378 l6.70710678,15.7071068 z"fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)"></pathd="m6.70710678,15.7071068>
                                    </g>
                                </svg></span></button>
                    </div>
                </div>
            </div>
            <div class="mt-sm-n10">
                <div class="landing-curve landing-dark-color"><svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <pathd="m1 48c4.93573 47.6644 8.85984 47.3311 12.7725 47h1489.16c1493.1 1497.04 1501 48v47h1489.16c914.668 -1.34764 587.282 -1.61174 47h1v48z"fill="currentColor"></pathd="m1>
                    </svg></div>

                <div class="pb-15 pt-18 landing-dark-bg">
                    <div class="container">
                        <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                            <h3 class="fs-2hx text-white fw-bolder mb-5">We Make Things Better</h3>
                            <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using singletool<br>for different amazing and great useful admin</div>
                        </div>
                        <div class="d-flex flex-center">
                            <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')"><span class="svg-icon svg-icon-2tx svg-icon-white mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M13.1721 15.4724C13.3364 14.2725 14.2725 13.3364 15.4724 13.1721C16.1606 13.0778 16.9082 13 17.5 13C18.0918 13 18.8394 13.0778 19.5276 13.1721C20.7275 13.3364 21.6636 14.2725 21.8279 15.4724C21.9222 16.1606 22 16.9082 22 17.5C22 18.0918 21.9222 18.8394 21.8279 19.5276C21.6636 20.7275 20.7275 21.6636 19.5276 21.8279C18.8394 21.9222 18.0918 22 17.5 22C16.9082 22 16.1606 21.9222 15.4724 21.8279C14.2725 21.6636 13.3364 20.7275 13.1721 19.5276C13.0778 18.8394 13 18.0918 13 17.5C13 16.9082 13.0778 16.1606 13.1721 15.4724Z" fill="#12131A"></path>
                                            <path opacity="0.25" d="M2.17209 15.4724C2.33642 14.2725 3.27253 13.3364 4.47244 13.1721C5.16065 13.0778 5.90816 13 6.5 13C7.09184 13 7.83935 13.0778 8.52756 13.1721C9.72747 13.3364 10.6636 14.2725 10.8279 15.4724C10.9222 16.1606 11 16.9082 11 17.5C11 18.0918 10.9222 18.8394 10.8279 19.5276C10.6636 20.7275 9.72747 21.6636 8.52756 21.8279C7.83935 21.9222 7.09184 22 6.5 22C5.90816 22 5.16065 21.9222 4.47244 21.8279C3.27253 21.6636 2.33642 20.7275 2.17209 19.5276C2.07784 18.8394 2 18.0918 2 17.5C2 16.9082 2.07784 16.1606 2.17209 15.4724Z" fill="#12131A"></path>
                                            <path opacity="0.25" d="M13.1721 4.47244C13.3364 3.27253 14.2725 2.33642 15.4724 2.17209C16.1606 2.07784 16.9082 2 17.5 2C18.0918 2 18.8394 2.07784 19.5276 2.17209C20.7275 2.33642 21.6636 3.27253 21.8279 4.47244C21.9222 5.16065 22 5.90816 22 6.5C22 7.09184 21.9222 7.83935 21.8279 8.52756C21.6636 9.72747 20.7275 10.6636 19.5276 10.8279C18.8394 10.9222 18.0918 11 17.5 11C16.9082 11 16.1606 10.9222 15.4724 10.8279C14.2725 10.6636 13.3364 9.72747 13.1721 8.52756C13.0778 7.83935 13 7.09184 13 6.5C13 5.90816 13.0778 5.16065 13.1721 4.47244Z" fill="#12131A"></path>
                                            <pathd="m2.17209 4.47244c2.33642 3.27253 2.33642 4.47244 2.17209c5.16065 2.07784 5.90816 2 6.5 2c7.09184 7.83935 8.52756 2.17209c9.72747 10.6636 10.8279 4.47244c10.9222 5.16065 11 6.5c11 7.09184 10.9222 8.52756c10.6636 9.72747 10.8279c7.83935 11c5.90816 10.8279c3.27253 2.17209 8.52756c2.07784 6.5c2 4.47244z"fill="#12131A"></pathd="m2.17209>
                                        </svg></span>
                                    <div class="mb-0">
                                        <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="counted" data-kt-countup="true" data-kt-countup-value="1500" data-kt-countup-suffix="+">1500+</div>
                                        </div><span class="text-gray-600 fw-bold fs-5 lh-0">Active Users</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')"><span class="svg-icon svg-icon-2tx svg-icon-white mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M13.998 21.9445C13.4491 22.0057 13 21.5523 13 21L13 14C13 13.4477 13.4477 13 14 13L21 13C21.5523 13 22.0058 13.4491 21.9445 13.998C21.8509 14.8372 21.6394 15.6609 21.3149 16.4442C20.8626 17.5361 20.1997 18.5282 19.364 19.364C18.5282 20.1997 17.5361 20.8626 16.4442 21.3149C15.6609 21.6394 14.8373 21.8509 13.998 21.9445Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9445 10.0019C22.0057 10.5508 21.5523 10.9999 21 10.9999L14 10.9999C13.4477 10.9999 13 10.5521 13 9.99986L13 2.99986C13 2.44758 13.4491 1.99412 13.9979 2.05536C14.8372 2.149 15.6609 2.3605 16.4441 2.68495C17.5361 3.13724 18.5282 3.80017 19.3639 4.6359C20.1997 5.47163 20.8626 6.46378 21.3149 7.55571C21.6393 8.33899 21.8508 9.16262 21.9445 10.0019Z" fill="#12131A"></path>
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M10.002 3.05559C10.5509 2.99437 11 3.44784 11 4.00012L11 20.0001C11 20.5524 10.5509 21.0059 10.002 20.9446C7.98222 20.7193 6.08694 19.815 4.63604 18.3641C2.94821 16.6763 2 14.3871 2 12.0001C2 9.61317 2.94821 7.32398 4.63604 5.63616C6.08694 4.18525 7.98222 3.2809 10.002 3.05559Z" fill="#12131A"></path>
                                        </svg></span>
                                    <div class="mb-0">
                                        <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="counted" data-kt-countup="true" data-kt-countup-value data-kt-countup-suffix="K+">1.7K+</div>
                                        </div><span class="text-gray-600 fw-bold fs-5 lh-0">Uploads</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')"><span class="svg-icon svg-icon-2tx svg-icon-white mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z" fill="#7E8299"></path>
                                            <pathd="m2 9.5c2 8.67157 2.67157 8 3.5 8h20.5c21.3284 22 9.5c22 10.3284 21.3284 11 20.5 11h3.5c2.67157 2 9.5z"fill="#7E8299"></pathd="m2>
                                            <pathd="m10 13c9.44772 13 9 13.4477 14v18c9 18.5523 9.44772 19 10 19c10.5523 11 18v14c11 10.5523 13z"fill="#7E8299"></pathd="m10>
                                            <pathd="m14 13c13.4477 13 13.4477 14v18c13 18.5523 19 14 19c14.5523 15 18v14c15 14.5523 13z"fill="#7E8299"></pathd="m14>
                                            <g opacity="0.25">
                                                <pathd="m10.7071 3.70711c11.0976 3.31658 11.0976 2.68342 10.7071 2.29289c10.3166 1.90237 9.68342 9.29289 2.29289l4.29289 7.29289c3.90237 7.68342 3.90237 8.31658 4.29289 8.70711c4.68342 9.09763 5.31658 5.70711 8.70711l10.7071 3.70711z"fill="#7E8299"></pathd="m10.7071>
                                                <pathd="m13.2929 3.70711c12.9024 3.31658 12.9024 2.68342 13.2929 2.29289c13.6834 1.90237 14.3166 14.7071 2.29289l19.7071 7.29289c20.0976 7.68342 20.0976 8.31658 19.7071 8.70711c19.3166 9.09763 18.6834 18.2929 8.70711l13.2929 3.70711z"fill="#7E8299"></pathd="m13.2929>
                                            </g>
                                        </svg></span>
                                    <div class="mb-0">
                                        <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="counted" data-kt-countup="true" data-kt-countup-value="20" data-kt-countup-suffix="M+">20+</div>
                                        </div><span class="text-gray-600 fw-bold fs-5 lh-0">Subjects</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-2 fw-bold text-muted text-center mb-3"><span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a<br><span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way<span class="fs-1 lh-1 text-gray-700">“</span></div>
                        <div class="fs-2 fw-bold text-muted text-center"><a href="account/security.php" class="link-primary fs-4 fw-bolder">Dhamodharan,</a><span class="fs-4 px-2 fw-bolder text-gray-600">Damo Softwares CEO</span></div>
                    </div>
                </div>
                <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="py-10 py-lg-20">
                    <div class="container">
                        <div class="text-center mb-12">
                            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">About Me</h3>
                            <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer tocomplete,additional costs to<br>integrate and test each extra feature creeps up and hauntsmost of us.</div>
                        </div>
                        <div class="tns tns-default tns-initiazlied">
                            <div class="tns-outer" id="tns2-ow">
                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">8</span>of 7</div>
                                <div id="tns2-mw" class="tns-ovh">
                                    <div class="tns-inner" id="tns2-iw">
                                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200:{items: 1}, 992:{items: 1}}" class=" tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns2" style="transform: translate3d(-46.6667%, 0px, 0px); transition-duration: 0s;">
                                            <div class="text-center tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/Dhamo.jpg')"></div>
                                                <div class="mb-0"><a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Dhamodharan</a>
                                                    <div class="text-muted fs-6 fw-bold mt-1">Full Stack Developer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev" aria-controls="tns2" tabindex="-1" data-controls="prev"><span class="svg-icon svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <pathd="m6.70710678,15.7071068 c6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 c4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 l11.2928932,8.29289322 c11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 l18.6757246,13.7628459 c19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 c18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 l12.0300757,10.3841378 l6.70710678,15.7071068 z"fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)"></pathd="m6.70710678,15.7071068>
                                    </g>
                                </svg></span></button><button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next" aria-controls="tns2" tabindex="-1" data-controls="next"><span class="svg-icon svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <pathd="m6.70710678,15.7071068 c6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 c4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 l11.2928932,8.29289322 c11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 l18.6757246,13.7628459 c19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 c18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 l12.0300757,10.3841378 l6.70710678,15.7071068 z"fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)"></pathd="m6.70710678,15.7071068>
                                    </g>
                                </svg></span></button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            ul {
                color: #333;
                display: flex;
                flex-wrap: wrap;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                justify-content: center;
                list-style: none;
                margin-top: 2em;
                padding: 0;
                text-align: center;
            }

            ul li {
                color: #333;
                display: inline;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                list-style: none;
                margin-right: 2em;
                text-align: center
            }

            ul li img {
                color: #333;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                height: auto;
                list-style: none;
                max-width: 65px;
                text-align: center;
                width: 100%
            }

            section.compatibility {
                box-sizing: border-box;
                color: #333;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                margin-left: auto;
                margin-right: auto;
                padding: 0 10%;
                text-align: center;
                width: 100%;
            }

            section.compatibility h3 {
                color: #333;
                font-family: CerebriSans-Bold, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                font-size: 1.9em;
                font-weight: 400;
                margin-bottom: 0;
                text-align: center
            }

            p.subtitle {
                color: #666;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                margin: 1.5em auto 2.2em;
                max-width: 600px;
                text-align: center
            }

            section.compatibility p.subtitle br {
                color: #666;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                text-align: center
            }

            section.compatibility ul {
                color: #333;
                display: flex;
                flex-wrap: wrap;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                justify-content: center;
                list-style: none;
                list-style: none;
                margin-top: 2em;
                padding: 0;
                text-align: center
            }

            section.compatibility ul li {
                color: #333;
                display: inline;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                list-style: none;
                margin-right: 10px;
                text-align: center
            }

            section.compatibility li img {
                color: #333;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                height: auto;
                list-style: none;
                max-width: 55px;
                text-align: center;
                width: 100%
            }

            a.chip {
                background-color: #c2fbd7;
                border-radius: 100px;
                box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
                color: green;
                cursor: pointer;
                display: inline-block;
                font-family: CerebriSans-Regular, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                margin: 2em auto 0;
                padding: 5px 20px;
                text-align: center;
                text-decoration: none;
                transition: all 250ms
            }
        </style>
        <section class="compatibility">
            <h3>Works everywhere. On every browser.</h3>
            <p class="subtitle">
                Wordpress, Wix, Squarespace, Shopify, React, etc. CSS Scan runs on the browser as an extension so it works on any website, any theme and even works offline!<br>
                Choose your favorite: Chrome, Firefox, Safari, and Edge. Internet Explorer maybe never.
            </p>
            <ul class>
                <li><img src="https://d33wubrfki0l68.cloudfront.net/aa7efc39f40fa36a2a8bcd17944a00c640dab9b6/d840e/img/logos/chrome.png" alt="Chrome logo" class></li>
                <li class><img src="https://d33wubrfki0l68.cloudfront.net/6344775540237d8e39df3e0a0b44e69a5f1d6942/05ea9/img/logos/firefox.png" alt="Firefox logo" class></li>
                <li><img src="https://d33wubrfki0l68.cloudfront.net/dae22dc10f3acb31b716d89e3ec0fdd7d6cabbcb/abd46/img/logos/safari.png" alt="Safari logo"></li>
                <li><img src="https://d33wubrfki0l68.cloudfront.net/dfc4f641b2148621e17397d48a70f936fdbb76a2/79cb1/img/logos/edge.png" alt="Edge logo" class></li>
            </ul>
            <a class="chip" href="updates.php" target="_blank">
                🎉&nbsp; Check What's New 🎊
            </a>
        </section>
        <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-12 mt-12 container" style="background: linear-gradient(90deg, rgb(32, 170, 62) 0%, rgb(3, 165, 136) 100%); outline: var(--bs-active-success) dashed 1px;">
            <!--begin::Content-->
            <div class="my-2 me-5">
                <!--begin::Title-->
                <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2">Start With Damo Softwares Today,
                    <span class="fw-normal">Double Up Learning!</span>
                </div>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">Join over 100,000 Professionals Community to Stay Ahead</div>
                <!--end::Description-->
            </div>
            <!--end::Content-->
            <!--begin::Link-->
            <a href="pages/sign-up.php" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Create An Account</a>
            <!--end::Link-->
        </div>
        <div class="mb-0">

            <div class="landing-dark-bg pt-20">
                <div class="container">
                    <div class="row py-10 py-lg-20">
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <h2 class="text-white">Would You Need Contact Me?</h2><span class="fw-normal fs-4 text-gray-700">Email us to <a class="text-white opacity-50 text-hover-primary">Ts465335@gmail.com</a></span>
                            </div>
                            <div class="rounded landing-dark-border p-9">
                                <h2 class="text-white">Do You Need Website For Your Busineess?</h2><span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.<a href="pages/profile/overview.php" class="text-white opacity-50 text-hover-primary">Click here!</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-16">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex fw-bold flex-column me-20">
                                    <h4 class="fw-bolder text-gray-400 mb-6">Explore</h4><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">12TH</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">11TH</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">10Th</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">9TH</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">8TH</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5">7TH</a><a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6 pt-4">6TH</a>
                                </div>
                                <div class="d-flex fw-bold flex-column ms-lg-20">
                                    <h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4><a href="#" class="mb-6"><img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt><span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span></a><a href="https://github.com/Dhamo2005/" class="mb-6"><img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt><span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span></a><a href="#" class="mb-6"><img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt><span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span></a><a href="#" class="mb-6"><img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt><span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span></a><a href="#" class="mb-6"><img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt>
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</spanclass="text-white>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="landing-dark-separator"></div>
                <div class="container">
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <div class="d-flex align-items-center order-2 order-md-1"><a href="landing.php"><img alt="Logo" src="assets/media/logos/logo-landing.svg" class="h-15px h-md-20px"></a><span class="ms-4 ms-md-10 mx-4 fs-6 fw-bold text-gray-600 pt-1">©2021 Damo Softwares.</span></div>
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item"><a target="_blank" class="menu-link px-2">About</a></li>
                            <li class="menu-item mx-5"><a target="_blank" class="menu-link px-2">Support</a></li>
                            <li class="menu-item"><a target="_blank" class="menu-link px-2">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true"><span class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1"></rect>
                        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg></span></div>
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
        <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
        <script>
            var typed = new Typed("#tp_title", {
                strings: ["School Students.", "College Students.", "TNPSC Examiners.", "Attempt Examiners."],
                typeSpeed: 100,
                loop: 1
            });
        </script>
</body>

</html>