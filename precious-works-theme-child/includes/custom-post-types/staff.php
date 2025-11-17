<?php
/**
 * Staff Custom Post Type
 *
 * This custom post type adds support for Staff. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_staff() {
    $labels = apply_filters( 'staff_post_type_labels', array(
        'name'               => 'Attorneys',
        'singular_name'      => 'Attorney',
        'menu_name'          => 'Attorneys',
        'add_new'            => 'Add New Attorney',
        'add_new_item'       => 'Add Attorney',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Attorney',
        'new_item'           => 'New Attorney',
        'view'               => 'View Attorney',
        'view_item'          => 'View Attorney',
        'search_items'       => 'Search Attorney',
        'not_found'          => 'No Attorney',
        'not_found_in_trash' => 'No Attorney Found in Trash',
        'parent'             => 'Parent Attorney',
    ));

    $args = apply_filters( 'staff_post_type_args', array(
        'label'               => 'staff',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-businessperson',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'staff', $args );
}
add_action( 'init', 'register_custom_post_type_staff' );


// Run once for user permissions

add_action( 'admin_init', 'add_staff_caps');
function add_staff_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_staff' );
        $role->add_cap( 'read_staff' );
        $role->add_cap( 'delete_staff' );
        $role->add_cap( 'edit_staff' );
        $role->add_cap( 'edit_others_staff' );
        $role->add_cap( 'publish_staff' );
        $role->add_cap( 'read_private_staff' );
    }
}