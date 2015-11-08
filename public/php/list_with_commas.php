<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = [];
$famousFakePhysicists = '';

// Converts array into list n1, n2, ..., and n3
function humanizedList($physicistsArray){
	$famousFakePhysicists = '';

	$lastItem = "and " . array_pop($physicistsArray);
	array_push($physicistsArray, $lastItem);
	$famousFakePhysicists = implode(', ', $physicistsArray);

	return $famousFakePhysicists;
}

//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
//First, convert the string into an array, broken at the comman(space) delimiter.
$physicistsArray = explode(', ', $physicistsString);
//Update your code to list the physicists by first name, in alphabetical order.
sort ($physicistsArray);

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;



