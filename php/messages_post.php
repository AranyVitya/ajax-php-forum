<?php

require "conf_connection.php";

$name = $_POST['username'];
$messages = $_POST['messages'];

echo   "<div class=\"panel panel-default\">
			<div class=\"panel-heading\" id=\"name-content\">". $name ."</div>
        	<div class=\"panel-body\" id=\"message-content\">". $messages ."</div>
        </div>";

$sql = "INSERT INTO messages (username, messages) VALUES ('$name', '$messages')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
} else {
	echo "Error" . $sql . $conn->error;
}

$conn->close();

?>