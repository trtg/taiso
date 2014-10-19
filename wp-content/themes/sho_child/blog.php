<?php
/*Template Name: blog
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>TOTALTAISO BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="TotalTaiso blog" />
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    
    
    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet">     
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" />
    <link href="/wp-content/themes/sho_child/css/prettyPhoto.css" type="text/css" media="screen" rel="stylesheet"/>   
	<link href="/wp-content/themes/sho_child/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/wp-content/themes/sho_child/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="icon" type="image/ico" href="/wp-content/image/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="75" class="royal_loader">

	<?php  include 'menu.php'; ?>
    <!-- Blog Header -->
    <div id="blog-header">
    	<h1>TOTALTAISO Blog</h1>
    </div> <!--/Blog Header -->

<?php $blog_posts = new WP_Query(array(
    'post_type' => 'post'
));?>

    
    <!-- Blog Content -->
    <div id="blog" class="masonry clearfix">
    	
        <!-- Container -->
        <div class="container">
            <div class="blog-posts-content">

<?php while($blog_posts->have_posts()) : $blog_posts->the_post();?>
<?php
//to make <!--more--> tag work on custom template
global $more;
$more = 0;
?>

                <div class="blog-post masonry">
                    <div class="post-content">
                        <h3 class="blog-title"> <?php echo the_title();?></h3>

                        <p class="blog-meta">Posted by <a href="#">TotalTaiso</a> | <?php the_date(); ?>  | <a href="#">5 Comments</a></p>

                        <div class="blog-border"></div>
                        <div class="blog-content">
                            <?php the_content('Read more ...');?>
                        </div><!--/blog-content-->
                        <a href="blog-post.php" class="newave-button small grey external">Read More</a>
                    </div> <!--/post-content -->
                </div> <!--/blog-post masonry-->

<?php endwhile; ?>

            </div> <!--/blog-posts-content -->
        </div> <!--/container -->
    </div> <!--/blog-->
    
    
    <!-- Blog Navigation -->
    <div id="blog-footer" class="clearfix">
        <div class="container no-padding">
        	<ul class="inner-navigation masonry">
                <li><?php next_posts_link('Newer posts'); ?></li>
                <li><?php previous_posts_link('Older posts'); ?></li>
            </ul>
    	</div> <!--/container -->
    </div> <!--/Blog Navigation -->
    
      <!-- Footer -->
<?php  include 'footer.php'; ?>
    <!--/Footer -->
   
 	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script> 
    <script src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>	    
	<script src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
	<script src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script> 
    <script src="/wp-content/themes/sho_child/js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        (function($) { "use strict";
                    Royal_Preloader.config({
                        mode:           'text', // 'number', "text" or "logo"
                        text:           'TOTALTAISO BLOG',
                        timeout:        0,
                        showInfo:       true,
                        opacity:        1,
                        background:     ['#212121']
                    });
        })(jQuery);
    </script>
<script src="/wp-content/themes/sho_child/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script src="/wp-content/themes/sho_child/js/isotope.js" type="text/javascript"></script>
<script src="/wp-content/themes/sho_child/js/jquery.bxslider.min.js"></script>
<script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
<script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
<script src="/wp-content/themes/sho_child/js/sscr.js"></script>
<script src="/wp-content/themes/sho_child/js/skrollr.js"></script>
<script src="/wp-content/themes/sho_child/js/blog.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	</body>
</html>
