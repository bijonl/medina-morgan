<?php
/**
 * Homepage Slides Custom Post Type
 *
 * This custom post type adds support for Homepage Slides. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_homepage_slides() {
    $labels = apply_filters( 'homepage_slides_post_type_labels', array(
        'name'               => 'Homepage Slides',
        'singular_name'      => 'Homepage Slide',
        'menu_name'          => 'Homepage Slides',
        'add_new'            => 'Add New Homepage Slide',
        'add_new_item'       => 'Add Homepage Slide',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Homepage Slide',
        'new_item'           => 'New Homepage Slide',
        'view'               => 'View Homepage Slide',
        'view_item'          => 'View Homepage Slide',
        'search_items'       => 'Search Homepage Slide',
        'not_found'          => 'No Homepage Slide',
        'not_found_in_trash' => 'No Homepage Slide Found in Trash',
        'parent'             => 'Parent Homepage Slide',
    ));

    $args = apply_filters( 'homepage_slides_post_type_args', array(
        'label'               => 'homepage_slides',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'homepage_slides', $args );
}
add_action( 'init', 'register_custom_post_type_homepage_slides' );


// Run once for user permissions

add_action( 'admin_init', 'add_homepage_slides_caps');
function add_homepage_slides_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_homepage_slides' );
        $role->add_cap( 'read_homepage_slides' );
        $role->add_cap( 'delete_homepage_slides' );
        $role->add_cap( 'edit_homepage_slides' );
        $role->add_cap( 'edit_others_homepage_slides' );
        $role->add_cap( 'publish_homepage_slides' );
        $role->add_cap( 'read_private_homepage_slides' );
    }
}