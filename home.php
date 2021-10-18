<title>Home Page | Damo Softwares</title>
<?php
require('default.php');
?>
<link rel="stylesheet" href="assets/css/news.css">
<div class="p-0">
    <div class="rounded-0">
        <div class="card border p-4">
            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6">
                <li class="nav-item" id="trend_btn"><a class="nav-link active fs-4 text-dark" data-bs-toggle="tab" href="#tags_panel">Trending Tags</a></li>
                <li class="nav-item fs-4" id="news_btn"><a class="nav-link text-dark" data-bs-toggle="tab" href="#news_panel">News</a></li>
                <li class="nav-item fs-4"><a class="nav-link text-dark" data-bs-toggle="tab" href="#link_panel">Links</a></li>
            </ul>
        </div>
        <div class="tab-content mt-2" id="myTabContent">
            <div class="tab-pane fade active show" id="tags_panel" role="tabpanel">
                <script type="text/javascript" src="assets/js/damo_home.js"> </script>
            </div>
            <div class="tab-pane fade" id="news_panel" role="tabpanel">
            </div>
            <div class="tab-pane fade" id="link_panel" role="tabpanel"><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span></div>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>