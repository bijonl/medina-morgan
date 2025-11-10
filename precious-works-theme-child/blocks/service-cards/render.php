<?php $services = get_field('services');
include(locate_template('blocks/partials/global-block-variables.php')); 

$has_content = have_rows('services') || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 
$count = 0; 
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="section-title-wrapper">
        <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    </div>
    <div class="service-container container-fluid">
        <div class="service-row row">
             <?php foreach ($services as $id) { 
                $count++; 
                ?>
            <div class="service-col col text-center <?php echo $count % 2 !== 0 ? 'background-tertiary' : '' ?>">
                <?php include(locate_template('components/variables/service-variables.php')); ?>
                <article class="service-member-card">
                    <div class="service-image-wrapper">
                        <?php echo wp_get_attachment_image($service_image_id, 'service-card', false, array('class' => 'mx-auto h-auto')) ?>
                    </div>
                    <div class="service-meta-wrapper mx-auto d-flex justify-content-between align-items-center">
                        <div class="service-text-wrapper">
                            <h3 class="h2 service-title"><?php echo $service_display_name ?></h3>
                            <p><?php echo $quick_service_summary ?></p>
                        </div>
                    </div>  
                </article>
            </div>
            <?php }; ?>
        </div> 
    </div>
</section>

