<?php

session_start(); 
include_once("../database.php");
// Declaring Variables
$email = $_POST['email'];
$password = md5($_POST['password']); //encrypt the password to obtain with the database

$query = "SELECT * FROM users WHERE email='$email' and password='$password'";
$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) > 0) {
echo (mysqli_num_rows($results));
	$_SESSION['email'] = $email;

	// Fetching User Details
	$sql 	= "SELECT * FROM users WHERE EMAIL='$email'";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$e = $row["name"];
			$id = $row["id"];
			$_SESSION["name"] = $e;
			$_SESSION['id'] = $id;
			$_SESSION['uid'] = $row["id"];
		}
	}
	// End Fetching Name
} else {
	echo("0");
}