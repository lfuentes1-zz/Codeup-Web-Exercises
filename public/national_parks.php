<?php
require_once '../lib/park_db_config.php';
require_once '../lib/db_connect.php';
require_once '../lib/Input.php';

function updatePageContents ($page, $dbc) {
	$limit = 4;

	$offset = $limit * $page - $limit;

	$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT 4 OFFSET :offset');
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
	$stmt->execute();
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
	//using a prepare statement is not necessary here because we are not using any variables in the SELECT statement
	//In other words, there is not dynamic data
	$stmt = $dbc->prepare('SELECT * FROM national_parks');
	$stmt->execute();
	$numberOfRecords = $stmt->rowCount();

	$numberOfPages = ceil($numberOfRecords / 4);

	return $numberOfPages;
}

function insertPark ($name, $location, $date_established, $area_in_acres, $description, $dbc)
{
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
				VALUES (:name, :location, :date_established, :area_in_acres, :description)";
	$stmt = $dbc->prepare($query);
	
	$stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);

	$stmt->execute();
}

function sanitizeInput ()
{
	Input::escape($_POST['name']);
	Input::escape($_POST['location']);
	Input::escape($_POST['date_established']);
	Input::escape($_POST['area_in_acres']);
	Input::escape($_POST['description']);
}

function processForm ($dbc)
{
	//form was submitted when $_POST is not empty
	$message = "";
	if (!empty($_POST)) {
		if ((Input::get('name') != '') && (Input::get('location') != '') && (Input::get('date_established') != '') 
								&& (Input::get('area_in_acres') != '') && (Input::get('description') != ''))
		{
			sanitizeInput();
			$name = Input::get('name');
			$location = Input::get('location');
			$date_established = Input::get('date_established');
			$area_in_acres = Input::get('area_in_acres');
			$description = Input::get('description');
			insertPark($name, $location, $date_established, $area_in_acres, $description, $dbc);
		}
		else //enter info on all fields before proceeding
		{
			$message = "All fields must be filled in before proceeding";
		}
	}
	return $message;
}

function pageController($dbc){
	session_start();
	$numberOfPages = calculateNumberOfPages($dbc);
	$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
	
	if ((!is_numeric($pageNumber)) || ($pageNumber < 0) || ($pageNumber == 0) || ($pageNumber > $numberOfPages))
	{
		$pageNumber = 1;
	}
	$nextPage = increasePage($pageNumber, $numberOfPages);
	$previousPage = decreasePage($pageNumber);	
	$query = updatePageContents($pageNumber, $dbc);

	$message = processForm($dbc);

	return [
		'parks' => $query,
		'nextPage'   => $nextPage,
		'previousPage' => $previousPage,
		'pageNumber' => $pageNumber,
		'numberOfPages' => $numberOfPages,
		'message' => $message
	];
}
//When I click on links the page loads and everything in page controller runs
extract(pageController($dbc));
var_dump($_POST);
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
			<th>Description</th>
		</tr>

		<?php foreach ($parks as $park): ?>
			<tr>
				<td><?= $park['name']; ?> </td>
				<td><?= $park['location']; ?> </td>
				<td><?= $park['date_established']; ?> </td>
				<td><?= $park['area_in_acres']; ?> </td>
				<td><?= $park['description']; ?> </td>
			</tr>
		<?php endforeach; ?>
	</table>
	<br>
	<?php if ($pageNumber == 1) { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($nextPage); ?>">Next</a> 		
	<?php } elseif ($pageNumber == $numberOfPages) { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($previousPage); ?>">Previous</a>
	<?php } else { ?>
		<a href="national_parks.php?pageNumber=<?= Input::escape($previousPage); ?>">Previous</a>
		<a href="national_parks.php?pageNumber=<?= Input::escape($nextPage); ?>">Next</a> 		
	<?php } ?>
	<br><br><br>
	<!-- action could go to a new page to handle input and insert it into the DB -->
	<form action="national_parks.php" method="POST">
		<fieldset>
    		<legend>Tell Us About Your Favorite Park</legend>
			Park Name:<br>
			<input type="text" name="name">
			<br>
			Park Location:<br>
			<input type="text" name="location">
			<br>
			Date Established:<br>
			<input type="text" name="date_established">
			<br>
			Area In Acres:<br>
			<input type="text" name="area_in_acres">
			<br>
			Description:<br>
			<input type="text" name="description">
			<br>
			<h3><?= $message ?></h3>
			<input type="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>

<!-- header redirect to home page if they manually enter something invalid in the URL -->
<!-- check for non-numeric manual entries on the URL -->

<!-- unique parks in the database - do not allow duplicate entries -->	
<!-- date picker with javascript -->
<!-- take me to the page of the newest added entry, will have to update contents -->

<!-- can use the not empty method from the input class in the processForm function -->
<!-- limit should not be hard coded -->

<!-- delete entries from the database/ -->
