<?php

require_once 'Log.php';   //check the path
require_once 'Input.php';  //check the path

// Class definition will be used in login.php, authorized.php, and logout.php

class Auth {

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static attempt ($username, $password){
		$logger = new Log('log');
		$username = Input::get($_SESSION['username']); 

		if ($username === 'guest') && (password_verify($password, self::password) {
			$_SESSION['LOGGED_IN_USER'] = TRUE;
			$_SESSION['username'] = $username;
			$logger->info("User {$username} logged in.");
			return TRUE;
		} else {
			$logger->info("User {$username} failed to log in.");
			return FALSE;
		}
	}

	public static check (){
		return ($_SESSION['LOGGED_IN_USER']) ? return TRUE : return FALSE;
	}

	public static user (){
	// Auth::user() will return the username of the currently logged in user.
		return Input::get($_SESSION['username']);
	}

	public static logout(){
		if (isset($_SESSION['LOGGED_IN_USER']))
		{
			// $_SESSION['LOGGED_IN_USER'] = FALSE;
			unset($_SESSION['LOGGED_IN_USER']);
		}
	}
}