<?php
	$connection = mysqli_connect("remotemysql.com","CsqCfICUgX","yXVXcyg1Fm");
	$db = mysqli_select_db($connection,"CsqCfICUgX");
	$query = "delete from courses where co_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Participant with the Course Deleted ...");
window.location.href = "ashow_parCoach.php";
</script>