<article class="staff-member-card">
    <div class="staff-image-wrapper">
        <a href="<?php echo get_the_permalink($id) ?>"
                class="color-inherit"
                aria-label="go to <?php echo $full_name ?>'s bio page"
        >    
            <?php echo wp_get_attachment_image($staff_member_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
        </a>
    </div>
    <div class="staff-meta-wrapper d-xl-flex justify-content-between align-items-center">
        <div class="staff-text-wrapper">
            <h3 class="staff-name-title">
                <a href="<?php echo get_the_permalink($id) ?>"
                class="color-inherit"
                aria-label="go to <?php echo $full_name ?>'s bio page"
                >    
                    <?php echo $full_name ?>
                </a></h3>
            <p><?php echo $position_display_name ?></p>
        </div>
        <div class="button-wrapper">
            <a href="<?php echo get_the_permalink($id) ?>" 
                aria-label="view <?php echo $full_name ?>'s profile page"
                class="pw-solid-button text-center <?php echo $section_background_color == 'primary' ? '' : 'pw-black-button' ?>">
                View <?php echo $first_name ?>'s Profile
            </a>
        </div>
    </div>  
</article>