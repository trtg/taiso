<?php
/**
 * Template Name: Movements
 * The template for the searchable movements directory 
 * This is a one-page backbone app based on an endpoint 
 * which exposes all custom posts of type movement as a JSON
 * list.
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
    

    <meta name="author" content="Sho Nakomori">
    <meta name="description" content="Total Taiso desc" />
    <meta name="author" content="TotalTaiso  Campaign">
    <meta name="keywords" content="strength, balance, flexibility ....">
    
    <!-- Bootstrap core CSS -->
    

    <link href="/wp-content/themes/sho_child/css/bootstrap.min.css" rel="stylesheet" /> 
    <link href="/wp-content/themes/sho_child/css/bootstrap-responsive.min.css" rel="stylesheet" />  
    <link href="/wp-content/themes/sho_child/css/fancymenu.css"  rel="stylesheet"> 
     <link href="/wp-content/themes/sho_child/css/style.css" rel="stylesheet" /> 
    
    
    
     <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/movement_directory.css">
</head>

<body>
 <?php  include 'menu.php'; ?>
<div id="wrapper" class="container">
   <div class="row">
        <div class="col-xs-12">
           <h1> Movement Directory</h1>
           <div class="tools">
               Search: <br>
               <input type="text" id="searchBox" /><br><br>
               Click to Filter:
               <div id="filters"></div>
               <div id="count"></div>
           </div><!--/tools-->
           <ul id="listing"> </ul>
       </div><!--/col-->
   </div><!--/row-->
</div><!--/wrapper-->

<script type="text/template" id="movement-template">
<span> </span>
             <span class="list-header"> <%= title %> 
                 <img src="/wp-content/images/<%= level.toLowerCase() %>_30x30.png" class="skill_level_icon"> 
                 <% _.each(apparatus,function(one_apparatus) {%>
                     <a href="/apparatus/<%= one_apparatus.toLowerCase() %>" ><img src="/wp-content/images/<%= one_apparatus.toLowerCase() %>_30x30.png" class="apparatus_icon"> </a>
                 <% }) ; %>

                 <% _.each(movement_function,function(one_function) {%>
                     <a href="/function/<%= one_function.toLowerCase() %>" ><img src="/wp-content/images/<%= one_function.toLowerCase() %>_30x30.png" class="function_icon"> </a>
                 <% }) ; %>


             </span>
             <div class="details">
                 apparatus: <%= apparatus %> <br>
                 <img src="<%= thumbnail_url[0] %>">
                 <a href="<%= permalink %>">Read more </a>
             </div>
    </script>

         <!--<script src="js/data.json" type="text/javascript"></script>-->

         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js" type="text/javascript"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>


         <script src="/wp-content/themes/sho_child/js/routers/router.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/models/movement-model.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/views/movement-views.js" type="text/javascript"></script>
        <!--menu depends on classie and modernizr-->
         <script src="/wp-content/themes/sho_child/js/classie.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/modernizr.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/fancymenu-rollin.js" type="text/javascript"></script>
         <script src="/wp-content/themes/sho_child/js/app.js" type="text/javascript"></script>


<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
    $('#movements_link').addClass('active');
});
$(function() {
    $('#back-top').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 250, 'easeInOutExpo');
    });
});

</script>

     </body>
 </html>
