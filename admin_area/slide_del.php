<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['slide_id']);

		$delete = "DELETE FROM slider WHERE slider_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Slider deleted Successfully')</script>";
			echo "<script>document.location='view_slide.php'</script>";
		}
	}	


?>