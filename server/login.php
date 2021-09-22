<?php session_start();
include_once("../db.php");
$email = trim(htmlspecialchars(strip_tags(mysqli_real_escape_string($GLOBALS['con'], $_POST['email'])),ENT_COMPAT,'UTF-8'));
$password = trim(htmlspecialchars(strip_tags(mysqli_real_escape_string($GLOBALS['con'], md5($_POST['password']))),ENT_COMPAT,'UTF-8'));
if (!empty($email) && !empty($email)) {
	$sql = "SELECT email,password FROM users WHERE email='{$email}' and password='{$password}'";
	$results = $GLOBALS['con']->query($sql);
	if (mysqli_num_rows($results) == 1) {
		$_SESSION['email'] = $email;
		$sql = "SELECT * FROM users WHERE EMAIL='{$email}' LIMIT 1";
		$result = $GLOBALS['con']->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION["name"] = $row["name"];
			$_SESSION["avatar"] = $row["avatar"];
			$_SESSION['myid'] = $row["id"];
			$_SESSION['gender'] = $row["gender"];
			$_SESSION['std'] = $row["class"];
			$_SESSION['medium'] = $row["medium"];
			if($GLOBALS['con']->query("UPDATE `users` SET `last_login` = now() WHERE `users`.`email` = '$email'")){
				echo ('1');
			}
		}
	} else {
		echo ("0");
	}
} else {
	echo ("0");
}