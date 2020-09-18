<?php

	include("includes/db_conn.php");

	$label_id 	    = mysqli_real_escape_string($db, $_POST['label_id']);
	$label_title      = mysqli_real_escape_string($db, $_POST['label_title']);
	


	$update = "UPDATE product_labels SET label_title = '$label_title' WHERE label_id = '$label_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_label.php'</script>";
	}


?>