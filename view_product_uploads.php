<center style="margin-top: 50px;">
	<h1>Uploaded Products</h1>
	<p class="text-muted">
		Product will be waiting for approval from administrator, you will be notified when approval is done. 
	</p>
</center>

<hr>

<div class="table-responsive">
 <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Product Name</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Brand</th>
                  <th>Product Label</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th>
                  <th>Approval Status</th>                
                  <th>Action</th>
                </tr> 
                </thead>
                <tbody>
               <?php

               $customer_session = $_SESSION['customer_name'];

               $get_customer = "SELECT * FROM customers WHERE customer_name ='$customer_session'";
               $run_customer = mysqli_query($db, $get_customer);
               $row_customer = mysqli_fetch_array($run_customer);
               $customer_id = $row_customer['customer_id'];
              

              $get_approvals = "SELECT * FROM pending_approvals WHERE Seller_id = '$customer_id'";
              $run_approvals = mysqli_query($db, $get_approvals);

        
        while($row_approvals = mysqli_fetch_array($run_approvals))
        {
            $pending_id    = $row_approvals['pending_id'];
            $brand_id      = $row_approvals['brand_id'];
            $label_id      = $row_approvals['label_id'];
            $product_title = $row_approvals['product_title'];
            $product_img1  = $row_approvals['product_img1'];
            $product_img2  = $row_approvals['product_img2'];
            $product_img3  = $row_approvals['product_img3'];
            $product_price = $row_approvals['product_price'];
            $discount_price = $row_approvals['discount_price'];
            $promo_price    = $row_approvals['promo_price'];
            $product_qty    = $row_approvals['product_qty'];
            $product_keywords = $row_approvals['product_keywords'];
            $product_status = $row_approvals['product_status'];
            $product_specs = $row_approvals['product_specs'];
            $product_desc = $row_approvals['product_desc'];
            $product_status = $row_approvals['product_status'];
            $select_brand = "SELECT * FROM brands WHERE brand_id = '$brand_id'";
            $run_brand   = mysqli_query($db, $select_brand);
            $row_brand = mysqli_fetch_array($run_brand);
            $brand_title = $row_brand['brand_title'];
            $select_label = "SELECT * FROM product_labels WHERE label_id = '$label_id'";
            $run_label   = mysqli_query($db, $select_label);
            $row_label = mysqli_fetch_array($run_label);
            $label_title = $row_brand['label_title'];
            

            if($row_approvals['approval_status'] == 'Pending')
            {
               $approval_status =  "<span style='background: red; color: #fff; padding: 5px;'> Pending </span>";
            }
            else
            {
              $approval_status = "<span style='background: green; color: #fff; padding: 5px;'> Approved </span>";
            }

            
       ?>
      <tr>
        <td><?php echo $pending_id; ?></td>
        <td><?php echo $product_title; ?></td>
        <td><img width="60" height="60" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="<?php echo $product_title; ?>"></td>
        <td><img width="60" height="60" src="admin_area/product_images/<?php echo $product_img2; ?>" alt="<?php echo $product_title; ?>"></td>
        <td><img width="60" height="60" src="admin_area/product_images/<?php echo $product_img3; ?>" alt="<?php echo $product_title; ?>"></td>
        <td><?php echo $brand_title; ?></td>
        <td><?php echo $label_title; ?></td>
        <td><?php echo $product_price; ?></td>
        <td><?php echo $discount_price; ?></td>
        <td><?php echo $promo_price; ?></td>
        <td><?php echo $product_qty; ?></td>
        <td><?php echo $product_keywords; ?></td>
        <td><?php echo $product_status; ?></td>
        <td><?php echo $product_specs; ?></td>
        <td><?php echo $product_desc; ?></td>
        <td><?php echo $approval_status; ?></td>
        <td>
            <a href="#delete<?php echo $row['pending_id'];?>" data-target="#delete<?php echo $row['pending_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red" style="color: red;"></i></a> 

        </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
</div>