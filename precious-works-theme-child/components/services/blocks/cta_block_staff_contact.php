<?php 
$section_title = get_sub_field('section_title'); 
$staff_member = get_sub_field('staff_member');
$cta_content = get_sub_field('cta_content');
$second_column_text = get_sub_field('second_column_text');
$section_button = get_sub_field('section_button');

$text_col_width = 'col-lg-8 ms-auto' ?>

<section class="cta-staff-contact-section service-block">
    <div class="cta-staff-contact-container container">
        <div class="cta-staff-contact-row row align-items-center">
            <div class="single-staff-contact-col col-sm-3">
                <?php if($staff_member) {
                    foreach($staff_member as $id) {
                        include locate_template('components/variables/staff-variables.php');  ?>
                        <article class="staff-member-card">
                            <div class="staff-image-wrapper">
                                <?php echo wp_get_attachment_image($staff_member_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
                            </div>
                            <div class="staff-meta-wrapper d-xl-flex justify-content-between align-items-center">
                                <div class="staff-text-wrapper">
                                    <h3 class="staff-name-title"><?php echo $full_name ?></h3>
                                    <h4><?php echo $position_display_name ?></h4>
                                </div>
                            </div>  
                        </article>
                <?php 
                    }
                } ?>
            </div>  
            <div class="cta-staff-contact-col text-col <?php echo $text_col_width ?>">
                <?php if (!empty($section_title)) { ?>
                    <div class="title-wrapper">
                        <?php 
                            // Heading gets an ID so region can be linked to it
                            echo pw_seo_heading(
                                $section_title, 
                                $section_title_tag, 
                                'h2 mb-0 color-secondary', 
                                [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                            ); 
                        ?>
                    </div>
                <?php } ?>
                <div class="content-wrapper wysiwyg">
                    <?php echo $cta_content ?>
                </div>
                   <?php if($section_button) { ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
            <?php } ?>
            </div>
        </div>
    </div>  
</section>