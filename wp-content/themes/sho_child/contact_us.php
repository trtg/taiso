<?php
/**
 * Template Name: contact_us
 * The template for the business inquiry/contact page
 *
 * @package taiso
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/coaching.css">

<body>
<?php include 'navbar.php';?>
                    <div id="the_wrapper" class="container">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12" >

                            <?php echo do_shortcode( '[contact-form-7 id="48" title="Contact form 1"]' ); ?>

                            </div>

                        </div>
                    </div><!--/the_wrapper-->


<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
});
</script>
    </body>
</html>

