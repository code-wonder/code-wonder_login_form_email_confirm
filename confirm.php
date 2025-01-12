<?php

require_once('assets/config/db.php');
	function redirect() {
		header('Location: register.php');
		exit();
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect();
	} else {
		// $con = new mysqli('localhost', 'root', '', 'db_user');
		$con = $connection_db;

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE users SET isEmailConfirmed=1, token='' WHERE email='$email'");
			// echo '<div>
			// 		<p>Your email has been verified! You can log in now!<p>
			// 		<div><a href="localhost/project/register.php">Click Here to Login</a></div>
			// 	</div>
			// 	</div>';
			echo
			'
				<!DOCTYPE html>
				<html>
				<head>
				<link rel="stylesheet" type="text/css" href="assets/css/confirm.css">
				</head>
				<body>

				<h1 class="roboto-medium">Your email has been verified!</h1>
				<p class="roboto-medium">You can log in now by click this green button below!</p>

				<a href="login.php">
					<button class="button button1">Click Here</button>
				</a>
				</body>
				</html>
			';
		} else
			redirect();
	}
?>