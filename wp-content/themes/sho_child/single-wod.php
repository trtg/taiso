<?php
/**
 * The Template for displaying individual WODs 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 ?>
<html lang="en">
<head>
    <title>Total Taiso</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    

    <meta name="author" content="Sho Nakomori">
    <meta name="description" content="Total Taiso desc" />
    <meta name="author" content="TotalTaiso  Campaign">
    <meta name="keywords" content="strength, balance, flexibility ....">
    
<!--    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/bootstrap-responsive.min.css" rel="stylesheet" />  -->

    <!--sergey depends on old bootstrap elsewhere, but new bootstrap is much simpler  -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/single-movement.css" rel="stylesheet" /> 
    
    
    
     <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/movement_directory.css">-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "3e7f202e-2574-4839-a12c-d045842aefdc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>

<body>
 <?php  include 'menu.php'; ?>

	<div class="container">
		<div class="row" role="main">
            <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
            </div>
        </div>

        
            <?php  while ( have_posts() ) : the_post();?>
        <?php  

        $wod_index = 0;
        $prescribed_exercise_array = get_field('prescribed_exercise');
        $scaled_exercise_array = get_field('scaled_exercise');
            $wod_date = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('m/d');
            $wod_day_of_week = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('l');
            $workoutDay="$wod_date <span>$wod_day_of_week</span>"; 
            $exerciseSequence=the_title('','',false); 
            $id="wod" . $wod_index; 

            $wrapper='portfolio-wrap' . "$wod_index"; $filters="filters" . "$wod_index"; 
            $pbottom="portfolio-bottom" . "$wod_index"; $pageL="wod/burpees.html"; $all="all" . "$wod_index"; 
            $projectPageHolder="project-page-holder" . "$wod_index"; $pageData="project-page-data" . "$wod_index"; 
            $projectClose = "project_close" . "$wod_index";
            
            $top="portfolio-top" . "$wod_index";
            include 'wod.php'; ?>

<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#prescribed">Prescribed</a></li>
  <li><a data-toggle="pill" href="#scaled">Scaled</a></li>
</ul>

<div class="tab-content">
  <div id="prescribed" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="scaled" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>


<?php endwhile;?>
                

                <div class="row" role="main">
                    <div class="col-xs-12">
                <?php
                    the_content();
                    ?>
                    </div><!--/.col-->
		        </div><!--/.row -->
<hr>

                <div class="row" style="margin-bottom:30px;">
                    <div class="col-xs-12 col-md-4">
                    </div>
                </div>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_email_large' displayText='Email'></span>
        <?php

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					//get_template_part( 'content', get_post_format() );
					//get_template_part( 'content', 'single_movement' );

					// Previous/next post navigation.
					//twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				//endwhile;
			?>
            
	</div><!--/.container -->
        <!--menu depends on classie and modernizr-->
                    <script  src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>        
                    <script  src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/appear.js"></script>
                    <script  src="/wp-content/themes/sho_child/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.prettyPhoto.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/isotope.js" type="text/javascript"></script> 
                    <script src="/wp-content/themes/sho_child/js/jquery.bxslider.min.js"></script>

                    <script src="/wp-content/themes/sho_child/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
                    <script src="/wp-content/themes/sho_child/js/sscr.js"></script>
                    <script src="/wp-content/themes/sho_child/js/skrollr.js"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.jigowatt.js"></script>

         <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/scripts.js" type="text/javascript"></script>

<?php include 'footer.php';?>

<script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                });
                </script>
    </body>
</html>
