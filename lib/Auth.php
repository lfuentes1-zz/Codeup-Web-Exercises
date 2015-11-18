<?php

require_once 'Log.php'; 

// Class definition will be used in login.php, authorized.php, and logout.php

class Auth {

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static attempt ($username, $password){

		$logger = new Log('log');

		if ($username === 'guest') && (password_verify($password, self::password) {
			$_SESSION['LOGGED_IN_USER'] = TRUE;
			$logger->info("User {$username} logged in.");
		} else {
			$logger->info("User {$username} failed to log in.");
		}
	}

	public static check (){
		// Auth::check() will return a boolean whether or not a user is logged in.



	}

	public static user (){

	}

	public static logout(){

	}

}