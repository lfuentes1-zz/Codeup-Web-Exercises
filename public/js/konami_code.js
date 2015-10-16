$(document).ready(function() {

"use strict";

	var konami_code = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
	var users_code  = [];
	var index = 0;


	$(document).keyup(function(event){
		users_code.push(event.keyCode);
		if (users_code.toString().indexOf(konami_code) >= 0)
		{
			alert ("You have added 30 lives!");
			$("body").css("background-color", "#FF3399");
			$("#my_heading").css("color", "red");

			users_code = [];
		}
	});	

});


//<audio tag> in html (see next line)
// $("#contra").get(0).play(); //this like in .js

//what is the user enters the wrong keystroke
//if the users keystoke is not in the array, clear the array which means start over

//one solution to compare 
//take this array and covert to string for both
//konami_code.join("|") == users_code.join("|")

