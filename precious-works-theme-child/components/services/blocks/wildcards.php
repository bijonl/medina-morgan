<?php $wildcards = get_field('wildcards');
$cards_per_row = 4;
$wildcard_alignment = 'start'; 
 ?>

<?php $section_title = get_sub_field('section_title');
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
$wildcard_bottom_text = get_sub_field('wildcard_bottom_text'); 

?>

<section class="background-secondary service-block wildcards-section">
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="wildcards-container container">
        <div class="wildcards-row row row-cols-1 gx-5 row-cols-md-2 row-cols-lg-<?php echo $cards_per_row ?>" role="list">
                <?php if(have_rows('wildcards')) {
                    while(have_rows('wildcards')) {
                        the_row(); 
                        $title = get_sub_field('title'); 
                        $heading = get_sub_field('heading'); 
                        $icon = get_sub_field('icon'); 
                        $image_type = ''; 
                        $content = get_sub_field('content'); 
                        $link = 0; 
                        $wildcard_id = 'wildcard-'.get_row_index(); 
                        ?>
                        <div class="wildcards-col col-lg-3 mx-auto text-<?php echo $wildcard_alignment ?> u-focus-style" role="listitem">
                            <?php include(locate_template('blocks/wildcards/partials/single-wildcard.php'));  ?>
                        </div>     
                <?php   
                    }
                } ?>
            </div>
        </div>
        <?php if($wildcard_bottom_text) { ?>
            <div class="wildcard-footer-row row">
                <div class="wildcard-footer-col mx-auto text-center">
                    <p><?php echo $wildcard_bottom_text ?></p>
                </div>
            </div> 
        <?php } ?>
         
    </div>
</section>

