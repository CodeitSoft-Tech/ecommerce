<?php

	include("includes/db_conn.php");

	$slide_id 	       = mysqli_real_escape_string($db, $_POST['slide_id']);
	$slide_status      = mysqli_real_escape_string($db, $_POST['slide_status']);

	$slide_image = $_FILES['slide_image']['name'];
	$temp_name  = $_FILES['slide_image']['tmp_name'];

	 move_uploaded_file($temp_name,"slide_images/$slide_image");

	$update = "UPDATE slider SET slide_name = '$slide_name', slide_image = '$slide_image', slide_status = '$slide_status' WHERE slide_id = '$slide_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_slide.php'</script>";
	}


?>