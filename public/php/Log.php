<?php
date_default_timezone_set("America/Chicago");

class Log {
	private $filename;
	private $handle;

	public function __construct($prefix = '../data/log')
    {
    	$today = date("Y-m-d");
        $filename = "{$prefix}-{$today}.log";
        $this->setFilename($filename);
        $this->handle = fopen($this->filename, 'a');
    }

    protected function setFilename ($filename)
    {
        if (is_string($filename))
        {
            if (touch($filename)
            {
                if (is_writable($filename)))
                {    
                    $this->filename = $filename;
                }
            }
        }
        //TODO:  else return an error
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