<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function __construct($side)
    {
        parent::__construct($side, $side);
    }

    // In the new Square class, create a method called perimeter that returns the perimeter of the square.
    //this perimeter method overrides the perimeter method in Rectangle
    public function perimeter ()
    {
        return $this->getWidth() + $this->getHeight() + $this->getWidth() + $this->getHeight();
        // return (($this->width * 2) + ($this->height * 2));
    }

    //this area method overrides the area method in Rectangle
    public function area ()
    {
        return $this->getHeight() * $this->getWidth();
    }

}