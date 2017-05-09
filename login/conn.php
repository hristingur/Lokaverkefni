<?php
//Tengja við gagnagrunn...
		$host = "tsuts.tskoli.is";
		$username = "1611943609";
		$password = "mypassword";
		$db = "1611943609_lokaverkonn3";

	try {
		$conn = new PDO("mysql:host=$host;dbname=$db", $username , $password);
		// set the PDO error mode to exception

	} 
	catch (PDOEException $e) 
	{
		echo"Connection failed: " . $e ->getMessage();
	}//catch

?>