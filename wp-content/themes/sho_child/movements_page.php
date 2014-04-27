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
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/movement_directory.css">

<?php include 'navbar.php';?>
<body>
<div id="main-content" class="main-content">

<?php
if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
    // Include the featured content template.
    get_template_part( 'featured-content' );
}
?>
    <div id="primary" class="container">
        <div id="content" class="site-content" role="main">


         <div id="wrapper">
             <h1> Movement Directory</h1>
             <div class="tools">
                 Search: <br>
                 <input type="text" id="searchBox" /><br><br>
                 Filter:
                 <div id="filters"></div>
                 <div id="count"></div>
             </div><!--/tools-->
             <ul id="listing"> </ul>
         </div><!--/wrapper-->

        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->

<script type="text/template" id="movement-template">
<span> </span>
    <span class="list-header"> <%= name %> (<%= level %>) </span>
    <div class="details">
    apparatus: <%= apparatus %> <br>
    <img src="<%= thumbnail_url[0] %>">
    <a href="<%= permalink %>">Read more </a>
    </div>
    </script>

         <!--<script src="js/data.json" type="text/javascript"></script>-->

         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js" type="text/javascript"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>


         <script src="/wp-content/themes/sho_child/js/routers/router.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/models/movement-model.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/views/movement-views.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/app.js" type="text/javascript"></script>


<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
    $('#movements_link').addClass('active');
});
</script>

     </body>
 </html>
