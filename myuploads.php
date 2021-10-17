<?php
require('db.php');
require('default.php');
require('controls/numfunctions.php');
$sql = "SELECT users.Name, materials.format, materials.Title, materials.id, materials.likes, materials.dislikes, materials.downloads, materials.Std , materials.link, materials.Subject, TIME_TO_SEC(TIMEDIFF(materials.Date,now())), users.avatar,users.name as Author, materials.Date FROM users,materials WHERE materials.uid = users.id AND materials.uid = 278 ORDER BY `materials`.`Date` DESC LIMIT 5 ";
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
		while ($row = $result->fetch_assoc()) {
			echo ('
                    <div class="p-2" style="background-color: white;"><div class="d-flex align-items-start" style="overflow-wrap: anywhere;padding-bottom: inherit;">
                    <div class="flex-grow-1">
                    <small class="float-right text-navy">' . time_ago(time() + $row["TIME_TO_SEC(TIMEDIFF(materials.Date,now()))"]) . '</small>
                    <span><b>' . $row['Subject'] . '</b><br><small class="text-muted">' . date("M d, Y ", strtotime($row["Date"])) . '</small></span></span>
                    <div class="text-sm text-muted mt-1" style="padding-top:5px;padding-bottom:10px;">' . $row['Title'] . '</div>
                    <a class="btn btn-sm btn-success mt-1"><i class="feather-sm fa fa-thumbs-up"></i>&nbsp;' . number_shorten($row['likes']) . '</a>
                    <a class="btn btn-sm btn-primary mt-1" href="downloader.php?link=' . $row['link'] . '"><i class="feather-sm fa fa-download"></i>&nbsp;' . number_shorten($row['downloads']) . '</a>
					<div style="float :right;">
						<a class="nav-icon dropdown-toggle" id="alertsDropdown" data-toggle="dropdown">
							<div class="position-relative">
								<i class="align-middle" data-feather="more-vertical"></i>
							</div>
						</a>
						<div class="text-sm dropdown-menu dropdown-menu-sm dropdown-menu-right py-0">
							<div class="list-group">
								<a class="list-group-item p-1">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-danger" data-feather="activity"></i>
										</div>
										<div class="col-8">
											<div class="text-dark p-2">Analytics</div>
										</div>
									</div>
								</a>
								<a class="list-group-item p-1">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-info" data-feather="edit-3"></i>
										</div>
										<div class="col-8">
											<div class="text-dark p-2">Edit</div>
										</div>
									</div>
								</a>
								<a class="list-group-item p-1">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-danger" data-feather="share-2"></i>
										</div>
										<div class="col-8">
											<div class="text-dark p-2">Share</div>
										</div>
									</div>
								</a>
								<a class="list-group-item p-1">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-danger" data-feather="trash-2"></i>
										</div>
										<div class="col-8">
											<div class="text-dark p-2">Delete</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					
					
					</div>
                    </div>
                        </div><hr></div>
                    ');
			$lastid = $row['id'];
		}
	}
	echo ('<button class="btn btn-success col-12 bg-success text-center text-white" id="btnLoad" data-id="' . $lastid . '">Load More...</button>'); ?>
</div>
<?php
require('footer.php');
?>
<script>
	$(document).ready(function() {
		$(document).on('click', '#btnLoad', function() {
			var lastid = $(this).data('id');
			$('#btnLoad').html('Loading...');
			$.ajax({
				url: "explore1.php",
				method: 'POST',
				data: {
					lastid: lastid,
				},
				dataType: "text",
				success: function(data) {
					if (data != '') {
						$('#btnLoad').remove();
						$('main').append(data);
					} else {
						$('#btnLoad').remove();
						$('main').append('No More Data To Show');
					}
				}
			})
		});
	});
</script>