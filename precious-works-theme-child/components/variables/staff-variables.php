<?php 
$staff_member_image_id = get_post_thumbnail_id($id); 
$first_name = get_field('first_name', $id);
$middle_name = get_field('middle_name', $id);
$last_name = get_field('last_name', $id);
$full_name = $first_name . ' '. $middle_name.' '.$last_name; 
$email_address = get_field('email_address', $id);
$position_display_name = get_field('position_display_name', $id);
$staff_banner_image = get_field('staff_banner_image', $id);
$phone_number = get_field('phone_number', $id);

$bio_title = get_field('bio_title', $id);
$biography = get_field('biography', $id);
$education = get_field('education', $id);
$bar_admissions = get_field('bar_admissions', $id);
$practice_areas = get_field('practice_areas', $id);
$insights = get_field('insights', $id);
$blog_bio = get_field('blog_bio', $id);