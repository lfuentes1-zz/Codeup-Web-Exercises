<?php

// do {
	fwrite(STDOUT, "Enter a starting number: ");
	$starting_num = (int)trim(fgets(STDIN));
	if (!is_numeric($starting_num))
	{	
		die ("Enter a numeric value!");
	}
	fwrite(STDOUT, "Enter an ending number: ");
	$ending_num = (int)trim(fgets(STDIN));
	if (!is_numeric($ending_num))
	{	
		die ("Enter a numeric value!");
	}
// } while ();


fwrite(STDOUT, "Enter your incrementor: ");
$incrementor = (int)trim(fgets(STDIN));

if ($incrementor == 0) {
	$incrementor = 1;
}

for ($i = $starting_num; $i <= $ending_num; $i = $i + $incrementor) {
	echo "$i". PHP_EOL;
}