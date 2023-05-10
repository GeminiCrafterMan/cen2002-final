<?php
	class Application {
		// Properties
		public $id;
		public $fname;
		public $lname;
		public $fullname;
	  
		// Methods
		function __construct($id, $fname, $lname, $fullname = '') {
			$this->id = $id;
			$this->fname = $fname;
			$this->lname = $lname;
			$this->$fullname = $fname . " " . $lname;
		}

		function set_id($id) {
			$this->id = $id;
		}
		function get_id() {
			return $this->id;
		}

		function set_fname($fname) {
		  $this->fname = $fname;
		}
		function get_fname() {
		  return $this->fname;
		}

		function set_lname($lname) {
			$this->lname = $lname;
		}
		function get_lname() {
			return $this->lname;
		}

		function set_fullname() {
			$this->$fullname = $fname . " " . $lname;
		}
		function get_fullname() {
			return $this->fullname;
		}
	  }

	$applications = [];

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

	$sql = "SELECT id, first_name, last_name FROM applications";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		array_push($applications, new Application($row['id'], $row['first_name'], $row['last_name']));
	}
	} else {
	echo "0 results";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--
			CEN2002 Final Project Final Phase - Check Applications Page
			Author: Dustin Rush
			Date: 5/8/23
			Filename: check_applications.html
		-->
	
		<meta charset="utf-8">
		<title>Check Applications</title>
		<link href="style.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<header>
			<h1>Applications to be reviewed:</h1>
		</header>
		<main>
			<!--<button class="button" onclick="window.location.href = 'application.html'"><h4>View Application # - Name</h4></button>
			<button class="button" onclick="window.location.href = 'application.html'"><h4>View Application # - Name</h4></button>
			-->
			<?php
				foreach ($applications as $value) {
					//echo '<button class="button" onclick='window.location.href = "application.html"'><h4>View Application # - Name</h4></button>';
					echo '<button class=' . "button" . " " .  'onclick="window.location.href = ' . 'application.html'. '><h4>View Application ' .  $value->id . '-' . $value->$fullname . '</h4></button>';
					echo '<button class=' . "button" .  'onclick="window.location.href = ' . 'application.html'. '><h4>View Application' .  $value->id . '-' . $value->$fullname . '</h4></button>';
				}
			?>
		</main>
		<footer></footer>
	</body>
</html>
