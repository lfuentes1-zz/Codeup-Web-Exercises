<?php
define ("NON_NUMERIC", "non numeric");
define ("DIVIDE_BY_ZERO", "divide by zero");

$sum = 0;
$subtraction = 0;
$multiplication = 0;
$division = 0;
$input1 = 15;
$input2 = 0;
 
function errorMessages ($a_value, $b_value, $errorType) {
	switch ($errorType) {
		case 'non numeric':
			return "Error! Values given must be numeric!  You gave {a: {$a_value}} and {b: {$b_value}}" . PHP_EOL;
			break;
		case 'divide by zero':
			return "Error! Divison by zero!  You gave {a: {$a_value}} / {b: {$b_value}}" . PHP_EOL;
			break;
		default:
			return "Error not found!";
			break;
	}
}

function validateNumeric ($a_value, $b_value) {
	if (is_numeric($a_value) && is_numeric($b_value)) {
		return true;
	} else {
		return false;
	}
}

function add($a, $b)
{
	if (validateNumeric($a, $b)) {
		return $a + $b;	
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
	} 
}

function subtract($a, $b)
{
	if (validateNumeric($a, $b)) {
		return $a - $b;	
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
	}
}

function multiply($a, $b)
{
	if (validateNumeric($a, $b)) {
		return $a * $b;	
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
	}
}

function forMultiply ($a, $b)
{
	if (validateNumeric($a, $b)) {
		$sum = 0;
		for ($i = 1; $i <= $b; $i++)
		{	
			$sum = $sum + $a;
		}
		return $sum;
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
	}
	//can also re-use the add function inside the for loop to re-use code
}

function divide($a, $b)
{
	if (validateNumeric($a, $b)) {
		if ($a / $b == 0) {
			return errorMessages ($a, $b, DIVIDE_BY_ZERO);
		} else {
			return $a / $b;		
		}
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
	} 
}

function modulus($a, $b)
{
	if (validateNumeric($a, $b)) {
		return $a % $b;	
	} else {
		return errorMessages($a, $b, NON_NUMERIC);
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
