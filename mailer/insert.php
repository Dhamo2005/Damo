<?php
// connect to the database
include_once("../database.php");

$fname = mysqli_real_escape_string($db, $_POST['firstname1']);
$medium = mysqli_real_escape_string($db, $_POST['medium']);
$email = mysqli_real_escape_string($db, $_POST['email1']);
$phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
$password_1 = mysqli_real_escape_string($db, $_POST['password1']);
$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password1']);
$class = mysqli_real_escape_string($db, $_POST['class']);
$password = md5($password_2);

$user_check_query = "SELECT * FROM users WHERE fname='$fname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

	if ($user['email'] === $email) 
	{
		echo('<div class="alert alert-danger" role="alert">Email already exists</div>');
	}
	else{
$query = "INSERT INTO users(FNAME, EMAIL, PHONE_NUMBER, CLASS, MEDIUM, PASSWORD,JOINED)
				VALUES('$fname', '$email','$phone_number','$class','$medium','$password',now())";
		mysqli_query($db, $query);
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now logged in";
		header('location: ../index.php');
}
?>