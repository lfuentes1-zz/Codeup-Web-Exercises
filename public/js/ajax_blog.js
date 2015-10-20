$(document).ready(function() {
    "use strict";

    
    function populateBlog (){
	    $.get("/data/blog.json").done(function(data){
	    	var outputBlog = "";
			data.forEach(function(entry) {
				outputBlog += '<div id="blogEntry"><h1>' + entry.title + '</h1><h4>' + entry.date +
				'</h4><p>' + entry.content + '</p><br>' + 'Categories: ' + entry.categories + '</div>';
			});
			$("#posts").html(outputBlog);
		});
	};
	
	populateBlog ();

 		$(".refresh").click(function(){
	    populateBlog();
	});
});
