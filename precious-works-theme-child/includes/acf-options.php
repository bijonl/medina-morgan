<?php add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Navigation Settings',
        'menu_title'    => 'Header Settings',
        'parent_slug'   => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'parent_slug'   => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Blog Settings',
        'menu_title'    => 'Blog Settings',
        'parent_slug'   => 'edit.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Staff Settings',
        'menu_title'    => 'Staff Settings',
        'parent_slug'   => 'edit.php?post_type=staff',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Practice Area Settings',
        'menu_title'    => 'Practice Area Settings',
        'parent_slug'   => 'edit.php?post_type=services',
    ));
    acf_add_options_page(array(
        'page_title'    => 'Code Snippets',
        'menu_title'    => 'Code Snippets',
    ));
    acf_add_options_page(array(
        'page_title'    => 'Contact Information',
        'menu_title'    => 'Contact Information',
        'menu_slug'  => 'contact-info',
        'icon_url' => 'dashicons-phone',

    ));
  }
}); ?>