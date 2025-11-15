<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/staff-variables.php'); ?>



<section class="single-staff-section" id="staff-content">
    <?php include locate_template('components/staff/staff-hero.php'); ?>
    <?php include locate_template('components/staff/staff-content.php'); ?>
    <?php include locate_template('components/staff/staff-posts.php'); ?>
   
</section>




<?php echo get_footer(); ?>