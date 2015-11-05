<?php

$sum = 0;
$subtraction = 0;
$multiplication = 0;
$division = 0;
 
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
	return $a - $b;
}

function multiply($a, $b)
{
	return $a * $b;
}

function divide($a, $b)
{
	return $a / $b;
}

// Add code to test your functions here
$sum = add (10, 5);
echo "The sum is {$sum}" . PHP_EOL;
$subtraction = subtract (15, 5);
echo "The subtraction is {$subtraction}" . PHP_EOL;
$multiplication = multiply (3, 3);
echo "The multiplication is {$multiplication}" . PHP_EOL;
$division = divide (15, 5);
echo "The division is {$division}" . PHP_EOL;