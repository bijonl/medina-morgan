<article class="staff-member-card">
    <div class="staff-image-wrapper">
        <?php echo wp_get_attachment_image($staff_member_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
    </div>
    <div class="staff-meta-wrapper d-xl-flex justify-content-between align-items-center">
        <div class="staff-text-wrapper">
            <h3 class="staff-name-title"><?php echo $full_name ?></h3>
            <p><?php echo $position_display_name ?></p>
        </div>
        <div class="button-wrapper">
            <a href="mailto:<?php echo $email_address ?>" 
            class="pw-solid-button text-center <?php echo $section_background_color == 'primary' ? '' : 'pw-black-button' ?>">Email <?php echo $first_name ?></a>
        </div>
    </div>  
</article>