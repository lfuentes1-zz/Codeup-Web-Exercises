<?php

function logMessage($logLevel, $message)
{
	$today = date ("Y-m-d");
	// $time3 = date('H:i:s', time());
	date_default_timezone_set("UTC"); 
	// echo "UTC:".time(); 
	$time = date('H:i:s', time ());

	$filename = '../data/log-' . $today . '.log';

    $handle = fopen($filename, 'a');

    // Log entries should match the format:
	//   YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
    $data = $today . ' ' . $time . ' [' . $logLevel . '] ' . $message;
    fwrite($handle, $data . PHP_EOL);

	fclose($handle);
}

// function logInfo() {
// 	logMessage ()
// }

// function logError() {

// }

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

//time stamp is not working as I would like i to 

//Add logInfo() and logError() functions that call logMessage(), passing the appropriate log level 
//values. Replace the calls to logMessage() with calls to the new functions you just created.