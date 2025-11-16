<?php 
$section_title = get_sub_field('section_title'); 
$first_column_text = get_sub_field('first_column_text');
$second_column_text = get_sub_field('second_column_text');


$text_col_width = 'col-lg-6' ?>

<section class="two-column-text-section service-block <?php echo $padding_class ?>" id="<?php echo $anchor_link ?>">
    <div class="two-col-text-container container">
        <div class="two-col-text-row row">
            <div class="two-col-text-col text-col <?php echo $text_col_width ?>">
                <?php if (!empty($section_title)) { ?>
                    <div class="title-wrapper">
                        <?php 
                            // Heading gets an ID so region can be linked to it
                            echo pw_seo_heading(
                                $section_title, 
                                $section_title_tag, 
                                'h2 mb-0', 
                                [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                            ); 
                        ?>
                    </div>
                <?php } ?>
            
                <?php echo $first_column_text ?>
            </div>
            <div class="two-col-text-col text-col <?php echo $text_col_width ?>">
                <?php echo $second_column_text ?>
            </div>
        </div>
    </div>  
</section>