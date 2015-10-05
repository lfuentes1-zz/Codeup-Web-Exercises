"use strict";

var result = 0;


for (var j = 1; j < 3; j++)
{
	// console.log ("Outer Loop: ");
	for (var i = 0; i <= 10; i++)
		{
			result = i * j;
			console.log ("Inner Loop: " + i + " x ... = " + result);
		}	
}

// https://gist.github.com/icemancast/f20b7650330c972830ef

var bottles = 99;
do 
{
	console.log (bottles + " bottles fo beer on the wall, " + bottles + " bottles of beer.");
	bottles--;
	if (bottles === 0)
	{
		console.log ("Take one down and pass it around, no more bottles of beer on the wall.");
	} else
	{
		console.log ("Take one down and pass it around, " + bottles + " bottles of beer on the wall.");
	}
} while ((bottles >= 1) && (bottles <=99)); //the 99 condition is not needed

console.log ("No More bottles of beer on the wall, no more bottles of beer.");
console.log ("Go to the store and buy some more, 99 bottles of beer on the wall.");