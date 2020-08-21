<?php

	$active = 'Sell';
 include("includes/shop_header.php"); ?>

<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="dashboard.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="sell.php">Sell With Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Breadcrumbs -->


	<div class="container-fluid" style="background-color: #f7941d; padding-top: 50px; padding-bottom: 50px;">
		<div class="col-sm-10 offset-sm-1">
			
			<form class="form-horizontal" method="post" action="sell.php" style="background-color: #fff; padding: 50px;">

					<?php
		 			
		 			$session_name = $_SESSION['customer_name'];

					$select = "SELECT * FROM customers WHERE customer_name = '$session_name'";
					$run = mysqli_query($db, $select);
						
					$row_cus = mysqli_fetch_array($run);  

					$customer_id = $row_cus['customer_id'];

					?>
					

				<h4 style="padding-bottom: 50px; color: #f7941d;">Sign Up To Sell With Us</h4>
				<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="firstname" required>
			    </div>

			    <div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" name="lastname" required>
			    </div>

			    <div class="form-group">
				<label>Business/Brand Name</label>
				<input type="text" class="form-control" name="businessname" required>
			    </div>

			    <div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" required>
			    </div>

			    <div class="form-group">
				<label>Phone Number</label>
				<input type="text" class="form-control" name="contact" required>
			    </div>

			    <div class="form-group">
				<label>Product to be sold</label>
				<input type="text" class="form-control" name="product_sold" required>
			    </div>

			    <div class="form-group">
				<label>Product Category</label>
				<p>Enter One of our Categories</p>
			    <p>1. Phones & Tablet </p><p>3. Home & Office </p>	
			    <p>2. Health & Beauty </p><p>4. Computing </p>
			    <p>5.  Electronics </p><p>6. Fashion</p>
			    <p>7. Sporting Goods</p><p>8. Baby Products</p>
			    <p>9. Gaming</p><p>10. Automobile</p>
				<input type="text" class="form-control" name="product_category" required>
			    </div> 

			    <div class="form-group">
			     <button type="submit" class="btn" name="btn_sell">Submit</button>
			    </div>
			    <p>
			    	Already registered? <a href="seller_login.php" style="color: #f7941d;">Login</a>
			    </p>
			</form>
		</div>
	</div>









<?php include("includes/shop_footer.php"); ?>

<?php
		if(isset($_POST['btn_sell']))
		{
			$cus_id = $_SESSION['cus_id'];
			$firstname = $_POST['firstname'];
			$lastname  = $_POST['lastname'];
			$business  = $_POST['businessname'];
			$email     = $_POST['email'];
			$contact   = $_POST['contact'];
			$product_sold   = $_POST['product_sold'];
			$product_category = $_POST['product_category'];



			$sql = "INSERT INTO sellers(seller_firstname, seller_lastname, business_name, seller_email, seller_contact, seller_product, seller_category)
			      VALUES('$firstname', '$lastname', '$business', '$email','$contact', '$product_sold', '$product_category')";
			$query = mysqli_query($db, $sql);

			
			if(isset($query))
			{
				$_SESSION['business_name'] = $business;
				
				echo "<script>alert('Registration successful')</script>";
				echo "<script>document.location='seller_dashboard.php?c_id=$customer_id'</script>";
			}


		}


?>