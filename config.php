<?php
	$servername = "db4free.net";
	$username = "fahrayanu";
	$password = "12345678";
	$nama_database = "user";
	
	$db = mysqli_connect($servername, $username, $password);
	
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
?>