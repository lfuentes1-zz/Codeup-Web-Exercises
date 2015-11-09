<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$merged_array = [];

function combineArrays ($array_name1, $array_name2) {
	$merged_array = [];
	foreach ($array_name1 as $array1_data) {
		foreach ($array_name2 as $array2_data) {
			array_push($merged_array, $array1_data);
			if ($array1_data != $array2_data) {
				array_push($merged_array, $array2_data);
			}
			array_shift($array_name2);
			continue 2;
		}
	}
	return $merged_array;
}

$merged_array = combineArrays($names, $compare);
print_r ($merged_array);

//Another more cumbersome solution
// if ($array1_data == $array2_data) {
// 	array_push($merged_array, $array1_data);//
// } elseif ($array1_data != $array2_data) {
// 	array_push($merged_array, $array1_data);//
// 	array_push($merged_array, $array2_data);
// }

//Another solution
// $combined_array = [];
// foreach ($array1 as $index => $name) {
// 	if (array_search($name, $array2) ! == false) { 
// 		array_push($combined_array, $name);
// 	} else {
// 		array_push($combined_array, $name, $array2[$index]);
// 	}
// }
// return $combined_array;