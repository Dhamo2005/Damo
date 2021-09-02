<?php
  include_once("../db.php");
$email = mysqli_real_escape_string($GLOBALS['con'],$_POST['email']);
if ($email < 3) {
  $otp = rand(100000, 999999);
  $sql = "INSERT INTO `pr` (`id`, `email`, `otp`) VALUES (NULL, '$email', '$otp')";
  $con->query($sql);
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
  $mail->setFrom('ts465335@gmail.com', 'Dhamo Mailing Team');
  $mail->addAddress($email); // To Address
  $mail->addReplyTo('ts465335@gmail.com', 'Dhamo');
  $mail->isHTML(true);
  $mail->Subject = 'Resetting Password';
  $mail->Body = $message = "OTP:$otp <br> Don't Share This OTP With Anyone";
  mail('ts465335@gmail.com', "Send Code", $message);

  if ($mail->Send()) {
    $sql = "INSERT INTO `pr` (`id`, `email`, `otp`) VALUES (NULL, '$email', '$otp')";
    $con->query($sql);
    echo (1);
  } else {
    echo ("Failed To Sent Email!");
  }
} else {
  echo ("Please Enter A Value Email");
}
