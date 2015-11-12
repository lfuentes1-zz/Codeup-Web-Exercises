<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function employeeCount ($employeeArray)
{
	//total number of employees
	$numberEmployees = sizeof($employeeArray);

	return $numberEmployees;
}

function unitsSold ($employeeArray)
{
	// - total number of units sold
	$unitsSoldCount = 0;
	foreach ($employeeArray as $person) {
		$unitsSoldCount = $unitsSoldCount + $person['salesUnits'];
	}
	return $unitsSoldCount;
}

function employeeAvgSoldUnits ($employeeArray)
{
	// - avg units sold per employee
	$unitsSoldCount = unitsSold ($employeeArray);
	$numberEmployees = employeeCount($employeeArray);

	return ($unitsSoldCount / $numberEmployees);
}

// Comparison function
function cmp($a, $b) {
    if ($a['salesUnits'] == $b['salesUnits']) {
        return 0;
    }
    return ($a['salesUnits'] > $b['salesUnits']) ? -1 : 1;
}

function printReport ($employeeArray) {
	echo "MONTHLY SALES REPORT" . PHP_EOL . PHP_EOL;
	echo "Total Number of Employees: " . employeeCount($employeeArray) . PHP_EOL;
	echo "Total Number of Units Sold: " . unitsSold($employeeArray) . PHP_EOL;
	echo "Avg. Units Sold Per Employee: " . employeeAvgSoldUnits($employeeArray) . PHP_EOL . PHP_EOL;

	//Report Heading
	//printf built-in function works as follows
	//printf(%[sign specified: -|+][padding character][alignment specified: -][width][.precision]type)
	printf("% -11s", "Units");
	printf("% -41s", "Full Name");
	printf("% -15s", "Employee Number" . PHP_EOL);
	printf("%'-68s", "-" . PHP_EOL);

	uasort($employeeArray, 'cmp');

	foreach ($employeeArray as $person) {
		printf ("% -10s ", $person['salesUnits']);

		$fullName = $person['firstName'] . ' ' . $person['lastName'];
		printf ("% -40s ", $fullName);
		
		printf ("% -10s", $person['employeeNum']);

		echo PHP_EOL;
	}
}

function parseContactsArray($employeeArray)
{
	//Create the associative array
	foreach ($employeeArray as $person) {
		$employeeArray = explode(', ', $person);
		$companyEmployeesInfoArray[] = array (
			'employeeNum' => $employeeArray[0],
			'firstName' => $employeeArray[1],
			'lastName' => $employeeArray[2],
			'salesUnits' => $employeeArray[3]
			);
	}
	return $companyEmployeesInfoArray;
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

function readFileContents ($filename)
{
	$handle = fopen($filename, 'r');
	$fileContentsString = fread($handle, filesize($filename));
	fclose($handle);

	return $fileContentsString;
}

$gfileContentsString = readFileContents('../data/parse_csv.txt');
$gfileContentsArray = cleanFileContents($gfileContentsString);
$gcompanyEmployeesInfoArray = parseContactsArray($gfileContentsArray);
$printReportResults = printReport($gcompanyEmployeesInfoArray);


//Sample file for reading
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