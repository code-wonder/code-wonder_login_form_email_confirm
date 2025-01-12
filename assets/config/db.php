<?php
	$username = 'root';
	$password = '';
	$hostname = 'localhost:3306'; 
	$database = 'db_user';

	// Create connection
	$connection_db = new mysqli($hostname, $username, $password, $database);

	// Check connection
	if (!$connection_db) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	echo "";
?>

