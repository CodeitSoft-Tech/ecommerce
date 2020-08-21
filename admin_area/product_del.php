<?php

	include("includes/db_conn.php");

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($conn, $_POST['product_id']);

		$delete = "DELETE FROM products WHERE product_id = '$id'";
		$run_delete = mysqli_query($db, $delete)or die(mysqli_error($db));

		if($run_delete)
		{
			echo "<script>alert('Product deleted Successfully')</script>";
			echo "<script>document.location='view_product.php'</script>";
		}
	}	


?>