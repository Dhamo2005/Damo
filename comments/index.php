<?php $p = include('../controls/getpageurl.php');
include_once('../controls/numfunctions.php');
include_once("../db.php");
$sql = "SELECT Comment.uid,Comment.Name,Comment.Comment,TIME_TO_SEC(TIMEDIFF(Comment.Time,now())),`page`, users.class, users.avatar,`likes`,`dislikes` FROM `comment` INNER JOIN users ON users.id=Comment.uid ORDER BY Comment.id DESC";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
   echo $p;
}
?><script>
    $(document).ready(function() {
        $(".dislike-btn").click(function() {
            var likeid = $(this).data("id");
            $.ajax({
                url: "comments/action.php",
                type: "post",
                data: {
                    likeid: likeid,
                    action: "0",
                },
                success: function(dlike) {
                    alert(dlike);
                },
            });
        });
        $(".like-btn").click(function() {
            var likeid = $(this).data("id");
            $.ajax({
                url: "comments/action.php",
                type: "post",
                data: {
                    likeid: likeid,
                    action: "1",
                },
                success: function(data) {
                    alert(data);
                },
            });
        });
    });
</script>