<?php $copyright_text = get_field('copyright_text', 'options'); 
// Replace tokens with actual values
$year = date('Y');
$symbol = '&copy;'; // Use HTML entity for proper rendering
$site_name = get_site_option('blogname'); 
$processed_copyright = str_replace(
    ['[year]', '[copyright]'],
    [$year, $symbol],
    $copyright_text
); 
$attorney_disclaimer_text = get_field('attorney_disclaimer_text', 'options');

?>

<div class="copyright-wrapper">
    <div class="attorney-disclaimer-text">
        <p class="p-small-size"><?php echo $attorney_disclaimer_text ?></p>
    </div>


    <?php if(!empty($copyright_text)) { ?>
        <p class="mb-0 p-small-size">
            <?php echo $processed_copyright; ?>
        </p>
    <?php } else { ?>
        <p class="mb-0 p-small-size">
            <?php echo 'Copyright' ?>
            <?php echo $symbol ?> 
            <?php echo $year ?> 
            <?php echo $site_name.'. ' ?> 
            <?php echo 'All rights reserved.' ?>
        </p>
    <?php } ?>
</div>