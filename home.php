<title>Home Page | Damo Softwares</title>
<?php
include_once('default.php');
?>
<div class="p-0">
    <div class="rounded-0">
        <div class="card border p-4">
        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6">
            <li class="nav-item"><a class="nav-link active fs-4 text-dark" data-bs-toggle="tab" href="#tags_panel">Trending Tags</a></li>
            <li class="nav-item fs-4" id="news_btn"><a class="nav-link text-dark" data-bs-toggle="tab" href="#news_panel">News</a></li>
            <li class="nav-item fs-4"><a class="nav-link text-dark" data-bs-toggle="tab" href="#link_panel">Links</a></li>
        </ul></div>
        <div class="tab-content mt-2" id="myTabContent">
            <div class="tab-pane fade active show" id="tags_panel" role="tabpanel"><span class="badge m-2 badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">12th New Reduced Syllabus 2021</span><span class="badge m-2 badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">12th Bridge Course Module 2021</span><span class="badge m-2 badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">12th Study Materials</span><span class="badge m-2 badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">12th Question Papers</span></div>
            <div class="tab-pane fade" id="news_panel" role="tabpanel">
                <script>
                    $('#news_btn').click(function() {
                        $.ajax({
                            type: "GET",
                            url: "pages/news.php",
                            success: function(news) {
                                $('#news_panel').html(news);
                            },
                            error: function(jqXHR, exception) {
                                setTimeout(() => {
                                    $.ajax(this);
                                }, 1500);
                            }
                        });
                        $('#news_panel').html('<div data-kt-indicator="on"><span class="ps-4 fs-6 indicator-progress">Loading...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></div>');
                        setTimeout(function() {
                            $('#news_panel').load('pages/news.php');
                        }, 1500);
                    });
                </script>
            </div>
            <div class="tab-pane fade" id="link_panel" role="tabpanel"><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span><span class="badge badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover">10th New Reduced Syllabus 2021</span></div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>