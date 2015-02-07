function sho_theme_page() {
?>
<div class="section panel">
      <h1>Custom Theme Options</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        <?php 
                settings_fields('sho_theme_options'); 
                    do_settings_sections('sho_theme_options.php');
                  ?>
            <p class="submit">  
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
            </p>  
            
      </form>
      
    </div>
    <?php
}

