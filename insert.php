<!DOCTYPE html>
<html>
<head>
	<title>Bæta Við</title>
</head>
<body>
<h1></h1>
 	<?php

 		//Tengja við gagnagrunn...
		$servername = "tsuts.tskoli.is";
		$username = "1611943609";
		$password = "mypassword";
		$db = "1611943609_lokaverkonn3";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error) {
		    die("Tenging Mistókst: " . $conn->connect_error);
		}


		$netfang = isset($_REQUEST['netfang']);
		$feedback = isset($_REQUEST['feedback']);

		//print($netfang);debug

		$sql = "INSERT INTO vaelubillinn (netfang,feedback) VALUES ('$netfang','$feedback')";
		$result = $conn->query($sql);

		$conn -> close();

		sleep(1); //tefja um eina sek
		header("Location: index.html"); //förum á aðalsíðu
		exit();


 	?>

</body>
</html>