<?php
/*Template Name: blog
 */
?>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php';?>

<?php $blog_posts = new WP_Query(array(
    'post_type' => 'post'
));?>

<?php
global $more;
$more = 0;
?>
    <div class="container">
<?php $is_latest_blog_post = 1; ?>
<?php while($blog_posts->have_posts()) : $blog_posts->the_post();?>
      <!-- Example row of columns -->
          <div class="blog_post row <? if ($is_latest_blog_post) {echo 'latest_blog_post';} ?>">
        <div class="col-xs-12">
                <?php echo the_title();?>
                <?php the_content();?>
                <p><a class="btn btn-default" href="<?php the_permalink();?>" >Read more &raquo;</a></p>
        </div>
    </div><!--end row-->
<hr>
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
