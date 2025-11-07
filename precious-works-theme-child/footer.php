<?php 
wp_footer(); 
$social_media_footer = get_field('social_media_footer', 'options');
$footer_logo = get_field('footer_logo', 'options');
?>

<footer class="site-footer" role="contentinfo">
    <div class="site-footer-content-container container">
        <div class="site-footer-content-row row align-items-center">
            <div class="footer-logo-col col-sm-6">
                <?php include locate_template('components/footer/footer-logo.php'); ?>
                <div class="footer-copyright-col">
                    <?php include locate_template('components/footer/copyright.php'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
