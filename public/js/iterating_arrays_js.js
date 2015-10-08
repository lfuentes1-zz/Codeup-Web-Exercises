"use strict";


(function ()
{

// todo:
// Create an array of 4 names using literal array notation, in a variable called 'names'.
var names = ["Letty", "David", "Alexander", "Alyssa", "Alexavier"];

// todo:
// Create a log statement that will log the number of elements in the names array.

var count = names.length;

// todo:
// Create log statements that will print each of the names array elements individually.

for (var index = 0; index < names.length; index+=1)
{
	console.log ("Names[" + index + "]: " + names[index]);
}

names.forEach (function (element, index, array)
{
	console.log ("Names[" + index + "]: " + element);
});

})();