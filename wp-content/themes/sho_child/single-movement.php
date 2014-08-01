<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<body>
<?php include 'navbar.php';?>

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
                ?>
                    </div>
                </div>

                <div class="row" role="main">
                    <div class="col-xs-12">
                <?php $youtube_embed_code =  get_field('youtube_embed_code');
                    if ($youtube_embed_code){
                        echo $youtube_embed_code;
                    }else{
                        echo '<div class="well video_placeholder">Video coming soon</div>';
                    }

                ?>
                    </div>
                    </div>

                <div class="row" role="main">
                    <div class="col-xs-12">
                <?php
                    the_content();
                    ?>
                    </div><!--/.col-->
		        </div><!--/.row -->

                <h2>Skill Progression</h2>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                    <h3>Easier: </h3>
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('easier_movements') ):
                        // loop through the rows of data
                        echo "<ul>";
                        while ( have_rows('easier_movements') ) : the_row(); 
                        // display a sub field value
                        //use url_to_postid() to get postid and then post title
                        $easier_postid = url_postid(the_sub_field('movement_url'));
                        ?>
                            <li> <a href=<?php $murl = the_sub_field('movement_url'); echo "\"$murl\"";?>> 
                                    <?php echo "post id: $easier_postid"; ?> 
                                </a> 
                            </li>                    
                    <?php
                        endwhile;
                        echo "</ul>";
                    endif;
                    ?>
                    </div>
                    <div class="col-xs-12 col-md-4">
                    <h3>Current skill: </h3>
                        <?php the_title(); ?>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                    <h3>Harder: </h3>
                    <?php
                    if( have_rows('harder_movements') ):
                        while ( have_rows('harder_movements') ) : the_row();
                        the_sub_field('movement_url');
                        endwhile;
                    endif;
                    ?>
                    </div>

                </div>
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
