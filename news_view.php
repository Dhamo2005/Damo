<?php
include('default.php');
if(isset($_GET['news'])){
include('controls/damo_filters.php');
include('controls/numfunctions.php');
include('controls/damo_func.php');
$news_id = damo_validate(base64_decode(base64_decode($_GET['news'], true),true));
$sql = "SELECT title,description,DATE_FORMAT(date,'%D-%M-%Y') AS date, views FROM `news` WHERE news.id = '$news_id'";
$res = $con->query($sql);
$row = $res->fetch_assoc();
?>
<link rel="stylesheet" href="assets/css/news.css">
<div class="card">
    <div class="card-body p-lg-20 pb-lg-0">
        <div class="d-flex flex-column flex-xl-row">
            <div class="flex-lg-row-fluid me-xl-15">
                <div class="mb-17">
                    <div class="mb-8">
                        <div class="d-flex flex-wrap mb-6">
                            <div class="me-9 my-1"><span class="svg-icon svg-icon-primary svg-icon-2 me-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg></span><span class="fw-bolder text-gray-400"><?php echo $row['date']; ?></span></div>
                            <div class="me-9 my-1"><span class="svg-icon svg-icon-primary svg-icon-2 me-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.25" d="M13 6L12.4104 5.01732C11.8306 4.05094 10.8702 3.36835 9.75227 3.22585C8.83875 3.10939 7.66937 3 6.5 3C5.68392 3 4.86784 3.05328 4.13873 3.12505C2.53169 3.28325 1.31947 4.53621 1.19597 6.14628C1.09136 7.51009 1 9.43529 1 12C1 13.8205 1.06629 15.4422 1.15059 16.7685C1.29156 18.9862 3.01613 20.6935 5.23467 20.8214C6.91963 20.9185 9.17474 21 12 21C14.8253 21 17.0804 20.9185 18.7653 20.8214C20.9839 20.6935 22.7084 18.9862 22.8494 16.7685C22.9337 15.4422 23 13.8205 23 12C23 10.9589 22.9398 9.97795 22.8611 9.14085C22.7101 7.53313 21.4669 6.2899 19.8591 6.13886C19.0221 6.06022 18.0411 6 17 6H13Z" fill="#12131A"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 6H1.21033C1.39381 4.46081 2.58074 3.27842 4.13877 3.12505C4.86788 3.05328 5.68396 3 6.50004 3C7.66941 3 8.83879 3.10939 9.75231 3.22585C10.8702 3.36835 11.8306 4.05094 12.4104 5.01732L13 6Z" fill="#12131A"></path>
                                    </svg></span><span class="fw-bolder text-gray-400">News</span></div>
                            <div class="my-1"><span class="svg-icon svg-icon-2 me-1">
                                    <span class="fa fa-eye text-primary opacity-75"></span>
                                </span><span class="fw-bolder text-gray-400"><?php echo $row['views']; ?>&nbsp;Views</span></div>
                        </div><a class="text-dark text-hover-primary fs-2 fw-bolder news_title"><?php echo $row['title']; ?><span class="fw-bolder text-muted fs-5 ps-1">5 mins read</span></a>
                        <div class="overlay mt-8">
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('assets/media/stock/2000x800/1.jpg')"></div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"><a href="pages/company/about.html" class="btn btn-primary">About Us</a><a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a></div>
                        </div>
                    </div>
                    <div class="fs-5 fw-bold text-gray-600">
                        <p class="mb-8 news text-gray-700"> <?php echo $row['description']; ?> </p>
                    </div>
                    <div class="d-flex align-items-center border-dashed card-rounded p-5 p-lg-10 mb-14">
                        <div class="text-center flex-shrink-0 me-7 me-lg-13">
                            <div class="symbol symbol-70px symbol-circle mb-2"><img src="assets/media/avatars/150-3.jpg" class="" alt=""></div>
                            <div class="mb-0"><a href="pages/profile/overview.html" class="text-gray-700 fw-bolder text-hover-primary">Jane Johnson</a><span class="text-gray-400 fs-7 fw-bold d-block mt-1">Co-founder</span></div>
                        </div>
                        <div class="mb-0 fs-6">
                            <div class="text-muted fw-bold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div><a href="pages/profile/overview.html" class="fw-bold link-primary">Author’s Profile</a>
                        </div>
                    </div>
                    <div class="d-flex flex-center"><a class="mx-4"><img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt=""></a><a class="mx-4"><img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt=""></a></div>
                </div>
            </div>
            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                <div class="m-0">
                    <h4 class="text-black mb-7">Latest News</h4>
                    <?php
                    $sql = "SELECT id,title,description,DATE_FORMAT(date,'%D-%M-%Y') AS date, views FROM `news` WHERE NOT news.id = '$news_id' ORDER BY date DESC";
                    $res = $con->query($sql);
                    while ($row = $res->fetch_assoc()) {
                    ?>
                        <div class="d-flex flex-stack mb-7">
                            <div class="m-0"><a class="news_title text-dark fw-bolder text-hover-primary fs-6" href="news_view.php?news=<?php echo base64_encode(base64_encode($row['id'])); ?>">
                                    <?php 
                                        echo limitxt($row['title'],250,'<a href="news_view.php?news=' . base64_encode(base64_encode($row['id'])) . '">Read More</a>');
                                    ?>
                                </a>
                                <div class="text-gray-600 fw-bold d-block pt-1 fs-7">
                                    <div class="d-flex justify-content-between opacity-75">
                                        <div class="text-start">
                                            <time class="entry-date published fnt-cnt timestampcss comsizeforgrayclr"><?php echo $row['date']; ?></time>
                                        </div>
                                        <div class="text-end">
                                            <span class="ms-2"> <i class="fa fa-eye"></i> <?php echo $row['views']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div><?php }
else{
    require('pages/news.php');
}
        include('footer.php');
        ?>