<?php
$servername = "127.0.0.1";
$username = "Moayad";
$password = "Moayad@123";
$dbname = "feedback_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
 die('Connection failed' . $conn->connect_error);
}

