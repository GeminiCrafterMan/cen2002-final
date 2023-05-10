<?php
	session_start(); // start a new session


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// get the form data
		$email = $_POST['email'];
		$pass = $_POST['password'];
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dorm";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT email, password FROM user WHERE email = '$email'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		echo $pass . " " . $row['password'] . " ";
		if (password_verify($pass, $row['password'])) {
			// if the credentials are valid, set a session variable to indicate that the user is logged in
			$_SESSION['loggedin'] = true;
			$_SESSION['userid'] = $row['id'];

			// redirect the user to the homepage
			header('Location: home.html');
			exit;
		} else {
			// if the credentials are invalid, display an error message
			echo 'Invalid username or password. bleh';
		}
	} else {
		// if the credentials are invalid, display an error message
		echo 'Invalid username or password. bleh bleh';
	}

	mysqli_close($conn);
?>
