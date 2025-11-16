<div class="single-wildcard-wrapper h-sm-50">
    <?php if($link) { ?>
        <a href="<?php echo $link['url'] ?>" 
        target="<?php echo $link['target'] ? $link['target'] : '_self'?>"
        aria-label="visit <?php echo $link['url'] ?>"
        >
    <?php } ?>
    <?php if(!empty($image) || !empty($icon) || !isset($heading)) { ?>
           <div class="wildcard-image-wrapper <?php echo $wildcard_alignment == 'start' ? 'me-auto' : 'mx-auto' ?>">
                <?php if ($image_type === 'icon') { ?>
                    <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($title); ?>">
                        <?php echo $icon; ?>
                    </span>
                <?php } elseif ($image_type === 'image' && $image) {
                    // Get alt text or fallback
                    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                    $alt = $alt ?: esc_attr($title); // Fallback to title
                    echo wp_get_attachment_image($image, 'full', false, ['alt' => $alt]);
                } elseif (!empty($heading)) { ?>
                    <h2 class="mb-0"><?php echo $heading ?></h2>
                <?php } ?>
            </div>


    <?php } ?>
 
    <div class="wildcard-title-wrapper">
        <h4 class="h3 mb-0"><?php echo esc_html($title); ?></h4>
    </div>
    <div class="content-area-wrapper">
        <div class="wildcard-content-wrapper">
            <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
        </div>
    </div>
    <?php if($link) { ?>
        </a>
    <?php } ?>
</div>
