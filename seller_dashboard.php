<?php 

    $active = 'Sell';
    include("includes/shop_header.php"); 
  ?>
  

<!-- Breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bread-inner">
              <ul class="bread-list">
                <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                 <li>Seller Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <div class="container">
    <div class="row">
    	<div class="col-md-3">
    		<?php include("sidebar.php"); ?>
    	</div>
    	<div class="col-md-9">
          <div class="box">
            <?php
            if(isset($_GET['my_uploads']))
            {
                include("upload.php");
            }
            ?>

            <?php
            if(isset($_GET['view_product_uploads']))
            {
              include("view_product_uploads.php");
            }
            ?>

            <?php
            if(isset($_GET['address_book']))
            {
              include("address_book.php");
            }
            ?>
             <?php
            if(isset($_GET['change_pass']))
            {
              include("change_pass.php");
            }
            ?>
             <?php
            if(isset($_GET['delete_account']))
            {
              include("delete_account.php");
            }
            ?>

        </div>
        </div>
    </div>
</div>





<?php include("includes/shop_footer.php"); ?>








