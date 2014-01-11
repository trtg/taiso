<?php
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


}



?>
