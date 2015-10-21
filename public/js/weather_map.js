$(document).ready(function() {
    "use strict";

$.get("http://api.openweathermap.org/data/2.5/forecast?lat=35&lon=139", {
    APPID: "5fb1bf08fea45a0d1874de805af4110e",
    lat: 29.423017,
    lon: -98.48527,
    units: "imperial"
}).done(function(data){
	console.log (data);	
	// console.log (data.main.temp)
	data.list.forEach(function(threeHrs){
	// console.log(day.temp.day);
		if (){
			console.log (threeHrs.main.temp);
		}
	});
});

});