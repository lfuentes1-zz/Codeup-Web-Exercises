"use strict";

//TO DO:  Area of Rectangle
function areaRect (length, height)
{
	var rectangle_Area = length * height;
	return rectangle_Area; 
}

//TO DO:  Area of Triangle
function areaTriangle (height, base)
{
	var triangle_Area = (height * base) / 2;
	return triangle_Area;
}

//TO DO:  Area of Circle
function areaCircle (radius)
{
	// var circle_Area = Math.PI * (radius * radius);
	var circle_Area = Math.PI * (Math.pow(radius,2));
	return circle_Area;
}

//TO DO:   Perimeter of Circle
function perimeterCircle (radius)
{
	var circle_Perimeter = 2 * Math.PI * radius;
	return circle_Perimeter;
}

//TO DO:  Area of Trapezoid
function trapezoidArea (a_base, b_base, height)
{
	var area_Trapezoid = (((a_base + b_base)) / 2) * height;
	return area_Trapezoid;
}

function StarofDavidArea (half_trapezoid, one_triangle)
{
	var area_StarDavid = ((half_trapezoid * 2) + (one_triangle * 6));
	return area_StarDavid;
}

function areaEquilateralTriangle (side)
{
	var area_eq_triangle = 	((side * side) * (Math.sqrt(3) / 4));
	return area_eq_triangle;
}

console.log ("Area of a Rectangle: " + areaRect (5, 5));
console.log ("Area of a Triangle: " + areaTriangle (5, 5));
console.log ("Area of a Circle: " + areaCircle (5));
console.log ("Perimeter of a Circle: " + perimeterCircle(5));
console.log ("Area of a Trapezoid: " + trapezoidArea (5, 5, 2))
console.log ("Area of Star of David: " + StarofDavidArea (trapezoidArea (5, 5, 2), areaEquilateralTriangle(4)));

