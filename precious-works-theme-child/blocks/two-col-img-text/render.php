<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$image = get_field('image'); 
$content = get_field('content');
$column_order = get_field('column_order');
$image_style = get_field('image_style'); 
$is_full = $image_style === 'full'; 
?>

<?php $has_content = !empty($image) || !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$image_col_width = !$is_full ? 'col-lg-6' : ''; 
$text_col_width = !$is_full ? 'col-lg-6' : ''?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="two-col-container <?php echo !$is_full ? 'container': 'full-bleed-container container-md' ?>">
        <div class="two-col-row <?php echo !$is_full ? 'row align-items-center': 'full-bleed-row d-lg-flex' ?> ">
            <div class="two-col-col image-col <?php echo $image_col_width ?> <?php echo $column_order ?>">
                <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto')) ?>
            </div>
            <div class="two-col-col text-col <?php echo $text_col_width ?>">
                <?php if (!empty($section_title)) { ?>
                    <div class="title-wrapper">
                        <?php 
                            // Heading gets an ID so region can be linked to it
                            echo pw_seo_heading(
                                $section_title, 
                                $section_title_tag, 
                                'h1', 
                                [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                            ); 
                        ?>
                    </div>
                <?php } ?>
            
                <?php echo $section_subtitle ?>
            
                <?php echo $content ?>
            </div>
        </div>
    </div>  
</section>