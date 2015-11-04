<?php

// Create a do-while loop that will count by 2's starting with 0 and ending at 100. Follow each number 
// with a newline.
$number = 0;
do {
	if ($number % 2 == 0) {
		echo "$number" . PHP_EOL;
	}
	$number++;
} while ($number <= 100);

// Alter your loop to count backwards by 5's from 100 to -10.
echo "Next Loop.  Resetted number" . PHP_EOL;
$number = 100;
do {
	if ($number % 5 == 0) {
		echo "$number" . PHP_EOL;
	}
	$number--;
} while ($number >= -10);

// Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a is 
// less than 1,000,000. Output should equal:
echo "Next Loop.  Resetted number" . PHP_EOL;
$number = 2;
do {
	echo "$number" . PHP_EOL;
	// $number = $number * $number;
	$number = pow($number, 2);
} while ($number < 1000000);



// do {
// 	echo "Please input your name";
// 	$name = //get the name from the user
// } while (!is_string($name));