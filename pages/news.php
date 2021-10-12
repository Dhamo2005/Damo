<?php
include('../db.php');
$sql = "SELECT title,DATE_FORMAT(date,'%D-%M-%Y') AS Date FROM `news` ORDER BY date DESC";
$res = $con -> query($sql);
while($row = $res->fetch_assoc()){	
?>
<link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@200&display=swap" rel="stylesheet">
<div class="d-flex flex-column">

	<div class="card my-2">
		<div class="card-body text-hover-primary cursor-pointer p-4">
			<h4 class="card-title" style="line-height: 200%;font-family: 'Mukta Malar', sans-serif;"><?php echo $row['title']; ?></h4>
			<p class="card-text text-end"><?php echo $row['Date']; ?></p>
		</div>
	</div>
	
</div>
<?php
} ?>