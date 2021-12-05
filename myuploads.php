<?php
require('db.php');
require('controls/damo_func.php');
require('default.php');
require('controls/numfunctions.php');
$sql = "SELECT materials.format, materials.title, materials.likes, materials.dislikes, materials.std , materials.link, materials.size, materials.subject, materials.date, materials.medium from users,materials where materials.uid = users.id  ORDER BY `materials`.`Date` DESC  ";
$sql;
$result = $con->query($sql); ?>
<title><?php echo $_SESSION['name']; ?> - Admin Page</title>
<div class="col-12">
	<div class="row">
		<div class="col-9 text-left">
			<h4 style="justify-items: center !important;display:inline-block;"><?php echo ($_SESSION['name']); ?></h4>&nbsp;&nbsp;<span class="text-mute">your recent uploads for 10th standard below!</span>
		</div>
		<div class="col-3 text-right">
			<h3 class="nav-icon" style="font-size:medium;"><a><b data-feather="filter"></b><b class="d-sm-hide">&nbsp;FILTER</b></a></h3>
		</div>
	</div>
	<?php
	if (mysqli_num_rows($result) == 0) {
		echo "<h6 class='text-center'>Sorry No Uploads Found!</h6>";
	} else {
	?>
		<table id="kt_datatable_example_1" class="table ps-md-4 bg-white table-row-bordered gy-5">
			<thead>
				<tr class="fw-bold fs-6 text-muted">
					<th>Title</th>
					<th>Std</th>
					<th>Sub</th>
					<th>Medium</th>
					<th><span class="fa text-success fa-thumbs-up"></span></th>
					<th><span class="fa text-danger fa-thumbs-down"></span></th>
					<th>Date</th>
					<th>Format</th>
					<th class="bi bi-home fs-6"></th>
				</tr>
			</thead>
			<tbody>

			<?php
			while ($row = $result->fetch_assoc()) {
				echo ('
				<tr>
				<td>' . limitxt($row['title'], 40, '') . '</td>
				<td>' . $row['std'] . '</td>
				<td>' . $row['subject'] . '</td>
				<td>' . $row['medium'] . '</td>
				<td class="text-success">' . number_shorten($row['likes']) . '</td>
				<td class="text-danger">' . number_shorten($row['dislikes']) . '</td>
				<td>' . date("d-M-Y", strtotime($row['date'])) . '</td>
				<td>' . $row['format'] . '</td>
				<td class="p-0 py-3 d-flex align-items-center"> <button class="btn fs-8 p-2 btn-primary btn-sm fa fa-edit"></button> </td>
			</tr>
			');
			}
		} ?>
			</tbody>
		</table>
		<style>
			td {
				font-size: smaller !important;
			}
		</style>
</div>
<?php
require('footer.php');
?>
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script>
	$("#kt_datatable_example_1").DataTable();
</script>
<script src="assets/js/damo_myuploads.js"></script>