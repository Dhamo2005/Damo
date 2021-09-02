<?php
$pass=$_POST['pass'];
$email=$_POST['email'];
$pass1=md5($pass);
if($pass <5){

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//smtp settings
$mail->isSMTP(); // send as HTML
$mail->Host = "smtp.gmail.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "ts465335@gmail.com"; // Your mail
$mail->Password = 'tamilselvam9994511942'; // Your password mail
$mail->Port = 587; //specify SMTP Port
$mail->SMTPSecure = 'tls';                               
$mail->setFrom('ts465335@gmail.com','Dhamo Mailing Team');
$mail->addAddress($email); // To Address
$mail->addReplyTo('ts465335@gmail.com','Dhamo');
$mail->isHTML(true);
$mail->Subject='Resetting Password';
$mail->Body= $message="Your Password Is Successfully Changed! <br> Your New Password Is:$pass <br> Don't Share Your Password With Anyone";
mail('ts465335@gmail.com', "Send Code", $message);

    if($mail->Send())
    {
 include_once("../database.php"); $sql="UPDATE `users` SET `password`='$pass1' WHERE `users`.`email`='$email' "; $con->query($sql); $sql1="DELETE FROM `pr` WHERE `email`='$email' "; $con->query($sql1); echo("Password Succesfully Resetted!"); echo("\r\n \r\n Your New Password Is:".$pass);
    }
    
    else
    {
  echo("Something Went Wrong! \r\nCheck Your Internet Connection Or Try Again!");
}
}else{
    echo("Please Enter A Critical Password");
}
?>