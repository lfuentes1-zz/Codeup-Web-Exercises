$(document).ready(function() {

"use scrict";

$("dd").addClass("invisible");
    
$("dt").click(function(event) {
    // event.preventDefault();
        $(this).next().toggleClass("invisible");
    });
});


