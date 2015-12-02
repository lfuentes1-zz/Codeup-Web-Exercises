<?php
require_once '../lib/park_db_config.php';
require_once '../lib/db_connect.php';

function pageController($dbc){
	session_start();

	$selectAllQuery = 'SELECT * FROM national_parks';
	$stmt = $dbc->query($selectAllQuery);
	$query = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// var_dump($query);

	return [
		'parks' => $query
	];
}
extract(pageController($dbc));
?>

<!doctype html>
<html>
<head>
	<title> National Parks </title>
</head>
<body>
	<h2>National Parks</h2>
	<h3>Database Driven Web Application</h3>

	<table>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area In Acres</th>
		</tr>

		<?php foreach ($parks as $park): ?>
			<tr>
				<td><?= $park['name']; ?> </td>
				<td><?= $park['location']; ?> </td>
				<td><?= $park['date_established']; ?> </td>
				<td><?= $park['area_in_acres']; ?> </td>
			</tr>
		<?php endforeach; ?>

		<?php var_dump ($parks) ?>
	</table>

</body>
</html>

