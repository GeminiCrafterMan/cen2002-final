<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--
			CEN2002 Final Project Final Phase - Signup Page
			Author: Dustin Rush
			Date: 5/8/23
			Filename: signup.html
		-->
	
		<meta charset="utf-8">
		<title>Signup</title>
		<link href="style.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<header>
			<h1 style="text-align: center;">Sign up</h1>
		</header>
		<main>
			<form action=""> <!--Insert the PHP stuff here to save the new account-->
				<label for="email">Email address:</label><br>
				<input type="email" id="email" name="email" placeholder="example@test.com"><br><br>
				<label for="password">Password:</label><br>
				<input type="password" id="password" name="password" placeholder="Password"><br><br>
				<label for="acctype">Account type:</label><br>
				<select name="acctype" id="acctype">
					<option value="student">Student</option>
					<option value="parent">Parent</option>
					<option value="admin">Admin</option>
				</select><br><br>
				<input type="submit" class="button">
			</form>
		</main>
		<footer>
			<p>Already have an account? Log in <a href="login.html">here.</a></p>
		</footer>
	</body>
</html>
