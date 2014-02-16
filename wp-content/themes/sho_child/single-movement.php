<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
                    the_post_thumbnail('movement_thumbnail');
                    $apparatus_terms = get_the_terms(get_the_ID(),'apparatus'); 
                    foreach ($apparatus_terms as $term){
                        $apparatus_link =  (get_term_link($term->slug,'apparatus')) ; 
                        switch($term->slug){
                        case "mushroom":
                            $apparatus_icon = "/wp-content/themes/sho_child/img/mushroom_icon.png";
                            break;
                        case "rings":
                            $apparatus_icon = "/wp-content/themes/sho_child/img/rings_icon.png";
                            break;
                        case "floor":
                            $apparatus_icon = "/wp-content/themes/sho_child/img/floor_icon.png";
                            break;
                        }
                        echo "<a href=\"$apparatus_link\"> <img src=\"$apparatus_icon\"></a>";
                    }

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
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
?>
<script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                });
                </script>
    </body>
</html>
