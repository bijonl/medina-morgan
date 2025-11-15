<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/staff-variables.php'); ?>



<section class="single-staff-section" id="staff-content">
    <?php include locate_template('components/staff/staff-hero.php'); ?>
    <div class="single-staff-container container">
      <div class="single-staff-row row">
            <?php include locate_template('components/staff/staff-content.php'); ?>
      </div>
    </div>
</section>




<?php echo get_footer(); ?>