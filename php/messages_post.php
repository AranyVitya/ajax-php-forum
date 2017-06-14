<?php

session_start();

require "conf_connection.php";

$name = $_SESSION['username'];
$messages = $_POST['messages'];
$date = date("Y-m-d h:i:s");

echo    '<div class="panel panel-default">
        	<div class="panel-heading" id="name-content">
          		<div class="container-fluid">
            		<div class="row">
              			<div class="col-xs-4" id="name-content">'. $name .'</div>
              			<div class="col-xs-8" id="date-content">'. $date .'</div>
            		</div>
          		</div>
        	</div>
        	<div class="panel-body" id="message-content">'. $messages .'</div>
    	</div>';

$sql = "INSERT INTO messages (username, messages, currentdate) VALUES ('$name', '$messages', NOW())";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
} else {
	echo "Error" . $sql . $conn->error;
}

$conn->close();

?>