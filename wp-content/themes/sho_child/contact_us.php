<?php
/**
 * Template Name: contact_us
 * The template for the business inquiry/contact page
 *
 * @package taiso
 */

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Total Taiso</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width; initial-scale=1; minimal-ui">

    <meta name="author" content="Sho Nakomori">
    <meta name="description" content="Total Taiso desc" />
    <meta name="author" content="TotalTaiso  Campaign">
    <meta name="keywords" content="strength, balance, flexibility ....">
    
    <!-- Bootstrap core CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
   <!--  <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fancymenu.css"  rel="stylesheet">  -->
    <!-- <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery1.8.3.js" type="text/javascript"></script>  
    <script src="js/jquery-ui.min.js"></script> -->
   <!--  <script src="weljs/jquery.ui.touch-punch.min.js" type="text/javascript"></script> -->
   <!--  <script src="js/bannerscollection_zoominout.js" type="text/javascript"></script> -->
    <!-- support till IE8 and a bit 7 -->
    <!--[if lt IE 9]>
        <link href="font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
         <script src="js/html5shiv.js" type="text/javascript"></script>
         <script src="js/respond.src.js" type="text/javascript"></script>
         <link href="css/border-radius.htc" rel="stylesheet">
     <![endif]-->

    <!--[if lt IE 8]>
    <link href="css/bootstrap-ie7.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

    <!--[if lt IE 8]>
   <style> .btn{ behavior: url(css/border-radius.htc); position: relative;} .vert-text{ margin-top:50px;} </style>
<![endif]-->
    <!-- Add custom CSS here -->
    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" />   
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
     <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 
     <link href="/wp-content/themes/sho_child/css/aboutsho.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="/wp-content/themes/sho_child/css/prettyPhoto.css" type="text/css" media="screen" />    
    <link href="/wp-content/themes/sho_child/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/wp-content/themes/sho_child/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

   <!--  <link href="main.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 -->
</head>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/contact_us.css">
<body>
   <?php  include 'menu.php'; ?>
<div id="contact_form" class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" >
                            <?php echo do_shortcode( '[contact-form-7 id="48" title="Contact form 1"]' ); ?>
                            </div>
                    </div>

<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
});
</script>

<script src="/wp-content/themes/sho_child/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="/wp-content/themes/sho_child/js/isotope.js" type="text/javascript"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.bxslider.min.js"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.tweet.js"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/sho_child/js/sscr.js"></script>
    <script src="/wp-content/themes/sho_child/js/skrollr.js"></script>
    <script src="/wp-content/themes/sho_child/js/jquery.jigowatt.js"></script>
    <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
    <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
    </body>
</html>

