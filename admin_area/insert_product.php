<?php
	
	include("includes/db_conn.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	
	
</head>
<body>
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard / Insert Products
					</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-money fa-fw"></i> Insert Product
						</h3>
					</div>
				<div class="panel-body">
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label class="col-md-3 control-label">Product Title</label>
		<div class="col-md-6">
			<input type="text" name="product_title" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Category</label>
		<div class="col-md-6">
			<select name="product_category" id="" class="form-control" required>
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
		<div class="col-md-6">
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
		<div class="col-md-6">
			<input type="file" name="product_img1" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Image (second) </label>
		<div class="col-md-6">
			<input type="file" name="product_img2" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Image (third) </label>
		<div class="col-md-6">
			<input type="file" name="product_img3" class="form-control" required>	
		</div>
			</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Product Price</label>
		<div class="col-md-6">
		<input type="text" name="product_price" class="form-control" required>	
		</div>
			</div>
			<div class="form-group">
		<label class="col-md-3 control-label">Product Keywords</label>
		<div class="col-md-6">
		<input type="text" name="product_keyword" class="form-control" required>	
		</div>
			</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Product Description</label>
		<div class="col-md-6">
		<textarea class="form-control" name="product_desc" cols="30" rows="6" placeholder="Product description goes here....">
		</textarea>	
		</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label"></label>
			<div class="col-md-6">
				<button type="submit" class="btn btn-success form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Product
				</button> 
			</div>
		</div>
			</form>
			    </div>
				</div>
			</div>
		</div>







	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/tinymce/js/tinymce.min.js"></script>
	<script>
		tinymce.init({ selector:'textarea'});
	</script>
</body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{
		$product_title = mysqli_real_escape_string($db, $_POST['product_title']);
		$product_category = mysqli_real_escape_string($db, $_POST['product_category']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$product_price = mysqli_real_escape_string($db, $_POST['product_price']);
		$product_keyword = mysqli_real_escape_string($db, $_POST['product_keyword']);
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

		$insert_product = "INSERT INTO products(p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_keywords, product_desc)VALUES('$product_category', '$category', NOW(),'$product_title','$product_img1', '$product_img2', '$product_img3', '$product_price','$product_keyword', '$product_desc')";

		$run_product = mysqli_query($db, $insert_product);

		if($run_product)
		{
			echo "<script>alert('Product has been inserted successfully')</script>";
			echo "<script>document.location='insert_product.php'</script>"; 
		}
	}

?>
