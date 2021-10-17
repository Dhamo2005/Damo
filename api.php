<?php
require('db.php');
$sql = "SELECT users.name, materials.format, materials.Title, materials.id, materials.likes, materials.dislikes, materials.downloads, materials.Std, materials.Author, materials.link, materials.Subject, TIME_TO_SEC(TIMEDIFF(materials.Date,now())), users.avatar, materials.Date FROM users,materials";
$result = $GLOBALS['con']->query($sql);
$row = $result->fetch_assoc();
require('controls/numfunctions.php');
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'];
}

