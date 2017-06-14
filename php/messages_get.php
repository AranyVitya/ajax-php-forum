<?php

session_start();

require "conf_connection.php";

header('Content-Type: application/json');

$query = "SELECT * FROM messages";	//messages tábla kiválasztása

$rows = array();

$result = mysqli_query($conn, $query);

while ($fetch = mysqli_fetch_assoc($result)) {
	$rows[]= $fetch;
}

echo json_encode($rows);

mysqli_close($conn);

?>