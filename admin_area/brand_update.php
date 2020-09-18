<?php

	include("includes/db_conn.php");

	$brand_id 	    = mysqli_real_escape_string($db, $_POST['brand_id']);
	$brand_title    = mysqli_real_escape_string($db, $_POST['brand_title']);
	$brand_top		= mysqli_real_escape_string($db, $_POST['brand_top']);

	$brand_image = $_FILES['brand_image']['name'];
	$tmp_name    = $_FILES['brand_image']['tmp_name'];

	move_uploaded_file($tmp_name, "brand_images/$brand_image");

	$update = "UPDATE brands SET brand_title = '$brand_title', brand_top = '$brand_top', brand_image = '$brand_image' WHERE brand_id = '$brand_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_brand.php'</script>";
	}


?>