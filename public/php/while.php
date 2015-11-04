<?php

$test = 5;

while ($test <= 15) {
	echo "$test" . PHP_EOL;
	$test++;
}

$test = 5;
while ($test <= 15) {
	$even = $test % 2;
	if ($even == 0)
	{
		echo "$test" . PHP_EOL;
	}
	$test++;
}

?>