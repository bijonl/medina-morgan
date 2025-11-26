<?php $site_logo = get_field('site_logo', 'options'); 
$mobile_site_logo = get_field('mobile_site_logo', 'options'); 
$image_alt = get_post_meta($site_logo, '_wp_attachment_image_alt', TRUE);
$site_name = get_site_option('blogname'); 
$header_button = get_field('header_button', 'options');

?>


<header id="site-header" class="site-header">
  <div class="site-header-container container">
    <div class="site-header-row row align-items-center">
      <!-- Shared Logo -->
      <div class="site-header-logo-col col-6 col-sm-4">
        <div class="site-brand-logo-wrapper d-flex">
          <?php include(locate_template('components/header-navigation/partials/header-logo.php')); ?>
        </div>
      </div>
      <!-- Desktop Menu -->
      <div class="header-menu-col col-sm-7 d-none d-lg-block">
        <?php include(locate_template('components/header-navigation/partials/header-menu.php')); ?>
      </div>
      <div class="header-menu-button-col col-sm-1 d-none d-lg-block">
          <a href="<?php echo $header_button['url'] ?>" 
          class="pw-solid-button"
          aria-label=<?php echo 'go to '. $header_button['url'] ?>
          target="<?php echo $header_button['target'] ? $header_button['target']  : '_self' ?>"
          >
          <?php echo $header_button['title'] ?>
        </a>
      </div>
      <!-- Mobile Hamburger & Slide-Out Menu -->
      <div class="site-header-mobile-button-col col-2 ms-auto d-lg-none">
        <div class="mobile-menu-wrapper">
          <div class="hamburger-menu d-flex justify-content-end">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <img width="55" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hamburger.png" alt="menu button"/>
            </label>
            <?php include(locate_template('components/header-navigation/partials/header-menu.php')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>