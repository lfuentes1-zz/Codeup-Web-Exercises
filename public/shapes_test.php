<?php

require_once '../lib/Rectangle.php';
require_once '../lib/Square.php';

$rectangle = new Rectangle(4, 3);
echo "The area of rectangle one is: {$rectangle->area()}" . PHP_EOL;

$rectangle2 = new Rectangle(5, 4);
echo "The area of rectangle two is: {$rectangle2->area()}" . PHP_EOL;

$rectangle3 = new Rectangle(10, 10);
echo "The area of rectangle three is: {$rectangle3->area()}" . PHP_EOL;

$square = new Square(4, 4);
echo "The area of square one is: {$square->area()}" . PHP_EOL;
echo "The perimeter of square one is: {$square->perimeter()}" . PHP_EOL;

$square2 = new Square(5, 5);
echo "The area of square two is: {$square2->area()}" . PHP_EOL;
echo "The perimeter of square two is: {$square2->perimeter()}" . PHP_EOL;

$square3 = new Square(6, 6);
echo "The area of square three is: {$square3->area()}" . PHP_EOL;
echo "The perimeter of square three is: {$square3->perimeter()}" . PHP_EOL;
