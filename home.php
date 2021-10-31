<title>Home Page | Damo Softwares</title><?php
                                            require('default.php');
                                            ?><div class="row gy-5 g-xl-8 mb-10">
    <div class="col-xxl-4">
        <div class="card card-xxl-stretch">
            <div class="card-header border-0 bg-danger py-5" style="min-height: 35vh;">
                <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="justify-content-start">
                            <h3 class="card-title fw-bolder text-white">Welcome, <?php echo $_SESSION['name']; ?></h3>
                        </div>
                        <div class="justify-content-end">
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                                <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1" class="ms-1"></li>
                                <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2" class="ms-1"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="carousel-inner fs-5 pt-8">
                        <div class="carousel-item active">Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia facere laboriosam aperiam sit suscipit quibusdam facilis porro necessitatibus numquam minus ex, ipsum totam nihil ratione, doloribus blanditiis debitis saepe. </div>
                        <div class="carousel-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias amet quam officiis temporibus vero fuga dignissimos sequi distinctio eius ducimus eos hic, doloribus, minus magni dicta nisi recusandae culpa incidunt! </div>
                        <div class="carousel-item">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis recusandae explicabo reprehenderit exercitationem consequuntur fugiat cumque nostrum obcaecati nemo quo rem, voluptatem eaque tempore eos esse quae sunt, omnis ipsa. </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0" style="position: relative;">
                <div class="card-p mt-n20 position-relative">
                    <div class="row g-0">
                        <div class="d-shadow col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7"><span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z" fill="#000000" opacity="0.3" />
                                        <path d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 18.661508) rotate(-90.000000) translate(-11.959697, -18.661508) " />
                                    </g>
                                </svg></span><a href="upload.php" class="text-warning fw-bold fs-6">Upload</a></div>
                        <div class="d-shadow col bg-light-primary px-6 py-8 rounded-2 mb-7"><span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17 6C17 8.76142 14.7614 11 12 11C9.23858 11 7 8.76142 7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6Z" fill="#121319" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M18.818 14.1248C18.2016 13.4101 17.1428 13.4469 16.3149 13.9001C15.0338 14.6013 13.5635 15 12 15C10.4365 15 8.96618 14.6013 7.68505 13.9001C6.85717 13.4469 5.79841 13.4101 5.182 14.1248C3.82222 15.7014 3 17.7547 3 20V21C3 22.1045 3.89543 23 5 23H19C20.1046 23 21 22.1045 21 21V20C21 17.7547 20.1778 15.7014 18.818 14.1248Z" fill="#191213" />
                                </svg></span><a href="settings.php" class="text-primary fw-bold fs-6">My Profile</a></div>
                    </div>
                    <div class="row g-0">
                        <div class="d-shadow col bg-light-danger px-6 py-8 rounded-2 me-7"><span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000" />
                                    </g>
                                </svg></span><a href="explore.php" class="text-danger fw-bold fs-6 mt-2">Explore</a></div>
                        <div class="d-shadow col bg-light-success px-6 py-8 rounded-2"><span class="svg-icon svg-icon-3x svg-icon-success d-block my-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000" />
                                        <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
                                    </g>
                                </svg></span><a href="#" class="text-success fw-bold fs-6 mt-2">Notifications</a></div>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 331px; height: 440px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="assets/css/news.css">
<div class="p-0">
    <div class="rounded-0">
        <div class="card p-4">
            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6">
                <li class="nav-item" id="trend_btn"><a class="nav-link active fs-4 text-dark" data-bs-toggle="tab" href="#tags_panel">Trending Tags</a></li>
                <li class="nav-item fs-4" id="news_btn"><a class="nav-link text-dark" data-bs-toggle="tab" href="#news_panel">News</a></li>
                <li class="nav-item fs-4"><a class="nav-link text-dark" data-bs-toggle="tab" href="#link_panel">Links</a></li>
            </ul>
        </div>
        <div class="tab-content mt-2" id="myTabContent">
            <div class="tab-pane fade active show" id="tags_panel" role="tabpanel"></div>
            <div class="tab-pane fade" id="news_panel" role="tabpanel"></div>
            <div class="tab-pane fade" id="link_panel" role="tabpanel"><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span></div>
        </div>
    </div>
</div><?php
        require('footer.php');
        ?><script src="assets/plugins/global/plugins.bundle.js"></script>
<link rel="stylesheet" href="assets/plugins/global/.bundle.css">
<script type="text/javascript" src="assets/js/damo_home.js"></script>