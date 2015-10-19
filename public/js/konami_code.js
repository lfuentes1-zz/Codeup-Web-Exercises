$(document).ready(function() {

"use strict";

	var konami_code = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
	var users_code  = [];
	var i = 0;

	$(document).keyup(function(event){
		
		users_code.push(event.keyCode);
		// console.log(users_code);

		if (users_code[i] == konami_code[i])
		{

			if ((users_code.length - 1) === (konami_code.length - 1))
			{
				alert ("You have added 30 lives!");
				$("body").css("background-color", "#FF3399");
				$("#my_heading").css("color", "red");
			}
			i +=1;
		}
		else
		{
			users_code = []; //invalid code = clear the array and start over
			// alert ("Try Again!");
			i = 0;
		}

	});
});


//<audio tag> in html (see next line)
// $("#contra").get(0).play(); //this like in .js

//one solution to compare 
//take this array and covert to string for both
//konami_code.join("|") == users_code.join("|")

// Another solution discussed in class
// if (users_code[users_code.length-1] == konami_code[users_code.length-1]) {
// 	users_code = [];
// }
// if (users_code.length == konami_code.length) {
// 	$("body").css("background-color", "url/img/up1.jpeg");
// 	alert ("You have added 30 lives!");
// }