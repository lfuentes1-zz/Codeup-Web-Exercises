<?php

	for ($i = 1; $i <= 100; $i++){
		//The following statement checks for odd numbers
		if ($i % 2 != 0) {
			//continue here will skip this iteration of the loop - meaning the echo statement 
			//and continue to the next iteration
			continue;
		}
		echo "$i" . PHP_EOL;
	}

	echo PHP_EOL;
	for ($i = 1; $i <= 100; $i++){
		if ($i > 10) {
			//break out of the for loop and do not iterate anymore through it
			break;
		}
		echo "$i" . PHP_EOL;
	}