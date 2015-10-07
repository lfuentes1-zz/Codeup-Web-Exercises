"use strict";

// HIGH LOW CHALLENGE

(function (){

// 1. Generate a random number
	var random_number = Math.floor((Math.random () * 100) + 1);

// 2. Have the user guess the number
	var users_guess;

	users_guess = prompt ("Can you guess the # I'm thinking about?");

// 5. Have the user keep guessing until they get it right

	console.log (random_number);	
	do {

		if (users_guess === random_number)
		{
			alert ("You guessed correctly, my number is" + random_number);
		}
		else
		{
			// 4. If they guess high or low let them know
			if (users_guess > random_number)
			{
				alert ("The number " + " is too high!  Guess lower!");
			}
			else 
			{
				alert ("The number " + " is too low!  Guess higher!");
			}
			users_guess = prompt ("Can you guess the # I'm thinking about?");
		}
	
	} while (users_guess != random_number);


})();

//add functions

// Extra:
// 1. Set a guess limit
// 2. Make an option to play again(new random number)