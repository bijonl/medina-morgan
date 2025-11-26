<?php 
$form_width = get_field('form_width') ? get_field('form_width') : 12 ; 
include(locate_template('blocks/partials/global-block-variables.php')); 

$form_id = get_field('form_id'); 
$text_content = get_field('text_content'); 
$image_background = get_field('image_background'); 
$style_css = ''; 

if($image_background) {
    $style_css = 'background-image: url('; 
    $style_css .= $image_background; 
    $style_css .= ')'; 
} ?>

<?php $has_content = !empty($form_id) || have_rows('text_content') || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?> style="<?php echo $style_css ?>">
    <?php if($image_background) { ?>
        <div class="overlay"></div>
    <?php } ?>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="form-block-container container">
        <div class="form-block-row row">
            <?php if(have_rows('text_content')) { ?>
                <div class="form-block-text-column <?php echo $image_background ? 'has-image-bg' : '' ?> col-sm-6 me-auto">
                    <div class="form-content-wrapper-inner">
                        <?php while(have_rows('text_content')) {
                                the_row(); 
                                $title = get_sub_field('title'); 
                                $content = get_sub_field('content'); ?>

                            <div class="form-content-wrapper wysiwyg">
                                <h3 class="h2 form-content-title"><?php echo $title ?></h3>
                                <p><?php echo $content ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
          
            <div class="form-block-col col-sm-5 ms-auto">
                <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
            </div>
        </div>
    </div>
</section>