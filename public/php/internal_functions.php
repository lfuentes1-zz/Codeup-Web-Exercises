<?php

// TODO: Create your inspect() function here
function inspect($parameter) {

	switch (gettype($parameter)) {
		case 'string':
			return "The string is {$parameter}." . PHP_EOL;
			break;
		case 'integer':
			return "The integer is {$parameter}." . PHP_EOL;
			break;
		case 'boolean':
			return "The boolean is {$parameter}." . PHP_EOL;
			break;
		case 'double':
			return "The double is {$parameter}." . PHP_EOL;
			break;
		case 'integer':
			return "The integer is {$parameter}." . PHP_EOL;
			break;
		case 'array':
			return "The array is {$parameter}." . PHP_EOL;
			break;
		case 'NULL':
			return "The value is {$parameter}." . PHP_EOL;
			break;
		default:
			return "Unknown value or type." . PHP_EOL;
			break;
	}
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
