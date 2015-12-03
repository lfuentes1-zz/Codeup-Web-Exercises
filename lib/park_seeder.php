<?php

require 'park_db_config.php';

require 'db_connect.php';

// First, add a query to delete all the records from national_parks.
$deleteTableContents = 'TRUNCATE national_parks';
$dbc->exec($deleteTableContents);

$nationalParks = [
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 'description' => 'Big Bend Description'],
    ['name' => 'Guadalupe Mountains', 'location' => 'Texas', 'date_established' => '1966-10-15', 'area_in_acres' => 86415.97, 'description' => 'Guadalupe Mountains Description'],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => 46766.45, 'description' => 'Carlsbad Caverns Description'],
    ['name' => 'Dry Tortugas', 'location' => 'Florida', 'date_established' => '1922-10-26', 'area_in_acres' => 64701.22, 'description' => 'Dry Tortugas Description'],
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.64701, 'description' => 'Acadia Description'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00, 'description' => 'American Samoa Description'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98, 'description' => 'Arches Description'],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94, 'description' => 'Badlands Description'],
	['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => 183224.05, 'description' => 'Crater Lake Description'],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07, 'description' => 'Biscayne Description']
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
    VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($nationalParks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

	$stmt->execute();
}
