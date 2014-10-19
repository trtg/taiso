
//Back To Top
$(function() {
    $('#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });



});




//Parallax	
$(window).bind('load', function () {
	parallaxInit();						  
});

	function parallaxInit() {
		
		$('#disclaimer').parallax("100%", 0.1);
		
		
		
	}	




$(document).ready(function(){
	
	var onMobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }
	
	if( ( onMobile === false ) && ( $('#disclaimer').length ) ) {
	
		skrollr.init({
			edgeStrategy: 'set',
			smoothScrolling: false,
			forceHeight: false
		});
		
	}	
	
});  
