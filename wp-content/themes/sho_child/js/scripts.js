
//Page Preloader
$(window).load(function() { 
	$("#loader").delay(500).fadeOut(); 
	$(".mask").delay(1000).fadeOut("slow");
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
/*	$(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			  opacity: 0.5,
			  social_tools: "",
			  deeplinking: false
		});
	});		*/



//Parallax	
$(window).bind('load', function () {
	parallaxInit();						  
});

	function parallaxInit() {
		
		$('#quote-parallax').parallax("30%", 0.1);
		
	}	



  
  
//BxSlider
$(document).ready(function(){
	
	var onMobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }
	
/*	$('.fullwidth-slider').bxSlider({
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
		
	});*/
	
	$('.bx-wrapper .bx-controls-direction a').attr('data-500','top:83%; opacity: 0;').attr('data-start','top:50%; opacity: 1;');
	
	
	if( ( onMobile === false ) && ( $('.parallax-slider').length ) ) {
	
		skrollr.init({
			edgeStrategy: 'set',
			smoothScrolling: false,
			forceHeight: false
		});
		
	}	
	
	
});  
  
  
  
//Navigation Dropdown
	$('.nav a.colapse-menu1').click(function () { $(".nav-collapse").collapse("hide") });
	
	$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });



// Accordion
	$('dl.accordion dt').filter(':first-child').addClass('accordion-active');
	$('dd.accordion-content').filter(':nth-child(n+3)').addClass('hide');
		
	$('dl.accordion').on('click', 'dt', function() {
			$(this)
				.addClass('accordion-active')
				.next()
					.slideDown(200)
					.siblings('dd.accordion-content')
						.slideUp(200)
				.prev()
					.removeClass('accordion-active');
	});	

// Tabs	
	$(".tab_container").hide(); //Hide all content
	$("ul.tabs li:first").addClass("tab-active").show(); //Activate first tab
	$(".tab_container:first").show(); //Show first tab content
		
	$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("tab-active"); //Remove any "active" class
			$(this).addClass("tab-active"); //Add "active" class to selected tab
			$(".tab_container").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			return false;
	});
	
// Toggle	
	$(".toggle_container").hide(); 
	
	$(".toggle-title").click(function(){
			$(this).toggleClass("toggle-active").next().slideToggle("normal");
			        
			       /*if ( ! $(this).hasClass("activated") ){
			       	$( this ).addClass( "activated");
			        var str=$(this).attr('id').slice(-1);
					document.getElementById(  "all"+str ).click();		
			       }
			       */
					
			        if ( $(this).hasClass("toggle-active") )
			        {
			         

			         //var str=$(this).attr('id').slice(-1);
			         	var str=$(this).attr('id');
			         	str=str.charAt(str.length-1);
			         	//alert(str);

					document.getElementById(  "all"+str ).click();	
					return false; 
			        }
 											
					
			return false; 
	});


$(document).ready(function(){

// Fading Out AlertBox
	/*$('.shortcode_alertbox').find('.box_close').click(function(){
		$(this).parents('.alertboxes').animate({opacity:0},300).animate({height:"0px"});
	});
*/


});



	
		
		
		
		




function fireizitiope(portfolioWrap,filters){

	var container = $(portfolioWrap);	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	




	$(filters).click(function(){
		$(filters).removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
	  	setProjects();		
	  	return false;
	});
		
	
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 3;
			} else if (winWidth > 900) {
				columnNumb = 3;
			} else if (winWidth > 479) {
				columnNumb = 3;
			} else if (winWidth < 479) {
				columnNumb = 3;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});

			

				/*$(this).css("margin-left","4px");*/
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
			
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

}






// part need to be optimized

   
  jQuery(document).ready(function($ ){     
// Portfolio Isotope
   var portfolioWrap='#portfolio-wrap';
   var filters='#filters a';
	fireizitiope(portfolioWrap,filters);
   
    portfolioWrap='#portfolio-wrap2';
    filters='#filters2 a';
	fireizitiope(portfolioWrap,filters);

	portfolioWrap='#portfolio-wrap3';
    filters='#filters3 a';
	fireizitiope(portfolioWrap,filters);

	portfolioWrap='#portfolio-wrap4';
    filters='#filters4 a';
	fireizitiope(portfolioWrap,filters);

	portfolioWrap='#portfolio-wrap5';
    filters='#filters5 a';
	fireizitiope(portfolioWrap,filters);

});







