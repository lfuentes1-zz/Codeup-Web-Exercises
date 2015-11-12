<?php
date_default_timezone_set("America/Chicago");

function logMessage($logLevel, $message)
{
	$today = date("Y-m-d");
	$time = date('H:i:s');
	$filename = '../data/log-' . $today . '.log';

    $handle = fopen($filename, 'a');

    // Log entries should match the format:
	//   YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
    $data = $today . ' ' . $time . ' [' . $logLevel . '] ' . $message;
    fwrite($handle, $data . PHP_EOL);

	fclose($handle);
}

function logInfo($message) {
	logMessage ("INFO", $message);
}

function logError($message) {
	logMessage ("ERROR", $message);
}

logInfo ("This is an info message");
logError ('This is an error message. OH NOES!');
