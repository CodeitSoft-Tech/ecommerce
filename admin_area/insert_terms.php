<?php 

$active = 'Terms';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Terms & Conditions</li>
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
		        <form action="insert_terms.php" class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label class="col-md-3 control-label">Term Title</label>
				<div class="col-md-9">
					<input type="text" name="term_title" class="form-control" required>	
				</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label">Term Link</label>
					<div class="col-md-9">
						<input type="text" name="term_link" class="form-control" required>	
					</div>
					</div>

					<div class="form-group">
				    <label class="col-md-3 control-label">Term Description</label>
				    <div class="col-md-9">
					<textarea class="form-control" name="term_desc" placeholder="">
						
					</textarea>	
				    </div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-9">
					<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Terms
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
		$term_title   = mysqli_real_escape_string($db, $_POST['term_title']);
		$term_link    = mysqli_real_escape_string($db, $_POST['term_link']);
		$term_desc    = mysqli_real_escape_string($db, $_POST['term_desc']);
	

		  $insert_term = "INSERT INTO terms(terms_title, terms_link, terms_desc)VALUES('$term_title','$term_link','$term_desc')";

		  $run_term = mysqli_query($db, $insert_term);

		if($run_term)
		{
			echo "<script>alert('Terms inserted successfully')</script>";
			echo "<script>document.location='view_terms.php'</script>"; 
		}

   }


?>
