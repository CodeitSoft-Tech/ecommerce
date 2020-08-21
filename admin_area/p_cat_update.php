<?php

	include("includes/db_conn.php");

	$p_cat_id 	       = mysqli_real_escape_string($db, $_POST['p_cat_id']);
	$p_cat_status      = mysqli_real_escape_string($db, $_POST['p_cat_status']);
	$p_cat_desc        = mysqli_real_escape_string($db, $_POST['p_cat_desc']);


	$update = "UPDATE product_categories SET p_cat_title = '$p_cat_title', p_cat_status = '$p_cat_status', p_cat_desc = '$p_cat_desc' WHERE p_cat_id = '$p_cat_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_product_category.php'</script>";
	}


?>