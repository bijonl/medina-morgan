<?php 
$copyright_text = get_field('copyright_text', 'options'); 
$attorney_disclaimer_text = get_field('attorney_disclaimer_text', 'options');

// Replace tokens with actual values
$year = date('Y');
$symbol = '&copy;';
$site_name = get_site_option('blogname'); 

$processed_copyright = str_replace(
    ['[year]', '[copyright]'],
    [$year, $symbol],
    $copyright_text
); 
?>

<div class="copyright-wrapper" aria-label="Legal and copyright information">
    <?php if (!empty($attorney_disclaimer_text)) { ?>
        <div class="attorney-disclaimer-text">
            <p class="p-small-size">
                <?php echo $attorney_disclaimer_text; ?>
            </p>
        </div>
    <?php }; ?>

    <div class="copyright-text">
        <?php if (!empty($copyright_text)) { ?>
            <p class="mb-0 p-small-size">
                <?php echo wp_kses_post($processed_copyright); ?>
            </p>
        <?php } else { ?>
            <p class="mb-0 p-small-size">
                <span aria-hidden="true"><?php echo $symbol; ?></span>
                <span class="sr-only">Copyright</span>
                <?php echo esc_html($year . ' ' . $site_name . '. All rights reserved.'); ?>
            </p>
        <?php }; ?>
    </div>
</div>
