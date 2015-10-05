"use strict";

var random = 0;
var save_random;
var is_even = 0;
var i = 0;

do {
	random = Math.floor((Math.random()*50)+1);
	save_random = random;
	console.log ("Random #: " + random);
	is_even = random % 2;
	console.log ("Even #: " + is_even);
} while (is_even != 0)
console.log ("Random # to skip: " + save_random);

for (i = 1; i <= 50; i++)
{
	// if (i === save_random)
		// break;
	console.log ("Odd number: " + i);
	
	
}