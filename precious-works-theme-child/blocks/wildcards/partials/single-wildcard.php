<div class="single-wildcard-wrapper <?php echo $link ? 'has-link': '' ?> h-sm-50">
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
                } ?>
            </div>
    <?php } ?>
    <?php if(!empty($heading)) { ?>
        <div class="wildcard-heading-wrapper">
            <h2 class="h3 mb-0"><?php echo esc_html($heading); ?></h2>
        </div>
    <?php } ?>
    
    <?php if(!empty($title)) { ?>
    <div class="wildcard-title-wrapper">
        <h4 class="h3 mb-0"><?php echo esc_html($title); ?></h4>
    </div>
    <?php } ?>

    <?php if(!empty($content)) { ?>
    <div class="content-area-wrapper">
        <div class="wildcard-content-wrapper">
            <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
        </div>
    </div>
    <?php } ?>
    <?php if($link) { ?>
        </a>
    <?php } ?>
</div>
