<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['term_id']);

		$delete = "DELETE FROM terms WHERE terms_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('terms deleted Successfully')</script>";
			echo "<script>document.location='view_terms.php'</script>";
		}
	}	


?>