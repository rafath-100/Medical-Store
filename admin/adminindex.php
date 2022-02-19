<!DOCTYPE html>
<html>
<?php
include("adminpartials/session.php");
include("adminpartials/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<!-- removed content of this file starts here -->
  <div class="col-sm-9">
    <a href="products.php">
      <button style="color: green">Add Products</button>
    </a>
    <hr>
  </div>
  <div class="col-sm-9">
    <a href="categories.php">
      <button style="color: green">Add Categories</button>
    </a>
    <hr>
  </div>
  <div class="col-sm-9">
    <a href="orders.php">
      <button style="color: green">View all orders</button>
    </a>
    <hr>
  </div>

<!-- removed content of this file ends here -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Footer -->
  <?php
  include("adminpartials/footer.php");
  ?>
</body>
</html>
