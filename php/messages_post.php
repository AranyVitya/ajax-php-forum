<?php

//
$name = $_POST['username'];
$messages = $_POST['messages'];

//
echo $name .": ";
echo $messages;


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

//mysqli_select_db($conn, 'phpforum');	//Adatbázis kiválasztása

mysqli_set_charset($conn, 'utf8');	//karakterkódolás beállítása

//
$sql = "INSERT INTO messages (username, messages) VALUES ('$name', '$messages')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
} else {
	echo "Error" . $sql . $conn->error;
}

$conn->close();

?>