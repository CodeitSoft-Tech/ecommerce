<?php 

$active = 'Slide';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Slide</li>
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
		<label class="col-md-3 control-label">Slide Name</label>
		<div class="col-md-9">
			<input type="text" name="slide_name" class="form-control" required>	
		</div>
			</div>

			<div class="form-group">
		    <label class="col-md-3 control-label">Slide Image</label>
		    <div class="col-md-9">
			<input type="file" name="slide_image" class="form-control" required>	
		    </div>
			</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Slide Status</label>
		<div class="col-md-9">
		<select name="slide_status" class="form-control" required>
			<option disabled selected>Select slide Status</option>
			<option value="Active">Active</option>
			<option value="Inactive">Inactive</option>
		</select>	
		</div>
		</div>
	

			<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
			<button type="submit" class="btn btn-primary form-control" name="submit">
			<i class="fa fa-upload"></i> Insert Slide
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
		$slide_name   = mysqli_real_escape_string($db, $_POST['slide_name']);
		$slide_status = mysqli_real_escape_string($db, $_POST['slide_status']);
		
		$slide_image = $_FILES['slide_image']['name'];
		$temp_name  = $_FILES['slide_image']['tmp_name'];

		$view_slides = "SELECT * FROM slider";
		
		$view_run_slide = mysqli_query($db, $view_slides);

		$count = mysqli_num_rows($view_run_slide); 

		if($count < 4)
		{
		  move_uploaded_file($temp_name,"slide_images/$slide_image");

		  $insert_slide = "INSERT INTO slider(slide_name, slide_image, slide_status)VALUES('$slide_name','$slide_image','$slide_status')";

		 $run_slide = mysqli_query($db, $insert_slide);

		echo "<script>alert('Slider has been inserted successfully')</script>";
		echo "<script>document.location='view_slide.php'</script>"; 
	}
	else
	{
		echo "<script>alert('You have inserted 4 slides')</script>";
	}

	}

?>
