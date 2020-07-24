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
                <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
               <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                <li><i class="ti-arrow-right"></i> <?php echo $pro_title; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

            
              <div class="row no-gutters">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <!-- Product Slider -->
                    <div class="product-gallery">
                      <div class="quickview-slider-active">
                        
                        <div class="single-slider">
                        <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 1">
                        </div>

                        <div class="single-slider">
                        <img src="admin_area/product_images/<?php  echo $pro_img2; ?>" alt="Product 2">
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

                      <?php add_cart(); ?>

                    <form action="details.php?add_cart=<?php echo $product_id; ?>" method="Get">
                    <h3><?php echo "₵".$pro_price.".00"; ?></h3>
                    <div class="quickview-peragraph">
                      <p><?php echo $pro_desc; ?></p>
                    </div>
                    <div class="size">
                      <div class="row">

                        <div class="col-lg-6 col-12">
                          <h5 class="title">Size</h5>
                          <select name="product_size">
                            <option selected="selected" value="s">s</option>
                            <option value="m">m</option>
                            <option value="l">l</option>
                            <option value="xl">xl</option>
                          </select>
                        </div>

                        <div class="col-lg-6 col-12">
                          <h5 class="title">Color</h5>
                          <select name="product_color">
                            <option selected="selected">orange</option>
                            <option value="purple">purple</option>
                            <option value="black">black</option>
                            <option value="pink">pink</option>
                          </select>
                        </div>
                        <div class="col-lg-6 col-12">
                     <!-- <input type="text" name="product_qty" class="input-number" placeholder=" Quantity"> -->
                         <h5 class="title">Quantity</h5>
                          <select name="product_qty">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>

                  
                      <!-- End Input Order -->
                    </div>
                      </div>
                    </div>
                    
                    <div class="add-to-cart">
                      <a href="details.php?add_cart=<?php echo $product_id; ?>" class="btn">Add to cart</a>
                    </div>
                    </form>
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

          <!--Product Details tabs -->
    <div class="container" style="padding-top: 50px; padding-bottom: 150px;">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-pro-desc-tab" data-toggle="tab" href="#nav-pro-desc" role="tab" aria-controls="nav-pro-desc" aria-selected="true">Product Description</a>
      <a class="nav-item nav-link" id="nav-specs-tab" data-toggle="tab" href="#nav-specs" role="tab" aria-controls="nav-specs" aria-selected="false">Specifications</a>
      <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-pro-desc" role="tabpanel" aria-labelledby="nav-pro-desc-tab"><?php echo $pro_desc; ?></div>
    <div class="tab-pane fade" id="nav-specs" role="tabpanel" aria-labelledby="nav-specs-tab">Lorem ipsum dolor sit <?php echo $pro_specs; ?></div>
  <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab"><br>
    <div class="row">
    <div class="col-md-6">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md-6">
     <form>
        <div class="form-group">
        <label style="color: #f7941d;font-weight: bold;">Your name</label>
        <input type="text" class="form-control" name="name" required>
      </div>

       <div class="form-group">
        <label style="color: #f7941d;font-weight: bold;">Your email</label>
        <input type="email" class="form-control" name="email" required>
      </div>

       <div class="form-group">
        <label style="color: #f7941d; font-weight: bold;">Your rating</label>
        <input type="text" name="rating" class="form-control rate" placeholder="eg; 5 stars" required>
      </div>

       <div class="form-group">
        <label style="color: #f7941d; font-weight: bold;">Review</label>
       <textarea name="review_message" class="form-control">  
       </textarea>
       </div>

      <div class="form-group">
        <button type="submit" class="btn " name="btn-review">Submit Review</button>
      </div>

    </form>

    </div>
   </div>
  </div>
</div>

        <!-- Related Product -->
        <div class="product-area most-popular section">
        <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="section-title">
          <h2>Product You May Also Like</h2>
          </div>
           </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <?php
                $get_products = "SELECT * FROM products ORDER BY rand() LIMIT 0,5";
                $run_products = mysqli_query($db, $get_products);

                while($row_products = mysqli_fetch_array($run_products))
                {
                  $pro_id = $row_products['product_id'];
                  $pro_title = $row_products['product_title'];
                  $pro_img1 = $row_products['product_img1'];
                  $pro_price = $row_products['product_price'];

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
  <!-- End Most Popular Area -->




</div>
</div>



      

<?php include("includes/shop_footer.php"); ?>