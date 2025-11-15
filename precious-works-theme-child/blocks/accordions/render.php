<?php $accordions = get_field('accordions');
include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = have_rows('accordions') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$text_column_content = get_field('text_column_content');
$text_column_title = get_field('text_column_title');
$accordion_section_layout = get_field('accordion_section_layout');
$image_column_content = get_field('image_column_content');

$container_class='container'; 
$accordion_width = 'col-sm-11';

if($accordion_section_layout == 'image') {
    $accordion_width = ''; 
    $container_class = 'full-bleed-container'; 
}

if($accordion_section_layout == 'text') {
    $accordion_width = 'col-sm-7 ms-auto';
    $container_class = 'container'; 
}



?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="accordions-container <?php echo $container_class ?>">
        <div class="accordions-row row">
            <?php if($accordion_section_layout == 'text') { ?>
                <div class="accordion-col-content col-sm-5 text-col">
                    <?php echo $text_column_content ?>
                </div>
            <?php } else if($accordion_section_layout == 'image') { ?>
                <div class="accordion-col-content image-col">
                    <?php echo wp_get_attachment_image($image_column_content['ID'], 'full', false, array('class' => 'w-100 h-auto')) ?>
                </div>
            <?php } ?> 
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
        <div class="button-row row">
            <div class="button-col <?php echo $accordion_width ?> mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>

