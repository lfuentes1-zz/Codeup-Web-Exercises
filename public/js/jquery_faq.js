$(document).ready(function() {

"use scrict";

$("dd").addClass("invisible");
    
//4.3.1
//come up with another solution without next() since we have not covered next() yet
// $("dt").click(function(event) {
//     // event.preventDefault();
//         $(this).next().toggleClass("invisible");
//     });
// });

//4.3.1 Solution without next
$("dt").click(function(event) {
    	event.preventDefault();
        $("dd").toggleClass("invisible");
    });
});


//The solutions don't work the same.  $(this).next() only expands the next dd element
// whereas $("dd") expands all dd elements