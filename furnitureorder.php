#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
	<html lang="en">
			<title>Furniture Receipt</title>
			<link rel="stylesheet" href="orderText.css">
			<meta charset="utf-8">
		<header>
			<ul>
				<li><a href="furniture.html">Homepage</a></li>
				<li><A href="products.html">View our Products here!</A></li>
				<li><A href="order.html">Order NOW!</A></li>
			</ul>
		</header>	
		<body>
				<h1>FURNITURE RECEIPT</h1>
				<!--<div class = "receipt_page">-->
				<!--</div>-->
				<h1>First Name: </h1>
				<h1>Address: </h1>
				<h1>Phone Number: </h1>
				<h1>Email: </h1>
				<h1> Thank you for ordering from us!</h1>
				<h1>
			<!--	<a href ="furnitureorder.txt">Print Receipt</a> -->
				</h1>

				<?php
			/*		$file = fopen("furnitureorder.txt","w");
					echo fwrite($file,"First name: ");
					echo fwrite($file,"Middle name: ");
					echo fwrite($file,"Last name: ");
					echo fwrite($file,"");
					fclose($file);*/
				?>
				
		<footer>
			<p>Contact information - Name: Mukesh Sehdev Email: sehdev.mukesh@yahoo.com </p>
			<p><!--#echo var="LAST_MODIFIED"--></p>
		</footer>
	 </body>	
	 <?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
	</html>