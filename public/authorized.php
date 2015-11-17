<?php
	function checkUserStatus()
	{
		// if ($_SESSION['LOGGED_IN_USER'] == FALSE)
		if (!isset($_SESSION['LOGGED_IN_USER']))
		{
			header("location: login.php");
			die();
		}
	}

	function pageController(){
		session_start();

		var_dump($_SESSION);

		checkUserStatus();

		$username = $_SESSION['username'];

		return array(
			'username' => $username,
		);
	}
	extract(pageController());
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h3>You are authorized to access this page!</h3>
		<h3>You are logged in as <?= $username ?>.</h3>
		<a href="logout.php">Logout</a>
 	</body>

</html>