<?php $staff_members = get_field('staff_members');
include(locate_template('blocks/partials/global-block-variables.php')); 

$has_content = have_rows('staff_members') || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="staff-container container">
        <div class="staff-row row justify-content-between">
             <?php foreach ($staff_members as $id) { ?>
            <div class="staff-col col-md-6 col-lg-5">
                <?php include(locate_template('components/variables/staff-variables.php')); ?>
                <?php include(locate_template('blocks/staff/partials/single-staff.php')); ?>       
            </div>
            <?php }; ?>
        </div> 
    </div>
</section>

