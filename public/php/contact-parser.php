<?php

function parseContacts($filename)
{
	$filename = '../txt/contacts.txt';
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contents);
	echo "inside function\n";
	var_dump($contentsArray);
	echo "exiting function\n";




    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
