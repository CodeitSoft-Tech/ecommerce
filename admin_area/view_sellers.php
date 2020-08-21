<?php 

$active = 'Sellers';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Sellers</li>
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
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Business Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Product Name</th>
                  <th>Product Category</th>            
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM sellers";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['seller_id'];  ?></td>
                      <td><?php echo $row['seller_firstname'];  ?></td> 
                      <td><?php echo $row['seller_lastname'];  ?></td> 
                      <td><?php echo $row['business_name'];  ?></td> 
                      <td><?php echo $row['seller_email'];  ?></td> 
                      <td><?php echo $row['seller_contact']; ?></td>
                      <td><?php echo $row['seller_product']; ?></td>
                      <td><?php echo $row['seller_category']; ?></td>

                       <td>
                      <a href="#delete<?php echo $row['seller_id'];?>" data-target="#delete<?php echo $row['seller_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                        


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['seller_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Admin Details</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="seller_del.php">
             
                  <input type="hidden" class="form-control" name="seller_id" value="<?php echo $row['seller_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['business_name']; ?>?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['seller_id'];?>" style="color: #ffffff;">
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
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Business Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Product Name</th>
                  <th>Product Category</th>            
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