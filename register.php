<?php 

$active = 'register';
include("includes/shop_header.php"); ?>



<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="register.php">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<div class="container-fluid" style="border: 1px solid #f7941d;">
		<div class="row">
			<div class="col-md-6" style="background-color: #f7941d;">	
				<!--<img class="img-responsive" src="" alt="Register Image">-->
				<h3 style="color: #fff;font-size: 40px; font-weight: 700; padding: 50px; position: relative; top: 30%;">Be Part Of Our Wonderful Family!</h3>
			</div>



			<div class="col-md-6">
				<form style="margin-top: 50px; margin-bottom: 100px; padding:50px;" action="register.php" method="POST">
					<h3 style="text-align: center; color: #f7941d; text-transform: uppercase; 
					 font-weight: 700; padding-bottom: 30px;">Register</h3>

					 <div class="form-group">
					<label style="font-weight: 700;">Your Full Name</label>
					  <input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
					<label style="font-weight: 700;">Your Email</label>
					  <input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
					<label style="font-weight: 700;">Your Phone Number</label>
					  <input type="text" name="contact" class="form-control">
					</div>

					<div class="form-group">
					<label style="font-weight: 700;">Password</label>
					  <input type="password" name="password_1" class="form-control">
					</div>

					<div class="form-group">
					<label style="font-weight: 700;">Confirm Password</label>
					  <input type="password" name="password_2" class="form-control">
					</div>

					<div class="form-group">	
					 <label style="font-weight: 700;">Upload image</label>
		             <input type="file" name="c_image" class="form-control">
		            </div>

					<div class="form-group button">
					 <button type="submit" class="btn form-control" name="register_btn" style="padding-bottom: 30px;">Register</button>
					</div>
					
					<p>
						Already Registered? <a href="login.php" style="color: #f7941d;"> Login</a>
					</p>
					
				</form>
			</div>
		</div>
	</div>


<?php include("includes/shop_footer.php"); ?>

<?php
    
    if(isset($_POST['register_btn']))
    {
   		$c_name    = $_POST['username'];
   		$c_email   = $_POST['email'];
   		$c_contact = $_POST['contact'];
   		$c_pass_1  = $_POST['password_1'];
   		$c_pass_2  = $_POST['password_2'];
   		$c_image   = $_FILES['c_image']['name'];
   		$c_image_tmp = $_FILES['c_image_tmp']['tmp_name'];

   		$c_ip = getRealIpUser();

   		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
   		
   		$password = md5($c_pass_1);

   		$insert_customer = "INSERT INTO customers(customer_name, customer_email, customer_contact, customer_password, customer_image, customer_ip) VALUES('$c_name', '$c_email', '$c_contact', '$password', '$c_image', '$c_ip')";

   		$run_customer = mysqli_query($db, $insert_customer);

   		$sel_cart = "SELECT * FROM cart WHERE ip_add = '$c_ip'";

   		$run_cart = mysqli_query($db, $sel_cart);

   		$check_cart = mysqli_num_rows($run_cart);

   		if($check_cart > 0)
   		{
   			// if customer register with items in cart.

   			$_SESSION['customer_name'] = $c_name;

   			echo "<script>alert('Registration done successfully!')</script>";
   			echo "<script>document.location='checkout.php'</script>";
   		}

   		else
   		{
   			// if customer register without items in cart.

   			$_SESSION['customer_name'] = $c_name;

   			echo "<script>alert('Registration done successfully!')</script>";
   			echo "<script>document.location='index.php'</script>";
   		}

    }




?>