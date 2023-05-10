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

    $fname =  $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $gender = $_REQUEST['gender'];
    $phone =  $_REQUEST['phone'];

    $sql = "INSERT INTO applications (status, first_name, last_name, gender, phone_num) VALUES (1, '$fname', '$lname', '$gender', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
        header('Location: home.html');
		exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
