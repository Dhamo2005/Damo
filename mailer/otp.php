<?php
if(isset($_POST['otp'])){
$otp=$_POST['otp'];
$email=$_POST['email'];
include_once("../database.php");
$sql 	= "SELECT * FROM pr WHERE email='$email' AND otp='$otp'  ";
$verify=(mysqli_num_rows($con->query($sql)));
if($verify >=1){
    echo('1');
}else{
    echo('0');
}
}else{
    echo("Sorry Something Went Wrong!");
}
?>