<?php 
include(locate_template('components/variables/service-variables.php')); 

$image_url = wp_get_attachment_url($service_image_id); 


$hero_alignment = 'text-center';
$section_title = $service_display_name; 
$section_subtitle = $longer_service_description; 
$section_title_tag = 'h1'; 

$block = array(
    'id'  => $service_display_name,
); 

$has_title_area = !empty($section_subtitle) || !empty($section_title); ?>

<section class="interior-hero-section service-hero-section" style="background-image: url('<?php echo $image_url ?>')">
    <div class="homepage-hero-container interior-hero container h-100">
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
<?php include(locate_template('/components/services/service-nav.php')); ?>
