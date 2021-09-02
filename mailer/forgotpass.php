<?php
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
$mail->addAddress('ts465335@gmail.com'); // Your mail
$mail->addReplyTo('ts465335@gmail.com','Dhamo');
$mail->isHTML(true);
$mail->Subject='Form Submission:';
$code= rand(100,999);
$mail->Body= $message="OTP:$code";
mail('ts465335@gmail.com', "Send Code", $message);

    if($mail->Send())
    {
       echo("success");
    }
    
    else
    {
  echo("fail");
}
?>