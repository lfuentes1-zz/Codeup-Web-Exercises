<?php

$sum = 0;
$subtraction = 0;
$multiplication = 0;
$division = 0;
$input1 = 15;
$input2 = 5;
 
function errorMessages ($a_value, $b_value) {
	return "ERROR: {a: {$a_value}} and {b: {$b_value}} arguments must be numbers" . PHP_EOL;
}

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;	
	} else {
		return errorMessages($a, $b);
	} 
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;	
	} else {
		return errorMessages($a, $b);
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;	
	} else {
		return errorMessages($a, $b);
	}
}

function forMultiply ($a, $b)
{
	if (is_numeric($a) && (is_numeric($b)))
	{
		$sum = 0;
		for ($i = 1; $i <= $b; $i++)
		{	
			$sum = $sum + $a;
		}
		return $sum;
	} else {
		return errorMessages($a, $b);
	}
	//can also re-use the add function inside the for loop to re-use code
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
		return errorMessages($a, $b);
	} 
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;	
	} else {
		return errorMessages($a, $b);
	}
}

// Add code to test your functions here
$sum = add ($input1, $input2);
echo "The sum is {$sum}" . PHP_EOL;
$subtraction = subtract ($input1, $input2);
echo "The subtraction is {$subtraction}" . PHP_EOL;
$multiplication = multiply ($input1, $input2);
echo "The multiplication is {$multiplication}" . PHP_EOL;
$multiplication = forMultiply ($input1, $input2);
echo "The multiplication is {$multiplication} using the for loop" . PHP_EOL;
$division = divide ($input1, $input2);
echo "The division is {$division}" . PHP_EOL;
$remainder = modulus ($input1, $input2);
echo "The remainder is {$remainder}" . PHP_EOL;
