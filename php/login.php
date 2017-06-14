<?php
session_start();

require "conf_connection.php";

$query = "SELECT * FROM forum_users";	//forum_users tábla kiválasztása

$rows = array();

$result = mysqli_query($conn, $query);

while ($fetch = mysqli_fetch_assoc($result)) {
	$rows[]= $fetch;
}

if (isset($_POST)) {
	for ($i=0; $i < count($rows); $i++) { 
		$post_username = $_POST['username'];
		$post_password = $_POST['password'];
		if ($rows[$i]['user_name'] == $post_username && $rows[$i]['user_password'] == $post_password) {
			$_SESSION['username'] = $post_username;
			echo $post_username;
		}
	} 
}
?>