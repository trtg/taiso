$(document).ready(function() {







    $('#myCarousel').carousel({
        interval: 60000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = 2; //$('.nav').children().length -1;
            //console.log(count);
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            //console.log(id);
            if (count == id) {

                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });



}); //BxSlider   blog


//Back To Top
$(function() {
    $('a#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });



});




$(document).ready(function() {


    $('.blog-slider').bxSlider({
        controls: true,
        pager: false,
        auto: false,
        pause: 3000,
        preloadImages: 'visible',
    });



});






//Navigation	for menu  
/*
	$('ul.slimmenu').on('click',function(){
		var width = $(window).width(); 
		if ((width <= 800)){ 
			$(this).slideToggle();}	
	});	
	
	$('ul.slimmenu').slimmenu(
	{
		resizeWidth: '800',
		collapserTitle: '',
		easingEffect:'easeInOutQuint',
		animSpeed:'medium',
		indentChildren: true,
		childrenIndenter: '&raquo;'
	});	*/

//Portfolio filter 

$(window).load(function() {
    var $container = $('.portfolio-wrap');
    var $container2 = $('.portfolio-wrap2');


    var $filter = $('#filter');
    // Initialize isotope 
    $container.isotope({
        filter: '.videos',
        layoutMode: 'fitRows',
        animationOptions: {
            duration: 750,
            easing: 'linear'
        }
    });

    $container2.isotope({
        filter: '.photos',
        layoutMode: 'fitRows',
        animationOptions: {
            duration: 750,
            easing: 'linear'
        }
    });






    // Filter items when filter link is clicked
    $filter.find('a').click(function() {
        var selector = $(this).attr('data-filter');
        $filter.find('a').removeClass('current');
        $(this).addClass('current');

        $container.isotope({
            filter: selector,
            animationOptions: {
                animationDuration: 750,
                easing: 'linear',
                queue: false,
            }
        });





        return false;
    });
});


// Portfolio Isotope

jQuery(document).ready(function($) {

    var container = $('.portfolio-wrap');

    function splitColumns() {
        var winWidth = $(window).width(),
            columnNumb = 1;


        if (winWidth > 1024) {
            columnNumb = 4;
        } else if (winWidth > 900) {
            columnNumb = 2;
        } else if (winWidth > 479) {
            columnNumb = 2;
        } else if (winWidth < 479) {
            columnNumb = 1;
        }

        return columnNumb;
    }

    function setColumns() {
        var winWidth = $(window).width(),
            columnNumb = splitColumns(),
            postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-box ').each(function() {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container.isotope('reLayout');
    }

    container.imagesLoaded(function() {
        setColumns();
    });


    $(window).bind('resize', function() {
        setProjects();
    });

});

// need to optimize later refactor
jQuery(document).ready(function($) {

    var container2 = $('.portfolio-wrap2');

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
            columnNumb = 1;
        }

        return columnNumb;
    }

    function setColumns() {
        var winWidth = $(window).width(),
            columnNumb = splitColumns(),
            postWidth = Math.floor(winWidth / columnNumb);

        container2.find('.portfolio-box ').each(function() {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container2.isotope('reLayout');
    }

    container2.imagesLoaded(function() {
        setColumns();
    });


    $(window).bind('resize', function() {
        setProjects();
    });

});





// About sho Ajax


$(window).load(function() {
    'use strict';
    var loader = $('.expander-wrap');
    if (typeof loader.html() == 'undefined') {
        $('<div class="expander-wrap"><div id="expander-wrap" class="container clearfix relative"><p class="cls-btn"><a class="close">X</a></p><div/></div></div>').css({
            opacity: 0
        }).hide().insertAfter('.portfolio');
        loader = $('.expander-wrap');
    }
    $('.expander').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var url = $(this).attr('href');



        loader.slideUp(function() {
            $.get(url, function(data) {
                var portfolioContainer = $('.portfolio');
                var topPosition = portfolioContainer.offset().top;
                var bottomPosition = topPosition + portfolioContainer.height();
                $('html,body').delay(600).animate({
                    scrollTop: bottomPosition - -10
                }, 800);
                var container = $('#expander-wrap>div', loader);

                container.html(data);
                /*$('.project-wrap-slider').flexslider({
                    animation: "fade",
                    selector: ".slider-project-ajax .slide",
                    controlNav: false,
                    directionNav: true,
                    slideshowSpeed: 5000,
                });*/


                loader.slideDown(function() {
                    if (typeof keepVideoRatio == 'function') {
                        keepVideoRatio('.video-container > iframe');
                    }
                }).delay(1000).animate({
                    opacity: 1
                }, 200);
            });
        });
    });

    $('.close', loader).on('click', function() {
        loader.delay(300).slideUp(function() {
            var container = $('#expander-wrap>div', loader);
            container.html('');
            $(this).css({
                opacity: 0
            });

        });
        var portfolioContainer = $('.portfolio');
        var topPosition = portfolioContainer.offset().top;
        $('html,body').delay(0).animate({
            scrollTop: topPosition - 70
        }, 500);
    });

});









// in Ie freaking out can not undestand height:100%

function setPattern() {


    var pHeight = $('#flare').height();
    $('.pattern-about').css({
        height: pHeight + 'px'
    });

    var dHeight = $('#desclaimer').height();
    $('.pattern-desclaimer').css({
        height: dHeight + 'px'
    });

    var fHeight = $('#faq2').height();
    $('.pattern-faq2').css({
        height: fHeight + 'px'
    });



}

$(document).ready(function(){

        var onMobile = false;
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }

    if( ( onMobile === true )  ) {
    
       $('#flare').removeClass('shoflare');
       $('#flare').addClass('shoflareOnMobile');
       
       //disclaimer
       

    }   
    
    
}); 

    // Accordion
    /*$('dl.accordion dt').filter(':first-child').addClass('accordion-active');*/
    /*$('dd.accordion-content').filter(':nth-child(n+3)').addClass('hide');*/
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


$(window).load(function() {

    // po resize pics correctly 
    $('#filter').find('a').first().addClass('current');
    $('dl.accordion dt').first().click();
    $(window).resize();
    setPattern();




});
