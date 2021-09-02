<?php
include_once('../db.php');
$sub = mysqli_real_escape_string($GLOBALS['con'], $_GET['sub']);
$class = mysqli_real_escape_string($GLOBALS['con'], $_GET['class']);
include_once('../controls/numfunctions.php');
$sql = "SELECT DISTINCT users.Name, materials.format, materials.Title, materials.id, materials.likes, materials.dislikes, (select DISTINCT count(mydownloads.id) FROM mydownloads WHERE mydownloads.fileid=materials.id ) as downloads, materials.Std, materials.Author, materials.link, materials.Date, users.gender, users.id as uploaderid FROM users,materials WHERE materials.uid=users.id AND materials.Std LIKE '%$class%' AND materials.Subject LIKE'%$sub%' ORDER BY materials.Date DESC";
$result = $GLOBALS['con']->query($sql);
if (mysqli_num_rows($result) == 0) {
    echo "<h6 class='text-center'><br><br>Sorry No Uploads Found!<br><hr>You are the first person to upload.</h6>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }
}
mysqli_close($GLOBALS['con']);