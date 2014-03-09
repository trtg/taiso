<?php
/*Template Name: sho_home
 */
?>
<?php include 'header.php'; ?>

<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="/wp-content/images/banner.jpg" alt="" />
      <div class="carousel-caption">
        <img src="/wp-content/images/gymnastics_30.png">
      </div>
    </div>
    <div class="item">
      <img src="/wp-content/images/strength.jpg" alt="" />
      <div class="carousel-caption">
        <img src="/wp-content/images/strength_half.png">
      </div>
    </div>
    <div class="item">
      <img src="/wp-content/images/balance.jpg" alt="" />
      <div class="carousel-caption">
        <img src="/wp-content/images/balance_half.png">
      </div>
    </div>
    <div class="item">
      <img src="/wp-content/images/flexibility.jpg" alt="" />
      <div class="carousel-caption">
        <img src="/wp-content/images/flexibility_half.png">
      </div>
    </div>
</div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <!--the gym_side_image class does not move with the slides and is full height-->
    <!--<img class="gym_side_image" src="/wp-content/images/gymnastics_30.png">-->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--<div class="jumbotron">
      <div class="container">
        <h1>Gymnastics for all</h1>
        <p>Put some stuff here</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>-->

<?php $wods = new WP_Query(array(
    'post_type' => 'wod'
));?>

<div class="jumbotron wod_header">
<h1>Taiso WOD:</h1>
</div>
    <div class="container">
<?php $is_latest_wod = 1; ?>
<?php while($wods->have_posts()) : $wods->the_post();?>
      <!-- Example row of columns -->
          <div class="row <? if ($is_latest_wod) {echo 'latest_wod';} ?>">
        <div class="col-xs-2 col-lg-2">
            <div class="date">
                <?php $wod_date = DateTime::createFromFormat('Ymd',get_field('wod_date'));?> 
                <p style="font-size:12px; margin:0 0 0px;text-align:left"> <?php echo $wod_date->format('M');?></p><p> <?php echo $wod_date->format('d');?> <span><?php echo $wod_date->format('Y');?> </span></p>
            </div>
        </div>

<div class="col-xs-2 col-lg-2">
</div>
        <div class="col-xs-8 col-lg-8">
            <div class="panel panel-default">
              <div class="panel-heading">
              <h3 class="panel-title"><?php echo the_title();?></h3>
              </div>
              <div class="panel-body">
                <div class="wod_body"><?php the_excerpt();?></div>
                <p><a class="btn btn-default" href="<?php the_permalink();?>" >View details &raquo;</a></p>
              </div>
            </div>

        </div>
    </div><!--end row-->
<hr>
<? $is_latest_wod =0; ?>
<?php endwhile; ?>
      </div>
<?php include 'footer.php';?>
      <script>
$(document).ready(function(){
    $('.carousel').carousel();
    $('.nav_link').removeClass('active');
    $('#home_link').addClass('active');
});
</script>
    </body>
</html>
