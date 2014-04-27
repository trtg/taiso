<?php
/*Template Name: blog
 */
?>
<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/blog.css">
<body>
<?php include 'navbar.php';?>

<?php $blog_posts = new WP_Query(array(
    'post_type' => 'post'
));?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                 <h1>Total Taiso Blog</h1>
            </div>
        </div>
<?php $is_latest_blog_post = 1; ?>
<?php while($blog_posts->have_posts()) : $blog_posts->the_post();?>
<?php
global $more;
$more = 0;
?>
          <div class="blog_post row <? if ($is_latest_blog_post) {echo 'latest_blog_post';} ?>">
        <div class="col-xs-12">
                <?php echo the_title();?>
                <?php the_content('Read more ...');?>
        </div>
    </div><!--end row-->

<? $is_latest_blog_post =0; ?>
<?php endwhile; ?>
      </div><!--/container-->
<?php include 'footer.php';?>
      <script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
    $('#blog_link').addClass('active');
});
</script>
    </body>
</html>
