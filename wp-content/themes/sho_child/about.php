<?php
/**
 * Template Name: About
 * The template for the about page with biographic info 
 *
 * @package taiso
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/about_sho.css">
<link href="//vjs.zencdn.net/4.4/video-js.css" rel="stylesheet">
<body>
<?php include 'navbar.php';?>

<div id="the_wrapper" class="container">
             <div class="row mobile_top_image_div">
                 <div class="col-xs-12 col-sm-12">
                     <img class="mobile_top_image" src="/wp-content/images/sho_pommel_horse.jpg">
                 </div>
                 </div>
   
 <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-7" >
                 </div>
                <div  class="col-xs-6 col-sm-5 col-md-3">
                     <h1>Sho Nakamori</h1>
                     <h2>Athlete & Coach</h2>
                </div>
                <div  class="col-xs-6 col-sm-7 col-md-2">
                    <a href="https://twitter.com/snakamori"> <img src='/wp-content/images/twitter_logo_60x60.png'/></a>
                    <a href="http://instagram.com/shonakamori"> <img src='/wp-content/images/instagram_logo_60x60.png'/></a>
                </div>

</div>
             <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-7" >
                 </div>
                 <div id="profile_box" class="col-xs-12 col-sm-12 col-md-5">
                     
                     <p>
                     <div class="profile_photo">
                         <img src="/wp-content/images/sho_v.png">
                     </div>
                     Sho was born into a family of gymnasts and grew up flipping around at the gym.  By age twelve, he made the US National Team and maintained his spot until his retirement in 2012.  During his career, he garnered multiple National Championships and represented the United States in various international competitions including the World Cup, World Championships, and Pan American Games.  He went on to captain the Stanford University gymnastics team to an NCAA Championship, while also capturing 9 individual All-American awards.  
                     </p> 
                     <p>
                     Sho is an internationally-ranked gymnastics judge through the FIG and a NASM-certified fitness trainer. He has trained numerous athletes with varying backgrounds - from competitive CrossFitters, yoga instructors, and professional dancers to individuals trying to achieve their fitness goals.  Through his coaching experience, Sho developed the ideology for TotalTaiso: all fitness goals can be achieved by attaining the three main components required for gymnastics. These core elements - strength, balance, and flexibility - make up the fundamental principles of TotalTaiso.  Sho's hope is to spread his knowledge of gymnastics and body movement to help people reach their personal fitness goals.
                     </p>
                 </div>

             </div><!--/row-->

        

        <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-7" >
                 </div>
                 <div id="video_div" class="col-xs-12 col-sm-12 col-md-5">
                <iframe width="100%" height="315" src="//www.youtube.com/embed/QrQDKhrEgLI?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="//www.youtube.com/embed/SkXmZEkgLp4?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="//www.youtube.com/embed/DOQ1E0xofgw?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

                <video id="keen_commercial_video" class="video-js vjs-default-skin vjs-big-play-centered" 
                controls preload="auto" width="100%" height="272" data-setup="{}"> 
                <source src="/wp-content/uploads/videos/gymnast_482.mp4" type='video/mp4' />
                 <source src="/wp-content/uploads/videos/gymnast_482.ogv" type='video/ogg' />
                 <source src="/wp-content/uploads/videos/gymnast_482.webm" type='video/webm' />
                </video>
                    </div> <!--/video_div--> 
        </div><!--/row-->
        

        

         </div><!--/the_wrapper-->



<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
    $('#about_link').addClass('active');
});
</script>
<script src="//vjs.zencdn.net/4.4/video.js"></script>
    </body>
</html>

