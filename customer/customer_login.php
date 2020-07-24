
	<div class="container-fluid" style="border: 1px solid #f7941d;">
		<div class="row">
			<div class="col-md-6" style="background-color: #f7941d;">	
				<!--<img class="img-responsive" src="" alt="Register Image">-->
				<p style="color: #fff;font-size: 40px; font-weight: 700; padding: 50px; position: relative; top: 30%;">Welcome Back!</p>
			</div>

			<div class="col-md-6">
				
				<form method="post" action="checkout.php" style="margin-top: 50px; margin-bottom: 100px; padding: 50px;">
					<h3 style="text-align: center; color: #f7941d; text-transform: uppercase; 
					 font-weight: 700; padding-bottom: 30px;">Login</h3>
					<div class="form-group">
					 <label style="font-weight: 700;">Username</label>
					  <input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
					  <label style="font-weight: 700;">Password</label>
					  <input type="password" name="password" class="form-control">
					</div>

					<div class="form-group button">
					 <button type="submit" class="btn form-control" name="login_btn" style="padding-bottom: 30px;">Login</button>
					</div>
					
					<p>
						Not Registered? <a href="register.php" style="color: #f7941d;"> Register</a>
					</p>
					
				</form>
			</div>
		</div>
	</div>

	<?php

		if(isset($_POST['login_btn']))
		{
			$customer_name = $_POST['username'];
			$customer_pass  = $_POST['password'];

			$select_customer = "SELECT * FROM customers WHERE customer_name = '$customer_name' AND customer_password = '$customer_pass'";
			$run_customer = mysqli_query($db, $select_customer);

			$get_ip = getRealIpUser();

			$check_customer = mysqli_num_rows($run_customer);

			$select_cart = "SELECT * FROM cart WHERE ip_add = '$get_ip'";

			$run_cart = mysqli_query($db, $select_cart);

			$check_cart = mysqli_num_rows($run_cart);

			if($check_customer == 0)
			{
				echo "<script>alert('Incorrect username/password')</script>";
				
				echo "<script>document.location='checkout.php'</script>";
			}


			else
				if($check_customer == 1 AND $check_cart == 0)
			{
				$_SESSION['customer_name'] = $customer_name;

				echo "<script>alert('You are logged in')</script>";
				echo "<script>document.location='customer/my_account.php?my_orders'</script>";
			}

			else
			{
				$_SESSION['customer_name'] = $customer_name;

				echo "<script>alert('You are logged in')</script>";
				echo "<script>document.location='checkout.php'</script>";
			}
		}
		
	?>

	