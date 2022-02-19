<?php

include ("../partials/connect.php");

if (isset($_POST['signup'])) {
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if ($password==$password2) {
  $sql="INSERT INTO customers(fullname,email,phone,password) VALUES('$fullname','$email','$phone''$password')";
  $connect->query($sql);
  echo "<script> alert('You are registered Successfully');
        window.location.href='../forms.php';
        </script>";
  /*header('location: signin.php');*/
}else{
  echo "<script> alert('Password did not match');
        window.location.href='../forms.php';
        </script>";
}
}
?>
