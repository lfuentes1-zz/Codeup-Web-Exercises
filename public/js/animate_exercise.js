$(document).ready(function() {
    "use strict";

    // TODO: "Move It" should move the box 100 pixels to the left
    //Top 2 lines are vanilla JS and is combined with jQuery
    //and although it is allowed, the second example is better practice
    var btnm = document.getElementById("btn-move");
    btnm.addEventListener("click", function(){
        $("#animate-box").animate({
            left: "+=100px"
        }, 1000);
    }, false);

    // TODO: "Scale It" should expand the box width by 50%
    $("#btn-scale").click(function(){
        $("#animate-box").animate({
            width: "375px"
        }, 500);
    });

    // TODO: "Hide It" should use opacity to make the box invisible
    $("#btn-hide").click(function(){
        $("#animate-box").animate({
            opacity: "toggle"
        }, 500);
    });

    // TODO: "Show It" should make the box appear
    $("#btn-show").click(function(){
        $("#animate-box").animate({
            opacity: "toggle"
        }, 500);
    });

    // TODO: "Animate All" should use an animation stack to:
    //      1) Move and scale the box simultaneously
    //      2) Hide the box
    //      3) Reset the box back to its original position and opacity
    $("#btn-all").click(function(){
        $("#animate-box").animate({
            left: "+=100px",
            width: "375px"
        }, 500).animate({
            opacity: "toggle"            
        }, 500).animate({
            opacity: "toggle",
            left: "-=100px",
            width: "250px"
        }, 500);
    });

});
