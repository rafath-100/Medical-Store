<!doctype html>
<html lang="en">
<head>
	<?php
  session_start();
	include ("handler/customersession.php");
	?>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--Favicon-->
    <link rel="icon" href="lib/Favicon.jfif">

	<title>OrderConfirmation-VisudhAjivam</title>

</head>
<body>
	<section class="order_confirmation py-5 my-5" id="order_confirmation">
			<div class="container ">
				<div class="section_title text-center mb-5">
					<h1 class="text-capitalize">order confirmation</h1>
				</div>
				<div class="row">
					<div class="col-md-6 mx-auto text-center">
						<div>
							<img src="https://th.bing.com/th/id/OIP.Tlz31My5xZtmIKnHGUTVHgHaGO?w=211&h=180&c=7&o=5&dpr=1.25&pid=1.7" alt="image">
						</div>
						<div>
							<h2>Thankyou for your purchase!</h2>
							<h6>A confirmation email will be sent to
							<b><?php echo $_SESSION['email'] ?></b> within 10 minutes.</h6>
							<!--<h6><span class="mr-2">Order No:</span><span><b>434564</b></span></h6>-->
							<h6>
								<span class="mr-2">Order Status:</span>
								<span>
									<b>
										<span class="badge badge-danger">On the way</span>
									</b>
								</span>
							</h6>
							<a href="index.php" class="btn btn-primary btn-lg mt-5">Return to Home</a>
						</div>
					</div>
				</div>
			</div>
	</section>
</body>
</html>
