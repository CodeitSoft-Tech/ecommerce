<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($conn, $_POST['deal_id']);

		$delete = "DELETE FROM product_deals WHERE deal_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Deal deleted Successfully')</script>";
			echo "<script>document.location='view_deal.php'</script>";
		}
	}	


?>