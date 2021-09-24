<?php
include_once('default.php');
if (isset($_GET['p']) && !empty($_GET['p']) && !empty(base64_decode(base64_decode($_GET['p'], true), true))) {
    include_once('db.php');
    include_once('controls/damo_filters.php');
    $profile_view_id =  damo_validate(base64_decode(base64_decode($_GET['p'], true), true));
    $row = $GLOBALS['con']->query("SELECT users.id as profileid, users.name as name, users.gender, users.`avatar`, `about`, `place`,`type`, `Joined`FROM users WHERE `id`= $profile_view_id")->fetch_assoc();
    $profile_id = $row['profileid'];
?>
    <div class="card">
        <div style="background-image: url(assets/bg/profilebg.jpg); background-repeat: round;"><br>
            <div class="card-body p-0">
                <center style="margin-top: -6 !important;">
                    <div class="symbol symbol-150px symbol-lg-160px symbol-fixed position-relative cursor-pointer"><img style="margin-bottom:-25px;" src="<?php if (!empty($row['avatar'])) {
                                                                                                                                                                echo $row['avatar'];
                                                                                                                                                            } else {
                                                                                                                                                                if ($row['gender'] === 'm') {
                                                                                                                                                                    echo 'assets/media/avatars/blank_male.svg';
                                                                                                                                                                } elseif ($row['gender'] === 'f') {
                                                                                                                                                                    echo 'assets/media/avatars/blank_female.png';
                                                                                                                                                                } elseif ($row['gender'] === 't') {
                                                                                                                                                                    echo 'assets/media/avatars/blank_t.svg';
                                                                                                                                                                }
                                                                                                                                                            } ?>" alt="<?php echo $row['name']; ?>"></div>
                </center>
            </div>
        </div>
        <div class="p-4 pt-10 flex-grow-1">
            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center mb-2"><a class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1"><?php echo $row['name']; ?></a><a title="Verified"><span class="svg-icon svg-icon-1 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                                    <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                </svg></span></a></div>
                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2"><a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2"><span class="svg-icon svg-icon-4 me-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span><?php echo $row['type']; ?></a><a href="https://www.google.co.in/maps/place/<?php echo $row['place']; ?>" target="_blank" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2"><span class="svg-icon svg-icon-4 me-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span><?php echo $row['place']; ?></a></div>
                </div>
                <div class="d-flex my-4"><a class="btn btn-sm btn-light-success me-2 d-flex" id="kt_user_follow_button" data-kt-indicator="off"><span class="material-icons-outlined px-2 fs-4 indicator-label">how_to_reg</span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span><span><span><?php echo ($GLOBALS['con']->query("SELECT COUNT(id) FROM `followers` WHERE followid = $profile_id"))->fetch_array()[0]; ?></span></span></a><a class="btn btn-sm btn-primary me-3 d-flex"><span class="material-icons-outlined px-2 fs-4">share</span><span class="d-sm-none">Share Profile</span></a></div>
            </div>
            <div class="d-flex overflow-auto h-55px">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link cursor-pointer text-active-primary me-6 active" id="overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cursor-pointer text-active-primary me-6" id="posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cursor-pointer text-active-primary me-6" id="materials">Materials</a>
                    </li>
                </ul>
            </div>
            
            <div class="container px-0 mt-8">
                <div class="row">
                    <div class="col">
                        Column
                    </div>
                    <div class="col">
                        Column
                    </div>
                    <div class="col">
                        Column
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    echo 'Sorry No Profiles Found!';
}
include_once('footer.php');
?>