<?php

class Log {
	public $filename;
	public $handle;

	public function __construct($prefix = '../data/log-')
    {
    	$this->filename = $prefix . date("Y-m-d") . '.log';
    	$this->handle = fopen($this->filename, 'a');
    }

	public function logMessage($logLevel, $message)
    {
    	// $handle = fopen($this->filename, 'a');
    	$data = date("Y-m-d") . ' ' . date("H:i:s") . ' [' . $logLevel . '] ' . $message;
    	fwrite($handle, $data . PHP_EOL);
		fclose($handle);
    }	

    public function info($message){
		$this->logMessage ("INFO", $message);  
	}

    public function error($message){
		$this->logMessage ("ERROR", $message);
    }
}