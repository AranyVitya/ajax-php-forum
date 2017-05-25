<?php

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_select_db($conn, 'phpforum');	//Adatbázis kiválasztása

mysqli_set_charset($conn, 'utf8');	//karakterkódolás beállítása

$query = "SELECT * FROM messages";	//messages tábla kiválasztása

$rows = array();

$result = mysqli_query($conn, $query);

while ($fetch = mysqli_fetch_assoc($result)) {
	$rows[]= $fetch;
}

echo json_encode($rows);

mysqli_close($conn);

?>