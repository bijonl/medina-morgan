<?php echo get_header(); 
$id = get_the_id(); ?>








<main class="single-service" id="service-content">
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
    } ?>
    <nav class="single-service-footer-container container" aria-label="Service page navigation">
        <div class="single-service-footer-row row justify-content-between">
            <div class="single-service-footer-col col">
            <a href="/practices" class="single-service-nav-link">
                Back to all practices
            </a>
            </div>
            <div class="single-service-footer-col col text-end">
                <?php include locate_template('components/services/next-service-query.php'); ?>
            </div>
        </div>
    </nav>



</main>

<?php echo get_footer(); ?>