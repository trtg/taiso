   <div class=<?php echo $top ?> > </div>          
        
              
        <!-- Portfolio Plus Filters -->
        <div class="portfolio">
       <!-- Portfolio Filters -->   
     <div id=<?php echo $filters ?> class="sixteen columns filters">
    
          <ul class="clearfix">
            <!-- <div class="col-md-6 col-lg-6 "> --> <li><a id=<?php echo $all ?> href="#" data-filter="*" class="active"><h5>Prescribed</h5></a></li>   <!-- </div> -->
            <!-- <div class="col-md-6 col-lg-6"> --> <li><a href="#" data-filter=".branding"><h5>Scaled</h5></a></li> <!-- </div> -->
          </ul>
        </div>
        <!--/Portfolio Filters -->
    
       
             
        <!-- Portfolio Wrap -->  
        <div id= <?php echo $wrapper ?>  class="portfoliowrap" >
        

<?php foreach($exercise_array as $exercise){ 
$exercise_volume = $exercise['sets'] . "x" . $exercise['reps'];
$exercise_post = get_post(url_to_postid($exercise['movement_url']));
$exercise_title = $exercise_post->post_title;
?>
             <!-- Portfolio Item Video Expander  -->                   
            <div class="portfolio-item one-four  design  photography   web">
            
            <div class="portfolio-image">
                     <div class="video-wrapper">
                            <div class="video-container">
                            </div>
                            <!-- /video -->
                        </div>
                <!-- <img src="images/portfolio/img1.jpg" alt=" 1"/> -->
            </div>
            
            <div class="project-overlay">
                <div class="open-project-link">
                 <a class="open-project" 
                 href=<?php echo "/video_overlay?movement_id=" . url_to_postid($exercise['movement_url']); ?> 
                title=<?php echo $exercise_title; ?>></a> 
                </div>
                <div class="project-info">
                <h4 class="project-name"><?php echo "$exercise_volume $exercise_title"; ?> </h4>
                    <div class="zoom-icon"></div>
                    <!-- <p class="project-categories">Low body</p>  -->   
                </div>
            </div>
              
            </div>
            <!--/Portfolio Item Video Expander  -->     
<?php }?>
                 
       </div> <!--/Portfolio Wrap -->
            
        </div>
        <!--/Portfolio Plus Filters -->
        
        <!-- portfolio-bottom    pportfolio-->
        <div class=<?php echo $pbottom ?> >    </div>
        
        
        <!-- Project Page Holder   project-page-holder-->
        <div id=<?php echo $projectPageHolder ?> >
            
            <div class="clear"></div>
            <div id=<?php echo $pageData ?> >  </div>
        
        </div>

    <article class="workouttext">
    
<?php the_content(); ?>
    </article>

     


 <div class="share"> 
      <div class="cell">
       
            <!--  <div class="g-plusone" data-size="medium"></div>
             <div  class="fb-like sthird " data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            
             
                    
        -->

    </div>
