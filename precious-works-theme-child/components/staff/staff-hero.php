<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$section_title = get_field('section_title', false, false);
$section_subtitle = get_field('section_subtitle');
$section_title_tag = get_field('section_title_tag');
$has_title_area = !empty($section_title) || !empty($section_subtitle); 


$image = get_field('hero_image'); 
$image_url = wp_get_attachment_url($image); 
$interior_hero_type = get_field('interior_hero_type');
$half_size = $interior_hero_type == 'half-sized'; 

$has_content = $image || $has_button_area || $has_title_area;

$hero_alignment = 'text-center';
if($half_size) {
    $hero_alignment = 'text-start'; 
}  ?>

<section class="single-staff-hero-area" style="background-image: url('<?php echo $staff_banner_image['url'] ?>')">
    <?php if($half_size) { ?>
        <div class="overlay image-overlay"></div>
    <?php } ?>
    <div class="homepage-hero-container interior-hero <?php echo $interior_hero_type ?> container h-100">
     
        <div class="homepage-hero-row interior-hero row align-items-center h-100">
            <div class="homepage-hero-col interior-hero col-12">
                <div class="homepage-hero-content-wrapper interior-hero <?php echo $hero_alignment ?>">
                    <div class="overlay image-overlay"></div>
                    <?php $display_title = 'h1'; ?>
                    <?php include(locate_template('blocks/partials/title-area.php')); ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
        </div>
    </div>
</section>