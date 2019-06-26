<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn) {
	die("Unable to connect");
}
if($_POST) {
	$uname = $_POST["username"];
	$pass = $_POST["password"];
	//Making sure that SQL Injection doesn't work
	
	$sql = "SELECT * FROM users_tutorial WHERE username = '$uname' AND password = '$pass'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1) {
		echo "Welcome, user!";
	} else {
		echo "Incorrect Username/Password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Portal</title>
	<link rel="stylesheet" type="text/css" href="b.css">
 
		 
</head>
<body>
	<form action method="POST" autocomplete="off">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="password" name="password" placeholder="********" /><br />
		<input type="submit" name="login" value="LOGIN" />
	</form>
</body>
</html>