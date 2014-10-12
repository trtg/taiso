<?php
/*Template Name: new_home
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Taiso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />

    <meta name="description" content="TotalTaiso" />
    <meta name="author" content="Sho Nakomori">
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
	<!-- <link rel="icon" type="image/ico" href="images/tticon.ico" /> -->
    
    
    
    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" />   
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" />

    
  <!-- delete after -->
    <link rel="stylesheet" href="/wp-content/themes/sho_child/css/prettyPhoto.css" type="text/css" media="screen" />    
    <link href="/wp-content/themes/sho_child/css/jquery.bxslider.css" rel="stylesheet" />
  <!-- delete after -->


    <link href="/wp-content/themes/sho_child/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="75" class="royal_loader">


<!--  begin of  fb google plus  share icons-->

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>	 -->

<!--  end of  fb google plus  share icons-->
    
    <?php  include 'menu.php'; ?>
 
    <!-- Preloader -->
    <!-- <div class="mask"><div id="loader"></div></div> -->
    <!--/Preloader -->
   



    
    
	<!-- Home Section -->
	<div id="home">

            <ul class="logo">
                <li> <img class="" src="/wp-content/images/tt_logo.png" height="50px;" width="50px;"  alt="TotalTaiso"></li>
                <li><img class="" src="/wp-content/images/tt_letters.png" height="auto" width="200px;"  alt="TotalTaiso"></li>
            </ul>

           
    	    
        	


            <a id="slider_left"><img src="/wp-content/images/arrow_left.png" alt="Slide Left" /></a>
			<a id="slider_right"><img src="/wp-content/images/arrow_right.png" alt="Slide Right" /></a>
        	<img id="cycle-loader" src="/wp-content/images/ajax-loader.gif" />
			<div id="fullscreen-slider">
            
            	<div>
                    <img src="/wp-content/images/fs1.jpg" alt="" />
                    <div class="pattern">
                        <div class="slide-content light">
                            <div class="div-align-center gymnasticsLetter">              
                                
                                <h1><img src="/wp-content/images/gymnastics.png" height="200px;" width="150px;" ></h1>                        
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <img src="/wp-content/images/fs2.jpg" alt="" />
                    <div class="pattern">
                    <div class="slide-content light"> 
                        <div class="div-align-center">                   
							<h1><img src="/wp-content/images/strength.png" height="200px;" width="150px;" ></h1>                        
                        </div>
                    </div>
                    </div>
                </div>
                
               



                 <div>
                    <img src="/wp-content/images/fs4.jpg" alt="" />
                    <div class="pattern">
                    <div class="slide-content light"> 
                        <div class="div-align-center">                   
                            <h1><img src="/wp-content/images/balance.png" height="200px;" width="150px;" ></h1>  
                                                    
                            
                        </div>
                    </div>
                    </div>
                </div>

                 
                 <div>
                    <img src="/wp-content/images/fs3.jpg" alt="" />
                    <div class="pattern">
                    <div class="slide-content light"> 
                        <div class="div-align-center">                   
                            <h1><img src="/wp-content/images/flexibility.png" height="200px;" width="150px;" ></h1>                        
                                                    
                            
                        </div>
                    </div>
                    </div>
                </div>


                
            </div>
        
	</div>	
	<!-- End Home Section -->
    
    
   
      <!-- WOD -->
    <section id="portfolio" class="content">
        <!-- Container -->
        <div class="container portfolio-title">
            
            <!-- Section Title -->
            <div class="section-title">
                <h1>TAISO WOD</h1>
                <span class="border"></span>
                <p>TAISO Workout Of the Day.</p>
            </div>              
            <!--/Section Title -->
        </div> 
        <!-- Container -->  
    </section>  
    <!--/Portfolio -->
    
               <!-- wod  -->

<?php $wods = new WP_Query(array(
    'post_type' => 'wod',
    'posts_per_page'=>5
));?>

<section id="wod">
<?php while($wods->have_posts()) : $wods->the_post();?>

<div class="toggle-wrap">        
        <?php  

        $exercise_array = get_field('exercise');
        //var_dump($exercise_array);
        
            $wod_date = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('d');
            $wod_day_of_week = DateTime::createFromFormat('Ymd',get_field('wod_date'))->format('l');
            $workoutDay="$wod_date <span>$wod_day_of_week</span>"; 
            $exerciseSequence=the_title('','',false); 
            $id="wod1"; 
            include 'toggletitle.php'; ?>

        <div class="toggle_container">  
            <?php  $wrapper='portfolio-wrap'; $filters="filters"; 
            $pbottom="portfolio-bottom"; $pageL="wod/burpees.html"; $all="all1"; 
            $projectPageHolder="project-page-holder"; $pageData="project-page-data"; 
            
            $top="portfolio-top";
            include 'wod.php'; ?>
        </div>
</div>
           
<?php endwhile; ?>
</section>
          <!-- end wod -->     

<!-- clearfix -->
         <section style="height:100px" class="clearfix"> 
            
          </section>  
    
 
        
    <!-- Quote Parallax -->
    <div id="quote-parallax" class="parallax " style="background-image: url('/wp-content/images/separator2.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        
        <div class="parallax-overlay parallax-background-color">
            <div class="container quote">   
                <h1><span class="quote-img"><img src="/wp-content/images/quote1.png" alt="" /></span>Strong thoughts inside a strong body<span class="quote-img"><img src="/wp-content/images/quote2.png" alt="" /></span></h1>
                <p>- Total Taiso -</p>
            </div>    
        </div>
                    
    </div>
    <!--/Quote Parallax -->
    
   <!--  <section style="height:200px"> 
            
          </section>
     -->
    
    <!-- Newsletter -->
    <section id="newsletter">
    
    
    	<!-- Container -->
		<div class="container small-width">
        
        	<div class="newsletter-left">
    
    			<input type="text" value="Enter your e-mail" onblur="if(this.value == '') { this.value = 'Enter your e-mail'; }" onfocus="if(this.value == 'Enter your e-mail') { this.value = ''; }" size="30">
    		
            </div>
            
            
            <!-- <div id="button-con"><button class="send_message" id="send"><span data-hover="Subscribe Now">Subscribe Now</span></button></div> -->
            
            <div class="newsletter-right">
            
    			<a class="newave-button medium outline white">Subscribe now</a>
            
            </div>
    
    	</div>
        <!--/Container -->
    
    </section>
    <!-- /Newsletter -->
    
    
    
    
    
    <?php  include 'footer.php'; ?>
    
    
    
    
    
    
    
	
	<!-- Twitter Parallax -->
<!-- 	<div id="twitter-parallax" class="parallax" style="background-image: url('images/separator1.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
	
    <div class="parallax-overlay">    	
        <div class="container">
        
            <div class="twitter-feed">            
                <a class="twitter-feed-icon" href="https://twitter.com/envato" target="_blank"><img src="images/twitter_white_big.png" alt="" /></a> -->                    
                
                <!-- Twitter Slider -->                
              <!--   <div id="twitter-feed">                
                </div> -->
                <!--/Twitter Slider -->                
                
   <!--              <p>@envato</p>            
            </div>
            
        </div>
    </div>    
        
	</div> -->
    <!--/Twitter Parallax -->
    
 
	
	<script  src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
    <script  src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>        
    <script  src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
	<script  src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
	<script  src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
    <script src="/wp-content/themes/sho_child/js/appear.js"></script>
    <script  src="/wp-content/themes/sho_child/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<script src="/wp-content/themes/sho_child/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script  src="/wp-content/themes/sho_child/js/isotope.js" type="text/javascript"></script> 
    <script src="/wp-content/themes/sho_child/js/jquery.bxslider.min.js"></script>


    
    <script src="/wp-content/themes/sho_child/js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        (function($) { "use strict";
                    Royal_Preloader.config({
                        mode:           'text', // 'number', "text" or "logo"
                        text:           'STRENGTH - BALANCE - FLEXIBILITY',
                        timeout:        true,
                        showInfo:       true,
                        opacity:        1,
                        background:     ['#212121']
                    });
        })(jQuery);
    </script>
	

    
    
    <script src="/wp-content/themes/sho_child/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
	<script src="/wp-content/themes/sho_child/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/sho_child/js/sscr.js"></script>
    <script src="/wp-content/themes/sho_child/js/skrollr.js"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.jigowatt.js"></script>
    <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
    <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
	
    <script src="/wp-content/themes/sho_child/js/scripts.js" type="text/javascript"></script>
    
    
	
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
