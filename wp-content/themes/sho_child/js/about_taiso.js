


//Back To Top
$(function() {
    $('#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });



});











//Portfolio filter 

$(window).load(function() {
    var $container2 = $('.portfolio-wrap2');


    var $filter = $('#filter');
    // Initialize isotope 
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


















    


$(window).load(function() {

    // po resize pics correctly 
    $('#filter').find('a').first().addClass('current');
    $(window).resize();
    
});
