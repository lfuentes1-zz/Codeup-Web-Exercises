<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found.
$query = 'Tina';
$query2 = 'Bob';

$result = array_search($query, $names);
$result2 = array_search($query2, $names);

if ($result == $query) {
    echo "Result of first search: " . $names[$result] . PHP_EOL;
} else {
	echo "Result of first search: Non-Existent" . PHP_EOL;
}

if ($result2 == $query2) {
    echo "Result of second search: " . $names[$result2] . PHP_EOL;
} else {
	echo "Result of second search: Non-Existent" . PHP_EOL;
}