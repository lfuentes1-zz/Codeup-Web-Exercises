<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = [];
$famousFakePhysicists = '';
$sorting = true;

// Converts array into list n1, n2, ..., and n3
//Default to alphabetical sorting = false
function humanizedList($physicistsArray, $sorting = false){
	$famousFakePhysicists = '';

	//Update your code to list the physicists by first name, in alphabetical order.
	if ($sorting == true){
		sort ($physicistsArray);	
	}
	
	$lastItem = "and " . array_pop($physicistsArray);
	array_push($physicistsArray, $lastItem);
	$famousFakePhysicists = implode(', ', $physicistsArray);

	return $famousFakePhysicists;
}

//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
//First, convert the string into an array, broken at the comman(space) delimiter.
$physicistsArray = explode(', ', $physicistsString);

//The second argument to make alphabetical sorting optional. TRUE = SORT and FALSE = DON'T SORT
$famousFakePhysicists = humanizedList($physicistsArray, $sorting);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

//The second argument to make alphabetical sorting optional. Default to false if no 2nd argument passed
$famousFakePhysicists = humanizedList($physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;





