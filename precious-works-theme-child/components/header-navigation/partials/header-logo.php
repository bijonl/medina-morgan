<div class="desktop-logo d-none d-lg-block d-xl-block">
    <a href="<?php echo get_home_url() ?>" aria-label="go to homepage">
        <?php echo wp_get_attachment_image($site_logo, 
        'full', 
        false, 
        array('alt' => !empty($image_alt) ? $image_alt : $site_name.' logo' , 'class' => 'w-100 h-auto'))?>
    </a>
</div>
<div class="mobile-logo d-block d-lg-none d-xl-none">
    <a href="<?php echo get_home_url() ?>" aria-label="go to homepage">
        <?php echo wp_get_attachment_image($mobile_site_logo, 
        'full', 
        false, 
        array('alt' => !empty($image_alt) ? $image_alt : $site_name.' logo' , 'class' => 'w-100 h-auto'))?>
    </a>
</div>
