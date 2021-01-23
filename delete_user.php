<?php
	$connection = mysqli_connect("remotemysql.com","CsqCfICUgX","yXVXcyg1Fm");
	$db = mysqli_select_db($connection,"CsqCfICUgX");
	$query = "delete from users where mail = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("User Deleted...");
window.location.href = "show_user.php";
</script>