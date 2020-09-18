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
               <a href="shop.php?cat_id=<?php echo $cat_id; ?>">
                <li><i class="ti-arrow-right"></i> <?php echo $cat_title; ?></a>
              <a href="shop.php?brand_id=<?php echo $brand_id; ?>">
                </i> <?php echo $brand_title; ?></a>
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
                        <!--
                        <div class="quickview-ratting">
                          <i class="yellow fa fa-star"></i>
                          <i class="yellow fa fa-star"></i>
                          <i class="yellow fa fa-star"></i>
                          <i class="yellow fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>-->
                        <a href="#"> (1 customer review)</a> 
                      </div>
                      <div class="quickview-stock">
                       <span style="background-color: green; padding: 5px; color: #fff;"><?php echo $label_title; ?></span>
                      </div>
                    </div>
                     <h3><?php echo "₵".$pro_price.".00"; ?></h3>
                    <div class="quickview-peragraph">
                    </div>

                      <?php add_cart(); ?>
                    <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post">
                    <div class="size">
                      <div class="row">

                        <div class="col-lg-6 col-12">
                          <h5 class="title">Size</h5>
                          <select name="size" required>
                            <option disabled selected> Select size</option>
                            <?php
                            $sql = "SELECT * FROM size";
                            $query = mysqli_query($db, $sql);

                            while($row = mysqli_fetch_array($query)){

                                $size_id = $row['size_id'];
                                $size_name = $row['size_name'];

                              echo "
                                <option value='$size_name'>$size_name</option>

                              ";
                            }
                          ?>
                          </select>
                        </div>

                        <div class="col-lg-6 col-12">
                          <h5 class="title">Color</h5>
                          <select name="color" required>
                          <option disabled selected> Select color</option>
                            <?php
                            $sql = "SELECT * FROM color";
                            $query = mysqli_query($db, $sql);

                            while($row = mysqli_fetch_array($query)){

                                $color_id = $row['color_id'];
                                $color_name = $row['color_name'];

                              echo "
                                <option value='$color_name'>$color_name</option>

                              ";
                            }
                          ?>
                          </select>
                        </div>
                        <div class="col-lg-6 col-12">
                     <!-- <input type="text" name="product_qty" class="input-number" placeholder=" Quantity"> -->
                         <h5 class="title">Quantity</h5>
                          <select name="qty" required>
                            <option disabled selected> Select quantity</option>
                            <?php
                            $sql = "SELECT * FROM qty";
                            $query = mysqli_query($db, $sql);

                            while($row = mysqli_fetch_array($query)){

                                $qty_id = $row['qty_id'];
                                $qty_num = $row['qty_num'];

                              echo "
                                <option value='$qty_num'>$qty_num</option>

                              ";
                            }
                          ?>
                          </select>

                  
                      <!-- End Input Order -->
                    </div>
                      </div>
                    </div>
                    
                    <div class="add-to-cart">
                      <!--
                      <a href="details.php?add_cart=<?php echo $product_id; ?>" class="btn">Add to cart</a>-->
                      <button type="submit" class="btn"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                    </div>
                  </form>
                    <!--
                    <div class="default-social">
                      <h4 class="share-now">Share:</h4>
                      <ul>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </div>-->
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
    <div class="tab-pane fade" id="nav-specs" role="tabpanel" aria-labelledby="nav-specs-tab"> 
      <?php echo $pro_specs; ?></div>
  <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab"><br>
      <div class="rating-review">
        <div class="tri table-flex">
          <table>
            <tbody>
              <tr>
                <td>
                  <div class="rnb rvl">
                    <h3>1.5/5.0</h3>
                  </div>
                  <div class="pdt-rate">
                    <div class="pro-rating">
                      <div class="clearfix rating mart8">
                      <div class="rating-stars">
                        <div class="grey-stars"></div>
                        <div class="filled-stars" style="width: 60%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rnrn">
                  <p class="rars">No Reviews</p>
                  </div>
                </td>
                <td>
                  <div class="rpb">
                    <div class="rnpb">
                      <label>5 <i class="fa fa-star"></i></label>
                      <div class="ropb">
                        <div class="ripb" style="width:20%"></div>
                      </div>   
                    <div class="label">(1)</div>
                    </div>
                     <div class="rnpb">
                      <label>4 <i class="fa fa-star"></i></label>
                      <div class="ropb">
                        <div class="ripb" style="width:50%"></div>
                      </div>   
                    <div class="label">(1)</div>
                    </div>
                     <div class="rnpb">
                      <label>3 <i class="fa fa-star"></i></label>
                      <div class="ropb">
                        <div class="ripb" style="width:80%"></div>
                      </div>   
                    <div class="label">(15)</div>
                    </div>
                     <div class="rnpb">
                      <label>2 <i class="fa fa-star"></i></label>
                      <div class="ropb">
                        <div class="ripb" style="width:30%"></div>
                      </div>   
                    <div class="label">(11)</div>
                    </div>
                     <div class="rnpb">
                      <label>1 <i class="fa fa-star"></i></label>
                      <div class="ropb">
                        <div class="ripb" style="width:40%"></div>
                      </div>   
                    <div class="label">(13)</div>
                    </div>

                  </div>
                </td>
                <td>
                  <div class="rrb">
                    <p>Please Review Our Products! </p>
                    <button class="rbtn opmd">Add Review</button>
                  </div> 
                </td>
              </tr>
            </tbody>
          </table>
          <div class="review-modal" style="display: none;">
            <div class="review-bg"></div>
            <div class="rmp">
              <div class="rpc">
                <span><i  class="fa fa-times"></i></span>
              </div>
              <div class="rps" align="center">
                <i class="fa fa-star" data-index="0" style="display: none;"></i>
                <i class="fa fa-star" data-index="1"></i>
                <i class="fa fa-star" data-index="2"></i>
                <i class="fa fa-star" data-index="3"></i>
                <i class="fa fa-star" data-index="4"></i>
                <i class="fa fa-star" data-index="5"></i>
              </div>
              <input type="hidden" name="" value="" class="starRateV">
              <input type="hidden" name="" value="<?php echo $date; ?>" class="rateDate">
              <div class="rptf" align="center">
                <input type="text" name="" class="raterName" placeholder="Enter your name">
              </div>
              <div class="rptf" align="center">
                <textarea class="rateMsg" id="rate-field" placeholder="Enter your review"></textarea>
              </div>
              <div class="rate-error"></div>
              <div class="rpsb" align="center">
                <button class="rpbtn">Post Review</button>
              </div>
            </div>
          </div>
        </div>
        <div class="bri">
          <div class="uscm">
            <div class="uscm-secs">
              <div class="us-img">
                <p>A</p>
              </div>
              <div class="uscm">
                <div class="us-rate">
                    <div class="pdt-rate">
                    <div class="pro-rating">
                      <div class="clearfix rating mart8">
                      <div class="rating-stars">
                        <div class="grey-stars"></div>
                        <div class="filled-stars" style="width: 60%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="us-cmt">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="us-nm">
                  <p><i>By <span class="cmnm">Albert</span> on <span class="cmdt">Aug 04 2020</span></i></p>
                </div>
              </div>
            </div>
          </div>
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
</div>
</div>



      

<?php include("includes/shop_footer.php"); ?>