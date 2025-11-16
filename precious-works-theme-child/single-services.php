<?php echo get_header(); ?>
<?php $id = get_the_id(); ?>



<section class="single-service" id="service-content">
    <?php include locate_template('components/services/service-hero.php');

    // Check value exists.
    if( have_rows('service_blocks') ) {

        // Loop through rows.
        while ( have_rows('service_blocks') ) {
            the_row();
            if( get_row_layout() == 'two_column_text_text' ) {
                include locate_template('components/services/blocks/two-col-text-block.php');
            } elseif( get_row_layout() == 'two_column_image_text' ) {
                include locate_template('components/services/blocks/two-col-img-text.php');
            } elseif( get_row_layout() == 'wildcards' ) {
                include locate_template('components/services/blocks/wildcards.php');
            } elseif( get_row_layout() == 'posts_block' ) {
                include locate_template('components/services/blocks/posts-block.php');
            } elseif( get_row_layout() == 'cta_block_staff_contact' ) {
                include locate_template('components/services/blocks/cta_block_staff_contact.php');
            }
        } 
    } 

?>
   
</section>




<?php echo get_footer(); ?>