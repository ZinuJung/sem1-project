<?php
session_start();
require_once "BUS/AccountBUS.php";

if (isset($_SESSION["username"])) {
	header("Location: index.php");
}
if (isset($_POST["submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	if (AccountBUS::Login($username, $password)) {
		if (AccountBUS::checkAdmin($username)) {
			$_SESSION["username"] = $username;
			header("Location: index.php");
		} else echo "<script>alert('You are not admin.');</script>";
	} else echo "<script>alert('The username or password is incorrect.')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<section id="content">
			<form method="post">
				<h1>Admin Login</h1>
				<div>
					<input type="text" placeholder="Username" required="" name="username" />
				</div>
				<div>
					<input type="password" placeholder="Password" required="" name="password" />
				</div>
				<div class="offset-md-3 col-md-6">
					<input type="submit" name="submit" value="Log in" />
				</div>
			</form>
		</section>
	</div>
</body>

</html>