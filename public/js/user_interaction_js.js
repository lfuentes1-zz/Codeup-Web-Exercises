"use strict";

// todo: Ask the user for their name.
//       Keep asking if an empty input is provided.

var user_name = "";
var pizza_response = "";

do {
	user_name = prompt ("Enter your name: ");
} while (user_name === "");

// todo: Show an alert message that welcomes the user based on their input.

alert ("Welcome " + user_name + "!");

// todo: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

pizza_response = prompt (user_name + " do you like pizza?");

if (pizza_response === "yes")
	alert ("I like it too; sometimes, that is!");
else
{
	alert ("I don't blame you; however, I eat it the healthy version!");
}

// when would be like to do that - dialog to the user
// what if they close it and the program execution required
// the response to continue if the program execution.