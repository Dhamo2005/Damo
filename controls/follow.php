<?php include_once('../db.php');
session_start();
if (isset($_POST['followid'])) {
	$uid = mysqli_real_escape_string($GLOBALS['con'], base64_decode(base64_decode($_POST['followid'])));
	if (mysqli_num_rows($GLOBALS['con']->query("SELECT * FROM `followers` WHERE uid={$_SESSION['myid']} AND followid={$uid}")) == 0) {
		$statement = DB::con()->prepare("INSERT INTO followers (uid, followid) VALUES (:myid, :uid)");
		try {
			$statement->execute(['myid' => $_SESSION['myid'], 'uid' => $uid]);
			echo 1;
		} catch (exception $err) {
			echo 'Failed';
		}
	} else {
		echo 'Alredy Following';
	}
} elseif (isset($_POST['unfollowid'])) {
	$uid = mysqli_real_escape_string($GLOBALS['con'], base64_decode(base64_decode($_POST['unfollowid'])));
	$statement = DB::con()->prepare("DELETE FROM followers WHERE followers.uid = :myid AND followers.followid = :uid");
	try {
		$statement->execute(['myid' => $_SESSION['myid'], 'uid' => $uid]);
		echo 1;
	} catch (exception $err) {
		echo 'Failed';
	}
} else {
	echo 'Failed To Follow';
}
