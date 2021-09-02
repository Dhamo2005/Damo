<?php include_once("../db.php");
$email = urldecode($_POST['email']);
$result = mysqli_query($GLOBALS['con'], "SELECT * FROM users WHERE email='$email';");
$num = mysqli_num_rows($result);
if ($num < 1) {
    $isAvailable = true;
} else {
    $isAvailable = false;
}
echo json_encode(array('valid' => $isAvailable,));
mysqli_close($GLOBALS['con']);
