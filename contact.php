<!DOCTYPE html>
<html>
<head>
	<title>Awesome Website</title>
	<link rel="stylesheet" type="text/css" href="Contact.css">
</head>
<body>
	<div class="banner">
		<img src="gif/dinosaur.gif" width="100%" height="100%">
			<h1>Get in touch!</h1>
			<h2>Fill out the labels and comment your thoughts.</h2>

			<h3 class="buttonhome"><a href="index.php">Go Home</a></h3>
	</div>

	<div id="container-down">
		<div class="panel-left">
			<div class="peep">
				<form action="insert.php" method="post">
					<input type="text" required placeholder="Name" name="name" class="contact-form-field">
					<input type="email" required placeholder="Your email address" name="email" class="contact-form-field">
					<textarea required placeholder="Message" name="feedback" class="contact-form-field"></textarea>
					<input type="submit" name="Send Now" value="Send">
				</form>
			</div> <!-- endir a class panel-left-->
		</div><!-- endir a peep-->
	</div> <!-- container-down -->
	

	
	

	
<script type="text/javascript">

    var form = document.getElementsByTagName('form');
    form[0].addEventListener("submit", function(e) {
        alert('Thank you for your feedback!');
    });
</script>
</body>
</html>