<?php

function parseContacts($filename)
{
	$filename = '../txt/contacts.txt';
    $contacts = array();
    $contentsArray = array();

    $handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contents);
	// var_dump($contentsArray);
	$index = 0;
	foreach ($contentsArray as $person) {
		$contactsArray = explode('|', $person);


		$contactsArray[1] = substr($contactsArray[1], 0, 3) . '-' . 
							substr($contactsArray[1], 3, 3) . '-' .
							substr($contactsArray[1], 6, 4);
		$contentsArray[$index++] = $contactsArray;
		// var_dump($contactsArray);
	}
	fclose($handle);
    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));