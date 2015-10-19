"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

// todo: create a case statement that will handle every color except indigo and violet
// todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.
// todo: create a default case that will catch indigo and violet
// todo: for the default case, log: I do not know anything by that color.

console.log (color);

switch (color) {
	case "red":
		message = "An apple is red!";
		break;
	case "orange":
		message = "An orange is orange!";
		break;
	case "yellow":
		message = "A banana is yellow!";
		break;
	case "green":
		message = "A pear is green!";
		break;
	case "blue":
		message = "The sky is blue!";
		break;
	default: 
		message = "I don't know anything by that color!";
		break; //the break at the end is not necessary for the default case
	}

  console.log (message);