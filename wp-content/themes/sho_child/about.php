<?php
/**
 * Template Name: About
 * The template for the about page with biographic info 
 *
 * @package taiso
 */

get_header(); ?>

<body class="about_body">
<?php include 'navbar.php';?>

<h3>About TotalTaiso:</h3>
<p>
The foundations of TotalTaiso stem from the principles of gymnastics - a sport that combines the elements of strength, balance, and flexibility.  Although the direct translation for the Japanese word Taiso is “gymnastics”, it is much more than the artistic gymnastics you see on TV.  Broadly, taiso refers to the act of manipulating the body; using the body as the main apparatus for achieving fitness. TotalTaiso believes that a fancy gym and intricate equipment are not always necessary to achieve your fitness goals - in many cases, all you need is your body.  Whether you are a hardcore CrossFitter, a weekend warrior, or somebody maintaining a New Year’s resolution, we hope that TotalTaiso delivers the resources necessary to take you to the next level.  
</p>
 
<h3>About Sho:</h3>
<p>
Sho was born into a family of gymnasts and grew up flipping around at the gym.  By age twelve, he made the US National Team and maintained his spot until his retirement in 2012.  During his career, he garnered multiple National Championships and represented the United States in various international competitions including the World Cup, World Championships, and Pan American Games.  He went on to captain the Stanford University gymnastics team to an NCAA Championship, while also capturing 9 individual All-American awards.  
</p>
 
<p>
Sho is an internationally-ranked gymnastics judge through the FIG and a NASM-certified fitness trainer. He has trained numerous athletes with varying backgrounds - from competitive CrossFitters, yoga instructors, and professional dancers to individuals trying to achieve their fitness goals.  Through his coaching experience, Sho developed the ideology for TotalTaiso: all fitness goals can be achieved by attaining the three main components required for gymnastics. These core elements - strength, balance, and flexibility - make up the fundamental principles of TotalTaiso.  Sho's hope is to spread his knowledge of gymnastics and body movement to help people reach their personal fitness goals.
</p>

<?php include 'footer.php';?>

                <script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                    $('#about_link').addClass('active');
                });
                </script>
    </body>
</html>

