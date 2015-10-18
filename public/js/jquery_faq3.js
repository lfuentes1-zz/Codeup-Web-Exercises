$(document).ready(function() {

"use scrict";

	// //Solution to 4.4.1 (#2)
	// $("#park1").click(function(event) {
	//     $("#national_park1").toggle();
	// });

	// $("#park2").click(function(event) {
	//     $("#national_park2").toggle();
	// });

	// $("#park3").click(function(event) {
	//     $("#national_park3").toggle();
	// });

	//Solution to 4.4.1 (#3)
	//Three different solutions that achieve the same effect
	// $("#park1").click(function(event) {
	// 	$(".p1").hide();
	// });

	// $("#park2").click(function(event) {
	// 	$("#national_park2").children().hide();
	// });

	// $("#park3").click(function(event) {
	// 	$(this).next().children().hide();
	// });

	//Solution to 4.4.2 (#2)
	// $("#park1").click(function(event) {
	//     $("#national_park1").fadeToggle();
	// });

	// $("#park2").click(function(event) {
	//     $("#national_park2").fadeToggle();
	// });

	// $("#park3").click(function(event) {
	//     $("#national_park3").fadeToggle();
	// });

	// //Solution to 4.4.2 (#3)
	// $("#park1").click(function(event) {
	// 	$(".p1").fadeToggle();
	// });

	// $("#park2").click(function(event) {
	// 	$("#national_park2").children().fadeToggle();
	// });

	// $("#park3").click(function(event) {
	// 	$(this).next().children().fadeToggle();
	// });

	//Solution to 4.4.3 (#2)
	$("#park1").click(function(event) {
		$(".p1").slideToggle();
	});

	$("#park2").click(function(event) {
		$("#national_park2").children().slideToggle();
	});

	$("#park3").click(function(event) {
		$(this).next().children().slideToggle();
	});



});