   <div class=<?php echo $top ?> > </div>          
        <!-- Portfolio Plus Filters -->
        <div class="portfolio">
       <!-- Portfolio Filters -->   
     <div id=<?php echo $filters ?> class="sixteen columns filters">
          <ul class="clearfix">
            <!-- <div class="col-md-6 col-lg-6 "> --> <li><a id=<?php echo $all ?> href="#" data-filter=".prescribed" class="active"><h5>Prescribed</h5></a></li>   <!-- </div> -->
            <!-- <div class="col-md-6 col-lg-6"> --> <li><a href="#" data-filter=".scaled"><h5>Scaled</h5></a></li> <!-- </div> -->
          </ul>
        </div> <!--/Portfolio Filters -->
             
        <!-- Portfolio Wrap -->  
        <div id= <?php echo $wrapper ?>  class="portfoliowrap" >
        
<!--TODO: add another loop for scaled exercises, and another 
custom field in the backend for them then add classes prescribed 
and scaled to the portfolio-item div -->
<?php foreach($prescribed_exercise_array as $exercise){ 
$exercise_volume = $exercise['sets'] . "x" . $exercise['reps'];

$exercise_post_id = url_to_postid($exercise['movement_url']);
$youtube_full_code = get_field('youtube_embed_code',$exercise_post_id);
preg_match("*youtube.com/embed/(\w+)*",$youtube_full_code,$matches); 
$youtube_video_id = $matches[1];
$youtube_thumbnail_url = "http://img.youtube.com/vi/$youtube_video_id/default.jpg";

$exercise_post = get_post(url_to_postid($exercise['movement_url']));
$exercise_title = $exercise_post->post_title;
?>
             <!-- Portfolio Item Video Expander  -->                   
            <div class="portfolio-item one-four prescribed ">
            
            <div class="portfolio-image" style=<?php echo "background-image:url($youtube_thumbnail_url);background-repeat:no-repeat;background-size:cover;background-position:center;" ?> >
                     <div class="video-wrapper">
                            <div class="video-container">
                            </div> <!-- /video -->
                        </div>
            </div>
            
            <div class="project-overlay">
                <div class="open-project-link">
                 <a class="open-project" 
                 href=<?php echo "/video_overlay/?movement_id=" . url_to_postid($exercise['movement_url']) . "&close_id=". $projectClose; ?> 
                title=<?php echo $exercise_title; ?>></a> 
                </div>
                <div class="project-info">
                <h4 class="project-name"><?php echo "$exercise_volume $exercise_title"; ?> </h4>
                    <div class="zoom-icon"></div>
                    <!-- <p class="project-categories">Low body</p>  -->   
                </div>
            </div>
            </div> <!--/Portfolio Item Video Expander  -->     
<?php }?>

<?php foreach($scaled_exercise_array as $exercise){ 
$exercise_volume = $exercise['sets'] . "x" . $exercise['reps'];
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
             <!-- Portfolio Item Video Expander  -->                   
            <div class="portfolio-item one-four scaled ">
            
            <div class="portfolio-image" style=<?php echo "background-image:url($youtube_thumbnail_url);background-repeat:no-repeat;background-size:cover;background-position:center;" ?>>
                     <div class="video-wrapper">
                            <div class="video-container">
                            </div> <!-- /video -->
                        </div>
            </div>
            
            <div class="project-overlay">
                <div class="open-project-link">
                 <a class="open-project" 
                 href=<?php echo "/video_overlay/?movement_id=" . url_to_postid($exercise['movement_url']) . "&close_id=". $projectClose; ?> 
                title=<?php echo $exercise_title; ?>></a> 
                </div>
                <div class="project-info">
                <h4 class="project-name"><?php echo "$exercise_volume $exercise_title"; ?> </h4>
                    <div class="zoom-icon"></div>
                    <!-- <p class="project-categories">Low body</p>  -->   
                </div>
            </div>
            </div> <!--/Portfolio Item Video Expander  -->     
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

<a href="<?php the_permalink(); ?>">Read More</a>
<a class="twitter-share-button"
href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>"
  data-size="large">
Tweet</a>

 <div class="share"> 
      <div class="cell"> 
</div>
</div>
