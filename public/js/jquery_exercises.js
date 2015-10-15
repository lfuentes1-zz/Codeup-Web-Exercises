$(document).ready(function() {

"use scrict";

    $("#my_heading").click(function() {
    	$(this).css("background-color", "yellow");
    });
    
    $("p").dblclick(function() {
    	$(this).css("font-size", "18px");
    });

    $("#my_list li").hover(function() {
    	$(this).css("color", "red");
    }, function() {
    	$(this).css("color", "white");
    });
});
