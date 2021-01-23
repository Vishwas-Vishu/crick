<?php
	$connection = mysqli_connect("remotemysql.com","CsqCfICUgX","yXVXcyg1Fm");
	$db = mysqli_select_db($connection,"CsqCfICUgX");
	$query = "delete from coaches where c_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Coach deleted ...");
window.location.href = "ashow_coach.php";
</script>