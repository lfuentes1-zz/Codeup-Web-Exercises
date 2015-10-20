$(document).ready(function() {
    "use strict";
    // DONE: Create an ajax GET request for /data/inventory.json
    // DONE: Take the data from inventory.json and append it to the products table
    //       HINT: Your data should come back as a JSON object; use console.log() to inspect
    //             its contents and fields
    //       HINT: You will want to target #insertProducts for your new HTML elements

    function populateTable (){
	    $.get("/data/inventory.json").done(function(data){
	    	// var tr;
	    	var outputString;
			data.forEach(function (name) {
				outputString += '<tr><td>' + name.title +'</td><td>' +
				name.quantity + '</td><td>' + '$' +  name.price + '</td><td>' +
				name.categories + '</td></tr>';
			});
			$("#insertProducts").html(outputString);
			});
	};
	
	populateTable ();

 	$(".refresh").click(function(){
	    populateTable();
	});

    // hit the refresh as a modular function that when it gets hit,
    // the .get command is called again.  We aren't really going
    // to write to the json file just update the dom
});

// Add some new entries to inventory.json and see how the data on the page gets updated.
// Add a "Refresh" button that will load inventory.json for you without having to refresh the entire page.

// DONE:  Add Twitter Bootstrap to your online store with some custom CSS to make the style your own.