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
	$fileContentsString = fread($handle, filesize($filename));
	$contentsArray = explode("\n", trim($fileContentsString));

	foreach ($contentsArray as $person) {
		$peopleArray = explode('|', $person);
		// array_push ($allContacts, )
		$allContacts[] = array(
			'name' => $peopleArray[0],
			'number' => formatPhoneNumber($peopleArray[1])
		);
		//Option 2
		//$anotherArray = ["name" => $peopleArray[0],
		//				  "number" => formatPhoneNumber($peopleArray[1])
		//				 ];
		//$allContacts[] = $anotherArray; 
		//The previous line can be deleted as long as we add [] after $anotherArray on line 26

		//Option 3
		//$allContacts = [];
		//$allContacts['name'] = $peopleArray[0];
		//$allContacts[number'] = $formatPhoneNumber($peopleArray[1])
	}	
	
	fclose($handle);
    return $allContacts;
}

var_dump(parseContacts('../data/contacts.txt'));