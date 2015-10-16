$(document).ready(function() {

"use scrict";

$("dd").addClass("invisible");
    
$("dt").click(function(event) {
    // event.preventDefault();
        $(this).next().toggleClass("invisible");
    });


$('ul').each(function(index) {
    $(this).children().first().css("font-weight", "bold");
 });

//Another options below
//$("li:first-child").css("font-weight", "bold")
//$("li:nth-child(3)").css("font-weight", "bold")
//$(this).children("li:first").css("font-weight", "bold");

//the below #4 does not work
$("h3").click(function(event) {
    // event.preventDefault();
        $(this).children().toggleClass("invisible");
    });


});
