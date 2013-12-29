<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'gymnastic_skill',
        array(
            'labels' => array(
                'name' => __( 'Skills' ),
                'singular_name' => __( 'Skill' )
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
}
?>
