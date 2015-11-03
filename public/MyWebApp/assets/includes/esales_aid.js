/*  JavaScript Document                      */
$(document).ready(function(){
	//This tecnique will be able to detect the orientation regardless
	// of the device
	setOrientationListener();
});

//uses a standard setInterval function to call updateOrientation every
// 500 milliseconds
function setOrientationListener(){
	rotationInterval = setInterval( function(){ updateOrientation(); }, 500 );
}


// if orientation is less than 1024 then add/remove appropriate class
function updateOrientation(){
	if($('body').width() < 1024){
		$('.page').removeClass('landscape').addClass('portrait');
	}else{
		$('.page').removeClass('portrait').addClass('landscape');	
	}
}