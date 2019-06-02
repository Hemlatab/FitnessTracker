<?php
$hostname   	= "localhost";
$db_username 	= "root";
$password 		= "root";
$database 		= "fitness";

// Create connection
$conn = new mysqli($hostname, $db_username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>