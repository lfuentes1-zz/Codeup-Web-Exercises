<?php

$sum = 0;
$subtraction = 0;
$multiplication = 0;
$division = 0;
$input1 = 15;
$input2 = 5;
 
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

function modulus($a, $b)
{
	return $a % $b;
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
