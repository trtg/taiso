$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   false
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count =2;  //$('.nav').children().length -1;
			console.log(count);
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			console.log(id);
			if(count == id) {
			    
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
