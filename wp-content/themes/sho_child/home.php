<?php
/*Template Name: sho_home
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/wp-content/themes/sho_child/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="/wp-content/themes/sho_child/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/wp-content/themes/sho_child/css/main.css">

        <script src="/wp-content/themes/sho_child/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <img src="/wp-content/images/total_taiso_logo_60x50.png">
          <a class="navbar-brand" href="#">Total Taiso</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/movements">Movements</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Email us</a></li>
              </ul>
            </li>
          </ul>
                  </div><!--/.navbar-collapse -->
      </div>
    </div>
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <h2>力</h2>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <h2>平衡</h2>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <h2>管制 </h2>
      </div>
    </div>
</div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
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

<div class="jumbotron">
<h1>Workout of the Day:</h1>
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



      <hr>

      <footer>
        <p>&copy; Total Taiso 2013</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="/wp-content/themes/sho_child/js/vendor/bootstrap.min.js"></script>

        <script src="/wp-content/themes/sho_child/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
<script>
$(document).ready(function(){
    $('.carousel').carousel();
});
</script>
    </body>
</html>
