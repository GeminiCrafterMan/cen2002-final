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

    $email =  $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $acctype =  $_REQUEST['acctype'];

    $sql = "INSERT INTO user (email, password, type, child_id) VALUES ('$email', '$password', '$acctype', NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>