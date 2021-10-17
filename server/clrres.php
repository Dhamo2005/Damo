<?php
session_start();
require('../db.php');
if (isset($_POST['clr'])) {
    $sql = "DELETE FROM `recentlysearched` WHERE `recentlysearched`.`uid`={$_SESSION['myid']} ";
    if ($result = $GLOBALS['con']->query($sql)) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}
