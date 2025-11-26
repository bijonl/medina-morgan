<?php 
wp_footer(); 

$social_media_footer = get_field('social_media_footer', 'options');
$footer_logo = get_field('footer_logo', 'options');
?>

<footer class="site-footer" role="contentinfo" aria-label="Website footer">
    <div class="site-footer-content-container container">
        <div class="site-footer-logo-row">
            <div class="footer-content-col footer-logo-col col-sm-6">
                <?php include locate_template('components/footer/footer-logo.php'); ?>
            </div>
        </div>
        <div class="site-footer-content-row row">
            <div class="footer-content-col footer-copyright-col col-sm-12 col-lg-6">
                <?php include locate_template('components/footer/copyright.php'); ?>
            </div>
            <div class="footer-content-col footer-contact-col col-sm-6 col-lg-2 justify-center-end ms-auto">
                <?php include locate_template('components/footer/contact-info.php'); ?>
            </div>
            <div class="footer-content-col footer-menu-col  col-sm-6 col-lg-2 ms-auto justify-content-start justify-content-sm-end text-sm-end">
                <?php include locate_template('components/footer/footer-menu.php'); ?>
            </div>
        </div>
    </div>
</footer>