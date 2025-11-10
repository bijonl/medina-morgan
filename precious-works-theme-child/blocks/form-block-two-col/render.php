<?php 
$form_width = get_field('form_width') ? get_field('form_width') : 12 ; 
include(locate_template('blocks/partials/global-block-variables.php')); 

$form_id = get_field('form_id'); 
$text_content = get_field('text_content'); 
?>

<?php $has_content = !empty($form_id) || have_rows('text_content') || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="form-block-container container">
        <div class="form-block-row row align-items-center">
            <?php if(have_rows('text_content')) { ?>
                <div class="form-block-text-column col-sm-6 me-auto">
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
            <?php } ?>
          
            <div class="form-block-col col-sm-5 ms-auto">
                <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
            </div>
        </div>
    </div>
</section>