<?php
	$connection = mysqli_connect("remotemysql.com","CsqCfICUgX","yXVXcyg1Fm");
	$db = mysqli_select_db($connection,"CsqCfICUgX");
	$query = "delete from paticipant where par_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Participant Deleted...");
window.location.href = "ashow_Participant.php";
</script>