<?php 

$active = 'Editor';
include("includes/header.php"); ?>

<?php  
    
    $file = "../style.css";

    if(file_exists($file))
    {
       $data = file_get_contents($file);
    }


?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">CSS Editor</li>
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
            <div class="card">
              <div class="card-body">
                  
                  <form action="post" method="" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-lg-12">
                        <textarea name="newdata" id="" cols="30" rows="15" class="form-control">
                          <?php echo  $data; ?>
                        </textarea>
                    </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-md-6"></label>
                      <div class="col-md-9">
                        <input type="submit" name="update" value="Update CSS" class="form-control btn btn-primary">
                      </div>
                    </div>

                </form>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>

<?php
 
  // Code to update a file not present in a Database.
  
    if(isset($_POST['update']))
    {
      $newdata = $_POST['newdata'];
      $handle = fopen($file, "w");
      fwrite($handle, $newdata);
      fclose($handle);


      echo"<script>alert('CSS updated successfully')</script>";
       echo"<script>document.location='editor.php'</script>";
    }


?>