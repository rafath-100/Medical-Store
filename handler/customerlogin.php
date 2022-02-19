<?php
session_start();
include ('../partials/connect.php');

if(isset($_POST['signin'])){

  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * from customers Where email='$email' AND password='$password'";
  $results=$connect->query($sql);
  $final=$results->fetch_assoc();

  $_SESSION['email']=$final['email'];
  $_SESSION['password']=$final['password'];

  $_SESSION['customerid']=$final['id'];

  if($email=$final['email'] AND $password=$final['password']){
    $_SESSION['email']=$final['email'];
    echo "<script> alert('You are succesfully signed in.');
          window.location.href='../index.php';
          </script>";
  }else{
    echo "<script> alert('Username and Password did not match');
          window.location.href='../forms.php';
          </script>";
  }
}
?>
