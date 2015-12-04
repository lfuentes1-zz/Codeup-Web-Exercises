<?php

class Rectangle {

	public $height;
	public $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    //this is the base method
    public function area ()
    {
    	return $this->height * $this->width;
    }

    //this is the base method
    public function perimeter ()
    {
    	return (($this->width * 2) + ($this->height * 2));
    }
}
// A static property is a variable that belongs to the class itself, and not to any particular instance of the class. 
// If a property is declared as static, we should no longer read or write it using an instance of the class. 