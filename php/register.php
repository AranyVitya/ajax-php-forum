<?php 
session_start();

require "conf_connection.php";


if (isset($_POST)) {
	$post_username = $_POST['username'];
	$post_password = $_POST['password'];
	$post_email = $_POST['email'];

	$sql_username = "SELECT * FROM forum_users WHERE user_name = '".$post_username."' ";
	$result_username = mysqli_query($conn,$sql_username);

	$sql_email = "SELECT * FROM forum_users WHERE user_email = '".$post_email."' ";
	$result_email = mysqli_query($conn,$sql_email);

	if (mysqli_num_rows($result_username)>=1) {
		echo '<b style="color:red;">Username already exists!</b>';
	} elseif (mysqli_num_rows($result_email)>=1) {
		echo '<b style="color:red;">E-mail already exists</b>';
	} else {
		$sql = "INSERT INTO forum_users (user_name, user_password, user_email) VALUES ('$post_username', '$post_password', '$post_email')";
		if ($conn->query($sql) === TRUE) {
			echo '<b style="color:green;">New User Account created successfully</b>';
		} else {
			echo "Error" . $sql . $conn->error;
		}
	}
}
?>