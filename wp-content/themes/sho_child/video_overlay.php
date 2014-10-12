<?php
/*Template Name: video_overlay
*/
?>
<div class="item-data project-page clearfix element_fade_in">
    <!-- Project Close Button -->
    <ul id="project-page-button" class="clearfix">            	
        <li><a id="project_close" class="icon-awesome" href="#" title="Close "><i class="fa fa-times-circle-o"></i></a></li>
    </ul>
	<!--/Project Close Button -->
    <!-- Container-->    
    <div class="container small-width no-padding ">
    
        <!-- Section Title -->
        <div class="project-section-title">
            <h1>Burpees 3 sets</h1>    
            <!-- <p>burpees 3 sets</p> -->
        </div>				
        <!--/Section Title -->
        
        <!-- Project Video -->
        <div class="video-wrapper">
            <div class="video-container">
                <!-- <iframe src="http://player.vimeo.com/video/64256393?title=0" width="800" height="450" ></iframe> -->
<?php 
$movement_post_id = $_GET['movement_id'];
echo get_field('youtube_embed_code',$movement_post_id);
?>
            </div>
        </div>
    </div>    <!--/Container-->
</div>  
