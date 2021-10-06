<?php
$urls = ["/Damo/test.php" => "35", "/Damo/test.php" => "37", "/Damo/tjest.php" => "43"];
$serurl = $_SERVER['SCRIPT_NAME'];


// foreach ($urls as $url => $active) {
// 	
// 	echo $serurl;
// 	if ($serurl == $url) {
// 		echo $active;
// 	}
// }
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($urls as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";

  if($x == $serurl){
	  echo $x_value;
  }
}