<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$merged_array = [];

function mergeArrays ($array_name1, $array_name2) {
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

$merged_array = mergeArrays($names, $compare);
print_r ($merged_array);

//Another more cumbersome solution
// if ($array1_data == $array2_data) {
// 	array_push($merged_array, $array1_data);//
// } elseif ($array1_data != $array2_data) {
// 	array_push($merged_array, $array1_data);//
// 	array_push($merged_array, $array2_data);
// }