<?php 

$active = 'Box';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Boxes</li>
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
                  <th>Box Id</th>
                  <th>Box Title</th>
                  <th>Box Icon</th>
                  <th>Box Description</th>            
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM boxes";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['box_id'];  ?></td>
                      <td><?php echo $row['box_title'];  ?>
                      </td>
                      <td><?php echo $row['box_icon']; ?></td>
                      <td><?php echo $row['box_desc'];  ?></td>
                       <td>
                      <a href="#update<?php echo $row['box_id'];?>" data-target="#update<?php echo $row['box_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $row['box_id'];?>" data-target="#delete<?php echo $row['box_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                      <!-- Update Modal -->      
      <div id="update<?php echo $row['box_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Box Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="box_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Box Title</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="box_id" value="<?php echo $row['box_id'];?>" required>  
                <input type="text" class="form-control" name="box_title" value="<?php echo $row['box_title'];?>" required>  
              </div>
            </div> 
              
              <div class="form-group">
              <label class="control-label">Box Icon</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="box_id" value="<?php echo $row['box_id'];?>" required>  
                <input type="text" class="form-control" name="box_icon" value="<?php echo $row['box_icon'];?>" required>  
              </div>
            </div>          

            <div class="form-group">
            <label class='control-label'>Box Description</label>
                <div class='col-sm-9'>
                <textarea name="box_desc" class="textarea" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                     <?php echo $row['box_desc'];?>        
              </textarea>
              </div>
              </div>

              
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Box</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['box_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Box Details</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="box_del.php">
             
                  <input type="hidden" class="form-control" name="box_id" value="<?php echo $row['box_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['box_title']; ?> Category?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['box_id'];?>" style="color: #ffffff;">
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
                  <th>Box Id</th>
                  <th>Box Title</th>
                  <th>Box Icon</th>
                  <th>Box Description</th>            
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