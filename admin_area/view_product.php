<?php 

$active = 'Product';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Product Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Content Begin -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                  <th>Product Id</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Category</th>
                  <th>Product Brand</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Sold</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th>                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM products";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                          $product_id = $row['product_id'];
                          $p_cat_id   = $row['p_cat_id'];
                          $cat_id     = $row['cat_id'];
                          $brand_id   = $row['brand_id'];
                          $product_title = $row['product_title'];
                          $product_img1 = $row['product_img1'];
                          $product_img2 = $row['product_img2'];
                          $product_img3 = $row['product_img3'];
                          $product_price = $row['product_price'];
                          $discount_price = $row['discount_price'];
                          $promo_price = $row['promo_price'];
                          $product_qty = $row['product_qty'];
                          $product_keywords = $row['product_keywords'];
                          $product_status   = $row['product_status'];
                          $product_specs  = $row['product_specs'];
                          $product_desc = $row['product_desc'];
                        $select_p_cat = "SELECT * FROM product_categories WHERE p_cat_id= '$p_cat_id'";
                          $run_p_cat = mysqli_query($db, $select_p_cat);
                          $row = mysqli_fetch_array($run_p_cat);
                          $p_cat_title = $row['p_cat_title']; 
                        $select_cat = "SELECT * FROM categories WHERE cat_id= '$cat_id'";
                          $run_cat = mysqli_query($db, $select_cat);
                          $row = mysqli_fetch_array($run_cat);
                          $cat_title = $row['cat_title']; 
                        $select_brand = "SELECT * FROM brands WHERE brand_id= '$brand_id'";
                          $run_brand = mysqli_query($db, $select_brand);
                          $row = mysqli_fetch_array($run_brand);
                          $brand_title = $row['brand_title']; 


                  ?>
                    <tr>
                      <td><?php echo $product_id;  ?></td>
                      <td><?php echo $product_title;  ?></td>
                      <td><?php echo $p_cat_title;  ?></td>
                      <td><?php echo $cat_title;  ?></td>
                      <td><?php echo $brand_title;  ?></td>                    
                      <td><img src="product_images/<?php echo $product_img1; ?>" alt="Product Images" width="60" height="60"></td>
                       <td><img src="product_images/<?php echo $product_img2; ?>" alt="Product Images" width="60" height="60"></td>
                        <td><img src="product_images/<?php echo $product_img3; ?>" alt="Product Images" width="60" height="60"></td>
                      <td><?php echo $product_price; ?></td>
                      <td><?php echo $discount_price; ?></td>
                      <td><?php echo $promo_price; ?></td>
                      <td><?php echo $product_qty; ?> </td>
                      <td>
                        <?php

                            $pro_id = $row['product_id'];

                            $get_sold = "SELECT * FROM pending_orders where product_id = '$pro_id'";
                            $run_sold = mysqli_query($db, $get_sold);
                            $count = mysqli_num_rows($run_sold);

                            echo $count;
                        ?>
                      </td>
                      <td><?php echo $product_keywords;  ?></td>
                      <td> <?php
                              if($product_status == 'Regular')
                              {
                                echo "<span class='badge bg-green'>Regular</span>";
                              }
                              elseif ($product_status == 'Discount') {
                                 echo "<span class='badge bg-red'>Discount</span>";
                              }
                              else
                              {
                                 echo "<span class='badge bg-orange'>Promo</span>";
                              }
                            ?>
                      </td>
                        <td><?php echo $product_specs; ?></td>
                         <td><?php echo $product_desc; ?></td>
                       <td>
                      <a href="#update<?php echo $product_id;?>" data-target="#update<?php echo $product_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $product_id; ?>" data-target="#delete<?php echo $product_id ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                      <!-- Update Modal -->      
      <div id="update<?php echo $product_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Product Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="product_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Product Name</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
                <input type="text" class="form-control" name="product_title" value="<?php echo $product_title; ?>" required>  
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Product Category</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
               <select name="product_category" class="form-control">
                 <option value="<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></option>
                 <?php

                    $select_p_cat = "SELECT * FROM product_categories";
                    $run_p_cat = mysqli_query($db, $select_p_cat);

                    while($row_p = mysqli_fetch_array($run_p_cat))
                    {
                        $p_cat_id = $row_p['p_cat_id'];
                        $p_cat_title =$row_p['p_cat_title'];

                        echo "
                       <option value='$p_cat_id;'>$p_cat_title</option>";
                    }

                 ?>
               </select>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Category</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
               <select name="category" class="form-control">
                 <option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?></option>
                 <?php

                    $select_cat = "SELECT * FROM categories";
                    $run_cat = mysqli_query($db, $select_cat);

                    while($row_p = mysqli_fetch_array($run_cat))
                    {
                        $cat_id = $row_p['cat_id'];
                        $cat_title =$row_p['cat_title'];

                        echo "
                       <option value='$cat_id;'>$cat_title</option>";
                    }

                 ?>
               </select>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Product Brand</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
               <select name="brand" class="form-control">
                 <option value="<?php echo $brand_id; ?>"><?php echo $brand_title; ?></option>
                 <?php

                    $select_brand = "SELECT * FROM brands";
                    $run_brand = mysqli_query($db, $select_brand);

                    while($row_p = mysqli_fetch_array($run_brand))
                    {
                        $brand_id = $row_p['brand_id'];
                        $brand_title =$row_p['brand_title'];

                        echo "
                       <option value='$brand_id;'>$brand_title</option>";
                    }

                 ?>
               </select>  
              </div>
            </div> 

              <div class="form-group">
              <label class="control-label">Product Image 1</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
                
                <input type="file" class="form-control" name="product_img1" required>  <br>

                <img width="70" height="70" src="product_images/<?php echo $product_img1; ?>" alt="<?php echo $product_title; ?>">

              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Product Image 2</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
                
                <input type="file" class="form-control" name="product_img2" required>  <br>

                <img width="70" height="70" src="product_images/<?php echo $product_img2; ?>" alt="<?php echo $product_title; ?>">

              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Product Image 3</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id ;?>" required>  
                
                <input type="file" class="form-control" name="product_img3" required>  <br>

                <img width="70" height="70" src="product_images/<?php echo $product_img3; ?>" alt="<?php echo $product_title; ?>">

              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Product Price</label>
               <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required>  
                <input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Discount Price</label> 
               <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required> 
                <input type="text" class="form-control" name="discount_price" value="<?php echo $discount_price; ?>" required>  
              </div>
            </div> 


            <div class="form-group">
              <label class="control-label">Promo Price</label>
               <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required> 
                <input type="text" class="form-control" name="promo_price" value="<?php echo $promo_price; ?>" required>  
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Product qty</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id ;?>" required>  
                <input type="text" class="form-control" name="product_qty" value="<?php echo $product_qty; ?>" required>  
              </div>
            </div> 


             <div class="form-group">
              <label class="control-label">Product Keywords</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>" required> 
                <input type="text" class="form-control" name="product_keywords" value="<?php echo $product_keywords; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Product Status</label>
              <div class="col-sm-9">
               <select class="form-control" name="product_status" style="width: 100%;" required oninput="SetCustomValidation()" oninvalid="SetCustomValidation('Select product status')" >
                 <option value="<?php echo $product_status ;?>"><?php echo $product_status; ?></option>
                 <option value="Discount">Discount</option>
                 <option value="Promo">Promo</option>
              </select>
               </div>
              </div>
        

             <div class="form-group">
            <label class='control-label'>Product Specification</label>
                <div class='col-sm-9'>
                <textarea name="product_specs" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                     <?php echo $product_specs; ?>        
              </textarea>
              </div>
              </div>
            

            <div class="form-group">
            <label class='control-label'>Product Description</label>
                <div class='col-sm-9'>
                <textarea name="product_desc" class="textarea" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                     <?php echo $product_desc; ?>        
              </textarea>
              </div>
              </div>
           

              
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>



            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['product_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Product</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="product_del.php">
             
                  <input type="hidden" class="form-control" name="product_id" value="<?php echo $row['product_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['product_title']."?"; ?></p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['product_id'];?>" style="color: #ffffff;">
                         <button type="submit" name="delete" class="btn btn-primary">
                          Yes </button></a>
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
              </form>
            </div>
        </div><!--end of modal-dialog-->
      </div>             
                  
      
                  <?php } } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Product Id</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Category</th>
                  <th>Product Brand</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Sold</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th>                
                  <th>Action</th>
                  </tr>
                  </tfoot>
                </table>    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>