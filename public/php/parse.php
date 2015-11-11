<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function employeeCount ()
{
	//total number of employees
	$numberEmployees = sizeof($employeeArray);
}

function parseContactsArray($employeeArray)
{
	//Create the associative array
	foreach ($employeeArray as $person) {
		$employeeArray = explode(', ', $person);
		$companyEmployeesInfo[] = array (
			'employeeNum' => $employeeArray[0],
			'firstName' => $employeeArray[1],
			'lastName' => $employeeArray[2],
			'salesUnits' => $employeeArray[3]
			);
	}
	return $companyEmployeesInfo;
}		

function cleanFileContents ($fileContentsString)
{
	$fileContentsArray = explode("\n", trim($fileContentsString));

	foreach ($fileContentsArray as $line) {
		$firstChar = substr($line, 0, 1);

		if (!is_numeric($firstChar)) {
			array_shift($fileContentsArray);
		} else {
			break;
		}
	}
	// $employeeArray = $fileContentsArray;
	return $fileContentsArray;
}

function readFile ($filename)
{
	$handle = fopen($filename, 'r');
	$fileContentsString = fread($handle, filesize($filename));
	fclose($handle);

	return $fileContentsString;
}




$FILE_CONTENTS_STRING = readFile('../data/parse_csv.txt');
$FILE_CONTENTS_ARRAY = cleanFileContents($FILE_CONTENTS_STRING);
$COMPANY_EMPLOYEES_INFO = parseContactsArray($EMPLOYEE_ARRAY);


// Monthly Sales Report
// Date: 03-17-2015
// Office: Codeup
// ===================================================
// Employee Number, First Name, Last Name, Sales Units
// ***************************************************
// 1, Jane, Janeway, 3
// 3, Tricia, Triciason, 5
// 4, Jeannette, Jeanson, 4
// 5, Charles Emmerson III, Winchester, 2
// 6, Chet, Chedderson, 8
// 7, Chaiam, Chaiamson, 12
// 8, Dale, Dalesinger, 1
// 9, Zig, Ziglar, 50
// 10, Henry, Kissinger, 1
// 11, Arthur Herbert, Fonzarelli, 23
// 12, Betty, Boop, 67