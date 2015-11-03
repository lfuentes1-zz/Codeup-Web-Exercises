<?php

$person1 = [
	'first_name' => 'Amy',
	'last_name' => 'Wong',
	'email' => 'amy@codeup.com',
	'phone' => '202139803'
];

$person2 = [
	'first_name' => 'Letty',
	'last_name' => 'Fuentes',
	'email' => 'letty@codeup.com',
	'phone' => '202139803'
]; 

$person3 = [
	'first_name' => 'David',
	'last_name' => 'Michael',
	'email' => 'david@codeup.com',
	'phone' => '202139803'
];

echo $person2['first_name'] . ' ' . $person2['last_name'] . "\n";

$test = ['person1' => $person1, 'person2' => $person2];

var_dump($test);

$test['person3'] = $person3;

var_dump($test);

//Where to run this file from?
//vagrant > vagrant ssh
// </vagrant/sites/codeup.dev/public/php> php five_three_two.php
?>