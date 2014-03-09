<?php
/**
 * Template Name: Movements
 * The template for the searchable movements directory 
 * This is a one-page backbone app based on an endpoint 
 * which exposes all custom posts of type movement as a JSON
 * list.
 *
 * @package taiso
 */

get_header(); ?>

<?php include 'navbar.php';?>
<body>
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
//this just inserts the title "Movements"
//get_template_part( 'content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
                    /*if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }*/
endwhile;
?>
<h1>Directory of Movements</h1>
<div class="panel">
<span class="glyphicon glyphicon-search"></span><input type="text" id="searchBox"/><br><br>
<p>Filter:</p>

<div class="row">
<div class="col-xs-4 col-lg-4">
<p><span class="badge">B</span>Beginner</p>
<p><span class="badge">I</span>Intermediate</p>
<p><span class="badge">B</span>Advanced</p>
</div>
<div class="col-xs-4 col-lg-4">
<p><span class="badge">B</span>Rings</p>
<p><span class="badge">I</span>Floor</p>
<p><span class="badge">B</span>Mushroom</p>
<p><span class="badge">B</span>Paralletes</p>
<p><span class="badge">B</span>Rope</p>
</div>
<div class="col-xs-4 col-lg-4">
<p><span class="badge">B</span>Gymnastics</p>
<p><span class="badge">I</span>Core</p>
<p><span class="badge">B</span>Flexibility</p>
</div>

</div>

<?php $movements = new WP_Query(array(
    'post_type' => 'movement'
));?>

<?php while($movements->have_posts()) : $movements->the_post();?>


<div class="movement panel panel-default">
            <div class="panel-heading">
        <div class="movement_thumbnail_div ">
        <a class="thumbnail movement_thumbnail_link" href=<?php echo the_permalink();?> >
            <?php the_post_thumbnail('movement_thumbnail'); ?>
        </a>
        </div>
                <h5 class="movement_panel_title"><?php the_title();?></h5>
                <div class="movement_icons">
                <?php $apparatus_terms = get_the_terms(get_the_ID(),'apparatus'); 
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
                <?php $level_terms = get_the_terms(get_the_ID(),'level');
                    foreach ($level_terms as $term){

                        switch($term->slug){
                        case "beginner":
                            $level_name = "B";
                            break;
                        case "intermediate":
                            $level_name = "I";
                            break;
                        case "advanced":
                            $level_name = "A";
                            break;
                        }
                        $level_link =  (get_term_link($term->slug,'level')) ; 
                        echo "<a href=\"$level_link\"><span class=\"badge\">$level_name</span></a>";
                    }
                ?>
                </div>
            </div>
        

</div>
<?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php include 'footer.php';?>

                <script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                    $('#movements_link').addClass('active');
                });
                </script>
    </body>
</html>
