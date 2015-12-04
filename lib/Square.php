<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function __construct($side)
    {
        parent::__construct($side, $side);
    }

    // In the new Square class, create a method called perimeter that returns the perimeter of the square.
    public function perimeter ()
    {
        return $this->width + $this->height + $this->width + $this->height;
    }

}

// Update the Square class to override the parent's constructor by only accepting one attribute (height) and using that to 
// set both $width and $height in your class.

// Update the constructor in Square to instead pass height on to the parent's constructor.

