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

	<div class="container-fluid" style="border: 1px solid #f7941d;">
		<div class="row">
			<div class="col-md-6" style="background-color: #f7941d;">	
				<!--<img class="img-responsive" src="" alt="Register Image">-->
				<p style="color: #fff;font-size: 40px; font-weight: 700; padding: 50px; position: relative; top: 30%;">Welcome Back!</p>
			</div>

			<div class="col-md-6">
				
				<form method="post" action="seller_login.php" style="margin-top: 50px; margin-bottom: 100px; padding: 50px;">
					<h3 style="text-align: center; color: #f7941d; text-transform: uppercase; 
					 font-weight: 700; padding-bottom: 30px;">Login Into Your Dashboard
					 <p style="text-transform: lowercase; font-size: 14px;">Please login using your previous login details</p>
					</h3>

					<?php 
				      $cus_id = $_SESSION['cus_id'];
				
				           echo $cus_id;
			         ?>

					<div class="form-group">
					 <label style="font-weight: 700;">Username</label>
					  <input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
					  <label style="font-weight: 700;">Password</label>
					  <input type="password" name="password" class="form-control">
					</div>

					<div class="form-group button">
					 <button type="submit" class="btn form-control" name="seller_login_btn" style="padding-bottom: 30px;">Login</button>
					</div>
					
					<p>
						Not Registered? <a href="sell.php" style="color: #f7941d;"> Register</a>
					</p>
					
				</form>
			</div>
		</div>
	</div>

	<?php include("includes/shop_footer.php"); ?>

	<?php

		if(isset($_POST['seller_login_btn']))
		{
			$customer_name = $_POST['username'];
			$customer_pass  = $_POST['password'];

			$select_customer = "SELECT * FROM customers WHERE customer_name = '$customer_name' AND customer_password = '$customer_pass'";
			$run_customer = mysqli_query($db, $select_customer);

			$check_customer = mysqli_num_rows($run_customer);

			if($check_customer == 0)
			{
				echo "<script>alert('Incorrect username/password')</script>";
				
				echo "<script>document.location='seller_login.php'</script>";
			}


			else
				if($check_customer == 1)
			{
				
				$sql = $db->query("SELECT * FROM customers WHERE customer_name = '$customer_name' AND customer_password = '$customer_pass'");
				
				while($rs = $sql->fetch_array(MYSQLI_ASSOC)) {
						$_SESSION['cus_id'] = $rs['customer_id'];
						$_SESSION['customer_name'] = $rs['customer_name'];
				};

				//$_SESSION['customer_name'] = $customer_name;
				//$_SESSION['cus_id'] = $customer_id;

				echo "<script>alert('You are logged in')</script>";
				echo "<script>document.location='seller_dashboard.php?upload.php'</script>";
			}

		}
		
	?>

	