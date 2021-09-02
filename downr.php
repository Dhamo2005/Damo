<?php
include_once('db.php');
session_start();
$token = base64_decode(base64_decode(mysqli_real_escape_string($GLOBALS['con'], $_GET['token'],true),true));
if ($result = $GLOBALS['con']->query("INSERT INTO `mydownloads` ( `uid`, `fileid`, `time`) VALUES ('{$_SESSION['myid']}', '{$token}', current_timestamp())")) {
    if ($result = $GLOBALS['con']->query("SELECT DISTINCT materials.link as link from materials where materials.id = $token LIMIT 1")) {
        // $row = mysqli_fetch_array($result);
        header('location:' . mysqli_fetch_array($result)['link']);
    } else {
        echo 'Sorry Something Went Wrong!';
    }
} else {
    header('location:index.php');
}