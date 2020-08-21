<?php

	include("includes/db_conn.php");

	$box_id 	    = mysqli_real_escape_string($db, $_POST['box_id']);
	$box_title      = mysqli_real_escape_string($db, $_POST['box_title']);
	$box_icon       = mysqli_real_escape_string($db, $_POST['box_icon']);
	$box_desc       = mysqli_real_escape_string($db, $_POST['box_desc']);


	$update = "UPDATE boxes SET box_title = '$box_title', box_icon = '$box_icon', box_desc = '$box_desc' WHERE box_id = '$box_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_boxes.php'</script>";
	}


?>