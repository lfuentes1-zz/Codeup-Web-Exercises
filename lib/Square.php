<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{
    // In the new Square class, create a method called perimeter that returns the perimeter of the square.
    public function perimeter ()
    {
        return $this->width + $this->height + $this->width + $this->height;
    }

}