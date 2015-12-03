<?php
require_once '../lib/park_db_config.php';
require_once '../lib/db_connect.php';
require_once '../lib/Input.php';

function updatePageContents ($page, $dbc) {
	$limit = 4;

	$offset = $limit * $page - $limit;

	$selectLimitedQuery = "SELECT * FROM `national_parks` LIMIT 4 OFFSET " . $offset;
	$stmt = $dbc->query($selectLimitedQuery);
	$query = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $query;
}

function increasePage ($pageNumber, $numberOfPages)
{
	$pageNumber = ($pageNumber < $numberOfPages) ? $pageNumber + 1 : $pageNumber;

	return $pageNumber;
}

function decreasePage ($pageNumber)
{
	$pageNumber = ($pageNumber > 1) ? $pageNumber - 1 : $pageNumber;

	return $pageNumber;
}

function calculateNumberOfPages ($dbc)
{
	$selectAllQuery = "SELECT * FROM `national_parks`";
	$stmt = $dbc->query($selectAllQuery);
	$numberOfRecords = $stmt->rowCount();

	$numberOfPages = ceil($numberOfRecords / 4);

	var_dump ("Number of Pages: " . $numberOfPages . "!");

	return $numberOfPages;
}

function pageController($dbc){
	session_start();
	$numberOfPages = calculateNumberOfPages($dbc);
	// var_dump ("Number of Pages: " . $numberOfPages . "!");	
	$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
	
	$nextPage = increasePage($pageNumber, $numberOfPages);
	$previousPage = decreasePage($pageNumber);
	$query = updatePageContents($pageNumber, $dbc);

	return [
		'parks' => $query,
		'nextPage'   => $nextPage,
		'previousPage' => $previousPage,
		'pageNumber' => $pageNumber,
		'numberOfPages' => $numberOfPages
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
	</table>

	<?php if ($pageNumber == 1) { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($nextPage); ?>">Next</a> 		
	<?php } elseif ($pageNumber == $numberOfPages) { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($previousPage); ?>">Previous</a>
	<?php } else { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($previousPage); ?>">Previous</a>
		<a href="national_parks.php?pageNumber=<?= Input::escape($nextPage); ?>">Next</a> 		
	<?php } ?>

</body>
</html>

<!-- header redirect to home page if they manually enter something invalid in the URL -->
<!-- check for non-numeric manual entries on the URL -->
<!-- limit should not be hard coded -->

