<?php

class Rectangle {

	public $height;
	public $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area ()
    {
    	return $this->height * $this->width;
    }
}


// A static property is a variable that belongs to the class itself, and not to any particular instance of the class. 
// If a property is declared as static, we should no longer read or write it using an instance of the class. 