<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function __construct($side)
    {
        $this->height = $side;
        $this->width = $side;
    }

    // In the new Square class, create a method called perimeter that returns the perimeter of the square.
    public function perimeter ()
    {
        return $this->width + $this->height + $this->width + $this->height;
    }

}

