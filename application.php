<?php
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
	
	// change chosen id so it's not hard coded
	$chosen_id = 4;
	$status = '';
	$fname = '';
	$lname = '';

	function status_text($num) {
		if ($num == 1) {
			return "Pending";
		}
		elseif ($num == 2) {
			return "Denied";
		}
		elseif ($num == 3) {
			return "Approved";
		}
	}

	$sql = "SELECT status, first_name, last_name FROM applications WHERE id = '$chosen_id'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$status = status_text($row['status']);
			$fname = $row['first_name'];
			$lname = $row['last_name'];
		}
	} else {
		echo "0 results";
	  }

?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--
			CEN2002 Final Project Final Phase - Application Page
			Author: Dustin Rush
			Date: 5/8/23
			Filename: application.html
		-->
	
		<meta charset="utf-8">
		<title>Application</title>
		<link href="style.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<header><h1>Application No.: <?php echo $chosen_id?></h1></header>
		<main><h2>Name: <?php echo $fname . " " . $lname?></h2></main>
		<footer><h3>Status: <?php echo $status ?></h3></footer>
	</body>
</html>
