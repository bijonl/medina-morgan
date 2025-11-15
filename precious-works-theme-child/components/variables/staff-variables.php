<?php 
$staff_member_image_id = get_post_thumbnail_id($id); 
$first_name = get_field('first_name', $id);
$middle_name = get_field('middle_name', $id);
$last_name = get_field('last_name', $id);
$full_name = $first_name . ' '. $middle_name.' '.$last_name; 
$email_address = get_field('email_address', $id);
$position_display_name = get_field('position_display_name', $id);
$staff_banner_image = get_field('staff_banner_image');
