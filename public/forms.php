<html>
<head>
	<meta charset="utf-8">
	<title>Forms in HTML</title>
</head>
<body>
	<h1>GET</h1>
	<?php var_dump($_GET);?>

	<h1>POST</h1>
	<?php var_dump($_POST); ?>

	<h2>Search&nbsp;     </h2>
	<form method="GET" action="/forms.php">

		<!-- label, input, button -->
	</form>

	<h2>Log In Form</h2>
	<form method="POST" action="/forms.php">
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="input your username" required autofocus>
		</p>

		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="password" required>
		</p>
	</form>

	<h2>Sign-up Form</h2>
	<form  method="POST" action "/forms.php">
		<p>
			<label for="name">Name</label>
			<input id="name" name="name" type="text" placeholder="enter your name">
		</p>

		<p>
			<label for="email">Email</label>
			<input id="email" name="email" type="text" placeholder="enter your email address" required>
		</p>

		<p>
			<label for="username1">Username</label>
			<input id="username1" name="username1" type="text" placeholder="enter your username" required>
		</p>

		<p>
			<label for="password1">Password</label>
			<input id="password1" name="password" type="password" placeholder="enter your password" required>
		</p>

		<p>
			<!-- <button type="submit"><img src="image.png"></button> button that is an image-->
		</p>
	</form>

	<h2>Contact-Me</h2>
	<form method="POST" action "/forms.php">
		<p>
			<label for="from">From</label>
			<input id="from" name="from" type="text" placeholder="enter your email address" required>
		</p>

		<p>
			<label for="subject">Subject</label>
			<input id="subject" name="subject" type="text" placeholder="subject of your message" required>
		</p>

		<p>
			<label for="body">Body</label>
			<textarea id="body" name="body" placeholder="type your message here" required></textarea>
		</p>
	</form>

</body>
</html>