//FullScreen Slider
$(function (){




	$('#fullscreen-slider')

	$('#fullscreen-slider').maximage({
		cycleOptions: {
			fx: 'fade',
			speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
			timeout: 6000,
			delay: 2000,
			prev: '#slider_left',
			next: '#slider_right',
			pause: 0,
			before: function(last,current){
				jQuery('.slide-content').fadeOut().animate({top:'100px'},{queue:false, easing: 'easeOutQuad', duration: 550});
				jQuery('.slide-content').fadeOut().animate({top:'-100px'});
			},
			after: function(last,current){
				jQuery('.slide-content').fadeIn().animate({top:'0'},{queue:false, easing: 'easeOutQuad', duration: 450});
			}	
			
			
					
		},

/*

		cycleOptions: {
			fx: 'fade',
			speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
			timeout: 5000,
			prev: '#slider_left',
			next: '#slider_right',
			pause: 6000,
			before: function(last,current){
				jQuery('.slide-content').fadeOut().animate({top:'100px'},{queue:false, easing: 'easeOutQuad', duration: 550});
				jQuery('.slide-content').fadeOut().animate({top:'-100px'});
			},
			after: function(last,current){
				jQuery('.slide-content').fadeIn().animate({top:'0'},{queue:false, easing: 'easeOutQuad', duration: 450});
			}*/	
			
		
		
		
		onFirstImageLoaded: function(){
			jQuery('#cycle-loader').delay(800).hide();
			jQuery('#fullscreen-slider').delay(800).fadeIn('slow');
			jQuery('.slide-content').fadeIn().animate({top:'0'});
			jQuery('.slide-content a').bind('click',function(event){
				var $anchor = $(this);				
				jQuery('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top -44
				}, 1500,'easeInOutExpo');				
				event.preventDefault();
				});			
		}
	});

	// Helper function to Fill and Center the HTML5 Video
	jQuery('video,object').maximage('maxcover');
	
	
	
	

	// To show it is dynamic html text
	
});


function initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop){


		    var container = $(projPageHolder);
		   var $items = $(portfolioWrap+' .open-project-link');
		   index = $items.length;
		  $(portfolioWrap+' .open-project-link').click(function(){
	
		  if ($(this).hasClass('active')){
		  } else 
		  { lastIndex = index;
		  index = $(this).index();
		  $items.removeClass('active');
		  $(this).addClass('active');
	
		  var myUrl = $(this).find('.open-project').attr("href") + " .item-data"; 
	
		  
		   
		  /*$('html, body').animate({ scrollTop: $(".portfolio-bottom").offset().top +150}, 900);*/
		 
		  $(projectPageData).animate({opacity:0}, 400,function(){
				
				
				
				$(projectPageData).load(myUrl,function(e){  
					var $helper = $('.helper');
					var height = $helper.height();
					
					
						$(projectPageData).css("min-height", height);
							
						$('.project-slider').css({'height' : ''});	
						$('#maximage').css({'height' : ''});	
						
						
						
							$('#maximage').maximage({
								cycleOptions: {
									fx: 'fade',
									speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
									timeout: 6000,
									prev: '#arrow_left',
									next: '#arrow_right',
									pause: 1,
								},
							});
						

						
						
						
						
				});
				
				$(projectPageData).delay(400).animate({opacity:1}, 400);
	
		  });
		  
		  
		  $('html, body').animate({ scrollTop: $(portfolioBottom).offset().top -0}, 900);
		  
		  
		  
		  //Project Page Open
		  
		  
			
			  $(projPageHolder).slideUp(600, function(){
					
				  $(projectPageData).css('visibility', 'visible');}).delay(1100).slideDown(1000,function(){				  
				  
						$(projectPageData).fadeIn('slow',function(){}); //initBxModal();
						$('.element_fade_in').each(function () {
							$(this).appear(function() {
							  $(this).delay(100).animate({opacity:1,right:"0px"},1000);
							});	
						});
					  
				  });
				
			  
		  }
	
		  return false;       
		  
		  });


		
	
		  //Project Page Close
		
		  $(document).on('click', projectClose, function(event) {
		  
				
		  $(projectPageData).animate({opacity:0}, 400,function(){		
				
				$(projPageHolder).delay(400).slideUp(400);
				
		  });
				
				$('html, body').delay(1000).animate({ scrollTop: $(portfolioTop).offset().top - 70}, 800);
				$items.removeClass('active') ;
		  
				return false;
				
		  });


}


$(window).load(function() {
	
	


	
	
	// Project Page Expander
	
	(function(){
	  
 		 var projPageHolder ='#project-page-holder0';
		 var portfolioWrap='#portfolio-wrap0';
		 var projectPageData='#project-page-data0';
		 var portfolioBottom=".portfolio-bottom";
		 var projectClose='#project_close';
		 var portfolioTop=".portfolio-top";
		 initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop);

		  projPageHolder ='#project-page-holder1';
		  portfolioWrap='#portfolio-wrap1';
		  projectPageData='#project-page-data1';
		  portfolioBottom=".portfolio-bottom";
		  projectClose='#project_close1';
		  portfolioTop=".portfolio-top";
		 initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop);

		  projPageHolder ='#project-page-holder2';
		  portfolioWrap='#portfolio-wrap2';
		  projectPageData='#project-page-data2';
		  portfolioBottom=".portfolio-bottom";
		  projectClose='#project_close2';
		  portfolioTop=".portfolio-top";
		 initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop);

		  projPageHolder ='#project-page-holder4';
		  portfolioWrap='#portfolio-wrap4';
		  projectPageData='#project-page-data4';
		  portfolioBottom=".portfolio-bottom4";
		  projectClose='#project_close4';
		  portfolioTop=".portfolio-top4";
		 initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop);

		  projPageHolder ='#project-page-holder5';
		  portfolioWrap='#portfolio-wrap5';
		  projectPageData='#project-page-data5';
		  portfolioBottom=".portfolio-bottom5";
		  projectClose='#project_close5';
		  portfolioTop=".portfolio-top5";
		 initializeIzotope(projPageHolder,portfolioWrap,projectPageData,portfolioBottom,projectClose,portfolioTop);

	
	})();


});





$(window).load(function() { 

	//document.getElementById("all").click();
});



