<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--
			CEN2002 Final Project Final Phase - "New Application" Page
			Author: Dustin Rush
			Date: 5/8/23
			Filename: new_application.html
		-->
	
		<meta charset="utf-8">
		<title>New Application</title>
		<link href="style.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<header>
			<h1 style="text-align: center;">New Application</h1>
		</header>
		<main>
			<form action=""> <!--Insert the PHP stuff here to actually submit the form to the system.-->
				<label for="fname">First name:</label><br>
				<input type="text" id="fname" name="fname" placeholder="John"><br><br>

				<label for="lname">Last name:</label><br>
				<input type="text" id="lname" name="lname" placeholder="Doe"><br> <!--One less <br> because of the default spacing for paragraphs.-->

				<p>Gender:
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Other</label><br></p>

				<label for="phone">Phone number:</label><br>
				<input type="phone" id="phone" name="phone" placeholder="123-456-7890"><br><br>

				<input type="submit" class="button">
			</form>
		</main>
	</body>
</html>
