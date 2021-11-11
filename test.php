<?php
include "db.php";
$numrow = DB::con()->prepare("SELECT * FROM `recentlysearched` WHERE keyword = :keyword AND uid = :uid");
$numrow->execute(['keyword' => 'qr', 'uid' => '278']);
echo $numrow->rowCount();