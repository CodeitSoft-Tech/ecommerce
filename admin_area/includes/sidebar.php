
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
          <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="dashboard.php" class="nav-link <?php if($active == 'dashboard') echo "active";?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Product') echo "active";?>">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="insert_product.php" class="nav-link <?php if($active == 'Product') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_product.php" class="nav-link <?php if($active == 'View Product') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Product Categories') echo "active";?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Product Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="insert_product_category.php" class="nav-link <?php if($active == 'Product Categories') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Product Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_product_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Product Categories</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="approve_products.php" class="nav-link <?php if($active == 'Approve') echo "active";?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                 Approve Products
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Category') echo "active";?>">
              <i class="nav-icon fa fa-paperclip"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="insert_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Slide') echo "active";?>">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Slides
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="insert_slide.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Slide</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_slide.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slides</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
          <a href="view_customers.php" class="nav-link <?php if($active == 'Customers') echo "active";?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                 View Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="view_sellers.php" class="nav-link <?php if($active == 'Sellers') echo "active";?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                 View Sellers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="view_orders.php" class="nav-link <?php if($active == 'Orders') echo "active";?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                 View Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="view_payment.php" class="nav-link <?php if($active == 'Payments') echo "active";?>">
              <i class="nav-icon fas fa-money-bill-wave-alt"></i>
              <p>
                 View Payments
              </p>
            </a>
          </li>
             <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'User') echo "active";?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="insert_users.php" class="nav-link <?php if($active == 'User') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_users.php" class="nav-link <?php if($active == 'User') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Box') echo "active";?>">
              <i class="nav-icon fa fa-th-list"></i>
              <p>
                 Boxes
                <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="insert_boxes.php" class="nav-link <?php if($active == 'Box') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Box</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_boxes.php" class="nav-link <?php if($active == 'Box') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Box Information</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <!-- Place active here -->
            <a href="#" class="nav-link <?php if($active == 'Terms') echo "active";?>">
              <i class="nav-icon fa fa-book"></i>
              <p>
                 Terms & Conditions
                <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="insert_terms.php" class="nav-link <?php if($active == 'Terms') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Terms Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_terms.php" class="nav-link <?php if($active == 'Terms') echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Terms & Conditions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="editor.php" class="nav-link <?php if($active == 'Editor') echo "active";?>">
              <i class="nav-icon fas fa-code"></i>
              <p>
                 CSS Editor
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                 Logout
              </p>
            </a>
          </li>
          
          

          
        

          
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    
    </div>
    <!-- /.sidebar -->
  </aside>



