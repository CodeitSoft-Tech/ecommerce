        
        <?php 

        $active = 'Checkout';
        include("includes/shop_header.php"); ?>
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
					 <div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="checkout.php">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
					
		<?php

				if(!isset($_SESSION['customer_name']))
					{
						include("customer/customer_login.php");
					}

				else
					{
						include("payment_option.php");
					}
															  
		?>	


		<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">

				<?php

					$get_boxes = "SELECT * FROM boxes";
					$run_boxes = mysqli_query($db, $get_boxes);

					while($row_boxes = mysqli_fetch_array($run_boxes))
					{
						$box_id = $row_boxes['box_id'];
						$box_title = $row_boxes['box_title'];
						$box_icon  = $row_boxes['box_icon'];
						$box_desc = $row_boxes['box_desc'];


					

				?>

				
				<div class="col-lg-3 col-md-6 col-12">
				
					<div class="single-service">
					   <i class="<?php echo $box_icon; ?>"></i>
						<h4><?php echo $box_title; ?></h4>
						<p><?php echo $box_desc; ?></p>
					</div>				
				</div>
				
				<?php } ?>
				<!--
				<div class="col-lg-3 col-md-6 col-12">
				
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
				
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Secure Payment</h4>
						<p>100% secure payment</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Price</h4>
						<p>Guaranteed price</p>
					</div>
				</div>-->

			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
		
		<!-- Start Shop Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<!-- Start Newsletter Inner -->
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
								</form>
							</div>
							<!-- End Newsletter Inner -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Newsletter -->
			
	<?php include("includes/shop_footer.php"); ?>