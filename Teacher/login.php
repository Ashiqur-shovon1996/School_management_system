<?php

session_start();
if (isset($_SESSION['username'])) {
	header('location:profile.php');
}
if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
		// $_SESSION['username'] = $username;
		// $_SESSION['pass'] = $password;

		//echo "Hi ". $_SESSION['user'];
		header('location:profile.php');
	} else {
		echo "<script>alert('username and password do not match');</script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP Session</title>
</head>

<body>
	<?php include('navbar.php'); ?>
	<h1> Login Page</h1>
	<hr>
	<fieldset>
		<legend>Login</legend>
		<form method="post">
			<p><input type="text" name="user" placeholder="User name" required=""></p>
			<p><input type="password" name="pass" placeholder="Password" required=""></p>
			<input type="submit" name="submit" value="Login">

		</form>
	</fieldset>

</body>

</html>