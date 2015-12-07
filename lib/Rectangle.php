<?php

class Rectangle {

	private $height;
	private $width;

    public function __construct($height, $width)
    {
        //the below line could also be used instead of the calling the setter functions since this class itself can access
        // its own properties
        // $this->height = $height;
        $this->setHeight($height);
        $this->setWidth($width);
    }

	protected function setHeight ($height)
    {
        $this->height = $height;
    }

    protected function setWidth ($width)
    {
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

    protected function getHeight ()
    {
        return $this->height;
    }

    protected function getWidth ()
    {
        return $this->width;
    }
}
// A static property is a variable that belongs to the class itself, and not to any particular instance of the class. 
// If a property is declared as static, we should no longer read or write it using an instance of the class. 