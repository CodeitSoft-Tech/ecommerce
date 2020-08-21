<?php

	include("includes/db_conn.php");

	$term_id 	    = mysqli_real_escape_string($db, $_POST['term_id']);
	$term_title      = mysqli_real_escape_string($db, $_POST['term_title']);
	$term_link       = mysqli_real_escape_string($db, $_POST['term_link']);
	$term_desc       = mysqli_real_escape_string($db, $_POST['term_desc']);


	$update = "UPDATE terms SET terms_title = '$term_title', terms_link = '$term_link', terms_desc = '$term_desc' WHERE terms_id = '$term_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_terms.php'</script>";
	}


?>