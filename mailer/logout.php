<?php
session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['name']);
header('location: ../signin.php');
?>