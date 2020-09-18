<?php 

$active = 'Label';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Label</li>
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
				<label class="col-md-3 control-label">Label Title</label>
				<div class="col-md-9">
				<input type="text" name="label_title" class="form-control" required>	
				</div>
				</div>

					<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-9">
					<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Label
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
		$label_title   = mysqli_real_escape_string($db, $_POST['label_title']);
		

		$insert_label = "INSERT INTO product_labels(label_title)VALUES('$label_title')";

		 $run_label = mysqli_query($db, $insert_label);

		echo "<script>alert('Label inserted successfully')</script>";
		echo "<script>document.location='view_label.php'</script>"; 
	}
	

	

?>
