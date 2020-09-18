<!-- Start Checkout -->
		<section class="shop checkout section">
			<?php
				
			    $ip_add = getRealIpUser();

			    $select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'"; 
				$run_cart    = mysqli_query($db, $select_cart);
				$row_cart    = mysqli_fetch_array($run_cart);
				$p_id        = $row_cart['p_id'];
				$qty         = $row_cart['qty'];

			    $select_customer = "SELECT * FROM customers WHERE customer_ip = '$ip_add'";
				$run_customer    = mysqli_query($db, $select_customer);
				$row_cus         = mysqli_fetch_array($run_customer);

				$customer_id   = $row_cus['customer_id'];
				$customer_name = $row_cus['customer_name'];
				$email         = $row_cus['customer_email'];
				$contact       = $row_cus['customer_contact'];

				
				


				

				
			?>
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Enter your Billing Details</h2>
							<!-- Form -->
							<form class="form" method="post" action="checkout.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Full Name<span>*</span></label>
											<input type="text" name="name" value="<?php echo $customer_name; ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" value="<?php echo $email; ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Phone Number<span>*</span></label>
											<input type="number" name="number" value="<?php echo $contact; ?>" required="required">
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Additional Phone Number<span>*</span></label>
											<input type="number" name="number" required="required">
										</div>
									</div>
						
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 2<span>*</span></label>
											<input type="text" name="address" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Region<span>*</span></label>
											<input type="text" name="region" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>City<span>*</span></label>
											<input type="text" name="city" placeholder="" required="required">
										</div>
									</div>
									
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<?php

							$ip_add = getRealIpUser();

							$select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
							$run_cart = mysqli_query($db, $select_cart);

						?>
						<div class="order-details">
							<!-- Order Widget 
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
									<?php

									

										$select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";

										$run_cart = mysqli_query($db, $select_cart);
											
										$total = 0;

										$row_cart = mysqli_fetch_array($run_cart);
										

										$pro_id   = $row_cart['p_id'];
										$pro_size = $row_cart['size'];
										$pro_qty  = $row_cart['qty'];
										$pro_color = $row_cart['color'];

										$get_products = "SELECT * FROM products WHERE product_id = '$pro_id'";

										$run_products = mysqli_query($db, $get_products);
										$row_products = mysqli_fetch_array($run_products);
										

										$product_title = $row_products['product_title'];

										$only_price = $row_products['product_price'];

										$total = $only_price * $pro_qty;

										?>
										<li>Sub Total<span><?php echo "₵".$total.".00";  ?></span></li>
										<li>(+) Shipping<span>0</span></li>
										<li class="last">Total<span><?php echo "₵".$total.".00";   ?></span></li>
									</ul>
									
								</div>
							</div>-->
							<div class="single-widget">
							   <form method="post" action="">
								<table class="table shopping-summery">
									<thead>
									<tr>
										<td><span> Sub-Totals </span></td>
										<td><span> (+) Shipping </span></td>
										<td><span> Total </span></td>
									</tr>
									</thead>
									<tbody>
								    <?php
						
									$total = 0;

									while($row_cart = mysqli_fetch_array($run_cart))
									{

										$pro_id   = $row_cart['p_id'];
										$pro_size = $row_cart['size'];
										$pro_qty  = $row_cart['qty'];
										$pro_color = $row_cart['color'];

										$get_products = "SELECT * FROM products WHERE product_id = '$pro_id'";

										$run_products = mysqli_query($db, $get_products);

										while($row_products = mysqli_fetch_array($run_products))
										{

											$only_price = $row_products['product_price'];

											$sub_total = $only_price * $pro_qty;

											$total += $sub_total;

										?>

										<tr>
											<td><?php echo $sub_total; ?></td>
											<td>0</td>
											<td><?php echo $total; ?></td>
										</tr>

									<?php } } ?>
									</tbody>
								</table>
								</form>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									<div class="checkbox" id="payment">
										<i class="fa fa-circle"></i><a href=""> Cash on Delivery</a> <br>
										<i class="fa fa-circle"></i><a href=""> Bank Transactions</a> <br>
										<i class="fa fa-circle"></i><a href=""> Check Paypal</a>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="btn">proceed to checkout</a>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		