<?php

	include("includes/db_conn.php");

	$pending_id 	    = mysqli_real_escape_string($db, $_POST['pending_id']);
	$approval_status     = mysqli_real_escape_string($db, $_POST['approval_status']);



	$update = "UPDATE pending_approvals SET approval_status = '$approval_status' WHERE pending_id = '$pending_id'";
	$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
	

	if($run_update)
	{

		$select_p = "SELECT * FROM pending_approvals WHERE pending_id = '$pending_id'";
		$run_p = mysqli_query($db, $select_p);

		while($row_p = mysqli_fetch_array($run_p))
		{
			$p_cat_id = $row_p['p_cat_id'];
			$cat_id  = $row_p['cat_id'];
			$product_title = $row_p['product_title'];
			$product_img1 = $row_p['product_img1'];
			$product_img2 = $row_p['product_img2'];
			$product_img3 = $row_p['product_img3'];
			$product_price = $row_p['product_price'];
			$discount_price = $row_p['discount_price'];
			$promo_price = $row_p['promo_price'];
			$product_qty = $row_p['product_qty'];
			$product_keywords = $row_p['product_keywords'];
			$product_status = $row_p['product_status'];
			$product_specs = $row_p['product_specs'];
			$product_desc = $row_p['product_desc'];
			

			$insert_p = "INSERT INTO products(p_cat_id, cat_id,date, product_title, product_img1, product_img2, product_img3, product_price, discount_price, promo_price,product_qty, product_keywords, product_status, product_specs, product_desc)VALUES('$p_cat_id', '$cat_id', NOW(),'$product_title','$product_img1', '$product_img2', '$product_img3', '$product_price','$discount_price','$promo_price','$product_qty', '$product_keywords','$product_status','$product_specs','$product_desc')";
			$run_pp = mysqli_query($db, $insert_p);


			if($run_pp)
			{
				
					echo "<script>alert('Product Approved Successfully')</script>";
					echo "<script>document.location='approve_products.php'</script>";

			}

		}

	}

?>