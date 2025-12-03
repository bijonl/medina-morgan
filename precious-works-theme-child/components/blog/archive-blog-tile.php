    <div class="archive-single-post-tile d-lg-flex align-items-center">
        <div class="single-post-image-wrapper">
            <a href="<?php echo $permalink; ?>" class="single-post-link" aria-label="Read more about <?php echo esc_attr($title); ?>">
                    <?php echo $featured_image ? 
                    wp_get_attachment_image($featured_image, 'full', false, array('class' => 'w-100 h-auto')) :
                    wp_get_attachment_image($default_blog_image, 'full', false, array('class' => 'w-100 h-auto')) ?>
            </a>
        </div>

        <div class="post-meta-wrapper">
            <div class="single-post-title-wrapper">
                <a href="<?php echo $permalink; ?>" class="single-post-link color-inherit" aria-label="Read more about <?php echo esc_attr($title); ?>">
                    <h3 class="mb-0"><?php echo $title ?></h3>
                </a>
                <p><?php echo $excerpt ?>  
                    <a href="<?php echo $permalink; ?>" class="single-post-link text-decoration-underline" aria-label="Read more about <?php echo esc_attr($title); ?>">
                        Read More >
                    </a>
                </p>
            </div>
        </div>
    </div>