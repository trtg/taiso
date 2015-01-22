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
    
</head>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css">
    <!--<link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" />   -->
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
    <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/contact_us.css">
<body>
   <?php  include 'menu.php'; ?>
<div class="container-fluid">
<div class="row">

<div class="col-md-6 col-xs-12">
<div id="contact_form" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" >
        <?php echo do_shortcode( '[contact-form-7 id="48" title="Contact form 1"]' ); ?>
        </div>
</div>
</div>

<div class="col-md-6 col-xs-12 photo_column">
<img class="img-responsive" src="http://placehold.it/640x480">
</div>

</div><!--/row-->
</div><!--/container-->

<?php include 'footer.php';?>

        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
        <script src="/wp-content/themes/sho_child/js/jquery.sticky.js"></script>     
        <script src="/wp-content/themes/sho_child/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/appear.js" type="text/javascript" ></script>
        <script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
        <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
<script>
$(function() {
    $('#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });
});
</script>

    </body>
</html>
