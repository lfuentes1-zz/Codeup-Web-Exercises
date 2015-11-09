<?php

function parseContacts($filename)
{
	$filename = '../txt/contacts.txt';
    $contacts = array();

    $handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contents);
	foreach ($contentsArray as $person) {
		$contactsArray = explode('|', $person);
		var_dump($contactsArray);
	}


    return $contacts;
}

var_dump(parseContacts('contacts.txt'));


// array(3) {
//      [0]=>
//      array(2) {
//          ["name"]=>
//          string(10) "Jack Blank"
//          ["number"]=>
//          string(12) "123-123-1234"
//      }
//      [1]=>
//      array(2) {
//          ["name"]=>
//          string(8) "Jane Doe"
//          ["number"]=>
//          string(12) "234-234-2345"
//      }
//      [2]=>
//      array(2) {
//          ["name"]=>
//          string(9) "Sam Space"
//          ["number"]=>
//          string(12) "345-345-3456"
//      }
// }

// array(2) {
//   [0] =>
//   string(10) "Jack Blank"
//   [1] =>
//   string(10) "1231231234"
// }
// array(2) {
//   [0] =>
//   string(8) "Jane Doe"
//   [1] =>
//   string(10) "2342342345"
// }
// array(2) {
//   [0] =>
//   string(9) "Sam Space"
//   [1] =>
//   string(10) "3453453456"
// }
// array(1) {
//   [0] =>
//   string(0) ""
// }
// array(0) {
// }