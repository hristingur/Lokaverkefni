<html>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" placeholder="username" name="username">
			<input type="password" placeholder="password" name="password">
			<input type="password" placeholder="password again" name="password2">
			<input type="submit" value="register" name="register">
		</form>

</html>

	<?php
		include'conn.php';
	

			
			if (isset($_POST['register'])) {
				if ($_POST['password'] == $_POST['password2']) {
					
					$usrName = $_POST['username'];
					$usrPass = $_POST['password'];

					$hash = password_hash($usrPass , PASSWORD_DEFAULT);
				


					$stmt = $conn->prepare("INSERT INTO login (username , password) VALUES(:userName, :userPass)");
					$stmt->bindParam(':userName', $usrName);
					$stmt->bindParam(':userPass',$hash);
					$stmt->execute();
					
					/*catch(PDOEException $e) {
						echo"Connection failed: " . $e ->getMessage();
					}*/




				}else{
					echo'<script>alert("The passwords do not match");</script>';
				}
			}
	?>



