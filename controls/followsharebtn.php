<div class="d-flex my-4">
	<div id="followbtn">
		<?php $rowCount = $GLOBALS['con']->query("SELECT id FROM followers WHERE followers.uid={$_SESSION['myid']} AND followers.followid={$row['uid']}");
		if (mysqli_num_rows($rowCount) > 0) {
			// follow
			echo '<a class="btn btn-sm btn-light-success me-2 d-flex" data-follow="false" id="damo_user_follow_button" data-kt-indicator="off"><span class="material-icons-outlined px-2 fs-4 indicator-label">how_to_reg</span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span><span class="d-sm-none"><span class="follow-true">Following</span></span></a>';
		} else {
			// new follow
			echo '<a class="btn btn-sm btn-light me-2 d-flex" data-follow="true" id="damo_user_follow_button" data-kt-indicator="off"><span class="material-icons-outlined px-2 fs-4 indicator-label">person_add</span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span><span class="d-sm-none">Follow</span></a>';
		} ?>
	</div>
	<a class="btn btn-sm btn-primary me-3 d-flex"><span class="material-icons-outlined px-2 fs-4">share</span><span class="d-sm-none">Share Profile</span></a>
</div>
<script>
	$(document).ready(function() {
		$('#damo_user_follow_button').click(function() {
			alert();
			var followcon = $(this).data('follow');
			if (followcon == true) {
				$.ajax({
					url: "controls/follow.php",
					type: "POST",
					data: {
						followid: "<?php echo base64_encode(base64_encode($row['uid'])); ?>"
					},
					beforeSend: function() {
						$('#damo_user_follow_button').attr('data-kt-indicator', 'on');
					},
					success: function(follow) {
						$('#damo_user_follow_button').attr('data-kt-indicator', 'off');
						if (follow == "1") {
							$('#followbtn').html('<a id="damo_user_follow_button" class="btn btn-sm btn-light-success me-2 d-flex" data-follow="false" data-kt-indicator="off"><span class="material-icons-outlined px-2 fs-4 indicator-label">how_to_reg</span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span><span class="d-sm-none"><span class="follow-true">Following</span></span></a>');
						}
					},
					error: function(jqXHR, exception) {
						setTimeout(() => {
							$.ajax(this);
						}, 2500);
					}
				});
			}
			else if(followcon == false){
				var option = window.confirm('Are You Want Remove this profile from your follow list?');
				if (option = true) {
					$.ajax({
						url: "controls/follow.php",
						type: "POST",
						data: {
							unfollowid: "<?php echo base64_encode(base64_encode($row['uid'])); ?>"
						},
						beforeSend: function() {
							$('#damo_user_follow_button').attr('data-kt-indicator', 'on');
						},
						success: function(follow) {
							$('#damo_user_follow_button').attr('data-kt-indicator', 'off');
							if (follow == "1") {
								$('#followbtn').html('<a class="btn btn-sm btn-light me-2 d-flex" data-follow="true" id="damo_user_follow_button" data-kt-indicator="off"><span class="material-icons-outlined px-2 fs-4 indicator-label">person_add</span><span class="indicator-progress"><span class="me-2 align-middle ms-2 spinner-border spinner-grow-sm" data-kt-indicator="o" style="width: 1.2rem;height: 1.2rem;"></span></span><span class="d-sm-none">Follow</span></a>');
							}
						},
						error: function(jqXHR, exception) {
							setTimeout(() => {
								$.ajax(this);
							}, 2500);
						}
					});
				}
			}


		});
	});
</script>