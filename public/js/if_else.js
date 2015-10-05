"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var randomColor = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'violet'; // TODO: change this to your favorite color from the list

var message = "";
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

randomColor;
console.log ("Random color chosen is " + randomColor);
console.log ("My favorite color is " + favorite);

if (randomColor === "red") {
	message = "Red is the color of an apple!";
}
else {
	if (randomColor === "orange") {
		message = "Orange is the color of an orange!";
	}
	else {
		if (randomColor === "yellow") {
			message = "Yellow is the color of a banana!";
		}
		else {
			if (randomColor === "green") {
				message = "Green is the color of a pear!";
			}
			else {
				if (randomColor === "blue") {
					message = "Blue is the color of the sky!";
				}
				else {
					message = "I do not know anything by that color!";
				}
			}
		}
	}
}

console.log (message);
// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
message = (randomColor === "violet") ? "Violet is an awesome color" : "Pick violet :(, it is awesome :)";
console.log (message);

/* NICE EXAMPLE
name = "Letty";
if (typeof name == "string") {
	message = "Hi " + name;
} else {
	message = "The variable is not a string";
}
console.log (message);*/