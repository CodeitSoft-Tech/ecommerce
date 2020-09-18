<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['label_id']);

		$delete = "DELETE FROM product_labels WHERE label_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Label deleted Successfully')</script>";
			echo "<script>document.location='view_label.php'</script>";
		}
	}	


?>