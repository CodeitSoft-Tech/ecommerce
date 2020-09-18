<?php

				include("includes/db_conn.php");

	// Get User Ip Address

	function getRealIpUser()
	{
		switch(true)
		{
			case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $SERVER['HTTP_X_REAL_IP'];
			case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $SERVER['HTTP_CLIENT_IP'];
			case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $SERVER['HTTP_X_FORWARDED_FOR'];

			default : return $_SERVER['REMOTE_ADDR'];
			  
		}
	}


	// Add to cart 

	function add_cart()
	{
		global $db;

		if(isset($_GET['add_cart']))
		{
			$ip_add = getRealIpUser();
			$p_id = $_GET['add_cart'];
			$qty = $_POST['qty'];
			$size = $_POST['size'];
			$color = $_POST['color'];

			$check_product ="SELECT * FROM cart WHERE ip_add ='$ip_add' AND p_id = '$p_id'";
			$run_chk = mysqli_query($db, $check_product);

			if(mysqli_num_rows($run_chk) > 0)
			{
				echo "<script>alert('Product already exist')</script>";
				echo "<script>document.location='details.php?pro_id=$p_id'</script>";
			}

			else {
				$query = "INSERT INTO cart(p_id, ip_add, qty, size, color)
				          VALUES('$p_id','$ip_add','$qty','$size', '$color')";
				$run_query = mysqli_query($db, $query);

				if($run_query)
				{
					//echo "<script>alert('Product added successfully!')</script>";
					echo "<script>document.location='details.php?pro_id=$p_id'</script>";
				}
			}
		}
	}


 			// Get Product from DB 
			function getProduct()
			{
				global $db;

				$get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,16";
				$run_product = mysqli_query($db, $get_products);

				while($row_product = mysqli_fetch_array($run_product))
				{
					$pro_id    = $row_product['product_id'];
					$pro_label = $row_product['label_id'];
					$pro_title = $row_product['product_title'];
					$pro_img1  = $row_product['product_img1'];
					

					if($pro_label == "")
					{
						
					}
					else
					{
						$product_label = 
						"
						    <a class='label $pro_label' href='#'>
						<div class='theLabel'> $pro_label </div>  

						 <div class='labelBackground'> </div>
							</a>
						";
					}

					if($row_product['product_status'] == 'Regular')
					{
					  $pro_price = $row_product['product_price'];
					  
					}

					elseif ($row_product['product_status'] == 'Discount') {
						$pro_price = $row_product['discount_price'];
						
					}
					else
					{
					    $pro_price = $row_product['promo_price'];
					    
					}

			echo "
				<div class='col-xl-3 col-lg-4 col-md-4 col-12 center-responsive'>
				  <div class='single-product'>
				  
				  <div class='product-img'>
					    <a href='details.php?pro_id=$pro_id'>
					        <img class='default-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
					        <img class='hover-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
						  </a>
						
						<div class='button-head'>
							
							<div class='product-action'>
								<a data-toggle='modal' data-target='#exampleModal' title='Quick View' href='#''>
								<i class='fa fa-share-alt'></i><span>Quick Shop</span></a>
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
							<span>$product_label</span>
						</div>

						</div>
					    </div>
						  ";
				}
			}


			// Get Hot Items from DB
			function getHotProduct()
			{
				global $db;

				$get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";
				$run_product = mysqli_query($db, $get_products);

				while($row_product = mysqli_fetch_array($run_product))
				{
					$pro_id    = $row_product['product_id'];
					$pro_title = $row_product['product_title'];
					$pro_price = $row_product['product_price'];
					$pro_img1  = $row_product['product_img1'];

			echo "
				  <div class='single-product'>
				  <div class='product-img'>
					    <a href='details.php?pro_id=$pro_id'>
					        <img class='default-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
					        <img class='hover-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
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
			}


				//Get Product Category
				function getPCats()
				{

					global $db;
					
					$get_p_cat = "SELECT * FROM product_categories";

					$run_p_cat = mysqli_query($db, $get_p_cat);

					while($row = mysqli_fetch_array($run_p_cat))
					 {
							$p_cat_id = $row['p_cat_id'];
							$p_cat_title = $row['p_cat_title'];

							echo "
									<li>
				 						<a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
				 					</li>
									     
								";
						}     
				}

					//Get Category
				function getCats()
				{

					global $db;
					
					$get_cat = "SELECT * FROM categories";

					$run_cat = mysqli_query($db, $get_cat);

					while($row = mysqli_fetch_array($run_cat))
					 {
							$cat_id = $row['cat_id'];
							$cat_title = $row['cat_title'];

							echo "
									<li>
				 						<a href='shop.php?cat_id=$cat_id'>$cat_title</a>
				 					</li>
									     
								";
						}     
				}


					// Get Product Categories with select tag
					function getProCats()
				   {
		              
		              global $db;
					
					$sql = "select * from product_categories";
					$query = mysqli_query($db, $sql);

					while($row = mysqli_fetch_array($query))
					  {
							$p_cat_id = $row['p_cat_id'];
							$p_cat_title = $row['p_cat_title'];
																	
							echo "<option value='$p_cat_id'>$p_cat_title</option>";
																
				      }

				  } 
				

							
		
		// Get Each Product categories Products 

		function getpcatpro()
		{
			global $db;

			if(isset($_GET['p_cat']))
			{
				$p_cat_id = $_GET['p_cat'];
				$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
				$run_p_cat = mysqli_query($db, $get_p_cat);

				$row_p_cat = mysqli_fetch_array($run_p_cat);

				$p_cat_title = $row_p_cat['p_cat_title'];
				$p_cat_desc = $row_p_cat['p_cat_desc'];

				$get_product = "SELECT * FROM products where p_cat_id = '$p_cat_id'";
				$run_product = mysqli_query($db, $get_product);
				$count = mysqli_num_rows($run_product);

				if($count == 0)
				{
					echo "
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h3><i class='fa fa-danger'></i> No product found  </h3>
						</div>
						</div>
					";
				}

				else
				{
					echo "
					    
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h4>$p_cat_title</h4>
							<p>$p_cat_desc</p>
							
						</div>
						</div>
						
					";
				}

				while($row_product = mysqli_fetch_array($run_product))
				{
					$pro_id    = $row_product['product_id'];
					$pro_title = $row_product['product_title'];
					$pro_price = $row_product['product_price'];
					$pro_img1  = $row_product['product_img1'];

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
			}
		}


		// Get each categories Products 

		function getcatpro()
		{
			global $db;

			if(isset($_GET['cat_id']))
			{
				$cat_id = $_GET['cat_id'];
				$get_cat = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
				$run_cat = mysqli_query($db, $get_cat);

				$row_cat = mysqli_fetch_array($run_cat);

				$cat_title = $row_cat['cat_title'];
				$cat_desc = $row_cat['cat_desc'];

				$get_product = "SELECT * FROM products where cat_id = '$cat_id'";
				$run_product = mysqli_query($db, $get_product);
				$count = mysqli_num_rows($run_product);

				if($count == 0)
				{
					echo "
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h3><i class='fa fa-danger'></i> No product found  </h3>
						</div>
						</div>
					";
				}

				else
				{
					echo "
					    
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h3>$cat_title</h3>
							<p>$cat_desc</p>
						</div>
						</div>
						
					";
				}

				while($row_product = mysqli_fetch_array($run_product))
				{
					$pro_id    = $row_product['product_id'];
					$pro_title = $row_product['product_title'];
					$pro_price = $row_product['product_price'];
					$pro_img1  = $row_product['product_img1'];

		  echo "
			<div class='col-xl-3 col-lg-4 col-md-4 col-12 center-responsive'>
			  <div class='single-product'>
			  <div class='product-img'>
				    <a href='details.php?pro_id=$pro_id'>
				          <img class='default-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
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
			}
		}

		// Get each brand product 
		function getbrandpro()
		{
			global $db;

			if(isset($_GET['brand_id']))
			{
				$brand_id = $_GET['brand_id'];
				$get_brand = "SELECT * FROM brands WHERE brand_id = '$brand_id'";
				$run_brand = mysqli_query($db, $get_brand);

				$row_brand = mysqli_fetch_array($run_brand);

				$brand_title = $row_brand['brand_title'];
				$brand_desc = $row_brand['brand_desc'];

				$get_product = "SELECT * FROM products where brand_id = '$brand_id'";
				$run_product = mysqli_query($db, $get_product);
				$count = mysqli_num_rows($run_product);

				if($count == 0)
				{
					echo "
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h3><i class='fa fa-danger'></i> No product found  </h3>
						</div>
						</div>
					";
				}

				else
				{
					echo "
					    
					    <div class='shop-top'>
						<div class='shop-shorter'>
							<h4>$brand_title</h4>
							<p>$brand_desc</p>
						</div>
						</div>
						
					";
				}

				while($row_product = mysqli_fetch_array($run_product))
				{
					$pro_id    = $row_product['product_id'];
					$pro_title = $row_product['product_title'];
					$pro_price = $row_product['product_price'];
					$pro_img1  = $row_product['product_img1'];

		  echo "
			<div class='col-xl-3 col-lg-4 col-md-4 col-12 center-responsive'>
			  <div class='single-product'>
			  <div class='product-img'>
				    <a href='details.php?pro_id=$pro_id'>
				          <img class='default-img img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
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
			}
		}


		// Get total items in cart
		function items()
		{
			global $db;

			$ip_add = getRealIpUser();

			$get_items ="SELECT * FROM cart WHERE ip_add ='$ip_add'";

			$run_items = mysqli_query($db, $get_items);

			$count = mysqli_num_rows($run_items);
			
		    echo $count;
			
		}


		function total_price()
		{
			global $db;

			$ip_add = getRealIpUser();

			$total = 0;

			$select_cart = "SELECT * FROM cart WHERE ip_add ='$ip_add'";

			$run_cart = mysqli_query($db, $select_cart);

			while($record = mysqli_fetch_array($run_cart))
			{
				$pro_id = $record['p_id'];
				$pro_qty = $record['qty'];

				$get_price = "SELECT * FROM products WHERE product_id = '$pro_id'";

				$run_price = mysqli_query($db, $get_price);

				while($row_price = mysqli_fetch_array($run_price))
				{
                   $sub_total = $row_price['product_price']*$pro_qty;

                   $total += $sub_total;
				}
			}

			  echo "₵".$total.".00";
		}


	

?>