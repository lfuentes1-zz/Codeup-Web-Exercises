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
    ['name' => 'Dry Tortugas', 'location' => 'Florida', 'date_established' => '1922-10-26', 'area_in_acres' => 64701.22],
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.64701],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
	['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => 183224.05],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07]
];

foreach ($nationalParks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

		$dbc->exec($query);
}