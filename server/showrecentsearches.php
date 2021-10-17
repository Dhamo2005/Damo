<?php require('../db.php');
$sql_recent = "SELECT keyword FROM `recentlysearched` ORDER BY `recentlysearched`.`keyword` ASC";
$result_recent = $GLOBALS['con']->query($sql_recent);
if (mysqli_num_rows($result_recent) > 0) {
    while ($row_recent = $result_recent->fetch_assoc()) { ?><a href="search.php?search=
    <?php echo ($row_recent['keyword']); ?>" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
            <div class="symbol symbol-30px me-4"><span class="symbol-label bg-light-primary"><span class="svg-icon svg-icon-2 svg-icon-primary"><span class="material-icons-outlined text-muted">history</span></span></span></div>
            <div class="fw-bold"><span class="fs-6 text-gray-800"><?php echo ($row_recent['keyword']); ?>
                </span></div><?php }
                        } else {
                            echo ('<center>Empty</center>');
                        } ?>