<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
	$fileContentsString = fread($handle, filesize($filename));
	$fileContentsArray = explode("\n", trim($fileContentsString));

	foreach ($fileContentsArray as $line) {
		$firstChar = substr($line, 1);
		if (!is_int($firstChar)) {
			array_shift($fileContentsArray);
		} else {
			break;
		}
	}


		// $peopleArray = explode('|', $person);
		// // array_push ($allContacts, )
		// $allContacts[] = array(
		// 	'name' => $peopleArray[0],
		// 	'number' => formatPhoneNumber($peopleArray[1])
		// );
}		
	fclose($handle);
    // return $allContacts;
}
