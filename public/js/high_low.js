"use strict";

// HIGH LOW CHALLENGE

(function (){

	var global_random_number = 0;
	var global_users_guess = 0;
	var successful_guess = false;
	var i_quit = false;

	function getRandomNumber()
	{
		var random_number = Math.floor((Math.random () * 100) + 1);
		return random_number;
	}
	

	function promptUser()
	{
		var users_guess = prompt ("Can you guess the # I'm thinking about?");	
		return users_guess;
	}
	
	function guessNumber(random_number, users_guess)
	{
		var attempts = 1;
		// 5. Keep guessing until you get it right or 5 attempts are reached
		while ((users_guess != random_number) && (attempts <= 5))
		{
			// 3. Check the users guess with the random number
			// 4. If they guess high or low let them know
			if (users_guess > random_number)
			{
				alert ("The number " + " is too high!  Guess lower!");
			}
			else 
			{
				alert ("The number " + " is too low!  Guess higher!");
			}
			attempts++;
			users_guess = prompt ("Attempt #: " + attempts + ". Guess again!");
		}
		//true === successful guess within 5 attempts; false === otherwise
		return ((users_guess === random_number) && (attempts < 5)) ? true : false;		
	}

	function sucessful_message (local_successful_guess, local_random_number)
	{
		if (local_successful_guess)
		{
			alert ("The number " + local_random_number + " is correct!");
		}
		else 
		{
			alert ("Sorry you reached the maximum # of attempts. The # was " + local_random_number);
		}
		return;
	}

	function playAgain()
	{
		var response = prompt ("Would you like to play again?");
		return (response === "yes") ? true : false;
	}

// 2. Make an option to play again(new random number)
do {
	// 1. Generate a random number
	global_random_number = getRandomNumber();
	console.log ("Random # " + global_random_number);

	global_users_guess = promptUser ();

	// 2. Have the user guess the number
	successful_guess = guessNumber (global_random_number, global_users_guess);

	sucessful_message (successful_guess, global_random_number);

	//would you like to play again
	i_quit = playAgain ();
} while (i_quit === true);

})();

//Sucessful # of attempts is reached at the wrong times, even when guessed correclty
//6 attempts instead of 5