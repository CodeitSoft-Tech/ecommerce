<?php 

$active = 'Box';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Box</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
		        <form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label class="col-md-3 control-label">Box Title</label>
				<div class="col-md-9">
					<input type="text" name="box_title" class="form-control" required>	
				</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label">Box Icon</label>
					<div class="col-md-9">
						<input type="text" name="box_icon" class="form-control" required>	
					</div>
					</div>

					<div class="form-group">
				    <label class="col-md-3 control-label">Box Description</label>
				    <div class="col-md-9">
					<textarea class="form-control" name="box_desc" placeholder="">
						
					</textarea>	
				    </div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-9">
					<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Box
					</button> 
					</div>
				    </div>
					</form>
					 </div>
					</div>
					</div>
				    </div>

                
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
<?php
	
	if(isset($_POST['submit']))
	{
		$box_title   = mysqli_real_escape_string($db, $_POST['box_title']);
		$box_icon    = mysqli_real_escape_string($db, $_POST['box_icon']);
		$box_desc    = mysqli_real_escape_string($db, $_POST['box_desc']);
	
		$view_box = "SELECT * FROM boxes";
		
		$run_box = mysqli_query($db, $view_box);

		$count = mysqli_num_rows($run_box); 

		if($count < 4)
		{

		  $insert_box = "INSERT INTO boxes(box_title, box_icon, box_desc)VALUES('$box_title','$box_icon','$box_desc')";

		 $run_boxes = mysqli_query($db, $insert_box);

		echo "<script>alert('Box inserted successfully')</script>";
		echo "<script>document.location='view_boxes.php'</script>"; 
	}
	else
	{
		echo "<script>alert('Only 4 boxes can be inserted!')</script>";
	}

	}

?>
