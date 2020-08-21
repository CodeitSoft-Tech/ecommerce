<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['admin_id']);

		$delete = "DELETE FROM admin WHERE admin_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Administrator deleted Successfully')</script>";
			echo "<script>document.location='view_users.php'</script>";
		}
	}	


?>