$(document).ready(function() {

"use scrict";

//Solution to 4.3.2 (#3)
$('ul').each(function(index) {
    $(this).children().first().css("font-weight", "bold");
 });

//Another options below
//$("li:first-child").css("font-weight", "bold")
//$("li:nth-child(3)").css("font-weight", "bold")
//$(this).children("li:first").css("font-weight", "bold");

//Solution to 4.3.2 (#4)
$("li").click(function(event) {
    // event.preventDefault();
        $(this).parent().toggleClass("invisible");
    });


});
