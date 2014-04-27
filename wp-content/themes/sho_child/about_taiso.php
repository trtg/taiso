<?php
/**
 * Template Name: about_taiso
 * The template for the about TotalTaiso page 
 *
 * @package taiso
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/about_sho.css">
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
                     <h1>About TotalTaiso</h1>
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
The foundations of TotalTaiso stem from the principles of gymnastics - a sport that combines the elements of strength, balance, and flexibility.  Although the direct translation for the Japanese word Taiso is "gymnastics", it is much more than the artistic gymnastics you see on TV.  Broadly, taiso refers to the act of manipulating the body; using the body as the main apparatus for achieving fitness. TotalTaiso believes that a fancy gym and intricate equipment are not always necessary to achieve your fitness goals - in many cases, all you need is your body.  Whether you are a hardcore CrossFitter, a weekend warrior, or somebody maintaining a New Year's resolution, we hope that TotalTaiso delivers the resources necessary to take you to the next level.  
                     </p> 
                 </div>

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

