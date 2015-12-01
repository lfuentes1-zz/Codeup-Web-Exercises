<?php

require 'park_db_config.php';

require 'db_connect.php';


// First, add a query to delete all the records from national_parks.
$deleteTableContents = 'TRUNCATE national_parks';
$dbc->exec($deleteTableContents);

$nationalParks = [
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],
    ['name' => 'Guadalupe Mountains', 'location' => 'Texas', 'date_established' => '1966-10-15', 'area_in_acres' => 86415.97],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => 46766.45],
    ['name' => 'Dry Tortugas', 'location' => 'Florida', 'date_established' => '1922-10-26', 'area_in_acres' => 64701.22]
];

foreach ($nationalParks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

		$dbc->exec($query);
}