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

          $id=$_GET['order_id'];
          $sql="SELECT * from orders WHERE id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();
          ?>

          <h3> Customer Id : <?php echo $final['customer_id']?> </h3><hr><br>

          <h3> First Name : <?php echo $final['firstname']?> </h3><hr><br>

          <h3> Last Name : <?php echo $final['lastname']?> </h3><hr><br>

          <h3> Email : <?php echo $final['email']?> </h3><hr><br>

          <h3> Phone : <?php echo $final['phone']?> </h3><hr><br>

          <h3> Address : <?php echo $final['address']?> </h3><hr><br>

          <h3> Address(optional) : <?php echo $final['address2']?> </h3><hr><br>

          <h3> Country : <?php echo $final['country']?> </h3><hr><br>

          <h3> State : <?php echo $final['state']?> </h3><hr><br>

          <h3> Zip Code : <?php echo $final['zip']?> </h3><hr><br>

          <h3> Total : <?php echo $final['total']?> </h3><hr><br>

          <h3> Payment Method : <?php echo $final['pay_method']?> </h3><hr><br>


      </div>

      <div class="col-sm-9">

          <?php

          $sql2="SELECT * from order_details WHERE order_id='$id'";
          $results=$connect->query($sql2);

          $final=$results->fetch_assoc();
          ?>

          <h3> Product Id : <?php echo $final['product_id']?> </h3><hr><br>

          <h3> Quantity : <?php echo $final['quantity']?> </h3><hr><br>


        </div>

        <div class="col-sm-9">

            <?php

            $sql3="SELECT * from order_details WHERE order_id='$id' && id>'$id'";
            $results=$connect->query($sql3);

            $final=$results->fetch_assoc();
            ?>

            <h3> Product Id : <?php echo $final['product_id']?> </h3><hr><br>

            <h3> Quantity : <?php echo $final['quantity']?> </h3><hr><br>


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
