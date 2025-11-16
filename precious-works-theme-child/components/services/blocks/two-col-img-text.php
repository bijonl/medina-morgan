<?php 

$section_title = get_sub_field('section_title'); 
$image = get_sub_field('image'); 
$content = get_sub_field('content');
$column_order = get_sub_field('column_order');
$image_style = 'full'; 
$is_full = $image_style === 'full'; 


$image_col_width = !$is_full ? 'col-lg-6' : ''; 
$text_col_width = !$is_full ? 'col-lg-6' : ''?>

<section class="two-column-image-and-text-section service-block <?php echo $padding_class ?>" id="<?php echo $anchor_link ?>">
    <div class="two-col-container <?php echo !$is_full ? 'container': 'full-bleed-container' ?>">
        <div class="two-col-row <?php echo !$is_full ? 'row align-items-center': 'full-bleed-row d-lg-flex align-items-center' ?> ">
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
                                'h2 mb-0 color-secondary', 
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