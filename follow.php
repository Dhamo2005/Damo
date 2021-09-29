<?php
include_once('default.php');
?>
<title><?php echo $_SESSION['name'] . "&nbsp;-&nbsp;Following | Damo Softwares";?></title>
<?php
$sql = "SELECT DISTINCT users.id as uploaderid, users.name, users.avatar, users.gender, users.about FROM users,followers WHERE followers.uid=278 AND users.id=followers.followid ORDER BY followers.id DESC";
$result = $GLOBALS['con']->query($sql);
if (mysqli_num_rows($result) > 0) {
?><div class="col-12 mt-2 noselect">
            <div class="border-dotted border-success border-1 card card-flush">
                <div class="card-header bg-primary">
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder text-white mb-1">Following... 😇</h3>
                        <div class="fs-6 text-white opacity-75 bg-gradient"><?php echo mysqli_num_rows($result) . "&nbsp;"; ?>Member<?php if(mysqli_num_rows($result) >1){echo 's';} ?></div>
                    </div>
                    <div class="card-toolbar"><span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2 p-4">2 New</span></div>
                </div>
                <div class="card-body d-flex flex-column p-4 pt-3 mb-2">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="p-2 border-1 border rounded-1 border-active border-primary hover-shadow d-flex align-items-center mb-5" id='<?php echo base64_encode($row['id']); ?>'>
                    <div onclick="window.location.href = 'profile_view.php?p=<?php echo base64_encode(base64_encode($row['uploaderid'])); ?>'" class=" d-flex cursor-pointer">
                        <div class="me-5 position-relative">
                            <div class="symbol symbol-40px symbol-square"><img src="<?php if(!empty($row['avatar'])){echo $row['avatar'];}else{if($row['gender'] ==='m'){echo 'assets/media/avatars/blank_male.svg';}elseif($row['gender'] ==='f'){echo 'assets/media/avatars/blank_female.png';}elseif($row['gender'] ==='t'){echo 'assets/media/avatars/blank_t.svg';}}?>" alt="<?php echo $row['name']; ?>"></div>
                        </div>
                        <div class="fw-bold"><a class="fs-5 fw-bolder text-gray-900 text-hover-primary"><?php echo $row['name']; ?></a>
                            <div class="text-gray-600"><?php echo $row['about']; ?></div>
                        </div>
                    </div>
                        <div class="badge-light ms-auto"><div class="my-0"><button class="btn btn-sm btn-color-muted btn-active-light-primary btn-icon" data-kt-menu-flip="top-end" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="click" type="button"><span class="svg-icon svg-icon-2"><span class="material-icons-outlined">more_vert</span></span></button><div class="fw-bold menu menu-column menu-gray-600 menu-rounded menu-state-bg-light-primary menu-sub menu-sub-dropdown w-150px" data-kt-menu="true"><div class="px-3 menu-item"><div class="px-3 menu-content fs-4 fw-bolder py-4 text-dark">Quick Actions</div></div><div class="separator opacity-75 mb-3"></div><div class="px-3 menu-item"><a class="px-3 menu-link fs-6" href="">Share</a></div><div class="px-3 menu-item"><a class="px-3 menu-link fs-6" href="">View Profile</a></div><div class="separator opacity-75 mt-3"></div><div class="px-3 menu-item mx-auto"><div class="px-3 menu-content py-3"><a class="btn btn-sm btn-danger px-4 fs-6" href=""><span class="material-icons-outlined">delete</span></a></div></div></div></div></div>
                    </div>
                    <?php  } ?>
                </div>
            </div>
        </div><?php
        } else {
            echo "<center>You Havn't Any Followers</center>";
        } ?><?php include_once('footer.php'); ?>