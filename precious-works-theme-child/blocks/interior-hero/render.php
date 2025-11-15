<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$image = get_field('hero_image'); 
$image_url = wp_get_attachment_url($image); 

$has_content = $image || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?> style="background-image: url('<?php echo $image_url ?>')">
    <div class="homepage-hero-container interior-hero container h-100">
        <div class="homepage-hero-row interior-hero row align-items-center h-100">
            <div class="homepage-hero-col interior-hero col-12">
                <div class="homepage-hero-content-wrapper interior-hero text-center">
                    <div class="overlay image-overlay"></div>
                    <?php $display_title = 'h1'; ?>
                    <?php include(locate_template('blocks/partials/title-area.php')); ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
        </div>
    </div>
</section>