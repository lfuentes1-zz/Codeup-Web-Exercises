<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) { //5 < 10
     // output the appropriate result
     echo "$a is less than $b\n";
 }

 if ($b > $a) { //10 > 5
     // output the appropriate result
     echo "$b is greater than $a\n";
 }

 if ($b >= $c) { //10 >= '10'
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }

 if ($b <= $c) { //10 <= '10'
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) { //10 == '10'
     // output the appropriate result
     echo "$b is equal to $c\n";
 }

 if ($b === $c) { //10 === '10'
     // output the appropriate result
     echo "$b is not identical to $c\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }


//To run go to: /vagrant/sites/codeup.dev/public/php php if.php
 ?>