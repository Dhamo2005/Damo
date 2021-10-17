<?php if (!isset($_GET['link'])) {
    echo "<script>window.history.back();</script>";
} else {
    if (!isset($_GET['link']) || empty($_GET['link']) || !isset($_GET['link']) || empty($_GET['link']) || base64_decode($_GET['link'], true) < 4) {
        require('default.php');
        echo "<div class='text-center text-danger'><span style='font-size:30px;'>😓</span><br><h4>Error 404</h4><h2>Sorry, Content Not Found!</h2><a class='fs-2 pt-2 cursor-pointer' href='home.php'>Go To Home Page</a></div>";
    } else {
        require('default.php');
        $mid = htmlspecialchars(mysqli_real_escape_string($GLOBALS['con'], base64_decode($_GET['link'], true)));
        $sql = "SELECT DISTINCT materials.id,materials.size,materials.medium, materials.Title, materials.uid, materials.link, materials.likes, materials.dislikes, materials.Date, COUNT(mydownloads.id) AS downloads,materials.format,materials.Subject,materials.Std,users.name,users.place,users.avatar,users.type,users.gender FROM users,materials,mydownloads WHERE mydownloads.fileid=$mid AND mydownloads.uid={$_SESSION['myid']} AND materials.id=$mid AND users.id=materials.uid";
        $result = $GLOBALS['con']->query($sql);
        require('controls/numfunctions.php'); ?>
        <?php if (mysqli_num_rows($result) > 0 && is_numeric($mid)) {
            $row = $result->fetch_assoc(); ?>
            <title><?php echo $row['Title'] ?></title>
            <div class="card mb-xl-10 border-1 border-primary border noselect" id="download_details">
                <div style="background-image: url(assets/bg/profilebg.jpg); background-repeat: round;">
                    <h2 class="text-center text-white py-4">Damo Download Analytics</h2>
                    <div class="card-body p-0">
                        <center style="margin-top: -6 !important; background: linear-gradient(0deg, #181c32cf, transparent);">
                            <div class="symbol symbol-150px symbol-lg-160px symbol-fixed position-relative cursor-pointer"><img style="margin-bottom:-25px;" src="
                <?php if (!empty($row['avatar'])) {
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
                            <div class="d-flex align-items-center mb-2"><a class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1"><?php echo $row['name']; ?></a><a href="#"><span class="svg-icon svg-icon-1 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                                            <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                        </svg></span></a></div>
                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2"><a class="text-capitalize d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2"><span class="svg-icon svg-icon-4 me-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg></span><?php echo $row['type']; ?></a><a href="https://www.google.co.in/maps/place/<?php echo $row['place']; ?>" target="_blank" class="text-capitalize d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2"><span class="svg-icon svg-icon-4 me-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg></span><?php echo $row['place']; ?></a></div>
                        </div>
                        <?php require('controls/followsharebtn.php'); ?>
                    </div>
                    <div class="d-flex flex-wrap flex-stack">
                        <div class="d-flex flex-column flex-grow-1">
                            <div class=" align-items-center d-flex flex-wrap">
                                <div class="hover-shadow cursor-pointer btn-like bg-hover-light-success w-sm-100 border border-2 border-success border-dashed rounded min-w-125px py-2 px-4 me-3 mb-3" data-lid="<?php echo base64_encode(base64_encode($row['id'])); ?>">
                                    <div class="justify-content-center d-flex align-items-center text-success" data-kt-indicator="off"><span class="material-icons-outlined me-2 indicator-label">thumb_up </span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span>
                                        <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="<?php echo $row['likes']; ?>"><?php echo $row['likes']; ?></div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-400 text-center"><?php echo number_shorten($row['likes']); ?></div>
                                </div>
                                <div class="hover-shadow cursor-pointer btn-dislike bg-hover-light-danger border border-2 border-danger border-dashed rounded min-w-125px w-sm-100 py-2 px-4 me-3 mb-3" data-lid='<?php echo base64_encode(base64_encode($row['id'])); ?>'>
                                    <div class="justify-content-center d-flex align-items-center text-danger" data-kt-indicator="off"><span class="material-icons-outlined me-2 indicator-label">thumb_down </span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span>
                                        <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="<?php echo $row['dislikes']; ?>"><?php echo $row['dislikes']; ?></div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-400 text-center"><?php echo number_shorten($row['dislikes']); ?></div>
                                </div>
                                <div class="hover-shadow cursor-pointer bg-hover-light-primary border border-2 border-primary border-dashed rounded min-w-125px w-sm-100 py-2 px-4 me-3 mb-3"><a href="#download-link" data-kt-scroll-toggle="true">
                                        <div class="justify-content-center d-flex align-items-center text-primary"><span class="material-icons-outlined me-2">get_app</span>
                                            <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="<?php echo $row['downloads']; ?>"><?php echo $row['downloads']; ?></div>
                                        </div>
                                        <div class="fw-bold fs-6 text-gray-400 text-center"><?php echo number_shorten($row['downloads']); ?></div>
                                    </a></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center w-200px w-sm-100 flex-column mt-3">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2"><span class="fw-bold fs-6 text-gray-400 text-center"><span class="text-success fw-bolder pe-2">Likes</span>VS<span class="ps-2 text-danger fw-bolder">Dislikes</span></span><span class="fw-bolder fs-6"><?php echo round(getper($row['likes'], $row['dislikes'], ($row['likes'] + $row['dislikes'])), 0); ?>%</span></div>
                            <div style="background-color:palevioletred;" class="h-5px mx-3 w-100  mb-3">
                                <div class="bg-success rounded h-5px" role="progressbar" style="width: <?php echo getper($row['likes'], $row['dislikes'], ($row['likes'] + $row['dislikes'])); ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <table class="hover-shadow table border-primary border-1 border">
                        <h2 class="mb-0 text-center txet-white mt-8 p-3 bg-primary">File Info</h2>
                        <tbody class="bg-light-primary fs-5">
                            <tr>
                                <td class="text-end p-2 pt-4">Title</td>
                                <td class="pt-4">:</td>
                                <td class="w-80 pt-4 text-start" style="line-break: anywhere !important;"><?php echo $row['Title'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Standard</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo $row['Std'] ?>th</td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Subject</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo $row['Subject'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Medium</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo $row['medium'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Date</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo date("d-M-Y h:i:s A", strtotime($row['Date'])) ?></td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Size</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo $row['size'] . 'MB' ?></td>
                            </tr>
                            <tr>
                                <td class="text-end p-2">Format</td>
                                <td>:</td>
                                <td class="w-80 text-start"><?php echo $row['format'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <center class="pt-4">
                        <?php if (isset($_SERVER['HTTP_REFERER'])) {
                            echo ('<a href="' . $_SERVER['HTTP_REFERER'] . '" class="me-4 btn btn-warning p-2 pe-4 rounded-3 fs-3 rounded cursor-pointer"><span class=" d-inline-flex text-white align-items-baseline"><span class="m-auto material-icons-outlined mx-2 align-items-baseline">arrow_back </span>Go Back</span></a>');
                        } ?><a href="downr.php?<?php echo 'token=' . base64_encode(base64_encode($row['id'])); ?>" target="_blank" class="btn btn-primary p-2 pe-4 rounded-3 fs-3 rounded cursor-pointer" id="download-link"><span class=" d-inline-flex text-white align-items-baseline"><span class="m-auto material-icons-outlined mx-2 align-items-baseline">get_app </span>Download</span></a></center>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.btn-like').click(function() {
                            var likeid = $(this).data("lid");
                            $.ajax({
                                url: "controls/downloader/action.php",
                                type: "POST",
                                data: {
                                    likeid: likeid,
                                    action: 1,
                                },
                                beforeSend: function() {
                                    $('.btn-like').children('div').attr('data-kt-indicator', 'on');
                                },
                                success: function(like) {
                                    $('.btn-like').children('div').attr('data-kt-indicator', 'off');
                                    v = JSON.parse(like);
                                    $('.btn-like').children('div').children('div').html(v.likes);
                                    $('.btn-like').children('div').next('div').html(v.numshortlikes);
                                },
                            });
                        });
                        $('.btn-dislike').click(function() {
                            var likeid = $(this).data("lid");
                            $.ajax({
                                url: "controls/downloader/action.php",
                                type: "POST",
                                data: {
                                    likeid: likeid,
                                    action: 0,
                                },
                                beforeSend: function() {
                                    $('.btn-dislike').children('div').attr('data-kt-indicator', 'on');
                                },
                                success: function(dislike) {
                                    $('.btn-dislike').children('div').attr('data-kt-indicator', 'off');
                                    v = JSON.parse(dislike);
                                    $('.btn-dislike').children('div').children('div').html(v.dislikes);
                                    $('.btn-dislike').children('div').next('div').html(v.numshortdislikes);
                                },
                            });
                        });
                    });
                </script>

            </div>
<?php } else {
            echo "<div class='text-center text-danger'><span style='font-size:30px;'>😓</span><br><h4>Error 404</h4><h2>Sorry, Content Not Found!</h2><a class='fs-2 pt-2 cursor-pointer' href='home.php'>Go To Home Page</a></div>";
        }
    }
} ?>
<?php require('footer.php'); ?>