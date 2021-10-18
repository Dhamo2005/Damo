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
<script src="assets/js/damo_followsharebtn.js"></script>