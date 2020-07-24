	
	<?php 

	$active = 'Shop';
	include("includes/shop_header.php"); ?>
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Shop</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list">
										<?php getPCats(); ?>
									</ul>
								</div>
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
									<div class="single-widget range">
										<h3 class="title">Shop by Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
												<div id="slider-range"></div>
													<div class="price_slider_amount">
													<div class="label-input">
														<span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
													</div>
												</div>
											</div>
										</div>
										<ul class="check-box-list">
											<li>
												<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
											</li>
										</ul>
									</div>
									<!--/ End Shop By Price -->

								<!-- Single Widget
								<div class="single-widget category">
									<h3 class="title">Manufacturers</h3>
									<ul class="categor-list">
										<li><a href="#">Forever</a></li>
										<li><a href="#">giordano</a></li>
										<li><a href="#">abercrombie</a></li>
										<li><a href="#">ecko united</a></li>
										<li><a href="#">zara</a></li>
									</ul>
								</div>
								/ End Single Widget -->
						</div>
					</div>
				<div class="col-lg-9 col-md-8 col-12">
			    <div class="row">
				<?php
                   if(!isset($_GET['p_cat']))
                   {

                        $per_page = 12;
                        if(isset($_GET['page']))
                        {
                            $page = $_GET['page'];
                        } 
                        else
                        {
                            $page = 1;
                        }

                        $start_from = ($page-1)*$per_page;

                        $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from, $per_page";
                        $run_products = mysqli_query($db, $get_products);

                        while($row_products = mysqli_fetch_array($run_products))
                        {
                            $pro_id = $row_products['product_id'];
                            $pro_title = $row_products['product_title'];
                            $pro_price = $row_products['product_price'];
                            $pro_img1 = $row_products['product_img1'];


    echo "
		<div class='col-xl-3 col-lg-4 col-md-4 col-12 center-responsive'>
	  
	  <div class='single-product'>
	  <div class='product-img'>
		    <a href='details.php?pro_id=$pro_id'>
		          <img class='default-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
		          <img class='hover-img img-responsive' src='admin_area/product_images/$pro_img1' alt='#'>
			</a>
			<div class='button-head'>
				<div class='product-action'>
					<a data-toggle='modal' data-target='#exampleModal' title='Quick View' href='#''>
					<i class='ti-eye'></i><span>Quick Shop</span></a>
				</div>
				<div class='product-action-2'>
			     <a title='Add to cart' href='details.php?pro_id=$pro_id'> Add to cart </a>
				</div>
		     </div>
	  </div>
		<div class='product-content'>
		    <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
			<div class='product-price'>
		    <span>₵$pro_price.00</span>
			</div>
		</div>
		</div>
	    </div>
	        ";
            }
          ?>
			</div>
				<center>
                    <ul class="pagination">
                    <?php

                        $query ="SELECT * FROM products";
                        $result = mysqli_query($db, $query);

                        $total_records = mysqli_num_rows($result);

                        $total_pages = ceil($total_records / $per_page);
                        
                        echo "
                            <li class='page-item'>
                             <a class='page-link' href='shop.php?page=1'>
                             ".'Prev'."
                             </a>
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++)
                        {
                             echo "
                            <li class='page-item'>
                             <a class='page-link' href='shop.php?page=".$i."'>
                             ".$i."
                             </a>
                            </li>
                        ";
                        }

                         echo "
                            <li class='page-item'>
                             <a class='page-link' href='shop.php?page=$total_pages'>
                             ".'Next'."
                             </a>
                            </li>
                        ";
                    }

                    ?>
               </ul>
            </center>
            		 <?php getpcatpro();  ?>
					</div>	
				</div>
			</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
		
		
		
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