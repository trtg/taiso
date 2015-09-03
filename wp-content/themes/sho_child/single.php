<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage sho_child
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
    

    <meta name="author" content="Sho Nakamori">
    <meta name="description" content="TotalTaiso was built upon the PRINCIPLES OF GYMNASTICS, a sport that combines the elements of STRENGTH, BALANCE, AND FLEXIBILITY to lead a healthier lifestyle. While the direct translation for the Japanese word, ‘Taiso,’ is gymnastics, it’s more than the TYPE OF GYMNASTICS you see on TV. More broadly, ‘TAISO’ refers to the ACT OF MANIPULATING THE BODY, and using the body as an apparatus for achieving fitness."/>

<meta property="og:image" content="http://www.totaltaiso.com/wp-content/images/sho_pommel_horse-desktop.jpg" />
    <meta name="keywords" content="strength, balance, flexibility ....">
    
<!--    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/bootstrap-responsive.min.css" rel="stylesheet" />  -->

    <!--sergey depends on old bootstrap elsewhere, but new bootstrap is much simpler  -->
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css">

    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/single.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/single-movement.css" rel="stylesheet" /> 
    
    
    
     <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/movement_directory.css">-->
</head>

<body>

 <?php  include 'menu.php'; ?>
	<div id="wrapper" class="container">
			<?php
				// Start the Loop.
                while ( have_posts() ) : the_post();?>
                    <div class="row">
                        <div class="col-xs-12">
                    <?php
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
                             get_template_part( 'content', get_post_format() );?>
                        </div><!--/col-->
                    </div>

                    <?php
					// Previous/next post navigation.
					//twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
	</div><!-- #container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--menu depends on classie and modernizr-->
         <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>

<?php include 'footer.php';?>
</body>
</html>
