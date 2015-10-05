<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>

<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<h2>USER LOGIN</h2>
	<form method="POST" action="/my_first_form.php"> <!-- page to send page request to -->
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="input your username" required>
			<!-- deleting the name attribute username does not allow a storage for the data from the user -->
		</p>
		<p>
			<label for="password">Password</label>
			<input id="username" name="password" type="password" placeholder="password" required>
		</p>
		<p>
			<input type="submit" value="Click Here"> <!--sends form data to action specfied file above -->
			<button type="submit">Login</button>
		</p>

	</form>

	<hr>

	<h2>COMPOSE AN EMAIL</h2>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="to">TO:</label>
			<input id="to" name="to" type="email" placeholder="recipient's email address" required>
		</p>

		<p>
			<label for="from">FROM:</label>
			<input id="from" name="from" type="email" placeholder="sender's email address" required>
		</p>

		<p>
			<label for="subject">SUBJECT:</label>
			<input id="subject" name="subject" type="text" placeholder="type your subject" required>
		</p>

		<p>
			<label for="body">BODY:</label>
			<textarea id="body" name="body" placeholder="message of your body" required></textarea>
		</p>
			<input type="checkbox" id="copy_me" name="copy_me" value="yes" checked>
			<label for="copy_me">Copy Me</label>
		<p>
			<button type="submit">Send</button>
		</p>
	</form>

	<hr>
	
	<h2>MULTIPLE CHOICE TEST</h2>
	<form method="POST" action="/my_first_form.php">
		<p>Are you having fun in Codeup class?</p>
			<label>
				<input type="radio" name="q1" value="yes">
				Yes
			</label>
			<label>
				<input type="radio" name="q1" value="no">
				No
			</label>
			<label>
				<input type="radio" name"q1" value="maybe_so">
				Maybe So
			</label>	
		<p>Are you being challenged in Codeup class?</p>
			<label>
				<input type="radio" name="q2" value="yes">
				Yes
			</label>
			<label>
				<input type="radio" name="q2" value="no">
				No
			</label>
			<label>
				<input type="radio" name="q2" value="maybe_so">
				Maybe So
			</label>
		<p>What programming languages did you know before Codeup class?</p>
			<label><input type="checkbox" id="os1" name="os[]" value="C++">C++</label>
			<label><input type="checkbox" id="os2" name="os[]" value="Java">Java</label>
			<label><input type="checkbox" id="os3" name="os[]" value="Swift">Swift</label>
			<label><input type="checkbox" id="os4" name="os[]" value="C#">C#</label>
		<p>
			<label for="self">Have your tried learning languages on your own?</label>
			<select id="self" name="self[]" multiple>
				<option disabled selected>Select One</option>
				<option value="yes">YES</option>
				<option value="no">NO</option>
				<option value="maybe_so">MAYBE SO</option>
			</select>
		</p>
	</form>

	<h2>Are You Ready for CSS?</h2>
	<form>
		<label for="css_question">Select One:</label>
		<select
			id="css_question" name="css_question">
			<option value="1">Yes</option>
			<option value="2" selected>No</option> 
		</select>
		<button type="submit">Submit</button>
	</form>


</body>
</html>



