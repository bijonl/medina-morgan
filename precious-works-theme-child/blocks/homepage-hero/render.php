<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$homepage_slides = get_field('homepage_slides'); 

?>

<?php 

$has_content = have_rows('homepage_slides'); 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
}

?>

 <?php foreach($homepage_slides as $id) { 
        
        $section_title = get_field('display_title', $id); 
        $section_title_tag = 'h1'; 
        $section_subtitle = get_field('subtitle', $id); 
        $section_button = get_field('button', $id); 
        $image_url = get_the_post_thumbnail_url($id); 
        $has_title_area = $section_title || $section_subtitle; 
        ?>

        
<section <?php echo pw_block_section_classes($block) ?> style="background-image: url(<?php echo $image_url ?>)">
        <div class="homepage-hero-container container h-100">
            <div class="homepage-hero-row row align-items-center h-100">
                <div class="homepage-hero-col col-12">
                    <div class="homepage-hero-content-wrapper position-relative text-center">
                        <div class="overlay image-overlay"></div>
                        <?php $display_title = 'h1'; ?>
                        <?php 
                        include(locate_template('blocks/partials/title-area.php')); 
                        ?>
                        <?php 
                        include(locate_template('blocks/partials/button-area.php')); 
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>



  
</section>
    <?php } ?>