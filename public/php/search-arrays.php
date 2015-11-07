<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found.
function queryArray ($search_item, $array_name) {
	$result = array_search($search_item, $array_name);	
	return ($search_item == $array_name[$result]) ? TRUE : FALSE;
}

// Create a function to compare 2 arrays that returns the number of values in common between the arrays.
//Not a very good solution, assumes that both matching elements will be in the same index
function compareArrays ($array_name1, $array_name2) {
	$matching = 0;
	foreach ($array_name1 as $array1_data) {
		foreach ($array_name2 as $array2_data) {
			if ($array1_data == $array2_data) {
				$matching++;
			}
		}
	}
	return $matching;
}

function compareArraysV2 ($array_name1, $array_name2) {
	$matching = 0;
	foreach ($array_name1 as $array1_data) {
		$result = array_search($array1_data, $array_name2);
		if ($array1_data == $array_name2[$result]) {
			$matching++;
		}
	}
	return $matching;
}

// function compareArrays
$matching = compareArrays ($names, $compare);
echo "The number of matches: " . $matching . PHP_EOL;

$matching = compareArraysV2 ($names, $compare);
echo "The number of matches for V2: " . $matching . PHP_EOL;

if (queryArray ('Tina', $names)) {
    echo "Result of first search: Found" . PHP_EOL;
} else {
	echo "Result of first search: Non-Existent" . PHP_EOL;
}

if (queryArray ('Bob', $names)) {
    echo "Result of first search: Found." . PHP_EOL;
} else {
	echo "Result of first search: Non-Existent" . PHP_EOL;
}

