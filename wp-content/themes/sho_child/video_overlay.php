<?php
/*Template Name: video_overlay
*/
?>
<div class="item-data project-page clearfix element_fade_in">
    <!-- Project Close Button -->
    <ul id="project-page-button" class="clearfix">            	
        <li><a id="project_close" class="icon-awesome" href="#" title="Close "><i class="fa fa-times-circle-o"></i></a></li>
    </ul> <!--/Project Close Button -->
    <div class="container small-width no-padding ">
        <div class="project-section-title">
            <h1><?php echo get_the_title($_GET['movement_id']);?></h1>    
        </div><!--/project-section-title-->
        
        <div class="video-wrapper">
            <div class="video-container">
                <?php 
                $movement_post_id = $_GET['movement_id'];
                echo get_field('youtube_embed_code',$movement_post_id);
                ?>
            </div><!--/video-container-->
        </div><!--/video-wrapper-->
    </div><!--/container-->
</div><!--/item-data-->
