<?php

class Log {
	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
    {
    	$today = date("Y-m-d");
    	// $this->filename = '../data/' . $prefix . '-' . date("Y-m-d") . '.log';
    	$this->filename = "../data/{$prefix}-{$today}.log";
    	$this->handle = fopen($this->filename, 'a');
    }

	public function logMessage($logLevel, $message)
    {
    	$data = date("Y-m-d") . ' ' . date("H:i:s") . ' [' . $logLevel . '] ' . $message;
    	fwrite($this->handle, $data . PHP_EOL);
    }	

    public function info($message){
		$this->logMessage ("INFO", $message);  
	}

    public function error($message){
		$this->logMessage ("ERROR", $message);
    }

    public function __destruct()
    {
		fclose($this->handle);
    }
}