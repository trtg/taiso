<?php
/**
 * The Template for displaying individual WODs 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 ?>
<html lang="en">
<head>
    <title>Total Taiso</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    

    <meta name="author" content="Sho Nakomori">
    <meta name="description" content="Total Taiso desc" />
    <meta name="author" content="TotalTaiso  Campaign">
    <meta name="keywords" content="strength, balance, flexibility ....">
    
<!--    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/bootstrap-responsive.min.css" rel="stylesheet" />  -->

    <!--sergey depends on old bootstrap elsewhere, but new bootstrap is much simpler  -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/single-movement.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/single-wod.css" rel="stylesheet" /> 
    
    
    
     <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/movement_directory.css">-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "3e7f202e-2574-4839-a12c-d045842aefdc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>

<body>
 <?php  include 'menu.php'; ?>

	<div class="container">
		<div class="row" role="main">
            <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
            </div>
        </div>

        
            <?php  while ( have_posts() ) : the_post();?>
        <?php  

        $wod_index = 0;
        $prescribed_exercise_array = get_field('prescribed_exercise');
        $scaled_exercise_array = get_field('scaled_exercise');
            $wod_date = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('m/d');
            $wod_day_of_week = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('l');
            $workoutDay="$wod_date <span>$wod_day_of_week</span>"; 
            $exerciseSequence=the_title('','',false); 
            $id="wod" . $wod_index; 
            
             ?>

<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#prescribed">Prescribed</a></li>
  <li><a data-toggle="pill" href="#scaled">Scaled</a></li>
</ul>

<div class="tab-content">
  <div id="prescribed" class="tab-pane fade in active">
<?php foreach($prescribed_exercise_array as $exercise){ 
    if (array_key_exists('duration_seconds',$exercise) && count($exercise['duration_seconds'] > 0)){
        $exercise_volume = $exercise['sets'] . "x" . $exercise['duration_seconds'] . " seconds";
    }else{
        $exercise_volume = $exercise['sets'] . "x" . $exercise['reps'];
    }

    $exercise_post_id = url_to_postid($exercise['movement_url']);
    $youtube_full_code = get_field('youtube_embed_code',$exercise_post_id);
    preg_match("*youtube.com/embed/(\w+)*",$youtube_full_code,$matches); 
    $youtube_video_id = $matches[1];
    $youtube_thumbnail_url = "http://img.youtube.com/vi/$youtube_video_id/default.jpg";

$exercise_post = get_post(url_to_postid($exercise['movement_url']));
$exercise_title = $exercise_post->post_title;
?>
 <div class="holder">
  <div class="video-container">
<?php echo $youtube_full_code; ?>
    <div class="video-overlay"> <h4 class="video-overlay-text"><?php echo "$exercise_volume $exercise_title"; ?> </h4>  </div>
  </div><!--/video-container-->
  </div><!--/holder-->
              

<?php }?>


  </div><!--/.prescribed-->

  <div id="scaled" class="tab-pane fade">
 <?php foreach($scaled_exercise_array as $exercise){ 

     if (array_key_exists('duration_seconds',$exercise) && count($exercise['duration_seconds'] > 0)){
        $exercise_volume = $exercise['sets'] . "x" . $exercise['duration_seconds'] . " seconds";
     }else{
         $exercise_volume = $exercise['sets'] . "x" . $exercise['reps'];
     }
//if url_to_postid returns 0, make sure the proper URL prefix
//is being used, at this point everything should
//reference totaltaiso.com not totaltaiso.dreamhosters.com
$exercise_post = get_post(url_to_postid($exercise['movement_url']));
$exercise_title = $exercise_post->post_title;

$exercise_post_id = url_to_postid($exercise['movement_url']);
$youtube_full_code = get_field('youtube_embed_code',$exercise_post_id);
preg_match("*youtube.com/embed/(\w+)*",$youtube_full_code,$matches); 
$youtube_video_id = $matches[1];
$youtube_thumbnail_url = "http://img.youtube.com/vi/$youtube_video_id/default.jpg";

?>
  <div class="holder">
  <div class="video-container">
<?php echo $youtube_full_code; ?>
    <div class="video-overlay"> <h4 class="video-overlay-text"><?php echo "$exercise_volume $exercise_title"; ?> </h4>  </div>
  </div><!--/video-container-->
  </div><!--/holder-->
<?php }?>
   
  </div>
</div>


<?php endwhile;?>
                

                <div class="row" role="main">
                    <div class="col-xs-12">
                <?php
                    the_content();
                    ?>
                    </div><!--/.col-->
		        </div><!--/.row -->
<hr>

                <div class="row" style="margin-bottom:30px;">
                    <div class="col-xs-12 col-md-4">
                    </div>
                </div>

<!--sharethis magically populates these links-->
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_email_large' displayText='Email'></span>
<!--Twitter widget loader-->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
          t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
     
      t._e = [];
        t.ready = function(f) {
                t._e.push(f);
                  };
       
        return t;
}(document, "script", "twitter-wjs"));</script>

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
				//endwhile;
			?>
            
	</div><!--/.container -->
        <!--menu depends on classie and modernizr-->
                    <script  src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>        
                    <script  src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/appear.js"></script>
                    <script  src="/wp-content/themes/sho_child/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.prettyPhoto.js" type="text/javascript"></script>
                    <script  src="/wp-content/themes/sho_child/js/isotope.js" type="text/javascript"></script> 
                    <script src="/wp-content/themes/sho_child/js/jquery.bxslider.min.js"></script>

                    <script src="/wp-content/themes/sho_child/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
                    <script src="/wp-content/themes/sho_child/js/sscr.js"></script>
                    <script src="/wp-content/themes/sho_child/js/skrollr.js"></script>
                    <script src="/wp-content/themes/sho_child/js/jquery.jigowatt.js"></script>

         <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
                    <script src="/wp-content/themes/sho_child/js/scripts.js" type="text/javascript"></script>

<?php include 'footer.php';?>

<script>
                $(document).ready(function(){
                    $('.nav_link').removeClass('active');
                });
                </script>
                    <script>
                    //$('.video-container').click(function(e){$('.video-overlay',this).hide();console.log("clicked in video-container"); });
                    
                    focus();
                    var listener = addEventListener('blur', function(e) {
                        //if(document.activeElement === document.getElementsByTagName('iframe')) {
                        console.log('blur was detected');
                        console.log(e.currentTarget);
                        if($.inArray(document.activeElement,document.getElementsByTagName('iframe')) != -1) {
                           console.log('clicked iframe'); 
                           $('.video-overlay',document.activeElement.parentNode).hide();console.log("hid video overlay");
                           document.activeElement.blur();
                           console.log("blurred activelement");
                           console.log(document.activeElement);
                           console.log('focusing window');
                           window.focus();
                           setTimeout(function(){window.focus();console.log('refocused window');},50);
                        }
                        //removeEventListener(listener);

                    });
                    //$('.holder').click(function(e){$('.video-overlay',this).hide();console.log("clicked in .holder"); });
                    //hide video overlay text then click underlying iframe to start playing a video
                    /*var video-containers = document.getElementsByClassName('video-overlay');
                    for (var i =0;i < video-containers.length; i++){
                        video-containers[i].addEventListener('click',function(e){
                            //hide the text overlay
                            this.style.display = 'none';
                            //click the video container
                            var clickEvent = new MouseEvent('click', {
                                'view': window,
                                    'bubbles': true,
                                    'cancelable': true
                            });
                            this.parentNode.dispatchEvent(clickEvent);
                        });
                    };*/
                    </script>
    </body>
</html>
