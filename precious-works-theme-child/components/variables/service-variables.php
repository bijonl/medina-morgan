<?php 
$service_image_id = get_post_thumbnail_id($id); 
$service_title = get_the_title($id); 
$service_display = get_field('service_display', $id); 
$service_display_name = $service_display ? $service_display : $service_title; 
$quick_service_summary = get_field('quick_service_summary', $id);
$service_permalink = get_the_permalink($id); 


$longer_service_description = get_field('longer_service_description');

?>