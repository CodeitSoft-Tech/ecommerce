<?php

	include("includes/db_conn.php");

	$cat_id 	    = mysqli_real_escape_string($db, $_POST['cat_id']);
	$cat_title      = mysqli_real_escape_string($db, $_POST['cat_title']);

	$update = "UPDATE categories SET cat_title = '$cat_title' WHERE cat_id = '$cat_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_category.php'</script>";
	}


?>