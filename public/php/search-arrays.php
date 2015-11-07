<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found.
function queryArray ($search_item, $array_name) {
	$result = array_search($search_item, $array_name);	
	return ($search_item == $result) ? TRUE : FALSE;
}

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