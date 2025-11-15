<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$content = get_field('content');
?>

<?php $has_content = !empty($image) || !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$text_col_width = 'col-lg-12' ?>

<section <?php echo pw_block_section_classes($block) ?>>
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
            
                <?php echo $section_subtitle ?>
            
                <?php echo $content ?>
            </div>
        </div>
    </div>  
</section>