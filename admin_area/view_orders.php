<?php 

$active = 'Orders';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Orders</li>
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
                  <th>No.</th>
                  <th>Order No</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Order Date</th> 
                  <th>Total amount</th>          
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM pending_orders";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));

                      $i = 0;
                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {
                          $order_id = $row['order_id'];
                          $customer_id = $row['customer_id'];
                          $product_id = $row['product_id'];
                          $qty  = $row['qty'];
                          $size = $row['size'];
                          $color = $row['color']; 
                          $order_status = $row['order_status'];
                          $get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
                          $run_product = mysqli_query($db, $get_product);
                          $row_product = mysqli_fetch_array($run_product);
                          $product_title = $row_product['product_title'];
                          $get_customers = "SELECT * FROM customers WHERE customer_id = '$customer_id'";
                          $run_customer = mysqli_query($db, $get_customers);
                          $row_customer = mysqli_fetch_array($run_customer);
                          $customer_name = $row_customer['customer_name'];
                          $customer_email = $row_customer['customer_email'];
                          $get_c_orders = "SELECT * FROM customer_orders WHERE order_id = '$order_id'";
                          $run_c_orders = mysqli_query($db, $get_c_orders);
                          $row_c_order = mysqli_fetch_array($run_c_orders);
                          $order_date = $row_c_order['order_date'];
                          $order_amount = $row_c_order['due_amount'];

                          $i++;
                       ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $order_id; ?></td>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $customer_email; ?></td>
                        <td><?php echo $product_title; ?></td> 
                        <td><?php echo $qty; ?></td> 
                        <td><?php echo $size; ?></td>
                        <td><?php echo $color; ?></td>
                        <td><?php echo $order_date; ?></td>
                        <td><?php echo $order_amount; ?></td>
                        <td>
                          <?php
                          
                          if($order_status == 'pending')
                          {
                            $order_status == 'pending';
                            echo "<span class='badge bg-red'>$order_status</span>";
                          }
                          else
                          {
                             $order_status == 'completed';
                             echo "<div class='badge bg-green'>$order_status</div>";
                          }
                          ?>
                        </td>
                      <td>
                      <a href="#delete<?php echo $row['order_id'];?>" data-target="#delete<?php echo $row['order_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
        </tr>

           

            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['order_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Order Details</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="order_del.php">
             
                  <input type="hidden" class="form-control" name="order_id" value="<?php echo $row['order_id'];?>" required> 
                      
                    <p>Are you sure you want to remove this order?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['order_id'];?>" style="color: #ffffff;">
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
                  <th>No.</th>
                  <th>Order No</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Order Date</th> 
                  <th>Total amount</th>          
                  <th>Status</th>
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