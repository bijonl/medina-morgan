<?php if($author) {
   foreach($author as $id) {
    include locate_template('components/variables/staff-variables.php'); ?>
    
    <aside class="single-post-author-wrapper text-center" aria-label="About the author">
        
        <figure class="single-post-author-image-wrapper">
            <?php 
            echo wp_get_attachment_image(
                $staff_member_image_id, 
                'full', 
                false, 
                array(
                    'class' => 'w-100 h-auto',
                    'alt'   => $full_name ? "Photo of $full_name" : 'Author photo'
                )
            ); 
            ?>
        </figure>

        <div class="single-post-author-text-wrapper">
            
            <h3 class="name-wrapper">
               <?php echo $author_display_name ? $author_display_name : $full_name; ?>
            </h3>

            <p class="description-wrapper">
                <?php echo wp_kses_post($blog_bio); ?>
            </p>

        </div>

        <div class="single-post-author-button-wrapper">
            <a 
                href="mailto:<?php echo esc_attr($$email_address); ?>" 
                class="pw-solid-button"
                aria-label="Email <?php echo esc_attr($full_name); ?>"
            >
                Get in Touch
            </a>
        </div>

    </aside>

<?php } 
    wp_reset_postdata(); 
} ?>
