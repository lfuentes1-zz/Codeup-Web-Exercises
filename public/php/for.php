<?php

do {
	fwrite(STDOUT, "Enter a starting number: ");
	$starting_num = trim(fgets(STDIN));
	if (!is_numeric($starting_num)) {	
		fwrite (STDOUT, "Enter a numeric value!" . PHP_EOL);
	}
} while (!is_numeric($starting_num));

do {	
	fwrite(STDOUT, "Enter an ending number: ");
	$ending_num = trim(fgets(STDIN));
	if (!is_numeric($ending_num)) {	
		fwrite (STDOUT, "Enter a numeric value!" . PHP_EOL);
	}
} while (!is_numeric($ending_num));

do {
	fwrite(STDOUT, "Enter your incrementor: ");
	$incrementor = trim(fgets(STDIN));
	if (!is_numeric($incrementor)) {
		fwrite (STDOUT, "Enter a numeric value!" . PHP_EOL);
	}
} while (!is_numeric($incrementor));

if ($incrementor == 0) {
	$incrementor = 1;
}

for ($i = $starting_num; $i <= $ending_num; $i = $i + $incrementor) {
	echo "$i". PHP_EOL;
}