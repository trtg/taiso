<?php
/**
 * Template Name: movements_json
 * This is an endpoint which exposes all custom posts of 
 * type movement as a JSON list.
 *
 * @package taiso
 */

?>


<?php 

$movements = new WP_Query(array(
    'post_type' => 'movement',
    'posts_per_page' => '-1'
));

$movement_posts = $movements->posts;

//var_dump($movements);
$list_of_movements = array();

foreach ($movement_posts as $movement_post){
    //each $movement_post is a WP_Post object
    $movement_data = (array)$movement_post;

    $post_data = array();
    $post_data['ID'] = $movement_post->ID;
    //can also use wp_get_attachment_url
    //and specify the specific thumbnail type, e.g. movement_thumbnail
    $url = wp_get_attachment_image_src( get_post_thumbnail_id($movement_post->ID) );
    $post_data['thumbnail_url'] = $url;
    $post_data['name'] = $movement_post->post_name;
    $post_data['title'] = $movement_post->post_title;
    $post_data['permalink'] = get_post_permalink($movement_post->ID);
    $post_data['apparatus'] = array();

    $apparatus_terms = get_the_terms($movement_post->ID,'apparatus');
    foreach($apparatus_terms as $term){
        array_push($post_data['apparatus'],$term->slug);
    }
    //can a skill have more than 1 level?
    $level_terms = get_the_terms($movement_post->ID,'level');
    foreach($level_terms as $level_term){
        $post_data['level'] = $level_term->name;
    }
    $function_terms = get_the_terms($movement_post->ID,'function');
    foreach($function_terms as $function_term){
        $post_data['function'] = $function_term->slug;
    }
    //wp_get_attachment_url(get_the_post_thumbnail(($movement_post->ID)));
    array_push($list_of_movements,$post_data);
}
echo json_encode($list_of_movements);
?>

