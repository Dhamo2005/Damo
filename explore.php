<?php
if (isset($_GET['sub']) && isset($_GET['class'])) {
    require('default.php');
    require('controls/damo_filters.php');
    require('controls/damo_func.php');
?>
    <title>
        <?php if (isset($_GET['sub']) && isset($_GET['class']) && is_numeric($_GET['class']) && is_string($_GET['class'])) {
            echo (damo_validate($_GET['class']) . "th&nbsp;" . damo_validate($_GET['sub']) . "&nbsp;" . "Materials");
            if (isset($_GET['med']) && is_string($_GET['med'])) {
                echo '&nbsp;|&nbsp;' . damo_validate($_GET['med']);
            }
            echo "&nbsp;|&nbsp;Damo Softwares";
        } ?></title>
    <?php $sub = damo_validate($_GET['sub']);
    $class = damo_validate($_GET['class']);
    require('controls/numfunctions.php');
    $sql = "SELECT DISTINCT users.Name, materials.format, materials.Title, materials.id, materials.likes, materials.dislikes, (select DISTINCT count(mydownloads.id) FROM mydownloads WHERE mydownloads.fileid = materials.id ) as downloads, materials.Std, materials.link, materials.Date, users.email, users.gender, users.avatar, users.id as uploaderid FROM users,materials WHERE materials.uid=users.id AND materials.Std LIKE '%$class%' AND materials.Subject LIKE'%$sub%' ORDER BY materials.Date DESC";
    $result = $GLOBALS['con']->query($sql); ?><div class="d-flex px-2 container-fluid flex-sm-nowrap flex-stack flex-wrap">
        <div class="d-flex flex-column align-items-start flex-wrap justify-content-center me-2">
            <h1 class="d-flex align-items-center fs-2 fw-bolder my-1 text-dark"><?php echo $class . "th&nbsp;" . $sub . "&nbsp;materials"; ?><span class="px-2 badge 
            <?php if (mysqli_num_rows($result) > 0) {
                echo 'bg-success text-success';
            } else {
                echo 'bg-danger text-danger';
            } ?> bg-opacity-10 fs-7 ms-2"><?php echo mysqli_num_rows($result); ?></span></h1>
            <ul class="fw-bold breadcrumb fs-5 my-1">
                <li class="breadcrumb-item text-muted"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item text-muted"><a href="explore.php">Explore</a></li>
                <li class="breadcrumb-item text-dark"><?php echo $class; ?>th</li>
            </ul>
        </div>
        <div class="d-flex align-items-center flex-nowrap py-1 text-nowrap"><a class="d-flex btn me-4 btn-active-primary btn-white px-1 px-md-4" target="_blank"><span class="material-icons-outlined fs-2 pe-2">share</span><span class="d-sm-none">Share</span></a><a class="btn px-2 px-md-4 btn-primary" target="_blank"><span class="d-flex menu-link"><span class="menu-icon"><span class="material-icons-outlined fs-2 pe-2">filter_list</span></span><span class="d-sm-none menu-title">Filter</span></span></a></div>
    </div>
    <?php if (mysqli_num_rows($result) == 0) {
        echo "<center class='text-center'><br><span class='fs-1'>🙄</span><br><br>Sorry No Uploads Found!<br></center><br>";
        require('pages/explore.php');
    } else {
        while ($row = $result->fetch_assoc()) { ?><div class="mb-5 card mb-xxl-8">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div onclick="window.location.href = 'profile_view.php?p=<?php echo base64_encode(base64_encode($row['uploaderid'])); ?>'" class="cursor-pointer d-flex border-1 border-dotted rounded-1 border-active border-primary p-2">
                                <div class="me-5 symbol symbol-45px"><img alt="<?php echo $row['Name']; ?>" width="45px" height="45px" src="
                                <?php avatar($row['avatar'],$row['gender']); ?>" alt="<?php echo $row['Name']; ?>"></div>
                                <div class="d-flex flex-column"><a class="text-gray-800 fs-5 fw-bolder"><?php echo $row['Name']; ?></a><span class="fw-bold text-gray-600"><?php echo time_ago($row["Date"]); ?></span></div>
                            </div>
                        </div>
                        <div class="my-0"><button class="btn btn-sm btn-color-muted btn-active-light-primary btn-icon" data-kt-menu-flip="top-end" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="click" type="button"><span class="svg-icon svg-icon-2"><span class="material-icons-outlined">more_vert</span></span></button>
                            <div class="fw-bold menu menu-column menu-gray-600 menu-rounded menu-state-bg-light-primary menu-sub menu-sub-dropdown w-200px" data-kt-menu="true">
                                <div class="px-3 menu-item">
                                    <div class="px-3 menu-content fs-6 fw-bolder py-4 text-dark">Quick Actions</div>
                                </div>
                                <div class="separator opacity-75 mb-3"></div>
                                <div class="px-3 menu-item"><a class="px-3 menu-link" href="#">Share</a></div>
                                <div class="px-3 menu-item"><a class="px-3 menu-link" href="#">Follow This Proflie</a></div>
                                <div class="px-3 menu-item"><a class="px-3 menu-link" href="#">Report</a></div>
                                <div class="separator opacity-75 mt-3"></div>
                                <div class="px-3 menu-item">
                                    <div class="px-3 menu-content py-3"><a class="btn btn-sm btn-primary px-4" href="#">Generate Reports</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <p class="mb-5 fs-6 fw-normal text-gray-800"><?php echo ($row['Title']); ?></p>
                    </div>
                    <div class="separator mb-4"></div>
                    <div class="mb-6 position-relative">
                        <div class="d-flex justify-content-between w-100 mt-auto"><span class="fw-bold fs-6 text-gray-400 text-center"><a class="d-flex text-muted fs-6 py-1 px-1 fw-bolder"><span class="fs-2 material-icons-outlined pe-2">thumb_up</span><?php echo getper($row['likes'], $row['dislikes'], ($row['likes'] + $row['dislikes'])); ?>%</a></span><span class="fw-bolder fs-6"><span class="btn btn-sm btn-icon btn-active-color-light-success me-4 pe-0"><span class="mb-3 svg-icon svg-icon-3"><a class="d-flex btn btn-color-muted btn-sm fs-6 py-1 fw-bolder btn-active-light-success px-1" href="<?php echo "download.php?link=" . base64_encode($row['id']); ?>"><?php echo number_shorten($row['downloads']); ?><span class="material-icons-outlined px-1">get_app</span></a></span></span></span></div>
                        <div class="h-5px w-100 mb-3" style="background-color: #c9c9c9;">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: <?php echo getper($row['likes'], $row['dislikes'], ($row['likes'] + $row['dislikes'])) ?>%;" aria-valuenow="<?php echo getper($row['likes'], $row['dislikes'], ($row['likes'] + $row['dislikes'])); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div><?php }
            }
            require('footer.php'); ?>
<?php
} else {
    require('default.php');
    ?><title>Explorer | Damo Softwares</title><?php
    require('pages/explore.php');
?>
<br>
    <trending_tags>
        <script src="assets/js/damo_search.js" type="text/javascript"></script>
    </trending_tags>
<?php
    require('footer.php');
}