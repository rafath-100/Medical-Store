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
    <div class="row">
      <div class="col-sm-9">



      <?php
          include('../partials/connect.php');

          $sql="Select * from orders";
          $results=$connect->query($sql);
          while($final=$results->fetch_assoc()){ ?>

          <a href="ordershow.php?order_id=<?php echo $final['id']?>">
            <h4><?php echo $final['id'] ?>: <?php echo $final['email']?></h4>
            <h4>Cost: <?php echo $final['total']?></h4><br>
          </a>

          <a href="orderdelete.php?del_id=<?php echo $final['id'] ?>">
            <button style="color:red">Delete</button>
          </a><hr>

         <?php }
          ?>

      </div>
    <div class ="col-sm-3">
    </div>
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
