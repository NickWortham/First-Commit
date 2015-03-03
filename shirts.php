<?php

$products = array();
$products[101]= array(
	 "name" => "Logo Shirt, Red",
	 "price" => 18,
	 "img" => "img/shirts/shirt-101.jpg",
	 "paypal" => "9P7DLECFD4LKE"
);
$products[102]= array(
	 "name" => "Mike the Frog Shirt, Black",
	 "price" => 20,
	 "img" => "img/shirts/shirt-102.jpg",
	 "paypal" => "9P7DLECFD4LKE"
);
$products[103]= array(
	 "name" => "Mike the Frog Shirt, Blue",
	"price" => 20,
	"img" =>  "img/shirts/shirt-103.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
$products[104]= array(
	"name" => "Logo Shirt, Green",
	"price" => 18,
	"img" =>  "img/shirts/shirt-104.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
$products[105]= array(
	"name" => "Mike the Frog Shirt, Yellow",
	"price" => 25,
	"img" =>  "img/shirts/shirt-105.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
$products[106]= array(
	"name" => "Logo Shirt, Gray",
	"price" => 20,
	"img" =>  "img/shirts/shirt-106.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
$products[107]= array(
	"name" => "Logo Shirt, Turqoise",
	"price" => 20,
	"img" =>  "img/shirts/shirt-107.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
$products[108]= array(
	"name" => "Logo Shirt, Orange",
	"price" => 25,
	"img" =>  "img/shirts/shirt-108.jpg",
	"paypal" => "9P7DLECFD4LKE"
);
?><?php
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

			<div class="section shirts page">

				<div class="wrapper">

				<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

				<ul class ="products">
					<?php foreach($products as $product) {
							echo "<li>";
							echo '<a href="#">';
							echo '<img src="' . $product["img"] . '" alt ="' . $product["name"]
							echo "<p>View Details</p>";
							echo "</a>";
							echo "</li>";
						}
					?>
				</ul>

			</div>

<?php include('inc/footer.php'); ?>
