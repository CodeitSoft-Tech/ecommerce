<?php 

$active = 'Approve';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Approve Products</li>
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
                  <th>Seller Name</th>
                  <th>Product Name</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th> 
                  <th>Approval Status</th>
                  <th>Product Remarks</th>               
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM pending_approvals";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));

                    
                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {
                          $pending_id = $row['pending_id'];
                          $p_cat_id  = $row['p_cat_id'];
                          $cat_id    = $row['cat_id'];
                          $seller_id = $row['seller_id'];
                          $product_title  = $row['product_title'];
                          $product_img1 = $row['product_img1'];
                          $product_img2 = $row['product_img2']; 
                          $product_img3 = $row['product_img3'];
                          $product_price = $row['product_price'];
                          $discount_price= $row['discount_price'];
                          $promo_price = $row['promo_price'];
                          $product_qty = $row['product_qty'];
                          $product_keywords = $row['product_keywords'];
                          $product_status = $row['product_status'];
                          $product_specs = $row['product_specs'];
                          $product_desc = $row['product_desc'];
                          $approval_status = $row['approval_status'];
                          $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = ' $p_cat_id'";
                          $run_p_cat = mysqli_query($db, $get_p_cat);
                          $row_p_cat = mysqli_fetch_array($run_p_cat);
                          $p_cat_title = $row_p_cat['p_cat_title'];
                          $get_cat = "SELECT * FROM categories WHERE cat_id = ' $cat_id'";
                          $run_cat = mysqli_query($db, $get_cat);
                          $row_cat = mysqli_fetch_array($run_cat);
                          $cat_title = $row_cat['cat_title'];
                          $get_seller = "SELECT * FROM sellers WHERE seller_id = '$seller_id'";
                          $run_seller = mysqli_query($db, $get_seller);
                          $row_seller = mysqli_fetch_array($run_seller);
                          $business_name = $row_seller['business_name'];
                          $seller_email  = $row_seller['seller_email'];
                        
                       ?>
                    <tr>
                       
                        <td><?php echo $pending_id; ?></td>
                        <td><?php echo $business_name; ?></td>
                        <td><?php echo $product_title; ?></td>
                        <td><img src="product_images/<?php echo $row['product_img1'];?>" alt="Product Images" width="60" height="60"></td>
                        <td><img src="product_images/<?php echo $row['product_img2'];?>" alt="Product Images" width="60" height="60"></td>
                        <td><img src="product_images/<?php echo $row['product_img2'];?>" alt="Product Images" width="60" height="60"></td>
                        <td><?php echo $product_price; ?></td>
                        <td><?php echo $discount_price; ?></td>
                        <td><?php echo $promo_price; ?></td>
                        <td><?php echo $product_qty; ?></td>
                        <td><?php echo $product_keywords; ?></td>                                       
                        <td><?php 

                        if($row['product_status'] == 'Regular')
                        {
                          echo "<div class='badge bg-green'>Regular</div>";
                        }
                        elseif ($row['product_status'] == 'Discount') {
                           echo "<div class='badge bg-yellow'>Discount</div>";
                        }
                        else
                        {
                           echo "<div class='badge bg-red'>Promo</div>";
                        }

                      ?></td>
                       <td><?php echo $product_specs;  ?></td>
                      <td><?php echo $product_desc;  ?></td>
                      <td>
                        <?php

                        if($row['approval_status'] == 'Pending')
                        {
                          echo "<div class='badge bg-red'>Pending</div>";
                        }
                        else
                        {
                           echo "<div class='badge bg-green'>Approved</div>";
                        }
                        
                       ?>
                       </td>
                       <td>
                           <a href="#remark<?php echo $row['pending_id'];?>" data-target="#remark<?php echo $row['pending_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-envelope text-red"> Remarks </i></a>

                       </td>
                       <td>

                         <a href="#view<?php echo $row['pending_id'];?>" data-target="#view<?php echo $row['pending_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-green"> View Product</i></a>

                      <a href="#update<?php echo $row['pending_id'];?>" data-target="#update<?php echo $row['pending_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"> Approve Product</i></a>
                        
                      </td>
                      <!--
                      <td>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </td> -->

                    </tr>
                                       <!-- Remarks Modal -->      
      <div id="remark<?php echo $row['pending_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Product Details Remarks</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="send_remarks.php" enctype='multipart/form-data'>

              <div class="form-group">
              <label class="control-label">Seller Email</label>
                <input type="email" class="form-control" name="seller_email" value="<?php echo $row_seller['seller_email'];?>" required>  
              </div>
            

            
             <div class="form-group">
            <label class='control-label'>Remarks</label>
                <div class='col-sm-9'>
                <textarea name="product_remarks" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                           
              </textarea>
              </div>
              </div>  
                    
               </form>
                  </div><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Remarks</button>
                  </div>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


                      <!-- Update Modal -->      
      <div id="update<?php echo $row['pending_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Product Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="p_product_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Approval Status</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="pending_id" value="<?php echo $row['pending_id'];?>" required>  
               <select name="approval_status" class="form-control" required oninput="SetCustomValidation()" oninvalid="SetCustomValidation('Select approval status')" >
                 <option value="<?php echo $row['approval_status'];?>"><?php echo $row['approval_status'];?></option>
                 <option value="Approved">Approved</option>
               </select>
              </div>
            </div> 
                  </div><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Approve Product</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


           <!-- View Product -->

       <div id="view<?php echo $row['pending_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">View Product Details</h4>
              </div>
              <div class="modal-body">

                  <div class="container">
                  <div class="row">

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Name</h5>
                  <p><?php echo $product_title; ?></p>
                  </div>


                  <div class="col-md-4" width="100">
                 
                  <img width="300" height="300" src="product_images/<?php echo $row['product_img1']; ?>" alt="<?php echo $row['product_title'];?>">
                </div>
                 

                  <div class="col-md-3" width="100">
              
                  <img width="300" height="300" src="product_images/<?php echo $row['product_img2']; ?>" alt="<?php echo $row['product_title'];?>">
                </div>
                

                  <div class="col-md-3" width="100">
                
                  <img width="300" height="300" src="product_images/<?php echo $row['product_img2']; ?>" alt="<?php echo $row['product_title'];?>">
                  </div>

                  
                </div>
              </div>
                <hr>

                 <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Category</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo $p_cat_title; ?></p>
                  </div>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Category</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo $cat_title; ?></p>
                  </div>


                 <hr>
                <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Price</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo "₵".$product_price.".00"; ?></p>
                  </div>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Discount Price</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo "₵".$discount_price.".00"; ?></p>
                  </div>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Promo Price</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo "₵".$promo_price.".00"; ?></p>
                  </div>

                  <hr>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Keywords</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo $product_keywords; ?></p>
                  </div>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Specification</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo $product_specs; ?></p>
                  </div>

                  <div>
                  <h5 style="color:#0069D9; font-weight: bold;">Product Description</h5>
                  <p style="color: #000; font-weight: 500;"><?php echo $product_desc; ?></p>
                  </div>





             
             
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div><!--end of modal-dialog-->
           </div>

      
                  <?php } } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>Product Id</th>
                  <th>Seller Name</th>
                  <th>Product Name</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th> 
                  <th>Approval Status</th> 
                  <th>Product Remarks</th>              
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