<?php 

include(locate_template('components/variables/post-variables.php')); 

?>

<div class="single-post-tile d-flex">
    <div class="single-post-image-wrapper w-50" style="background-image: url(<?php echo wp_get_attachment_image_url($featured_image, 'full') ?>)">
    </div>
    <div class="single-post-title-wrapper align-items-center d-flex flex-column w-50 justify-content-center">
        <h4 class="mb-0 h3 post-title"><?php echo $title ?></h4>
        <p>Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed  conseqt, leo eget bibendum sodales, augue velit cursus nunc,</p>
    </div>
</div>

<script>


</script>