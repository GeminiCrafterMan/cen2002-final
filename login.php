<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--
			CEN2002 Final Project Final Phase - Login Page
			Author: Dustin Rush
			Date: 5/8/23
			Filename: login.html
		-->
	
		<meta charset="utf-8">
		<title>Login</title>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body>
		<header>
			<h1 style="text-align: center;">Log in</h1>
		</header>
		<main>
			<form action=""> <!--Insert the PHP stuff here to actually "log in" to the account-->
				<label for="email">Email address:</label><br>
				<input type="email" id="email" name="email" placeholder="example@test.com"><br><br>
				<label for="password">Password:</label><br>
				<input type="password" id="password" name="password" placeholder="Password"><br><br>
				<input type="submit"> <!--Replace this with an actual nice button instead of the generic one.-->
			</form>
		</main>
		<footer>
			<p>Don't have an account? Sign up <a href="signup.html">here.</a></p>
		</footer>
	</body>
</html>