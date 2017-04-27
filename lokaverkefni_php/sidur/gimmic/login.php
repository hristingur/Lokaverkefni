<!DOCTYPE html>

<?php
	session_start();

	$username = "user";
	$password = "password";

	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header("Location: success.php");
	}

	if(isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username'] == $username && $_POST['password'] == $password) {

			$_SESSION['loggedin'] = true;
			header("Location: success.php");
		}
	}
?>

<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<form>
		<h3>Notanda nafn.</h3>

		<input type="text" name="username" placeholder="Hvað er notanda nafnið?">

		<h3>Lykilorð notanda.</h3>

		<input type="password" name="password" placeholder="Hvað er lykilorðið?">

		<input type="submit" value="Login">
	</form>
</body>
</html>