<nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="footer Navigation">
    <?php 
    wp_nav_menu( array(
        'menu' => 'footer-menu',
        'container_aria_label' => 'footer menu',
        'menu_class' => 'list-unstyled ms-0',
        'container' => false,
        'theme_location' => 'Footer Menu', 
        'fallback_cb'     => false, // avoid dumping all pages without a menu
    ) );
    ?>
</nav>