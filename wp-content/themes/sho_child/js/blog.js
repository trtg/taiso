
//Page Preloader
$(window).load(function() { 
	$("#loader").delay(500).fadeOut(); 
	$(".mask").delay(1000).fadeOut("slow");
});




//BxSlider
$(document).ready(function(){
	
	var onMobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }
	
	$('.fullwidth-slider').bxSlider({
		mode: "fade",
		speed: 1000,
		pager: false,
		
		onSlideBefore: function($slideElement) {
			($slideElement).find('.slide-caption').fadeOut().animate({top:'100px'},{queue:false, easing: 'easeOutQuad', duration: 550});
			($slideElement).find('.slide-caption').hide().animate({top:'-100px'});
		},
		onSlideAfter: function($slideElement) {
			($slideElement).find('.slide-caption').fadeIn().animate({top:'0'},{queue:false, easing: 'easeOutQuad', duration: 450});
		},
		
	});
	
	$('.bx-wrapper .bx-controls-direction a').attr('data-500','top:83%; opacity: 0;').attr('data-start','top:50%; opacity: 1;');
	
	
	if( ( onMobile === false ) && ( $('.parallax-slider').length ) ) {
	
		skrollr.init({
			edgeStrategy: 'set',
			smoothScrolling: false,
			forceHeight: false
		});
		
	}	
	
	
});  



$(document).ready(function(){
	
//Sticky Navigation		
    $("#navigation").sticky({topSpacing:0});


//Leaving Page Fade Out
	$('a.external').click(function(){
	  var url = $(this).attr('href');		
			
			
	  		$('.mask').fadeIn(250, function(){		  
			    document.location.href = url;
		  	});
			$("#loader").fadeIn("slow");			
	
	  return false;
	});
		
});
  

//Back To Top
	$(function() {
		$('a#back-top').click(function () {
			$('html, body').stop().animate({
				scrollTop: 0
			}, 1500,'easeInOutExpo');
		});
		
		
		
	});


//Navigation Scrolling
	$(function() {
		$('.nav a, .nav li a, #home-center a, a.move').bind('click',function(event){
		var $anchor = $(this);
	
		$('html, body').stop().animate({
		scrollTop: $($anchor.attr('href')).offset().top -44
		}, 1500,'easeInOutExpo');
		
		event.preventDefault();
		});
	});


	
 
//PrettyPhoto
	$(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			  opacity: 0.5,
			  social_tools: "",
			  deeplinking: false
		});
	});		



//BxSlider
$(document).ready(function(){
	
	var onMobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }
	

	
	if( ( onMobile === false ) && ( $('.parallax-slider').length ) ) {
	
		skrollr.init({
			edgeStrategy: 'set',
			smoothScrolling: false,
			forceHeight: false
		});
		
	}	
	
	
	
    

	
	$('.blog-slider').bxSlider({
		controls: true, 
		pager: false,		
		auto:false,
		pause: 3000,
		preloadImages: 'visible',
	});
	
	
	

	
});  
  
  
$(window).load(function(){
	
	
//Masonry Blog
	var $container = $('.blog-posts-content');
	$container.isotope({
		 masonry: {	
	  },
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		},	
	});
  


});

