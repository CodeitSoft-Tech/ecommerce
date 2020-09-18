<?php

	include("includes/db_conn.php");

	$deal_id    = mysqli_real_escape_string($db, $_POST['deal_id']);
	$deal_title = mysqli_real_escape_string($db, $_POST['deal_title']);
	$deal_desc  = mysqli_real_escape_string($db, $_POST['deal_short_desc']);
	$btn_text   = mysqli_real_escape_string($db, $_POST['deal_btn_title']);
	$deal_url   = mysqli_real_escape_string($db, $_POST['deal_url']);

	if(is_uploaded_file($_FILES['file']['tmp_name']))
		{
			// image processing
		$deal_img = $_FILES['deal_img']['name'];
		$tmp_name = $_FILES['deal_img']['tmp_name'];
		

		move_uploaded_file($tmp_name,"deal_images/$deal_img");
		
		$update = "UPDATE product_deals SET deal_title = '$deal_title', deal_short_desc = '$deal_desc', deal_img = '$deal_img', deal_btn_title = '$btn_text', deal_url = '$deal_url' WHERE deal_id = '$deal_id'";

		$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
		

		if($run_update)
		{
			echo "<script>alert('Update done succesfully!')</script>";
			echo "<script>document.location='view_deal.php'</script>";
		}

		}
		else
		{
			// When image is not updated
			$update = "UPDATE product_deals SET deal_title = '$deal_title', deal_short_desc = '$deal_desc', deal_btn_title = '$btn_text', deal_url = '$deal_url' WHERE deal_id = '$deal_id'";

		$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
		

		if($run_update)
		{
			echo "<script>alert('Update done succesfully!')</script>";
			echo "<script>document.location='view_deal.php'</script>";
		}

		}
		


?>