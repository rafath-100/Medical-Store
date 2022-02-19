<?php

//fetch_data.php

include('database_connection.php');


if (isset($_POST["action"])) {
	$query = "
		SELECT * FROM product WHERE product_status = '1'
	";
	if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
		$query .= "
		 AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
		";
	}
	if (isset($_POST["brand"])) {
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND product_brand IN('" . $brand_filter . "')
		";
	}
	if (isset($_POST["ram"])) {
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND product_ram IN('" . $ram_filter . "')
		";
	}
	if (isset($_POST["storage"])) {
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND product_storage IN('" . $storage_filter . "')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if ($total_row > 0) {
		foreach ($result as $row) {
			$output .= '
			<div class="col-sm-6 col-lg-4">
				<div style="padding:16px; margin-bottom:16px; height:550px;">
					<img src="image/' . $row['product_image'] . '" alt=""  style="width:100%; height:250px;">
					<p align="center"><strong><a href="#">Dr. ' . $row['product_name'] . '</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >' . $row['product_brand'] . '</h4>
					<p>Experience : ' . $row['product_ram'] . ' Years<br />
					Address :Sector ' . $row['product_camera'] . '<br />
					Fees :₹ ' . $row['product_price'] . ' <br />
					
					Approx distance : ' . $row['product_storage'] . ' KM </p>
					<center><a href="../meeting.php"><button class="btn-primary" style="margin-top:10px;">Book a meeting</button></a></center><br>
					<center><button class="btn-primary">Call now</button><br></center>
					</div>

			</div>
			';
		}
	} else {
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}
