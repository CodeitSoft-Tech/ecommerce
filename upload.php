 

 <form id="form1" action="upload.php" method="post" enctype="multipart/form-data" style="border: 2px solid #F7941D; padding: 25px; margin-bottom: 50px; margin-top: 50px;">

 	<h3 align="left" style="margin-bottom: 50px;">Upload Product Details</h3>
 		<?php
 		  if(isset($_GET['c_id']))
               {
                 $customer_id = $_GET['c_id'];
               }
         ?>
		<div class="form-group">
		<label class="col-md-3 control-label">Product Title</label>
		<div class="col-md-9">
			<input type="text" name="product_title" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Brand</label>
		<div class="col-md-9">
			<select name="product_category" class="form-control" required>
				<option>Select Product Brand</option>
				<?php
					$get_brands = "SELECT * FROM brands";
					$run_brands = mysqli_query($db, $get_brands);
					while($row_brands = mysqli_fetch_array($run_brands))
					{
						$brand_id = $row_brands['brand_id'];
						$brand_title = $row_brands['brand_title'];

						echo "
				       <option value='$brand_id'>$brand_title</option>
						        ";
					}

				?>
			</select>
		</div>
			</div><br><br><br>
			<div class="form-group">
			<label class="col-md-3 control-label">Product Category</label>
		   <div class="col-md-9">
			<select name="product_category" class="form-control" required>
				<option>Select Product Category</option>
				<?php
					$get_p_cats = "SELECT * FROM product_categories";
					$run_p_cats = mysqli_query($db, $get_p_cats);
					while($row_p_cat = mysqli_fetch_array($run_p_cats))
					{
						$p_cat_id = $row_p_cat['p_cat_id'];
						$p_cat_title = $row_p_cat['p_cat_title'];

						echo "
				       <option value='$p_cat_id'>$p_cat_title</option>
						        ";
					}

				?>
			</select>
		</div>
			</div><br><br><br>
		<div class="form-group">
		<label class="col-md-3 control-label">Category</label>
		<div class="col-md-9">
			<select name="category" id="" class="form-control">
				<option>Select a Category</option>
				<?php
					$get_cats = "SELECT * FROM categories";
					$run_cats =mysqli_query($db, $get_cats);
					while($row_cat = mysqli_fetch_array($run_cats))
					{
						$cat_id = $row_cat['cat_id'];
						$cat_title = $row_cat['cat_title'];

						echo "
				       <option value='$cat_id'>$cat_title</option>
						";
					}

				?>
			</select>
		</div>
			</div><br><br><br>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Brand</label>
		<div class="col-md-9">
			<select name="brand" id="" class="form-control">
				<option>Select a Brand</option>
				<?php
					$get_brands = "SELECT * FROM brands";
					$run_brands =mysqli_query($db, $get_brands);
					while($row_brands = mysqli_fetch_array($run_brands))
					{
						$brand_id = $row_brands['brand_id'];
						$brand_title = $row_brands['brand_title'];

						echo "
				       <option value='$brand_id'>$brand_title</option>
						";
					}

				?>
			</select>
		</div>
			</div><br><br><br>
		 <div class="form-group">
		<label class="col-md-3 control-label">Product Image (first) </label>
		<div class="col-md-9">
			<input type="file" name="product_img1" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Image (second) </label>
		<div class="col-md-9">
			<input type="file" name="product_img2" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Image (third) </label>
		<div class="col-md-9">
			<input type="file" name="product_img3" class="form-control" required>	
		</div>
			</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Regular Price</label>
		<div class="col-md-9">
		<input type="text" name="product_price" class="form-control" required>	
		</div>
		</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Discount Price</label>
		<div class="col-md-9">
		<input type="text" name="discount_price" class="form-control" required>	
		</div>
		</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Promo Price</label>
		<div class="col-md-9">
		<input type="text" name="promo_price" class="form-control" required>	
		</div>
		</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Product Qty</label>
		<div class="col-md-9">
		<input type="number" name="product_qty" class="form-control" required>	
		</div>
		</div>
			
		<div class="form-group">
		<label class="col-md-3 control-label">Product Keywords</label>
		<div class="col-md-9">
		<input type="text" name="product_keyword" class="form-control" required>	
		</div>
			</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Product Status</label>
		<div class="col-md-9">
		<select name="product_status" class="form-control" required>
			<option disabled selected>Select Product Status</option>
			<option value="Regular">Regular</option>
			<option value="Discount">Discount</option>
			<option value="Promo">Promo</option>
		</select>	
		</div>
		</div><br><br>

		<div class="form-group">
		<label class="col-md-3 control-label">Product Label</label>
		<div class="col-md-9">
		<select name="product_label" class="form-control" required>
			<option disabled selected>Select Product Label</option>
			<?php
					$select_label = "SELECT * FROM product_labels";
					$run_label = mysqli_query($db, $select_label);

					while($row_label = mysqli_fetch_array($run_label))
					{
						$label_id = $row_label['label_id'];
						$label_title = $row_label['label_title'];

						echo "
							<option value='$label_id'>$label_title</option>
						      ";
					}
			?>
		</select>	
		</div>
		</div><br><br>

			<div class="form-group">
            <label class='control-label col-sm-3'>Product Specification</label>
              	<div class='col-sm-9'>
                <textarea name="product_specs" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
		          </textarea>
		          </div>
		          </div>
		  <div class="form-group">
            <label class='control-label col-sm-3'>Product Description</label>
              	<div class='col-sm-9'>
                <textarea name="product_desc" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
		          </textarea>
		          </div>
		          </div>

			<div class="form-group">
				<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
				<button type="submit" class="btn" name="submit">
					<i class="fa fa-upload"></i> Upload Product
				</button> 
			</div>
		</div>
			</form>
			<?php

    include("includes/db_conn.php");
		
	
	if(isset($_POST['submit']))
	{
		$cus_id = $_SESSION['cus_id'];
		$product_title = mysqli_real_escape_string($db, $_POST['product_title']);
		$product_category = mysqli_real_escape_string($db, $_POST['product_category']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$brand = mysqli_real_escape_string($db, $_POST['brand']);
		$product_price = mysqli_real_escape_string($db, $_POST['product_price']);
		$discount_price = mysqli_real_escape_string($db, $_POST['discount_price']);
		$promo_price = mysqli_real_escape_string($db, $_POST['promo_price']);
		$product_qty = mysqli_real_escape_string($db, $_POST['product_qty']);
		$product_keyword = mysqli_real_escape_string($db, $_POST['product_keyword']);
		$product_status = mysqli_real_escape_string($db, $_POST['product_status']);
		$product_label = mysqli_real_escape_string($db, $_POST['product_label']);
		$product_specs = mysqli_real_escape_string($db, $_POST['product_specs']);
		$product_desc = mysqli_real_escape_string($db, $_POST['product_desc']);

		// image processing
		$product_img1 =$_FILES['product_img1']['name'];
		$product_img2 =$_FILES['product_img2']['name'];
		$product_img3 =$_FILES['product_img3']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 =$_FILES['product_img2']['tmp_name'];
		$temp_name3 =$_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1,"admin_area/product_images/$product_img1");
		move_uploaded_file($temp_name2,"admin_area/product_images/$product_img2");
		move_uploaded_file($temp_name3,"admin_area/product_images/$product_img3");

		$approval_status = 'Pending';

		$insert_product = "INSERT INTO pending_approvals(p_cat_id, cat_id, brand_id, label_id ,seller_id, date, product_title, product_img1, product_img2, product_img3, product_price, discount_price, promo_price, product_qty, product_keywords, product_status, '', product_specs, product_desc, approval_status)VALUES('$product_category', '$category','$brand', '$product_label', '$cus_id', NOW(),'$product_title','$product_img1', '$product_img2', '$product_img3', '$product_price','$discount_price','$promo_price','$product_qty', '$product_keyword','$product_status','$product_specs','$product_desc','$approval_status')";

		$run_product = mysqli_query($db, $insert_product);

		if($run_product)
		{
			

			echo "<script>alert('Product has been inserted successfully')</script>";
			echo "<script>document.location='seller_dashboard.php?my_uploads'</script>"; 
		}
	}

?>