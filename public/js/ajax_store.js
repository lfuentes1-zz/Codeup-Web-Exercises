(function() {
    // TODO: Create an ajax GET request for /data/inventory.json
    // TODO: Take the data from inventory.json and append it to the products table
    //       HINT: Your data should come back as a JSON object; use console.log() to inspect
    //             its contents and fields
    //       HINT: You will want to target #insertProducts for your new HTML elements

    $.get("/data/inventory.json").done(function(data) {
    	// var tr;
    	var outputString;
		data.forEach(function (name) {
			outputString += '<tr><td>' + name.title +'<td>' +
			name.quantity + '<td>' + name.price + '<td>' +
			name.categories + '<tr>';
		});
			$(insertProducts).html(outputString);
		});
})();

// Add some new entries to inventory.json and see how the data on the page gets updated.
// Add a "Refresh" button that will load inventory.json for you without having to refresh the entire page.
// Add Twitter Bootstrap to your online store with some custom CSS to make the style your own.