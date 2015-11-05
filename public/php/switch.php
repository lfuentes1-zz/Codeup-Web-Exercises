<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
     	echo "It is Monday" . PHP_EOL;
     	break;
     case 2:
     	echo "It is Tuesday" . PHP_EOL;
     	break;
     case 3:
     	echo "It is Wednesday" . PHP_EOL;
     	break;
     case 4:
     	echo "It is Thursday" . PHP_EOL;
     	break;
     case 5:
     	echo "It is Friday" . PHP_EOL;
     	break;
     case 6:
     	echo "It is Saturday" . PHP_EOL;
     	break;
     case 7:
     	echo "It is Sunday" . PHP_EOL;
     	break;
     default:
     	break;
 }

 if ($dayOfWeek == 1) {
 	echo "It is Monday" . PHP_EOL;
 } elseif ($dayOfWeek == 2) {
 	echo "It is Tuesday" . PHP_EOL;
 } elseif ($dayOfWeek == 3) {
 	echo "It is Wednesday" . PHP_EOL;
 } elseif ($dayOfWeek == 4) {
 	echo "It is Thursday" . PHP_EOL;
 } elseif ($dayOfWeek == 5) {
 	echo "It is Friday" . PHP_EOL;
 } elseif ($dayOfWeek == 6) {
 	echo "It is Saturday" . PHP_EOL;
 } elseif ($dayOfWeek == 7) {
    echo "It is Sunday" . PHP_EOL;
 }
