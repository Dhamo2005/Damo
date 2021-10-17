<?php
require('../db.php');
require('../controls/numfunctions.php');
require('../controls/damo_func.php');
$sql = "SELECT id,title,DATE_FORMAT(date,'%D-%M-%Y') AS Date, views FROM `news` ORDER BY date DESC";
$res = $con->query($sql);
$date = null;
while ($row = $res->fetch_assoc()) {
?>
	<article class="d-flex flex-column">
		<div style="border-left: 8px solid var(--bs-active-primary);" class="card my-2">
			<a class="card-body text-dark text-hover-primary p-4" href="news_view.php?news=<?php echo base64_encode(base64_encode($row['id'])); ?>">
				<h4 class="news_title card-title"><?php echo limitxt($row['title'], 200, 'Read More'); ?></h4>
				<div class="d-flex justify-content-between opacity-75">
					<div class="text-start">
						<time class="entry-date published fnt-cnt timestampcss comsizeforgrayclr"><?php echo time_ago($row['Date']); ?></time>
					</div>
					<div class="text-end">
						<time class="entry-date published fnt-cnt timestampcss comsizeforgrayclr"><?php echo $row['Date']; ?></time>
						<span class="ms-2"> <i class="fa fa-eye"></i> <?php echo $row['views']; ?></span>
					</div>
				</div>
			</a>
		</div>
	</article>
<?php
} ?>