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

		print_r($_REQUEST);
		$name = $_REQUEST['name'];
		$netfang = $_REQUEST['email'];
		$feedback = $_REQUEST['feedback'];
		

		$sql = "INSERT INTO vaelubillinn(name,email,feedback) VALUES ('$name','$netfang','$feedback')";
		if (mysqli_query($conn, $sql)) {
    		echo '<script language ="javascript">' ;
    		echo 'alert("lalala")';
    		echo '</script>';
    		//header("Location: index.html"); //förum á aðalsíðu
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}








		//$sql = "INSERT INTO vaelubillinn(name,netfang,feedback) VALUES ('$name','$netfang','$feedback')";
		//$result = $conn->query($sql);
		//print_r($result);

		$conn -> close();

		sleep(1); //tefja um eina sek

		
		exit();
			echo "$netfang";

 	?>

</body>
</html>