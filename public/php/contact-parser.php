<?php

function formatPhoneNumber ($phoneNumber) {
	$phoneNumber = substr($phoneNumber, 0, 3) . '-' . 
					substr($phoneNumber, 3, 3) . '-' .
					substr($phoneNumber, 6, 4);

	return $phoneNumber;
}

function parseContacts($filename)
{
    $allContacts = array();

    $handle = fopen($filename, 'r');
	$fileContents = fread($handle, filesize($filename));
	$fileContents = trim($fileContents);

	$contentsArray = explode("\n", $fileContents);

	foreach ($contentsArray as $person) {
		$peopleArray = explode('|', $person);
		$allContacts[] = array(
			'name' => $peopleArray[0],
			'number' => formatPhoneNumber($peopleArray[1])
		);
	}	
	
	fclose($handle);
    return $allContacts;
}

var_dump(parseContacts('../data/contacts.txt'));