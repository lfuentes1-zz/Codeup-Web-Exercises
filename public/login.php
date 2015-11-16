<?php 
	
	var_dump ($_POST);

	$message = "";
	$username = "";

	if (isset($_POST['username']) && isset($_POST['password'])) {
		// $username = isset($_POST['username']) ? $_POST['username'] : '';
		// $password = isset($_POST['password']) ? $_POST['password'] : ''; 
		//we already know that $username and $password are set so rewrite the previous two lines as follows
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		if (($username == "guest") && ($password == "password"))
		{ 
			header("location: authorized.php");
			//after a header redirect, php keeps running remaining code, die() prevents that from happening.
			die ();
		} else {
			$message = "Input a valid username and password!";
		}
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		</title>POST Example</title>
	</head>
	<body>
		<br>
		<!-- name=name of the form
		method=HTTP method used when sending form-data
		action=specifies where to submit form-data when submitted -->
		<form name="verify" method="POST" action="login.php">
			<p>
				<!-- for=specifies which form element a label is bound to?
				form=specifies form/s label belongs to -->
				<label for="username" form="verify">Username</label>
				<!-- type=specifies the type<input>element to display
				name=specifies the name of the input element -->
				<input type="text" name="username" id="username" value="<?= $username ?>"><br>
			</p>
			<p>
				<label for="password" form="verify">Password</label>
				<input type="password" name="password" id="password"><br>
			</p>
			<!--
			type=specifies the type of button
			name=specifies the name for the button
			value=specifies the initial value for the button -->
			<button type="submit" name="send" id="send" value="submit">Submit</button>
		</form>
		<h2><?= $message ?></h2>
	</body>
</html>