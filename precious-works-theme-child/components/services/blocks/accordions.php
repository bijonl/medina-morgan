<?php $accordion_section_layout = 'text'; 
$section_title = get_sub_field('section_title'); 
$container_class='container'; 
$accordion_width = 'col-sm-11';?>

<section class="accordion-section service-block <?php echo $padding_class ?>" id="<?php echo $anchor_link ?>">
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="accordions-container <?php echo $container_class ?>">
        <div class="accordions-row row">
            <div class="accordions-col <?php echo $accordion_width ?> mx-auto">
                <?php if(have_rows('accordions')) {
                    while(have_rows('accordions')) {
                        the_row(); 
                        $title = get_sub_field('title'); 
                        $content = get_sub_field('content', false, false); 
                        $accordion_id = 'accordion-'.get_row_index(); 
                        ?>
                        <?php include(locate_template('blocks/accordions/partials/single-accordion.php'));         
                    }
                } ?>
            </div>
        </div>
    </div>
</section>

