<?php 
	var_dump($_POST);

	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : ''; 
?>

<!DOCTYPE html>
<html>
	<head>
		</title>POST Example</title>
	</head>

	<body>
		<br>
		<form method="POST">
			<label>Username</label>
			<input type="text" name="username"><br>
			<label>Password</label>
			<input type="text" name="password"><br>
			<input type="submit">
		</form>
	</body>

</html>