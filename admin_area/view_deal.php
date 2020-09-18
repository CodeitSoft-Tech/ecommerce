<?php 

$active = 'Deal';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Deals</li>
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
                  <th>Deal Title</th>
                  <th>Deal Description</th>
                  <th>Deal Image</th>
                  <th>Button Text</th>
                  <th>Deal URL</th>                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM product_deals";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['deal_id'];  ?></td>
                      <td><?php echo $row['deal_title'];  ?></td> 
                      <td><?php echo $row['deal_short_desc'];  ?></td> 
                      <td><img width="80" height="80" src="deal_images/<?php echo $row['deal_img']; ?>" alt="<?php echo $row['deal_title'];  ?>"></td> 
                      <td><?php echo $row['deal_btn_title'];  ?></td>   
                      <td><?php echo $row['deal_url'];  ?></td> 
                       <td>
                  <a href="#update<?php echo $row['deal_id'];?>" data-target="#update<?php echo $row['deal_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $row['deal_id'];?>" data-target="#delete<?php echo $row['deal_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                      <!-- Update Modal -->      
      <div id="update<?php echo $row['deal_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Deal Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="deal_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Deal Title</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required>  
                <input type="text" class="form-control" name="deal_title" value="<?php echo $row['deal_title'];?>" required>  
              </div>
            </div>

            <div class="form-group">
              <label class="control-label">Deal Description</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required>  
                <input type="text" class="form-control" name="deal_short_desc" value="<?php echo $row['deal_short_desc'];?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Deal Image</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required>  
                <input type="file" class="form-control" name="deal_image"> <br>

                <img width="80" height="80" class="img-responsive" src="deal_images/<?php echo $row['deal_img'];?>" alt="<?php echo $row['deal_title'];?>">

              </div>
            </div> 

             <div class="form-group">
              <label class="control-label">Button Text</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required>  
                <input type="text" class="form-control" name="deal_btn_title" value="<?php echo $row['deal_btn_title'];?>" required>  
              </div>
            </div>

             <div class="form-group">
              <label class="control-label">Deal URL</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required>  
                <input type="text" class="form-control" name="deal_url" value="<?php echo $row['deal_url'];?>" required>  
              </div>
            </div>
         
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Deal</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['deal_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Deal</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="deal_del.php">
             
                  <input type="hidden" class="form-control" name="deal_id" value="<?php echo $row['deal_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['deal_title']; ?>?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['deal_id'];?>" style="color: #ffffff;">
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
                  <th>Deal Title</th>
                  <th>Deal Description</th>
                  <th>Deal Image</th>
                  <th>Button Text</th>
                  <th>Deal URL</th>                
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