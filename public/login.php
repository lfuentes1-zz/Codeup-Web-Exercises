<?php 
	
	var_dump ($_POST);

	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : ''; 

	if (($username == "guest") && ($password == "password"))
	{ 
		header("location: authorized.php");
	} else {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			header("location: failed.php");
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
				<input type="text" name="username" id="username"><br>
			</p>
			<p>
				<label for="password" form="verify">Password</label>
				<input type="text" name="password" id="password"><br>
			</p>
			<!--
			type=specifies the type of button
			name=specifies the name for the button
			value=specifies the initial value for the button -->
			<button type="submit" name="send" id="send" value="submit">Submit</button>
		</form>
	</body>
</html>