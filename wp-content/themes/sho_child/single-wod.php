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
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css">

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
				endwhile;
			?>
            
	</div><!--/.container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--menu depends on classie and modernizr-->
         <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>

<?php include 'footer.php';?>

<script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                });
                </script>
    </body>
</html>
