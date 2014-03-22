<?php
/**
 * Template Name: About
 * The template for the about page with biographic info 
 *
 * @package taiso
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/coaching.css">

<body>
<?php include 'navbar.php';?>
                    <div id="the_wrapper" class="container">
                        <div class="row">
                            <div id="profile_box" class="col-xs-12 col-sm-12 col-md-5">
                                <img class="img-thumbnail" src="/wp-content/images/david_durante.jpg"> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7" >
                                <p class="testimonial_body">Sho is a unique individual who combines talent with an incredible work ethic.  His knowledge of the sport of gymnastics is extensive.  He has achieved the highest levels of the sport as an athlete while overcoming tremendous obstacles.  Sho has surrounded himself with elite athletes his entire life and knows what it takes to get an aspiring athlete to the next level.  Whether it be a weekend warrior looking to become more fit or a high level athlete looking to reach strategic performance goals, Sho has all the tools and experience necessary to make it happen. 
                                </p>
                                <p>
                                <span class="testimonial_name">
                                    David Durante<br> 
                                    2008 Olympic Team Alternate<br> 
                                    CrossFit Gymnastics Rep<br> 
                                    USA National Champion</span>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div id="profile_box" class="col-xs-12 col-sm-12 col-md-5">
                                <img class="img-thumbnail" src="/wp-content/images/mike_salemi.jpg"> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7" >
                                <p class="testimonial_body">
                                Sho's unique approach to training is rooted in many years of training and competing as an elite level gymnast. During that time, he has formulated a vast understanding and intense working knowledge of movement. Sho's exercise programming is based on safe and effective progressions/regressions tailored to each individual. He has the ability to identify, expose, and build upon a person's weaknesses, whether it be flexibility, mobility, body-weight strength, co-ordination, and/or power elements that make him one of the best trainers I've come across. 

Personally, working with Sho has noticeably increased my upper body stability and body-weight strength. I consider myself truly fortunate to have known Sho for over 15 years, for his passion, drive, and commitment to excellence in all endeavors inspires anyone who comes in contact with him.

I highly recommend Sho to anyone looking for an elite level trainer/clinician ready to take their goals and performance to the next level.
                                </p>
                                <p>
                                <span class="testimonial_name">
                                  Mike Salemi<br>
                                  WABDL World Champion in Deadlift and Benchpress<br>
                                  Candidate Master Sport in Kettlebell Sport<br>
                                  CHEK Exercise Coach<br>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div id="profile_box" class="col-xs-12 col-sm-12 col-md-5">
                                <img class="img-thumbnail" src="/wp-content/images/luuk.jpg"> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7" >
                                <p class="testimonial_body">
                                I recently began CrossFit, and having been an athlete and avid weightlifter all my life, I found that the strength and endurance I previously had took me pretty far. Applying my strength and ability to the complex gymnastics movements that are common in CrossFit was a different story.  Sho was my solution to this problem.  Even after spending one day with him, I was able to complete a movement that had stumped me for the previous month.  Sho has a great knowledge of body mechanics, as well as methods to build strength in areas that you are lacking.  That said, I will continue to utilize him as a resource to improve myself as an all-around athlete.
                                </p>
                                <p>
                                <span class="testimonial_name">
                                    Luuk Sasse<br>
                                    CrossFit Competitor<br>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                            <div id="profile_box" class="col-xs-12 col-sm-12 col-md-5">
                                <img class="img-thumbnail" src="/wp-content/images/bekah.jpg"> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7" >
                                <p class="testimonial_body">
                                I am an avid athlete and competitor but I have always struggled with movements that are anything more than single motion. My body just doesn’t seem to understand how to bring it all together. Sho has a wonderful way of putting together progressions that allow me to break down a movement into single components. He not only is able to complete all the skills himself but understands the mechanics behind them. In a few short sessions with Sho, I have been able to master skills that I have been working on for year with other coaches. Sho is the real deal.
                                </p>
                                <p>
                                <span class="testimonial_name">
                                   Rebekah Hynson<br>
                                   CrossFit Competitor<br>
                                   Founder - Body Blueprints Personal Training<br>
                                   ACE/NAFTA Fitness Trainer<br>
                                    </p>
                                </div>
                            </div>


                        </div><!--/the_wrapper-->




<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
    $('#about_link').addClass('active');
});
</script>
    </body>
</html>

