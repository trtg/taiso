


//Back To Top
$(function() {
    $('a#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });



});


// in Ie freaking out can not undestand height:100%

function setPattern() {

var fHeight = $('#faq2').height();
    $('.pattern-faq2').css({
        height: fHeight + 'px'
    });

}

$(document).ready(function(){

        var onMobile = false;
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }

    if( ( onMobile === true )  ) {
    
       /*$('#flare').removeClass('shoflare');
       $('#flare').addClass('shoflareOnMobile');
       */
       
       

    }   
    
    
}); 

    


$(window).load(function() {

 setPattern();
});
