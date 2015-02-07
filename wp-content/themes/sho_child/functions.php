<?php
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

/*define custom settings here, like the value of the 
 * quote shown on the homepage*/
function sho_theme_menu(){
    add_theme_page( 'Home page quote', 'Theme Options', 'manage_options', 'sho_theme_options.php', 'sho_theme_page');
    //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); 
}
add_action('admin_menu','sho_theme_menu');

/*display extra text on each section */
function sho_display_section($section){
}
/*display the settings on the page*/
function sho_display_setting($args){
extract( $args );

    $option_name = 'sho_theme_options_homepage_quote';

    $options = get_option( $option_name );

    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break;  
    }
}

function sho_validate_settings($input){
    return $input;
}
/*register settings to use on theme options page*/
add_action('admin_init', 'sho_register_settings');
function sho_register_settings(){
   // Register the settings with Validation callback
    register_setting( 'sho_theme_options', 'sho_theme_options_homepage_quote', 'sho_validate_settings' );

    // Add settings section
    add_settings_section( 'sho_text_section', 'Text box Title', 'sho_display_section', 'sho_theme_options.php' );

    // Create textbox field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'sho_textbox',
      'name'      => 'sho_textbox',
      'desc'      => 'Homepage quote',
      'std'       => '',
      'label_for' => 'sho_textbox',
      'class'     => 'css_class'
    );

    add_settings_field( 'homepage_quote_textbox', 'Homepage Quote Textbox', 'sho_display_setting', 'sho_theme_options.php', 'sho_text_section', $field_args ); 
}

add_action( 'init', 'create_post_types' );
function create_post_types() {
    register_post_type( 'movement',
        array(
            'labels' => array(
                'name' => __( 'Movements' ),
                'singular_name' => __( 'Movement' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','comments','excerpt','custom-fields','thumbnail'),
        )
    );
    register_post_type( 'wod',
        array(
            'labels' => array(
                'name' => __( 'WODs' ),
                'singular_name' => __( 'WOD' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','comments','excerpt','custom-fields','thumbnail'),
        )
    );

}

add_action('init', 'cptui_register_my_taxonomies');
function cptui_register_my_taxonomies() {
    register_taxonomy( 'level',array (
        0 => 'movement',
    ),
    array( 'hierarchical' => false,
    'label' => 'Level',
    'show_ui' => true,
    'query_var' => true,
    'show_admin_column' => false,
    'labels' => array (
        'search_items' => 'Level',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
    )
) );

    register_taxonomy( 'apparatus',array (
        0 => 'movement',
    ),
    array( 'hierarchical' => false,
    'label' => 'Apparatus',
    'show_ui' => true,
    'query_var' => true,
    'show_admin_column' => false,
    'labels' => array (
        'search_items' => 'Apparatus',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
    )
) );

    register_taxonomy( 'function',array (
        0 => 'movement',
    ),
    array( 'hierarchical' => false,
    'label' => 'Function',
    'show_ui' => true,
    'query_var' => true,
    'show_admin_column' => false,
    'labels' => array (
        'search_items' => 'Function',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
    )
) ); 

}//end cptui_register_my_taxonomies

add_image_size('movement_thumbnail',100,100);



?>
