<?php
	//start a session
	session_start();

	//create a key for hash_hmac function
	if (empty($_SESSION['key']))
		$_SESSION['key'] = bin2hex(random_bytes(32));

	//create CSRF token
	$csrf = hash_hmac('sha256', 'this is some string: index.php', $_SESSION['key']);

	//validate token
	if (isset($_POST['submit'])) {
		if (hash_equals($csrf, $_POST['csrf'])) {
			echo "Your name is: " . $_POST['username'];
		} else
			echo 'CSRF Token Failed!';
	}
?>
<html>
	<head>
		<title>CSRF Attack Prevention!</title>
	</head>
	<body>
		<form method="POST" action="index.php">
			<input type="text" name="username" placeholder="What is your name?" >
		<input type="hidden" name="csrf" value="<?php echo $csrf ?>">
			<input type="submit" name="submit" value="SUBMIT">
		</form>
	</body>
</html>