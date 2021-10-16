<?php
include('../db.php');
include('../controls/numfunctions.php');
$sql = "SELECT tag FROM `trending_tags` ORDER BY date DESC";
$res = $con->query($sql);
while ($row = $res->fetch_assoc()) {
?>
<span class="badge m-2 badge-primary cursor-pointer fs-6 hover-shadow opacity-75-hover"><?php echo $row['tag']; ?></span>
<?php
} ?>