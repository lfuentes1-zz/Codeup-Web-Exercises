<?php
// I can have HTML code in this file and render on the browser instead of running on Vagrant SSH
require_once 'Log.php';
date_default_timezone_set("America/Chicago");

// Create an instance of the Log class
$logger = new Log();

// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
$logger->filename = '../data/log-' . date("Y-m-d") . '.log';

$logger->info("This is an info message");
$logger->error("This is an error message.");