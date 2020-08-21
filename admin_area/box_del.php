<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['box_id']);

		$delete = "DELETE FROM boxes WHERE box_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Box deleted Successfully')</script>";
			echo "<script>document.location='view_boxes.php'</script>";
		}
	}	


?>