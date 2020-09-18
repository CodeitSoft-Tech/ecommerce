<?php 

   $active = 'Home';
   include("includes/shop_header.php");

 ?>
	
<!--  Slider -->
<section class="hero-slider">
 <div class="container" id="slider">
 <div class="row no-gutters">
  <div class="col-md-12">
  	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
     <?php
  		   $get_slides ="SELECT * FROM slider LIMIT 0,1";
  		   $run_slider =mysqli_query($db, $get_slides);

  		   while($row_slide = mysqli_fetch_array($run_slider))
  		   {
  		   		$slide_name = $row_slide['slide_name'];
  		   		$slide_image = $row_slide['slide_image'];

  		   		echo "
  		   				<div class='carousel-item active'>
  		   				<img class='d-block w-100 img-responsive' src='admin_area/slide_images/$slide_image'>
  		   				</div>
  		   		        ";
  		   }

  		   $get_slides ="SELECT * FROM slider LIMIT 1,4";
  		   $run_slide =mysqli_query($db, $get_slides);

  		   while($row_slide = mysqli_fetch_array($run_slide))
  		   {
  		   		$slide_name = $row_slide['slide_name'];
  		   		$slide_image = $row_slide['slide_image'];

  		   		echo "
  		   			<div class='carousel-item'>
  		   			<img class='d-block w-100 img-responsive' src='admin_area/slide_images/$slide_image'>
  		   			</div>
  		   		    ";
  		   }



  		    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  	</div>
  </div>
 <!-- Slider End -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner
				plan

					 Set Deals tab at Admin side
					 * Hot Deals
					 * MidWeek Deals
					 * Black Friday 
		

					 Deal Name
					 Deal Image
					 Deal Desc
					 Deal button Desc 
					 Deal URL


				 -->
				 <?php

						$select_deal = "SELECT * FROM product_deals";
						$run_deal =mysqli_query($db, $select_deal);

						while($row_deal = mysqli_fetch_array($run_deal))
						{
							$deal_id = $row_deal['deal_id'];
							$deal_title = $row_deal['deal_title'];
							$deal_desc	= $row_deal['deal_short_desc'];
							$deal_img	= $row_deal['deal_img'];
							$btn_text  = $row_deal['deal_btn_title'];
							$deal_url  =  $row_deal['deal_url'];

							echo "
									<div class='col-lg-4 col-md-6 col-12'>
									<div class='single-banner'>
										<img src='admin_area/deal_images/$deal_img' alt='$deal_title'>
										<div class='content'>
											<p>$deal_title</p>
											<h3>$deal_desc</h3>
											<a href='$deal_url'>$btn_text</a>
										</div>
									</div>
								</div>

							";
						}

					?>
			
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="admin_area/product_images/product12a.jpg" alt="#">
						<div class="content">
							<p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
   <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Latest Products</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <?php getProduct(); ?>
            </div>
        </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Medium Banner  
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div> 
				<!-- /End Single Banner 
				<!-- Single Banner  
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  
			</div>
		</div>
	</section>
	End Medium Banner -->


	<!-- Start Most Popular
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <?php //getProduct(); ?>
            </div>
        </div>
    </div>
	 End Most Popular Area -->


 <!-- Related Product -->
        <div class="product-area most-popular section">
        <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="section-title">
          <h2>Apparels</h2>
          </div>
           </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <?php
                $get_products = "SELECT * FROM products WHERE p_cat_id ='6'";
                $run_products = mysqli_query($db, $get_products);

                while($row_products = mysqli_fetch_array($run_products))
                {
                  $pro_id = $row_products['product_id'];
                  $pro_title = $row_products['product_title'];
                  $pro_img1 = $row_products['product_img1'];
                               
                   if($row_products['product_status'] == 'Regular')
                     {
                      $pro_price = $row_products['product_price'];
                    }
                  elseif ($row_products['product_status'] == 'Discount') 
                     {
                      $pro_price = $row_products['discount_price'];
                    }
                  else
                     {
                      $pro_price = $row_products['promo_price'];
                     }

                  echo "
                  <div class='single-product'>
                  <div class='product-img'>
                  <a href='details.php?pro_id=$pro_id'>
                  <img class='default-img' src='admin_area/product_images/$pro_img1' alt='Related Images'>
                </a>
                <div class='button-head'>
                  <div class='product-action'>
                    <a data-toggle='modal' data-target='#exampleModal' title='Quick View' href='#'><i class='ti-eye'></i><span>Quick Shop</span></a>
                  </div>
                  <div class='product-action-2'>
                    <a title='Add to cart' href='#'>Add to cart</a>
                  </div>
                </div>
              </div>

              <div class='product-content'>
                <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                <div class='product-price'>
                  <span>₵$pro_price.00</span>
                </div>
              </div>
            </div>";
                }
            ?>
            <!-- End Single Product -->          
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="product-area most-popular section">
        <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="section-title">
          <h2>Electronics</h2>
          </div>
           </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <?php
                $get_products = "SELECT * FROM products WHERE p_cat_id ='5'";
                $run_products = mysqli_query($db, $get_products);

                while($row_products = mysqli_fetch_array($run_products))
                {
                  $pro_id = $row_products['product_id'];
                  $pro_title = $row_products['product_title'];
                  $pro_img1 = $row_products['product_img1'];
                               
                   if($row_products['product_status'] == 'Regular')
                     {
                      $pro_price = $row_products['product_price'];
                    }
                  elseif ($row_products['product_status'] == 'Discount') 
                     {
                      $pro_price = $row_products['discount_price'];
                    }
                  else
                     {
                      $pro_price = $row_products['promo_price'];
                     }

                  echo "
                  <div class='single-product'>
                  <div class='product-img'>
                  <a href='details.php?pro_id=$pro_id'>
                  <img class='default-img' src='admin_area/product_images/$pro_img1' alt='Related Images'>
                </a>
                <div class='button-head'>
                  <div class='product-action'>
                    <a data-toggle='modal' data-target='#exampleModal' title='Quick View' href='#'><i class='ti-eye'></i><span>Quick Shop</span></a>
                  </div>
                  <div class='product-action-2'>
                    <a title='Add to cart' href='#'>Add to cart</a>
                  </div>
                </div>
              </div>

              <div class='product-content'>
                <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                <div class='product-price'>
                  <span>₵$pro_price.00</span>
                </div>
              </div>
            </div>";
                }
            ?>
            <!-- End Single Product -->          
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					
							<?php

								$select_sale = "SELECT * FROM products WHERE label_id = '4'";
								$run_sale = mysqli_query($db, $select_sale);

								while($row_sale = mysqli_fetch_array($run_sale))
								{
									$pro_id 	   = $row_sale['product_id'];
									$product_title = $row_sale['product_title'];
									$product_img1  = $row_sale['product_img1'];
									$product_price = $row_sale['product_price'];

									echo "
									<div class='single-list'>
						            <div class='row'>
									<div class='col-lg-6 col-md-6 col-12'>
										<div class='list-image overlay'>
											<img src='admin_area/product_images/$product_img1' alt='$product_title'>
											<a href='details.php?pro_id=$pro_id' class='buy'><i class='fa fa-shopping-bag'></i></a>
										</div>
									</div>

									<div class='col-lg-6 col-md-6 col-12 no-padding'>
										<div class='content'>
											<h5 class='title'><a href='details.php?pro_id=$pro_id'>$product_title</a></h5>
											<p class='price with-discount'>₵$product_price.00</p>
										</div>
									</div>
									</div>
									</div>

									     "; 
								}


							?>
							<div style="margin-top: 20px;">				 			
								<a href="On-sale.php">
				 				<button type="submit" class="btn">
				 					View More
				 				</button>
				 			</a>
				 			</div>

						
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Hot Items</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					
							<?php

								$select_sale = "SELECT * FROM products WHERE label_id = '2'";
								$run_sale = mysqli_query($db, $select_sale);

								while($row_sale = mysqli_fetch_array($run_sale))
								{
									$pro_id 	   = $row_sale['product_id'];
									$product_title = $row_sale['product_title'];
									$product_img1  = $row_sale['product_img1'];
									$product_price = $row_sale['product_price'];

									echo "
									<div class='single-list'>
						            <div class='row'>
									<div class='col-lg-6 col-md-6 col-12'>
										<div class='list-image overlay'>
											<img src='admin_area/product_images/$product_img1' alt='$product_title'>
											<a href='details.php?pro_id=$pro_id' class='buy'><i class='fa fa-shopping-bag'></i></a>
										</div>
									</div>

									<div class='col-lg-6 col-md-6 col-12 no-padding'>
										<div class='content'>
											<h5 class='title'><a href='details.php?pro_id=$pro_id'>$product_title</a></h5>
											<p class='price with-discount'>₵$product_price.00</p>
										</div>
									</div>
									</div>
									</div>

									     "; 
								}


							?>
							<div style="margin-top: 20px;">				 			
								<a href="hot_deals.php">
				 				<button type="submit" class="btn">
				 					View More
				 				</button>
				 			</a>
				 			</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$22</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$35</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="https://via.placeholder.com/115x140" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
									<p class="price with-discount">$99</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area 
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="https://via.placeholder.com/750x590" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	
	
	
	
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
	
	<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
							<div class="row no-gutters">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<!-- Product Slider -->
										<div class="product-gallery">
											<div class="quickview-slider-active">
												<div class="single-slider">
													<img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 1">
												</div>
												<div class="single-slider">
													<img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 2">
												</div>
												<div class="single-slider">
													<img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3">
												</div>
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2><?php echo $pro_title; ?></h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												<div class="quickview-ratting">
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<a href="#"> (1 customer review)</a>
											</div>
											<div class="quickview-stock">
												<span><i class="fa fa-check-circle-o"></i> in stock</span>
											</div>
										</div>
										<h3><?php echo "₵".$pro_price.".00"; ?></h3>
										<div class="quickview-peragraph">
											<p><?php echo $pro_desc; ?></p>
										</div>
										<div class="size">
											<div class="row">
												<div class="col-lg-6 col-12">
													<h5 class="title">Size</h5>
													<select>
														<option selected="selected">s</option>
														<option>m</option>
														<option>l</option>
														<option>xl</option>
													</select>
												</div>
												<div class="col-lg-6 col-12">
													<h5 class="title">Color</h5>
													<select>
														<option selected="selected">orange</option>
														<option>purple</option>
														<option>black</option>
														<option>pink</option>
													</select>
												</div>
											</div>
										</div>
										<div class="quantity">
											<!-- Input Order -->
											<div class="input-group">
												<div class="button minus">
													<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
														<i class="ti-minus"></i>
													</button>
												</div>
												<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
												<div class="button plus">
													<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
														<i class="ti-plus"></i>
													</button>
												</div>
											</div>
											<!--/ End Input Order -->
										</div>
										<div class="add-to-cart">
											<a href="#" class="btn">Add to cart</a>
											<a href="#" class="btn min"><i class="ti-heart"></i></a>
											<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
										</div>
										<div class="default-social">
											<h4 class="share-now">Share:</h4>
											<ul>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->

    
<?php include("includes/shop_footer.php"); ?>