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
while ( have_posts() ) : the_post();
endwhile;
?>

<?php 

$movements = new WP_Query(array(
    'post_type' => 'movement'
));

$list_of_movements = array();
while($movements->have_posts()) : $movements->the_post();
array_push($list_of_movements,(array)the_post());
endwhile;
echo json_encode($list_of_movements);
?>
