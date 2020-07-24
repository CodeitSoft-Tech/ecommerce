<?php

	$active = 'Sell';
 include("includes/shop_header.php"); ?>

<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="sell_request.php">Requests</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Breadcrumbs -->


	<div class="container-fluid" style="background-color: #f7941d; padding-top: 50px; padding-bottom: 50px;">
		<div class="col-sm-10 offset-sm-1">
			<form class="form-horizontal" style="background-color: #fff; padding: 50px;">
				<div class="form-group">
				<label>Full Name</label>
				<input type="text" class="form-control" name="">
			    </div>

			    <div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email">
			    </div>

			    <div class="form-group">
				<label>Phone Number</label>
				<input type="text" class="form-control" name="contact">
			    </div>

			    <div class="form-group">
				<label>Gender</label>
				<input type="text" class="form-control" name="gender">
			    </div>

			    <div class="form-group">
				<label>Region</label>
				<input type="text" class="form-control" name="region">
			    </div>

			    <div class="form-group">
				<label>Town</label>
				<input type="text" class="form-control" name="town">
			    </div>

			    <div class="form-group">
				<label>Phone Number</label>
				<input type="" class="form-control" name="contact">
			    </div>

			    <div class="form-group">
				<label>Your Product category</label>
				<input type="checkbox" name="" value="Yes">Yes
				<input type="checkbox" name="" value="No"> No 
				
			    </div>

			    
			    <select class="form-control">
			    	<option value="Car" class="form-control">Car</option>
			    </select>

			</form>
		</div>
	</div>









<?php include("includes/shop_footer.php"); ?>