<?php
session_start();
	if (!empty($_GET['username'])&& !empty($_GET['email'])&& !empty($_GET['password'])&& !empty($_GET['password_again'])){
		$username = $_GET['username'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$password_again = $_GET['password_again'];
		if (strlen($username)>24) {
			echo 'Your username is too long .';
		}
		elseif ($password!=$password_again) {
			echo "Your passwords do not match .";
		}
		elseif (strlen($password)>24||strlen($password)<6) {
			echo "Your password is needed to be in between 6 to 24 characters .";
		}
		else{
			echo "<h1 >The following data has been submitted </h1><br>";
			echo "<br>Username : ",$username;
			echo "<br>Email    : ",$email;
		}
	}
	else{
		echo "You need to fill in all fields";
		echo '<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
	<title>Register</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<h2> Register </h2>
	username:<input type="text" name="username"><br><br>
	email:<input type="email" name="email"><br><br>
	password:<input type="password" name="password"><br><br>
	password again:<input type="password" name="password_again"><br><br>
	<input type="submit" value="submit">
</form>
</body>
</html>';
	}
?>


