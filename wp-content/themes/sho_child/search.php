<?php
/**
 * The template for displaying Search Results pages
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
    <meta name="viewport" content="width=device-width; initial-scale=1; minimal-ui">

    <meta name="author" content="Sho Nakamori">
    <meta name="description" content="Total Taiso desc" />
    <meta name="author" content="TotalTaiso  Campaign">
    <meta name="keywords" content="strength, balance, flexibility ....">
    
    <!-- Bootstrap core CSS -->
   
    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" />   
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

   <?php  include 'menu.php'; ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
        <script src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>     
        <script src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/appear.js" type="text/javascript" ></script>
        <script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
   
        <script type="text/javascript" src="/wp-content/themes/sho_child/js/royal_preloader.min.js"></script>
        <script type="text/javascript">

   <?php  include 'footer.php'; ?>
<?php
//get_sidebar( 'content' ); get_sidebar(); get_footer();
?>
</body>
</html>
