
<?php 

 session_start();

 include("includes/db_conn.php"); 
 include("functions/functions.php");
 
 ?>

 <?php

	// Breadcrumb in order of product and product and their categories

	  if(isset($_GET['pro_id']))
	{
		$product_id = $_GET['pro_id'];
		$get_product = "SELECT * FROM products WHERE product_id = '$product_id'";

		$run_product = mysqli_query($db, $get_product);

		$row_product = mysqli_fetch_array($run_product);

		$p_cat_id = $row_product['p_cat_id'];
		$pro_title = $row_product['product_title'];
		$pro_price = $row_product['product_price'];
		$pro_desc = $row_product['product_desc'];
		$pro_img1 = $row_product['product_img1'];
		$pro_img2 = $row_product['product_img2'];
		$pro_img3 = $row_product['product_img3']; 
		$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id ='$p_cat_id'";
		$run_p_cat = mysqli_query($db, $get_p_cat);
		$row_p_cat = mysqli_fetch_array($run_p_cat);
		$p_cat_title = $row_p_cat['p_cat_title'];


	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title> Shop | MyShop </title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap.min.css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Jquery Ui -->
    <link rel="stylesheet" href="css/jquery-ui.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

	
	
</head>
<style type="text/css">
	#nav-pro-desc-tab
	{
		background: #f7941d;
		color: #fff;
	}


</style>
<body class="js">
	
	<!-- Preloaders
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	 End Preloader -->
		
		<!-- Header -->
		<header class="header shop">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-12 col-12">
							<!-- Top Left -->
							<div class="top-left">
								<ul class="list-main">
									<li><i class="ti-headphone-alt"></i> +233 240 1234 34</li>
								    <li><i class="ti-email"></i> support@email.com</li>
								</ul>
							</div>
							<!--/ End Top Left -->
						</div>
						<div class="col-lg-8 col-md-12 col-12">
							<!-- Top Right -->
							<div class="right-content">
								<ul class="list-main">
									<li><i class="ti-user"></i> <a href="customer/my_account.php">My account</a></li>
								    <li><i class="ti-power-off"></i><a href="checkout.php">
								<?php

								if(!isset($_SESSION['customer_name']))
								{
									echo "<a href='checkout.php'> Login </a>";
								}

								else
								{
									echo "<a href='logout.php'> Logout </a>";
								}
															  
								?>									    
								      </a></li>
								      <li><i class="fa fa-sign-in"></i><a href="register.php">Register</a></li>
								</ul>
							</div>
							<!-- End Top Right -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<div class="middle-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<!-- Search Form -->
								<div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit"><i class="ti-search"></i></button>
									</form>
								</div>
								<!--/ End Search Form -->
							</div>
							<!--/ End Search Form -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-lg-8 col-md-7 col-12">
							<div class="search-bar-top">
								<div class="search-bar">
									<select>
										<option selected="selected">All Category</option>
										 <?php

										   getProCats();

										 ?>
									</select>
									<form>
										<input name="search" placeholder="Search Products Here....." type="search">
										<button class="btnn"><i class="ti-search"></i></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form 
								<div class="sinlge-bar">
									<a href="customer/my_account.php?my_orders" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>-->
								<div class="sinlge-bar">
									<a href="#" class="single-icon">
										<!--<i class="fa fa-user-circle-o" aria-hidden="true"></i>-->
							<?php

								if(!isset($_SESSION['customer_name']))
								{
									echo "<i class='fa fa-user-circle-o' aria-hidden='true'></i> Guest ";
								}

								else
								{
									echo "<i class='fa fa-user-circle-o' aria-hidden='true'></i> ".$_SESSION['customer_name']."";
								}
															  
								?>
									</a>
								</div>
																				

								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php items(); ?></span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span><?php items(); ?> Items</span>
											<a href="cart.php">View Cart</a>
										</div>
										<ul class="shopping-list">
											
								<?php

									$ip_add = getRealIpUser();

									$sel_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
									
									$run_cart = mysqli_query($db, $sel_cart);
									
									$total = 0;

									while($row_cart = mysqli_fetch_array($run_cart))
									{

									$pro_id   = $row_cart['p_id'];
									$pro_qty  = $row_cart['qty'];

									$get_products = "SELECT * FROM products WHERE product_id = '$pro_id'";

									$run_products = mysqli_query($db, $get_products);

									while($row_products = mysqli_fetch_array($run_products))
									{

										$product_title = $row_products['product_title'];

										$product_img1 = $row_products['product_img1'];

										$only_price = $row_products['product_price'];

										$sub_total = $only_price * $pro_qty;

										

										echo "<li>
												
												<a class='cart-img' href='cart.php'><img src='admin_area/product_images/$product_img1' alt='#'></a>
												<h4><a href='#'>$product_title</a></h4>
												<p class='quantity'>$pro_qty(x) - <span class='amount'>₵$sub_total.00</span></p>
											</li>";
									      }

								}

										?>

										


								      
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount"><?php total_price(); ?></span>
											</div>
											<a href="checkout.php" class="btn animate">Checkout</a>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="cat-nav-head">
						<div class="row">
							<div class="col-12">
								<div class="menu-area">
									<!-- Main Menu -->
									<nav class="navbar navbar-expand-lg">
										<div class="navbar-collapse">	
											<div class="nav-inner">	
			<ul class="nav main-menu menu navbar-nav">
			<li class="<?php if($active =='Home') echo "active"; ?>"><a href="index.php">Home</a></li>
			<li class="<?php if($active =='Shop') echo "active"; ?>"><a href="shop.php">Shop</a></li>
			<li class="<?php if($active =='Cart') echo "active"; ?>"><a href="cart.php">Cart</a></li>
			<li class="<?php if($active =='Checkout') echo "active"; ?>"><a href="checkout.php">Checkout</a></li>
			<li class="<?php if($active =='Account') echo "active"; ?>">

				<?php
				
					if(!isset($_SESSION['customer_name']))
					{
						echo "<a href='checkout.php'>My Account </a>";
					}
					else
					{
						echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
					}

				?>

			</li>
			<li class="<?php if($active=='Sell') echo "active"; ?>"><a href="sell_request.php">Sell With Us</a></li>
			<li class="<?php if($active=='Contact')echo "active"; ?>"><a href="contact.php">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</nav>
									<!--/ End Main Menu -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->