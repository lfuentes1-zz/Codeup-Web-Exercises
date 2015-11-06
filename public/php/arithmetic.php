<?php

$sum = 0;
$subtraction = 0;
$multiplication = 0;
$division = 0;
$input1 = 15;
$input2 = 5;
 
function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;	
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL;
	} 
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;	
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL;
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;	
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL;
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if ($a / $b == 0) {
			return "ERROR:  Division by zero." . PHP_EOL;
		} else {
			return $a / $b;		
		}
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL;
	} 
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;	
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL;
	}
}

// Add code to test your functions here
$sum = add ($input1, $input2);
echo "The sum is {$sum}" . PHP_EOL;
$subtraction = subtract ($input1, $input2);
echo "The subtraction is {$subtraction}" . PHP_EOL;
$multiplication = multiply ($input1, $input2);
echo "The multiplication is {$multiplication}" . PHP_EOL;
$division = divide ($input1, $input2);
echo "The division is {$division}" . PHP_EOL;
$remainder = modulus ($input1, $input2);
echo "The remainder is {$remainder}" . PHP_EOL;
