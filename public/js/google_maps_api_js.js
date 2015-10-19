<!-- Script to show address on map -->

(function() {
"use strict";

	// Set our map options
    var mapOptions = {
        // Set the zoom level
        zoom: 15,

        // This sets the center of the map at San Antonio, TX
        center: {
            lat:  29.42412,
            lng: -98.49363
        }
    };

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	// Set our address to geocode
	var address = "1203 N Loop 1604 W, San Antonio, TX, 78258";
	
	// Init geocoder object
	var geocoder = new google.maps.Geocoder();

	// Geocode our address
	geocoder.geocode({ "address": address }, function(result, status) {

	   // Check for a successful result
	   if (status == google.maps.GeocoderStatus.OK) {

	       // Recenter the map over the address
	       map.setCenter(result[0].geometry.location);
	   } else {

	       // Show an error message with the status if our request fails
	       alert("Geocoding was not successful - STATUS: " + status);
	   }
	});

	//Specify location of marker for Panera Bread in Stone Oak
    var fav_res = {lat: 29.60950, lng: -98.51055};

    //Specify image to replace standard marker
    var image = "/img/panerabrea.png";

	//Create marker for specified favorite restaurant using the constructor
	var marker = new google.maps.Marker({
		position: fav_res,
		map: map,
		animation: google.maps.Animation.DROP,
		// icon: image,
		title: "Panera Bread"
	});

	//String to contain additional info about My Restaurant
	// var contentString = document.getElementById("res-info");
	var contentString = '<div id="res-info">' +
		'<h3 id="f_heading">Panera Bakery-Cafe</h3>' +
		'<img src="/img/panerabrea.png" alt="Panera Bread">' +
		'<p> Panera Bread is a Bakery-Cafe.  They serve many delicious meals including ' +
    	'but not limited soups, sandwiches, and salads.  My favorite thing about' +
    	'Panera Bread is the fact that they use little to no processed deli meats!</p>' +
    	'<a href="https://www.panerabread.com" target="_blank">' +
    	'https://www.panerabread.com</a>' +
    	'</div>';

	//Create a new infoWindow object with content
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	//Open the window using our map and marker
	marker.addListener("click", function (){
		infowindow.open(map, marker);
	});

})();