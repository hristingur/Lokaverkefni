<!DOCTYPE html>
<html>
<head>
	<title>Bæta Við</title>
</head>
<body>

 	<?php

 		$whitelist = array(
 			'127.0.0.1',
 			'::1'
 		);

 		if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist))
 		{
			$servername = "tsuts.tskoli.is";
			$username = "1611943609";
			$password = "mypassword";
 		}
 		else
 		{
 			$servername = "localhost";
			$username = "root";
			$password = "";
 		}
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
    		header("Location: index.php"); //förum á aðalsíðu
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}




		$conn -> close();

		
		exit();
			

 	?>

</body>
</html>