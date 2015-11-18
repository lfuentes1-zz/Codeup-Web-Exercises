<?php
require_once 'Input.php';
require_once 'Auth.php';

	function endSession()
	{
	    // Unset all of the session variables.
	    $_SESSION = array();

	    // If it's desired to kill the session, also delete the session cookie.
	    // Note: This will destroy the session, and not just the session data!
	    if (ini_get("session.use_cookies")) {
	        $params = session_get_cookie_params();
	        setcookie(session_name(), '', time() - 42000,
	            $params["path"], $params["domain"],
	            $params["secure"], $params["httponly"]
	        );
	    }
	    // Finally, destroy the session.
	    session_destroy();
	}

	function LogOut()
	{
		// if ($_SESSION['LOGGED_IN_USER'] == TRUE)
		if (isset($_SESSION['LOGGED_IN_USER']))
		{
			$_SESSION['LOGGED_IN_USER'] = FALSE;
			var_dump($_SESSION);
			endSession();
			header("location: login.php");
			die();
		}
	}

	function pageController(){
		session_start();

		var_dump($_SESSION);

		LogOut();

		//Should I remove the return array here as well as the extract page controller
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
	</body>
</html>