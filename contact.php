<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>HP | Contact</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel = "icon" type = "image/png" href = "img/logo.png">
</head>
<body>

	<?php include('header.php') ?>

	<main class="main-content container">
		<h1>Contact Page</h1>
	<div class="contactme">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1710.5135070040762!2d44.46483135560474!3d40.19152059007291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd9ceb476633%3A0xe3b8b9a49885d072!2s48%2F1%20Leningradyan%20St%2C%20Yerevan%200031%2C%20Armenia!5e0!3m2!1sen!2s!4v1572091553615!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
		</div>
		<div class="info">
			<h2>Contact Me</h2>			
			<h3>Phone Number : +374(098)111-608</h3>
			<h3>Country : Armenia</h3>
			<h3>City : Yerevan</h3>
			<h3>Street : Leningradyan 48/1</h3>
		</div>
	</div>
	<div class="feedback">
		<h2>Send Feedback</h2>
		<form class="feedback-content">
			<input class="input" type="text" placeholder="First Name"><br>
			<input class="input" type="text" placeholder="Last Name"><br>
			<input class="input" type="email" placeholder="E-mail"><br>
			<input class="input" type="tel" placeholder="Phone Number"><br>			
			<textarea placeholder="Write Message" class="textarea" rows="10" cols="50"></textarea><br>
			<input class="submit-button" type="submit" value="Send">
		</form>
	</div>	
	</main>

	<?php include('footer.php') ?>
	
</body>
</html>








