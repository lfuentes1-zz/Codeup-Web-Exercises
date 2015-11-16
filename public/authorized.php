<?php
function pageController(){
	session_start();

	var_dump($_SESSION);

	if ($_SESSION['LOGGED_IN_USER'] == FALSE)
	{
		header("location: login.php");
		die();
	} else {
		echo "Welcome, " . $_SESSION['username'] . "!";
	}

	return array(
		'username' => $_SESSION['username'],
	);
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h3>Authorized</h3>
		<a href="logout.php">Logout</a>
 	</body>

</html>