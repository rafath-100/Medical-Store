<?php
session_start();
include('../partials/connect.php');

$customerid=$_SESSION['customerid'];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$country=$_POST['country'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$total=$_POST['total'];

$payment=$_POST['payment'];

$sql="INSERT INTO orders(customer_id, firstname, lastname, email, phone, address, address2, country, state, zip, total, pay_method) VAlUES('$customerid','$firstname','$lastname','$email','$phone','$address','$address2','$country','$state','$zip','$total','$payment')";
$connect->query($sql);


$sql2="Select id from orders order by id DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$orderid=$final['id'];



foreach ($_SESSION['cart'] as $key => $value) {
	$proid=$value['item_id'];
	$quantity=$value['quantity'];


	$sql3="INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
	$connect->query($sql3);

}

	echo "<script> alert('ORDER IS PLACED');
		window.location.href='../orderconfirmation.php';
		</script>";

unset($_SESSION['cart']);

?>
