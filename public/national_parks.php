<?php
require_once '../lib/park_db_config.php';
require_once '../lib/db_connect.php';
require_once '../lib/Input.php';

function increasePage ($pageNumber)
{
	return $pageNumber + 1;
}

function decreasePage ($pageNumber){
	$pageNumber--;

	return $pageNumber;
}

function updatePageContents ($page, $dbc) {
	$limit = 2;

	$offset = $limit * $page - $limit;
	// echo "answer: " . $offset;

	$selectLimitedQuery = "SELECT * FROM `national_parks` LIMIT 2 OFFSET " . $offset;
	$stmt = $dbc->query($selectLimitedQuery);
	$query = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// var_dump ($query);

	return $query;
}

function pageController($dbc){
	session_start();
	
	//Modify your query to load only four parks at a time. 

	$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
	
	$nextPage = increasePage($pageNumber);
	$previousPage = decreasePage($pageNumber);	
	$query = updatePageContents($pageNumber, $dbc);

	return [
		'parks' => $query,
		'nextPage'   => $nextPage,
		'previousPage' => $previousPage,
		'pageNumber' => $pageNumber
	];
}
//When I click on links the page loads and everything in page controller runs
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
		
	<a href="national_parks.php?pageNumber=<?= Input::escape($previousPage); ?>">Previous</a>
	<a href="national_parks.php?pageNumber=<?= Input::escape($nextPage); ?>">Next</a> 		

</body>
</html>

