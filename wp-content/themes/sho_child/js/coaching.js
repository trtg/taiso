
//Back To Top
$(function() {
    $('#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });



});



$(document).ready(function() {

    var clickEvent = false;
    //disable automatic transitions
    $('#myCarousel').carousel({interval:false});

    $('#myCarousel').on('click','.nav a',function(){
        var current = $('.nav li.active');
        var id = parseInt(current.data('slide-to'));
        $('#myCarousel').carousel(id);
        $('.nav').removeClass('active');
        current.addClass('active');
    });

    /*   $('#myCarousel').on('click', '.nav a', function() {
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
    */


}); 












