<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage sho_child
 */

get_header(); ?>

<body>
<?php include 'navbar.php';?>

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
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
	</div><!-- #container -->
</body>
<?php include 'footer.php';?>
<?php //get_sidebar( 'content' ); get_sidebar(); get_footer(); ?>
