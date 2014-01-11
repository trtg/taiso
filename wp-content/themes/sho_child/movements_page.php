<?php
/**
 * Template Name: Movements
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
    // Include the featured content template.
    get_template_part( 'featured-content' );
}
?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

<?php
// Start the Loop.
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
                    /*if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }*/
endwhile;
?>

<?php $movements = new WP_Query(array(
    'post_type' => 'movement'
));?>

<?php while($movements->have_posts()) : $movements->the_post();?>


<div class="movement panel panel-default">
            <div class="panel-heading">
                <h5 class="movement_panel_title"><?php the_title();?></h5>
                <div class="movement_icons">
                <?php $terms = get_the_terms(get_the_ID(),'apparatus'); 
                foreach ($terms as $term){
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

                        <a href="/level/advanced"><span class="badge">A</span></a>
                </div>
            </div>
        <div class="movement_thumbnail_div panel-body">
            <a class="thumbnail thumbnail_link" href=<?php echo the_permalink();?> ><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>

</div>
<?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
//get_sidebar();
get_footer();
