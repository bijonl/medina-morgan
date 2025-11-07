<article class="service-member-card">
    <div class="service-image-wrapper">
        <?php echo wp_get_attachment_image($service_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
    </div>
    <div class="service-meta-wrapper d-flex justify-content-between align-items-center">
        <div class="staff-text-wrapper">
            <h3 class="h2"><?php echo $service_display_name ?></h3>
            <p><?php echo $quick_service_summary ?></p>
        </div>
        <div class="button-wrapper">
            <a href="mailto:<?php echo $email_address ?>" class="pw-solid-button text-center">Learn More</a>
        </div>
    </div>  
</article>