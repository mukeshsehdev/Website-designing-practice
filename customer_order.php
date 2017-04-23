#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
	<html lang="en">
			<meta charset="utf-8">
			<title>F&F Order Page</title>
			<link rel="stylesheet" href="orderForm.css">
			<!--<script type="text/javascript" src="ordering.js"></script>-->
			<header>
				<ul>
					<li><a href="furniture.html">Homepage</a></li>
					<li><A href="products.html">View our Products here!</A></li>
					<li><A href="order.html">Order NOW!</A></li>
				</ul>
			</header>
			<body>
						<h1>ORDER PAGE</h1>
						<div class = "order_page">
						</div>
				<form method = "post" action="#" id="mainForm">
		
			<!--PHP for the furniture choice option-->
							<?php
								$furniturePick = $_POST['furniture'];
								$Furn_Price = 0;
								$Shipping_Fee = 0.12;
								$Shipping_Total = 0;

								//If statements for the furniture selection
								    if ($furniturePick == "big_bank_theory") {
										$Furn_Price = 15000;
									}
									if ($furniturePick == "70s_show"){
										$Furn_Price = 30000;
									}
									if ($furniturePick == "friends_couch"){
										$Furn_Price = 50000;
									}
									if ($furniturePick == "seinfeld_couch"){
										$Furn_Price = 250000;
									}
									if ($furniturePick == "game_thrones"){
										$Furn_Price = 5000000;
									}
									if ($furniturePick == "star_trek"){
										$Furn_Price = 150000;
									}
									if ($furniturePick == "men_in_black"){
										$Furn_Price = 25000;
									}
									if ($furniturePick == "forrest_gump"){
										$Furn_Price = 400000;
									}
									if ($furniturePick == "star_wars"){
										$Furn_Price = 400000;
									}
									if ($furniturePick == "throne_of_gondor"){
										$Furn_Price = 800000;
									}
									if ($furniturePick == "wayne's_world_couch"){
										$Furn_Price = 25000;
									}
									if ($furniturePick == "back_to_future"){
										$Furn_Price = 75000;
									}
									if ($furniturePick == "simpsons_couch"){
										$Furn_Price = 500000;
									}
									if ($furniturePick == "beavis_couch"){
										$Furn_Price = 10000;
									}
									if ($furniturePick == "scooby_doo"){
										$Furn_Price = 300000;
									}
									if ($furniturePick == "snoopy_house"){
										$Furn_Price = 1000000;
									}
									if ($furniturePick == "spongebob_bed"){
										$Furn_Price = 40000;
									}
									if ($furniturePick == "flintstone_couch"){
										$Furn_Price = 5000000;
									}
									if ($furniturePick == "abe_lincoln"){
										$Furn_Price = 1000000;
									}
									if ($furniturePick == "potus_desk"){
										$Furn_Price = 999999999;
									}
									if ($furniturePick == "sweden_chair"){
										$Furn_Price = 100000000;
									}
									if ($furniturePick == "oprah_chair"){
										$Furn_Price = 250000;
									}
									if ($furniturePick == "conan_desk"){
										$Furn_Price = 5000000;
									}
									if ($furniturePick == "queen_chair"){
										$Furn_Price = 10000000;
									}
								//Shipping Total Cost
								$Shipping_Total = ($Furn_Price * $Shipping_Fee) + $Furn_Price;
							?>
							<!--End of Furniture List-->
		
		
		
		<!--CUSTOMER RECEIPT-->
			 <fieldset>
				 <legend>FURNITURE RECEIPT</legend>
				
				<!--<div class = "receipt_page">-->
				<!--</div>-->

				<!--Display customer name and information of the Furniture choice-->
				<?php
				if ($generalError == 0){
					echo "Name: ", $_POST['first_name'], ' ', $_POST['middle_name'], ' ', $_POST['last_name']."<br>";					
					echo "Phone Number: ", $_POST['phone_number']."<br>";
					echo "Email: ", $_POST['email']."<br>"; 
					echo "Street: ", $_POST['street_input']."<br>";
					echo "City: ", $_POST['city_input']."<br>";
					echo "State: ", $_POST['state_input']."<br>";
					echo "ZipCode: ", $_POST['zip_input']."<br>";
					echo "<br>";
					//echo "Product choice: ", $furniturePick.<"br">;
					echo "Total: $", $Furn_Price."<br>";
					echo "Shipping Total: $", $Shipping_Total."<br>";
					echo "<br>";
					echo "THANK YOU ORDERING FROM US!";
				}
				else {
					echo "Fill in the requirements!";
				}
				?>
				<br>
				<!--Link to Customer Receipt-->
				<a href ="furnitureorder.txt">Print Receipt</a>
				<?php
					$file = fopen("furnitureorder.txt","w");
					fwrite($file," Name: ". $_POST['first_name']. ' ', $_POST['middle_name']. ' ', $_POST['last_name']);
					fclose($file);
				?>
				</fieldset>
		<!--End of CUSTOMER RECEIPT-->		
			
					<fieldset>
						<legend>Product Information</legend>
						<label> 
							Pick your furniture of choice
							<br>
						<!--List of Furnitures-->
							<select name="furniture" id="$furniturePicks" required onchange="$furniturePick()" >
								<option disabled selected value> Pick a furniture</option>
								<option value="big_bank_theory">TV - Big Bang Theory Couch: $15,000</option>
								<option value="70s_show">TV - That 70's show Basement Couch: $30,000</option>
								<option value="friends_couch">TV - Friend's Central Perk Couch: $50,000</option>
								<option value="seinfeld_couch">TV - Seinfeld & Costanza's Couch: $250,000</option>
								<option value="game_thrones">TV - Game of Throne's Iron Throne: $5,000,000</option>
								<option value="star_trek">TV - Star Trek Captain's Chair: $150,000</option>
								<option value="men_in_black">Movie - Men in Black Egg Chair: $25,000</option>
								<option value="forrest_gump">Movie - Forrest Gump Bench: $400,000</option>
								<option value="star_wars">Movie - Star Wars Emperor's Throne: $400,000</option>
								<option value="throne_of_gondor">Movie - Throne of Gondor: $800,000</option>
								<option value="wayne's_world_couch">Movie - Wayne's World Couch & Chair: $25,000</option>
								<option value="back_to_future">Movie - Back to the Future Driver Seat: $75,000</option>
								<option value="simpsons_couch">Animation - The Simpson's Family Couch: $500,000</option>
								<option value="beavis_couch">Animation - Beavis & Butthead Couch: $10,000</option>
								<option value="scooby_doo">Animation - Mystery Machine Driver's Seat: $300,000</option>
								<option value="snoopy_house">Animation - Snoopy's Doghouse: $1,000,000</option>
								<option value="spongebob_bed">Animation - Spongebob's Bed: $40,000</option>
								<option value="flintstone_couch">Animation - Flinstone's Couch: $5,000,000</option>
								<option value="abe_lincoln">Celebrities/Famous People - Abraham Lincoln's Chair: $1,000,000</option>
								<option value="potus_desk">Celebrities/Famous People - POTUS desk: $999,999,999</option>
								<option value="sweden_chair">Celebrities/Famous People - Sweden Royalty Chair: $100,000,000</option>
								<option value="oprah_chair">Celebrities/Famous People - Oprah Winfrey's Chair: $250,000</option>
								<option value="conan_desk">Celebrities/Famous People - Conan O'brian's Desk: $5,000,000</option>
								<option value="queen_chair">Celebrities/Famous People - Queen of England's Chair: $10,000,000</option>
							</select>
							</label>
							<br>
							</br>
							<label> Pick color of choice (NO EXTRA CHARGE!)
							<br>
							<select name="color" id="choose_color" required>
								<option disabled selected value>Pick a color</option>
								<option>Red</option>
								<option>Maroon</option>
								<option>Indian Red</option>
								<option>Mango Orange</option>
								<option>Olive Green</option>
								<option>Forest Green</option>
								<option>Shamrock</option>
								<option>Teal Blue</option>
								<option>Cerulean Blue</option>
								<option>Cobalt</option>
								<option>Royal Purple</option>
								<option>Gold</option>
								<option>Silver Gray</option>
								<option>Night Black</option>
								<option>White</option>
							</select>
							</label>
							</br>
							<!--<label>Total Price (Shipping Charge NOT Included!)</label>-->
							<div id="furn_total"> </div> <span id="totalPrice"></span>			
					<br>
					</fieldset>	
					
				<!--PHP Validations for everything-->
					<?php
					$generalError = 0;
					$fNameErr = ""; //First Name 
					$lNameErr = ""; //Last Name 
					$mNameErr = ""; //Middle Name 
					$phoneErr = ""; //Phone Number
					$emailErr = ""; //Email Address
					$streetErr = ""; //Street Address 
					$cityErr = ""; //City Name
					$stateErr = ""; //State Name
					$zipErr = ""; //Zip Code
					$name = "";
					$nameDisplay = 0;
					$submitting = $_POST['testSubmit'];
					if ($submitting == "Submit"){
					
					//VALIDATION FOR FIRST NAME
					  if (empty($_POST['first_name'])) {
						$fNameErr = "First Name is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for First Name
					  else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['first_name'])){
						  $fNameErr = "No numbers allowed for First Name*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['first_name'];
					  }
					  
					  //VALIDATION FOR MIDDLE NAME
					  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['middle_name'])){
						  $mNameErr = "No numbers allowed for Middle Name*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  //Regex for Middle Name
					  else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['middle_name'])){
						  $mNameErr = "No numbers allowed for Middle Name*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['middle_name'];
					  }
					  
					  //VALIDATION FOR LAST NAME
					  if (empty($_POST['last_name'])){
						$lNameErr = "Last Name is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for Last Name
					  else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['last_name'])){
						  $lNameErr = "No numbers allowed for Last Name*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['last_name'];
					  }
					  
					  //VALIDATION FOR PHONE NUMBER
					  if (empty($_POST['phone_number'])){
						$phoneErr = "Phone Number is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for Phone Number
					  else if (!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/", $_POST['phone_number'])){ 
						  $phoneErr = "10 digits needed for Phone Number (Spaces NOT included)*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['phone_number'];
					  }
					  
					  //VALIDATION FOR E-MAIL
					  if (empty($_POST['email'])){
						$emailErr = "Email is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for Email Address
					  else if (!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST['email'])){
						  $emailErr = "Wrong Input for email address*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['email'];
					  }
					  
					  //VALIDATION FOR STREET ADDRESS
					  if (empty($_POST['street_input'])){
						$streetErr = "Street is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for Street Address
						else if (!preg_match("/^[0-9]+\ +[a-zA-Z]+\ +[a-zA-Z]+\$/", $_POST['street_input'])){
						  $streetErr = "Wrong Input for street address*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['street_input'];
					  }
					  
					  //VALIDATION FOR CITY
					 if (empty($_POST['city_input'])){
						$cityErr = "City is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for City Name
					 else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['city_input'])){
						  $cityErr = "No numbers allowed for City Name*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['city_input'];
					  }
					  
					  //VALIDATION FOR STATE 
					 if (empty($_POST['state_input'])){
						$stateErr = "State is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for State Abbreviation
					 else if (!preg_match("/(^|[ ,])[a-zA-Z]{2}($|[ ,])/", $_POST['state_input'])){
						  $stateErr = "Wrong Input for State (Must be Abbreviated)*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else {
						  $name = $_POST['state_input'];
					  }
					  
					  //VALIDATION FOR ZipCode
					  if (empty($_POST['zip_input'])){
						$zipErr = "ZipCode is required*";
						$nameDisplay = 1;
						$generalError = 1;
					  }
					  //Regex for Zip Code
					  else if (!preg_match("/^([0-9]{5})(-[0-9]{4})?$/i", $_POST['zip_input'])){
						  $zipErr = "5 digits need for ZipCode*";
						  $nameDisplay = 1;
						  $generalError = 1;
					  }
					  else{
						  $name = $_POST['zip_input'];
					  }
					  
					}
					?>
					
				<!--Contact Information--------------->	
					<fieldset>
						<legend>Contact Information</legend> 
							<label> First Name
						<br>
							<form method = "post" action = "">  
							<input type = "text" name ="first_name" id="first_name" placeholder="Enter First Name" required/>
							<span class ="error">
							<?php
							if ($nameDisplay == 1) {
								echo $fNameErr;
							}
							?>
							</span>
							<br>
							</label>
							<br>
							<label> Middle Name (Optional)
							<br>
							<input type = "text" name ="middle_name" id="middle_name" placeholder="Enter Middle Name"/>
							<span class ="error">
							<?php
							if ($nameDisplay == 1) {
								echo $mNameErr;
							}
							?>
							</span>
							<br>
							</label>
							<br>
							<label> Last Name
							<br>
							<input type = "text" name ="last_name" id="last_name" placeholder="Enter Last Name" required/>
							<span class ="error">
							<?php
							if ($nameDisplay == 1) {
								echo $lNameErr;
							}
							?>
							</span>
							<br>
							</label>
							<br>
							<label> Phone Number
							<br>
							<input type = "text" name ="phone_number" id="phone_number" placeholder="xxxxxxxxxx" required/>
							<span class ="error">
							<?php
							if ($nameDisplay == 1) {
								echo $phoneErr;
							}
							?>
							</span>
							<br>
							</label>
							<br>
							<label> Email
							<br>
							<input type = "text" name ="email" id="email" placeholder="tom.hanks@gmail.com" required/>
							<span class ="error">
							<?php
							if ($nameDisplay == 1) {
								echo $emailErr;
							}
							?>
							</span>
							</label>
							<br>
					</fieldset>
		
				<!---SHIPMENT INFORMATION------>
					
					<fieldset>
						<legend>Shipment</legend>
						 <div class ="radio_buttons" id = "shipping_option">
							<label><input type="radio" name="shipping" value = "delivery" onclick ="show()" id ="delivery" checked />Delivery</label>
							<label><input type="radio" name="shipping" value = "pick-up" onclick ="hide()" id ="pick-up"/>Pick-up</label>
							<p></p>
						 </div>
							<div id="delivery_choose">	
								<label> Street
								<br>
								<input type="text" id="street" name="street_input" placeholder="1234 Fake Street" required/>
								<span class ="error">
								<?php
								if ($nameDisplay == 1) {
								echo $streetErr;
								}
								?>
							</span>
								<br>
								</label>
								<br>
								<label> City
								<br>
								<input type="text" id="city" name="city_input" placeholder="Enter City Name" required/>
								<span class ="error">
								<?php
								if ($nameDisplay == 1) {
								echo $cityErr;
								}
								?>
							</span>
								<br>
								</label>
								<br>
								<label> State
								<br>
								<input type="text" id="state" name="state_input" placeholder="CA" required/>
								<span class ="error">
								<?php
								if ($nameDisplay == 1) {
								echo $stateErr;
								}
								?>
							</span>
								<br>
								</label>
								<br>
								<label> ZipCode
								<br>
								<input type="text" id="zip" name="zip_input" placeholder="xxxxxx" required/>
								<span class ="error">
								<?php
								if ($nameDisplay == 1) {
								echo $zipErr;
								}
								?>
							</span>
								<br>
								</label>
								<br>
						 </div>
						
						
						 <div id="submit_reset">
							<input type="submit" name = "testSubmit" value="Submit">
							<input type="reset" value="Reset">
						 </div>
						<br>
						<label>Special Sale!</label>
						<br>
						<div class ="radio_buttons" id = "surprise_sale">
							<label><input type="radio" name="sale" value = "saleOn" onclick ="showsale()" id ="saleOn" checked />Show Sale</label>
							<label><input type="radio" name="sale" value = "saleOff" onclick ="hidesale()" id ="saleOff" />Hide Sale</label>
							<br>
						 </div>
							<div id="surprise_choose">					
								<p>FULL HOUSE COUCH - ABSOLUTELY FREE!!!!</p>
								<p></p>
								<img src ="http://imagesmtv-a.akamaihd.net/uri/mgid:file:http:shared:mtv.com/news/wp-content/uploads/2016/01/Screen-Shot-2016-01-07-at-11.14.47-AM-1452186570.png?quality=0.85&format=jpg&width=480" 
								alt="Full House">
								<p></p>
							</div>
						</fieldset>
				 </form>
				 </body>
		<footer>
			<p>Contact information - Name: Mukesh Sehdev Email: sehdev.mukesh@yahoo.com </p>
			<p><!--#echo var="LAST_MODIFIED"--></p>
		</footer>
			
				 <?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</html>