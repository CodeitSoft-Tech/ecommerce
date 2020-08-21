<?php 

$active = 'Product';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label class="col-md-3 control-label">Product Title</label>
		<div class="col-md-9">
			<input type="text" name="product_title" class="form-control" required>	
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-3 control-label">Product Brand</label>
		<div class="col-md-9">
			<select name="brand" class="form-control" required>
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
		</div>

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
			</div>
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
			</div>
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
		</div>

			<div class="form-group">
            <label class='control-label col-sm-3'>Product Specification</label>
              	<div class='col-sm-9'>
                <textarea name="product_specs" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
		          </textarea>
		          </div>
		          </div>
		  <div class="form-group">
            <label class='control-label col-sm-3'>Product Description</label>
              	<div class='col-sm-9'>
                <textarea name="product_desc" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
		          </textarea>
		          </div>
		          </div>

			<div class="form-group">
				<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
				<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Product
				</button> 
			</div>
		</div>
			</form>
			    </div>
				</div>
			</div>
		</div>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>



<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>
<?php
	
	if(isset($_POST['submit']))
	{
		$product_title = mysqli_real_escape_string($db, $_POST['product_title']);
		$product_brand = mysqli_real_escape_string($db, $_POST['brand']);
		$product_category = mysqli_real_escape_string($db, $_POST['product_category']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$product_price = mysqli_real_escape_string($db, $_POST['product_price']);
		$discount_price = mysqli_real_escape_string($db, $_POST['discount_price']);
		$promo_price = mysqli_real_escape_string($db, $_POST['promo_price']);
		$product_qty = mysqli_real_escape_string($db, $_POST['product_qty']);
		$product_keyword = mysqli_real_escape_string($db, $_POST['product_keyword']);
		$product_status = mysqli_real_escape_string($db, $_POST['product_status']);
		$product_specs = mysqli_real_escape_string($db, $_POST['product_specs']);
		$product_desc = mysqli_real_escape_string($db, $_POST['product_desc']);

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

		$insert_product = "INSERT INTO products(p_cat_id, cat_id, brand_id, date, product_title, product_img1, product_img2, product_img3, product_price, discount_price, promo_price,product_qty, product_keywords, product_status, product_specs, product_desc)VALUES('$product_category', '$category','$product_brand', NOW(),'$product_title','$product_img1', '$product_img2', '$product_img3', '$product_price','$discount_price','$promo_price','$product_qty', '$product_keyword','$product_status','$product_specs','$product_desc')";

		$run_product = mysqli_query($db, $insert_product);

		if($run_product)
		{
			echo "<script>alert('Product has been inserted successfully')</script>";
			echo "<script>document.location='insert_product.php'</script>"; 
		}
	}

?>
