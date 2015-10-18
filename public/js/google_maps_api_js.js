<!-- Script to show address on map -->

(function() {
"use strict";

	// Set our map options
    var mapOptions = {
        // Set the zoom level
        zoom: 21,

        // This sets the center of the map at San Antonio, TX
        center: {
            lat:  29.42412,
            lng: -98.49363
            // 29.60950, -98.51055 (Panera Bread on Stone Oak)
        }
    };

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	// Set our address to geocode
	var address = "1203 N Loop 1604 W, San Antonio, TX, 78258";
	
	// Init geocoder object
	var geocoder = new google.maps.Geocoder();

	// Geocode our address
	geocoder.geocode({ "address": address }, function(results, status) {

	   // Check for a successful result
	   if (status == google.maps.GeocoderStatus.OK) {

	       // Recenter the map over the address
	       map.setCenter(results[0].geometry.location);
	   } else {

	       // Show an error message with the status if our request fails
	       alert("Geocoding was not successful - STATUS: " + status);
	   }
	});

})();