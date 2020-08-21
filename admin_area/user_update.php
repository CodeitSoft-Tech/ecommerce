<?php

	include("includes/db_conn.php");

	$admin_id 	       = mysqli_real_escape_string($db, $_POST['admin_id']);
	$firstname 	       = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname	       = mysqli_real_escape_string($db, $_POST['lastname']);
    $username 	       = mysqli_real_escape_string($db, $_POST['username']);
    $email 	           = mysqli_real_escape_string($db, $_POST['email']);
    $password 	       = mysqli_real_escape_string($db, $_POST['password']);
	$admin_status      = mysqli_real_escape_string($db, $_POST['admin_status']);


	$update = "UPDATE admin SET firstname = '$firstname', lastname = '$lastname',admin_username = '$username',admin_email = '$email', admin_status = '$admin_status' WHERE admin_id = '$admin_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{
		echo "<script>alert('Update done succesfully!')</script>";
		echo "<script>document.location='view_users.php'</script>";
	}


?>