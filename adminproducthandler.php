<?php
include("partials/connect.php");
$name=$_POST['name'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$actualprice=$_POST['actualprice'];
$description=$_POST['description'];
$category=$_POST['category'];

$target="uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="uploads/".$file_name;

move_uploaded_file($file_tmp, $file_store);

$sql="INSERT INTO products(name,price,picture,discount,actualprice,description,category_id) VALUES('$name','$price','$file_path','$discount','$actualprice','$description','$category')";

$connect->query($sql);

header('location: admin/productsshow.php');
?>
