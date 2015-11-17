<?php

class Log {
	public $filename;

	public function logMessage($logLevel, $message)
    {
    	$handle = fopen($this->filename, 'a');
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