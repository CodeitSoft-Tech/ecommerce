<?php 

$active = 'Slide';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Slides</li>
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
                  <th>Slide Id</th>
                  <th>Slide Name</th>
                  <th>Slide Image</th>
                  <th>Slide Status</th>                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM slider";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['slide_id'];  ?></td>
                      <td><?php echo $row['slide_name'];  ?></td> 
                      <td><?php echo $row['slide_image'];  ?></td>             
                       <td><?php 

                        if($row['slide_status'] == 'Active')
                        {
                          echo "<div class='badge bg-green'>Active</div>";
                        }
                        else 
                        {
                           echo "<div class='badge bg-red'>Inactive</div>";
                        }
                      

                      ?></td>
                       <td>
                  <a href="#update<?php echo $row['slide_id'];?>" data-target="#update<?php echo $row['slide_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $row['slide_id'];?>" data-target="#delete<?php echo $row['slide_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                      <!-- Update Modal -->      
      <div id="update<?php echo $row['slide_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Category Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="slide_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Slide Name</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="slide_id" value="<?php echo $row['slide_id'];?>" required>  
                <input type="text" class="form-control" name="slide_name" value="<?php echo $row['slide_name'];?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Slide Image</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="slide_id" value="<?php echo $row['slide_id'];?>" required>  
                <input type="file" class="form-control" name="slide_image" required> <br>

                <img width="200" height="200" class="img-responsive" src="slide_images/<?php echo $row['slide_image'];?>" alt="<?php echo $row['slide_name'];?>">

              </div>
            </div> 
       
            <div class="form-group">
              <label class="control-label">Slide Status</label>
              <div class="col-sm-9">
               <select class="form-control" name="slide_status" style="width: 100%;" required oninput="SetCustomValidation()" oninvalid="SetCustomValidation('Select slide status')" >
                 <option value="<?php echo $row['slide_status'];?>"><?php echo $row['slide_status'];?></option>
                 <option value="Inactive">Inactive</option>
              </select>
              </div>
            </div>  
          
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Slide</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['slide_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Category</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="slide_del.php">
             
                  <input type="hidden" class="form-control" name="slide_id" value="<?php echo $row['slide_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['slide_name']; ?>?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['slide_id'];?>" style="color: #ffffff;">
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
                  <th>Slide Id</th>
                  <th>Slide Name</th>
                  <th>Slide Image</th>
                  <th>Slide Status</th>                
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