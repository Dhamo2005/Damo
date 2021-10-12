<?php
$urls = ["/Damo/test.php" => "35", "/Damo/test.php" => "37", "/Damo/tjest.php" => "43"];
$serurl = "/Damo/test.php";

function act($url,$serurl, $act_key)
{
	// echo $url;
	// echo '<br>';
	// echo $act_key . '<br>'; 
	// echo $act_key;
	if($url == $act_key){
		echo $act_key;
	}
}
foreach ($urls as $url => $value) {
	act($url,$serurl,$value);
}
