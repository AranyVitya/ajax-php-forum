<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpforum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Set the character encoding
mysqli_set_charset($conn, 'utf8');	

?>