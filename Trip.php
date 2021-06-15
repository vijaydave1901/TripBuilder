<?php include "classes/Flights.php"?>
<?php

        $U_D_Airport ;


?>
<input type="radio" id="OneWay" name="SelectTrip" value="OneWay">
<label for="OneWay">One-way</label><br>
<input type="radio" id="female" name="SelectTrip" value="RoundTrip">
<label for="RoundTrip">Round-trip</label><br>
	

<form>	
	<br><br>
	<input type="text" placeholder="Departure_Airport" name= >
	<br><br> 	 	
	<input type="text" placeholder="Departure_Date" >
	<br><br>
	<input type="text" placeholder="Arival_Airport" >
	<br><br>
	<input type="text" placeholder="Return_Date" >
	<br><br>
	<input type ="Submit" name="search" value ="Search">
	
</form>
<?php
					if(isset($_POST["Submit"])){
						
						$First_Name = $_POST["First_Name"];
						$Last_Name = $_POST["Last_Name"];
						$Email = $_POST["Email"];
						$Username = $_POST["Username"];
						$Password = $_POST["Password"]; 
						$Confirmed_Password = $_POST["Confirmed_Password"];
				
