<!DOCTYPE html>
<html>
<head>
	<title>Login!</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" placeholder="Username" name="username">
		<input type="password" placeholder="Password" name="password">
		<input type="submit" value="Login" name="login">
	</form>


</body>
</html>

<?php
	include'conn.php';
	if(isset($_POST['login'])) {
		echo 'click';
		$usrName = $_POST['username'];
		$usrPass = $_POST['password'];
		$checkUser = null;

		$sql = "SELECT * FROM login WHERE username ='$usrName'";
		$result = $conn->query($sql);
		foreach ($result as $check) {
			$checkUser = $check['username'];
			$hash = $check['password'];
		}
		if (is_null($checkUser)) {
			echo'<script>alert("User does not exist");</script>';
		}
		else{
			if (password_verify($usrPass, $hash)) {
				echo "YESSS";
				header("Location: http://tsuts.tskoli.is/2T/1611943609/LokaverkVshOnn3/login/success.php");
				$_SESSION['userName']=$usrName;
					exit();
			}
			else{
					echo'<script>alert("Incorrect password");</script>';
			}
		}
	}


?>