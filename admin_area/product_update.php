<?php

	include("includes/db_conn.php");

	    $product_id    = mysqli_real_escape_string($db, $_POST['product_id']);
	    $product_brand = mysqli_real_escape_string($db, $_POST['brand']);
		$product_category = mysqli_real_escape_string($db, $_POST['product_category']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$product_label = mysqli_real_escape_string($db, $_POST['product_label']);
	    $product_title = mysqli_real_escape_string($db, $_POST['product_title']);
		$product_price  = mysqli_real_escape_string($db, $_POST['product_price']);
		$discount_price = mysqli_real_escape_string($db, $_POST['discount_price']);
		$promo_price = mysqli_real_escape_string($db, $_POST['promo_price']);
		$product_qty = mysqli_real_escape_string($db, $_POST['product_qty']);
		$product_keyword = mysqli_real_escape_string($db, $_POST['product_keywords']);
		$product_status = mysqli_real_escape_string($db, $_POST['product_status']);
		$product_specs = mysqli_real_escape_string($db, $_POST['product_specs']);
		$product_desc = mysqli_real_escape_string($db, $_POST['product_desc']);

		
		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{
			// image processing
		$product_img1 =$_FILES['product_img1']['name'];
		$product_img2 =$_FILES['product_img2']['name'];
		$product_img3 =$_FILES['product_img3']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 =$_FILES['product_img2']['tmp_name'];
		$temp_name3 =$_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");
		move_uploaded_file($temp_name3,"product_images/$product_img3");


		$update = "UPDATE products SET p_cat_id = '$product_category', cat_id = '$category', brand_id = '$product_brand', label_id = '$product_label', product_title = '$product_title', product_img1 = '$product_img1',product_img2 = '$product_img2', product_img3 = '$product_img3', product_price = '$product_price', discount_price = '$discount_price', promo_price = '$promo_price', product_qty = '$product_qty', product_keywords = '$product_keyword', product_status = '$product_status', product_specs = '$product_specs', product_desc = '$product_desc' WHERE product_id = '$product_id'";

		$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
		

		if($run_update)
		{
			echo "<script>alert('Update done succesfully!')</script>";
			echo "<script>document.location='view_product.php'</script>";
		}

		}
		else
		{
			// When image is not updated
			$update = "UPDATE products SET p_cat_id = '$product_category', cat_id = '$category', brand_id = '$product_brand', label_id = '$product_label', product_title = '$product_title', product_price = '$product_price', discount_price = '$discount_price', promo_price = '$promo_price', product_qty = '$product_qty', product_keywords = '$product_keyword', product_status = '$product_status', product_specs = '$product_specs', product_desc = '$product_desc' WHERE product_id = '$product_id'";

		$run_update = mysqli_query($db, $update) or die(mysqli_error($db));
		

		if($run_update)
		{
			echo "<script>alert('Update done succesfully!')</script>";
			echo "<script>document.location='view_product.php'</script>";
		}

		}
		
		

?>