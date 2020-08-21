<?php 

	$active = 'Shop';
	include("includes/shop_header.php"); ?>
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="terms.php">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!--
		<div class="container" style="margin-top: 50px; margin-bottom: 30%;">
			<div class="row">			
				<div class="col-md-12">
				</div>
				<div class="col-md-3">
				<div class="card" style="">
				  <div class="card-body">
				    <ul class="nav nav-pills nav-fill">

					<?php

						$get_terms = "SELECT * FROM terms LIMIT 0,1";
						$run_terms = mysqli_query($db, $get_terms
						);

						while($row_terms = mysqli_fetch_array($run_terms))
						{

							$term_title = $row_terms['terms_title'];
							$term_link = $row_terms['terms_link'];

					?>

					<li class="nav-item">
				    <a data-toggle="pill" class="nav-link active" href="#<?php echo $term_link; ?>">
				    	<?php echo $term_title; ?>
				   
				   </a>
				  </li>

				<?php } ?>

				<?php

					$count_terms = "SELECT * FROM terms";
					$run_count_terms = mysqli_query($db, $count_terms);

					$count = mysqli_num_rows($run_count_terms);

					$get_terms = "SELECT * FROM terms LIMIT 1,$count";
					$run_terms = mysqli_query($db, $get_terms);
					while($row_terms = mysqli_fetch_array($run_terms))
					{
						$term_title = $row_terms['terms_title'];
						$term_link = $row_terms['terms_link'];
					?>


					<li class="nav-item">
				    <a data-toggle="pill" class="nav-link" href="#<?php echo $term_link; ?>">

				    <?php echo $term_title; ?>
				   
				   </a>
				  </li>

				<?php }
				?>		
				</ul>
				  </div>
				</div>
				
				</div>

				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
						<?php
							$get_terms = "SELECT * FROM terms LIMIT 0,1";
							$run_terms = mysqli_query($db, $get_terms);

							while($row_terms = mysqli_fetch_array($run_terms))
							{
								$term_title = $row_terms['terms_title'];
								$term_link = $row_terms['terms_link'];
								$term_desc = $row_terms['terms_desc'];
						?>

					   <div id="<?php echo $term_link; ?>" class="tab-pane active">

					 	<h1 class="tabTitle"><?php echo $term_title; ?></h1>
					 	<hr>
					 	<p class="tabDesc"><?php  echo $term_desc;  ?></p>

					 </div>					

					<?php } ?>

					<?php

						$count_terms = "SELECT * FROM terms";
						$run_count_terms = mysqli_query($db, $count_terms);

						$count = mysqli_num_rows($run_count_terms);

						$get_terms = "SELECT * FROM terms LIMIT 1, $count";
						$run_terms = mysqli_query($db, $get_terms);

						while($row_terms = mysqli_fetch_array($run_terms))
						{
							$term_title = $row_terms['terms_title'];
							$term_link = $row_terms['terms_link'];
							$term_desc = $row_terms['terms_desc'];
					?>

						   <div id="<?php echo $term_link; ?>" class="tab-pane">

						 	<h1 class="tabTitle"><?php echo $term_title; ?></h1>
						 	<hr>
						 	<p class="tabDesc"><?php  echo $term_desc;  ?></p>

						 </div>	
				    
				     <?php } ?>



					</div>
				</div>
				</div>

			</div>
		</div> -->
<div class="container" style="margin-top: 50px; margin-bottom: 30%;">
   <nav>
   	              <?php

						$get_terms = "SELECT * FROM terms LIMIT 0,1";
						$run_terms = mysqli_query($db, $get_terms
						);

						while($row_terms = mysqli_fetch_array($run_terms))
						{

							$term_title = $row_terms['terms_title'];
							$term_link = $row_terms['terms_link'];

					?>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="#<?php echo $term_link; ?>" data-toggle="tab" href="#<?php echo $term_link; ?>" role="tab" aria-controls="nav-pro-desc" aria-selected="true">
      	
      		<?php echo $term_title; ?>

      </a>
      	<?php } ?>

      	<?php

					$count_terms = "SELECT * FROM terms";
					$run_count_terms = mysqli_query($db, $count_terms);

					$count = mysqli_num_rows($run_count_terms);

					$get_terms = "SELECT * FROM terms LIMIT 1,$count";
					$run_terms = mysqli_query($db, $get_terms);
					while($row_terms = mysqli_fetch_array($run_terms))
					{
						$term_title = $row_terms['terms_title'];
						$term_link = $row_terms['terms_link'];
					?>


      <a class="nav-item nav-link" id="#<?php echo $term_link; ?>" data-toggle="tab" href="#<?php echo $term_link; ?>" role="tab" aria-controls="nav-specs" aria-selected="false"><?php echo $term_title;  ?></a>
       <?php } ?>
    </div>
  </nav>

                     <?php
							$get_terms = "SELECT * FROM terms LIMIT 0,1";
							$run_terms = mysqli_query($db, $get_terms);

							while($row_terms = mysqli_fetch_array($run_terms))
							{
								$term_title = $row_terms['terms_title'];
								$term_link = $row_terms['terms_link'];
								$term_desc = $row_terms['terms_desc'];
						?>

  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane show active" id="<?php echo $term_link; ?>" role="tabpanel"><?php echo $term_desc; ?></div>
    			<?php } ?>

    			<?php

						$count_terms = "SELECT * FROM terms";
						$run_count_terms = mysqli_query($db, $count_terms);

						$count = mysqli_num_rows($run_count_terms);

						$get_terms = "SELECT * FROM terms LIMIT 1, $count";
						$run_terms = mysqli_query($db, $get_terms);

						while($row_terms = mysqli_fetch_array($run_terms))
						{
							$term_title = $row_terms['terms_title'];
							$term_link = $row_terms['terms_link'];
							$term_desc = $row_terms['terms_desc'];
					?>


    <div class="tab-pane fade" id="<?php echo $term_link; ?>" role="tabpanel"> 
      <?php echo $term_desc; ?></div>
      <?php } ?>
</div>
</div>


		<?php include("includes/shop_footer.php"); ?>