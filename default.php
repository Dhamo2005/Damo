<?php session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header("location:pages/sign-in.php?c=" . $_SERVER['REQUEST_URI']);
}
include_once("db.php");
function activer($act, $additional_text)
{
    $s = $_SERVER['SCRIPT_NAME'];
    if ($act == $s) {
        echo $additional_text;
    }
} ?>
<link rel="stylesheet" href="assets/material-icon-font-pack-master/sass/material-icons-outlined.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"> -->
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="description" content="TN School Study Materials | An Outstanding Solutions For Students & Teachers & Educators | Powered By Damo Softwares.">
    <meta name="keywords" content="10th, 11th, 12th, 1-8th School Study Materials & Books & Guieds Free Download | PDF">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/media/logos/Damo Softwares Fevicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo flex-column-auto" id="kt_aside_logo"><a href="index.php"><img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-25px logo"></a>
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize"><span class="material-icons-outlined text-muted rotate-180"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"></path>
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"></path>
                                </g>
                            </svg></span></div>
                </div>

                <div class="noselect aside-menu flex-column-fluid">
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0" style="height: 570px;">
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item <?php activer('/home.php', 'here'); ?>"><a class="<?php activer('/home.php', 'text-primary '); ?>menu-link text-hover-primary" href="home.php"><span class="menu-icon"><span class="svg-icon svg-icon-2"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">home</span></span></span><span class="menu-title">Home</span></a></div>
                            <div class="menu-item <?php activer('/explore.php', 'here');
                                                    activer('/profile_view.php', 'here');
                                                    activer('/download.php', 'here'); ?>"><a class="<?php activer('/explore.php', 'text-primary ');
                                                                                                                                                                                activer('/download.php', 'text-primary ');
                                                                                                                                                                                activer('/profile_view.php', 'text-primary '); ?>menu-link text-hover-primary" href="explore.php?sub=Comp-App&&class=10"><span class="menu-icon"><span class="svg-icon svg-icon-2"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">explore</span></span></span><span class="menu-title">Explore</span></a></div>
                            <div class="menu-item <?php activer('/search.php', 'here'); ?>"><a class="<?php activer('/search.php', 'text-primary '); ?>menu-link text-hover-primary" href="search.php"><span class="menu-icon"><span class="svg-icon svg-icon-2"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">search</span></span></span><span class="menu-title">Search</span></a></div>
                            <div class="menu-item <?php activer('/follow.php', 'here'); ?>"><a class="<?php activer('/follow.php', 'text-primary '); ?>menu-link text-hover-primary" href="follow.php"><span class="menu-icon"><span class="span-icon span-icon-2"><span class="svg-icon svg-icon-2 material-icons-outlined fs-3">subscriptions</span></span></span><span class="menu-title">Following</span></a></div>
                            <div class="menu-item">
                                <div class="menu-content pt-5 pb-2"><span class="menu-section text-muted text-uppercase fs-8 ls-1">Groups</span></div>
                            </div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">group</span></span><span class="menu-title">Groups</span></a></div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">group_add</span></span><span class="menu-title">Create Group</span></a></div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">settings</span></span><span class="menu-title">My Groups</span></a></div>
                            <div class="menu-item">
                                <div class="menu-content pt-5 pb-2"><span class="menu-section text-muted text-uppercase fs-8 ls-1">Account</span></div>
                            </div>
                            <div class="menu-item <?php activer('/upload.php', 'here'); ?>"><a class="<?php activer('/upload.php', 'text-primary '); ?> menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">upload</span></span><span class="menu-title">My Uploads</span></a></div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">person</span></span><span class="menu-title">Owerview</span></a></div>
                            <div class="menu-item <?php activer('/settings.php', 'here'); ?>"><a href="settings.php" class="<?php activer('/settings.php', 'text-primary '); ?>menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">settings</span></span><span class="menu-title">Settings</span></a></div>
                            <div class="menu-item">
                                <div class="menu-content pt-0 pb-0">
                                    <div class="separator mx-1 my-4"></div>
                                </div>
                            </div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">support</span></span><span class="menu-title">Support</span></a></div>
                            <div class="menu-item"><a class="menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">help_outlined</span></span><span class="menu-title">Help</span></a></div>
                            <div class="menu-item <?php activer('/feedback.php', 'here'); ?>"><a href="feedback.php" class="<?php activer('/feedback.php', 'text-primary '); ?> menu-link text-hover-primary"><span class="menu-icon"><span class="svg-icon svg-icon-2 material-icons-outlined fs-2">feedback</span></span><span class="menu-title">Feedback</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="aside-footer flex-column-auto" id="kt_aside_footer"></div>
            </div>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" class="border-bottom border-success border-1 header align-items-stretch">
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle"><span class="svg-icon svg-icon-2x mt-1"><span class="material-icons-outlined">menu</span></span></div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0"><a href="index.php" class="d-lg-none"><img alt="Logo" src="assets/media/logos/Damo Softwares Fevicon.svg" class="h-40px"></a></div>
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <div class="header-menu align-items-stretch noselect" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body ', lg: '#kt_header_nav'}">
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item me-lg-1 pe-lg-2"><a class="menu-link py-2 border-1 border-dashed border-primary bg-light-primary" href="upload.php"><span class="menu-title">Upload<span class="material-icons-outlined ps-1">upload</span></span></a></div>
                                        <div class="menu-item me-lg-1 pe-lg-2"><a class="menu-link active py-3" href="home.php"><span class="menu-title">Home</span></a></div>
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1"><span class="menu-link py-3"><span class="menu-title"><span>1<sup>th</sup></span><span class="px-2">-</span><span>8<sup>th</sup></span></span><span class="menu-arrow d-lg-none"></span></span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-125px">
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">1<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">2<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">3<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">4<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">5<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">6<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">7<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">8<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1"><span class="menu-link py-3"><span class="menu-title"><span>9<sup>th</sup></span><span class="px-2">-</span><span>12<sup>th</sup></span></span><span class="menu-arrow d-lg-none"></span></span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-125px">
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">9<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">10<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social Science</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">11<sup>th</sup></span><span class="menu-arrow"></span></span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-150px">
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tamil</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">English</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Maths</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Accountancy</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bio Chemistry </span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bio-Zoology</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bio-Zoology</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Botony</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Business Maths </span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Chemistry</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Commerce</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Computer-Applications</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Computer-Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Computer-Technology</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Economics</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">French</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Geographic</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Hindi </span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Home Science</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Micro_Biology</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Nursing-General </span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Nutrition and Dietetics</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Physics</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Statics</span></a></div>
                                                        <div class="menu-item"><a class="menu-link py-3"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Zoology</span></a></div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><span class="menu-link py-3"><span class="menu-icon"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg></span></span><span class="menu-title">12<sup>th</sup></span><span class="menu-arrow"></span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                                        <div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                            <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                                <div class="btn btn-icon btn-active-light-primary" onclick="show_recent_searches()"><span class="material-icons-outlined text-muted"><span class="material-icons-outlined">search</span></span></div>
                                            </div>
                                            <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                                <div data-kt-search-element="wrapper">
                                                    <form action="search.php" data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off"><span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg></span><input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input"><span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner"><span class="spinner-border h-15px w-15px align-middle text-gray-400"></span></span><span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear"><span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                                                                    </g>
                                                                </svg></span></span>
                                                        <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                                            <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Show search preferences"><span class="material-icons-outlined text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                        <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"></path>
                                                                    </svg></span></div>
                                                            <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="Show more search options"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                                                        </g>
                                                                    </svg></span></div>
                                                        </div>
                                                    </form>
                                                    <div class="separator border-gray-200 mb-6"></div>
                                                    <div data-kt-search-element="results" class="d-none">
                                                        <div class="scroll-y mh-200px mh-lg-325px">
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="mb-4" data-kt-search-element="main">
                                                    <div class="d-flex flex-stack fw-bold"><span class="text-muted fs-5 me-2">Recently Searched:</span>
                                                    <div data-kt-search-element="recently-viewed-clear" class="btn btn-link fw-6" onclick="recentclr()"><span class="recentclr"></span>Clear</div>
                                                    <script>
                                                    function show_recent_searches(){
                                                        $.ajax({
                                                                url:"server/showrecentsearches.php",
                                                                method:"POST",
                                                                beforeSend:function(){
                                                                    $('.clrpart').addClass('d-flex justify-content-center');
                                                                    $('.clrpart').html('<div style="left: calc(50% - 5%); border: 5px solid #f2f2f2; border-top: 5px solid #009ef7; border-radius: 50%; width: 25px; height: 25px;" class="spinner-border my-2"></div>');
                                                                },
                                                                success:function(data){
                                                                    if(data !== 0){
                                                                    $('.clrpart').html(data);
                                                                    $('#history-spinner').remove();$('.clrpart').removeClass('justify-content-center d-flex');
                                                                    }else{
                                                            $('.recentclr').html('<span class="text-danger fs-4">Sorry Something Went Wrong, <br>Pls check your internet connection or try to refresh the page</span>');
                                                        }
                                                                }
                                                            });
                                                    }
                                                        function recentclr(){
                                                            $.ajax({
                                                                url:"server/clrres.php",
                                                                method:"POST",
                                                                data:{
                                                                    clr:""
                                                                },
                                                                beforeSend:function(){
                                                                    $('.recentclr').append('<span class="spinner-border-sm spinner-border mb-1 mx-2 res-spinner"></span>');
                                                                },
                                                                success:function(data){
                                                                    if(data == 1){
                                                                    $('.clrpart').html('<center>Empty</center>');
                                                                    $('.res-spinner').remove();
                                                                    }else{
                                                                        $('.res-spinner').remove();
                                                                        alert('Sorry, something went wrong. Pls try again!');
                                                                    }
                                                                }
                                                            });
                                                        }
                                                    </script>
                                                </div>
                                                <div class="clrpart scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                                </a></div>
                                                    </div>
                                                    <div data-kt-search-element="empty" class="text-center d-none">
                                                        <div class="pt-10 pb-10"><span class="svg-icon svg-icon-4x opacity-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.25" d="M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z" fill="#12131A"></path>
                                                                    <path d="M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z" fill="#12131A"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z" fill="#12131A"></path>
                                                                </svg></span></div>
                                                        <div class="pb-15 fw-bold">
                                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                                    <h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
                                                    <div class="mb-5"><input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query"></div>
                                                    <div class="mb-5">
                                                        <div class="nav-group nav-group-fluid"><label><input type="radio" class="btn-check" name="type" value="has" checked="checked"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span></label><label><input type="radio" class="btn-check" name="type" value="users"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span></label><label><input type="radio" class="btn-check" name="type" value="orders"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span></label><label><input type="radio" class="btn-check" name="type" value="projects"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span></label></div>
                                                    </div>
                                                    <div class="mb-5"><input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value=""></div>
                                                    <div class="mb-5"><input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value=""></div>
                                                    <div class="mb-5">
                                                        <div class="nav-group nav-group-fluid"><label><input type="radio" class="btn-check" name="attachment" value="has" checked="checked"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span></label><label><input type="radio" class="btn-check" name="attachment" value="any"><span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span></label></div>
                                                    </div>
                                                    <div class="mb-5"><select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid select2-hidden-accessible" data-select2-id="select2-data-1-4g89" tabindex="-1" aria-hidden="true">
                                                            <option value="next" data-select2-id="select2-data-3-hjez">Within the next</option>
                                                            <option value="last">Within the last</option>
                                                            <option value="between">Between</option>
                                                            <option value="on">On</option>
                                                        </select></div>
                                                    <div class="row mb-8">
                                                        <div class="col-6"><input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value=""></div>
                                                        <div class="col-6"><select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid select2-hidden-accessible" data-select2-id="select2-data-4-su2h" tabindex="-1" aria-hidden="true">
                                                                <option value="days" data-select2-id="select2-data-6-pdb2">Days</option>
                                                                <option value="weeks">Weeks</option>
                                                                <option value="months">Months</option>
                                                                <option value="years">Years</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="d-flex justify-content-end"><button type="reset" class="btn btn-sm btn-white fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button><a href="pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a></div>
                                                </form>
                                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                                    <h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
                                                    <div class="pb-4 border-bottom"><label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"><span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span><input class="form-check-input" type="checkbox" value="1" checked="checked"></label></div>
                                                    <div class="py-4 border-bottom"><label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"><span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span><input class="form-check-input" type="checkbox" value="1" checked="checked"></label></div>
                                                    <div class="py-4 border-bottom"><label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"><span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span><input class="form-check-input" type="checkbox" value="1"></label></div>
                                                    <div class="py-4 border-bottom"><label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"><span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span><input class="form-check-input" type="checkbox" value="1" checked="checked"></label></div>
                                                    <div class="py-4 border-bottom"><label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"><span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span><input class="form-check-input" type="checkbox" value="1"></label></div>
                                                    <div class="d-flex justify-content-end pt-7"><button type="reset" class="btn btn-sm btn-white fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button><button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <div class="btn btn-icon btn-active-light-primary w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom"><span class="material-icons-outlined text-muted"><span class="material-icons-outlined">apps</span></span></div>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                                            <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                                <h3 class="text-white fw-bold mb-3">Quick Links</h3><span class="badge bg-success py-2 px-3">25 pending tasks</span>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col-6"><a href="pages/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom"><span class="svg-icon svg-icon-3x svg-icon-success mb-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3"></path>
                                                                    <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000"></path>
                                                                </g>
                                                            </svg></span><span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span><span class="fs-7 text-gray-400">eCommerce</span></a></div>
                                                <div class="col-6"><a href="pages/projects/settings.php" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom"><span class="svg-icon svg-icon-3x svg-icon-success mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3"></path>
                                                                <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000"></path>
                                                            </svg></span><span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span><span class="fs-7 text-gray-400">Console</span></a></div>
                                                <div class="col-6"><a href="pages/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end"><span class="svg-icon svg-icon-3x svg-icon-success mb-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                    <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                                </g>
                                                            </svg></span><span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span><span class="fs-7 text-gray-400">Pending Tasks</span></a></div>
                                                <div class="col-6"><a href="pages/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light"><span class="svg-icon svg-icon-3x svg-icon-success mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </svg></span><span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span><span class="fs-7 text-gray-400">Latest cases</span></a></div>
                                            </div>
                                            <div class="py-2 text-center border-top"><a href="pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All<span class="svg-icon svg-icon-5"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                                            </g>
                                                        </svg></span></a></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <div class="btn btn-icon btn-active-light-primary position-relative w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom"><span class="me-2 text-muted"><span class="material-icons-outlined">notifications</span></span></div>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                            <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                    <li class="nav-item"><a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a></li>
                                                    <li class="nav-item"><a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a></li>
                                                    <li class="nav-item"><a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                                    <div class="scroll-y mh-325px my-5 px-8">
                                                        <div class="d-flex flex-stack py-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-35px me-4"><span class="symbol-label bg-light-primary"><span class="svg-icon svg-icon-2 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3"></path>
                                                                                <path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000"></path>
                                                                            </svg></span></span></div>
                                                                <div class="mb-0 me-2"><a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
                                                                    <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                                </div>
                                                            </div><span class="badge badge-light fs-8">1 hr</span>
                                                        </div>
                                                    </div>
                                                    <div class="py-3 text-center border-top"><a href="pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All<span class="svg-icon svg-icon-5"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                                                    </g>
                                                                </svg></span></a></div>
                                                </div>
                                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                                    <div class="d-flex flex-column px-9">
                                                        <div class="pt-10 pb-0">
                                                            <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                                            <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                            <div class="text-center mt-5 mb-9"><a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a></div>
                                                        </div>
                                                        <div class="text-center px-4"><img class="mw-100 mh-200px" alt="metronic" src="assets/media/illustrations/work.png"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                                    <div class="scroll-y mh-325px my-5 px-8">
                                                        <div class="d-flex flex-stack py-4">
                                                            <div class="d-flex align-items-center me-2"><span class="w-70px badge badge-light-success me-4">200 OK</span><a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a></div><span class="badge badge-light fs-8">Just now</span>
                                                        </div>
                                                    </div>
                                                    <div class="py-3 text-center border-top"><a href="pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All<span class="svg-icon svg-icon-5"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                                                    </g>
                                                                </svg></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center ms-1 ms-lg-3 mx-2 ms-2" id="kt_header_user_menu_toggle">
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom"><img alt="<?php echo $_SESSION['name']; ?>" width="45px" height="45px" src="<?php if (!empty($_SESSION['avatar'])) {
                                                                                                                                                                                                                                                                                                                echo $_SESSION['avatar'];
                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                if ($_SESSION['gender'] === 'm') {
                                                                                                                                                                                                                                                                                                                    echo 'assets/media/avatars/blank_male.svg';
                                                                                                                                                                                                                                                                                                                } elseif ($_SESSION['gender'] === 'f') {
                                                                                                                                                                                                                                                                                                                    echo 'assets/media/avatars/blank_female.png';
                                                                                                                                                                                                                                                                                                                } elseif ($_SESSION['gender'] === 't') {
                                                                                                                                                                                                                                                                                                                    echo 'assets/media/avatars/blank_t.svg';
                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                            } ?>"></div>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <div class="symbol symbol-50px me-5"><img alt="<?php echo $_SESSION['name']; ?>" width="45px" height="45px" src="<?php if (!empty($_SESSION['avatar'])) {
                                                                                                                                                                            echo $_SESSION['avatar'];
                                                                                                                                                                        } else {
                                                                                                                                                                            if ($_SESSION['gender'] === 'm') {
                                                                                                                                                                                echo 'assets/media/avatars/blank_male.svg';
                                                                                                                                                                            } elseif ($_SESSION['gender'] === 'f') {
                                                                                                                                                                                echo 'assets/media/avatars/blank_female.png';
                                                                                                                                                                            } elseif ($_SESSION['gender'] === 't') {
                                                                                                                                                                                echo 'assets/media/avatars/blank_t.svg';
                                                                                                                                                                            }
                                                                                                                                                                        } ?>"></div>
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5"><?php echo ($_SESSION['name']); ?><span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div><a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?php echo ($_SESSION['email']); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-5"><a href="overview.html" class="menu-link px-5">My Profile</a></div>
                                            <div class="menu-item px-5"><a href="myuploads.php" class="menu-link px-5"><span class="menu-text">My Uploads</span><span class="menu-badge"><span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span></span></a></div>
                                            <div class="menu-item px-5 my-1"><a href="settings.php" class="menu-link px-5">Account Settings</a></div>
                                            <div class="menu-item px-5" id="sign_out"><a href="pages/sign-in.php?out" class="menu-link px-5">Sign Out</a></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary" id="kt_header_menu_mobile_toggle"><span class="material-icons-outlined text-muted"><span class="material-icons-outlined">notes</span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 content d-flex flex-column flex-column-fluid" id="kt_content">
                    <script src="assets/jquery.js"></script>
                    <div class="px-4" id="content">