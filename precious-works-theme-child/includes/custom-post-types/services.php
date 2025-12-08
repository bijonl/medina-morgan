<?php
/**
 * Services Custom Post Type
 *
 * This custom post type adds support for Services. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_services() {
    $labels = apply_filters( 'services_post_type_labels', array(
        'name'               => 'Practice Areas',
        'singular_name'      => 'Practice Area',
        'menu_name'          => 'Practice Areas',
        'add_new'            => 'Add New SPractice Area',
        'add_new_item'       => 'Add Practice Area',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Practice Area',
        'new_item'           => 'New Practice Area',
        'view'               => 'View Practice Area',
        'view_item'          => 'View Practice Area',
        'search_items'       => 'Search Practice Area',
        'not_found'          => 'No Practice Area',
        'not_found_in_trash' => 'No Practice Area Found in Trash',
        'parent'             => 'Parent Practice Area',
    ));

    $args = apply_filters( 'services_post_type_args', array(
        'label'               => 'services',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'rewrite' => array(
            'slug' => 'practice-areas', // ← new slug here
            'with_front' => false 
        ),
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-bank',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail', 'page-attributes'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'services', $args );
}
add_action( 'init', 'register_custom_post_type_services' );


// Run once for user permissions

add_action( 'admin_init', 'add_services_caps');
function add_services_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_services' );
        $role->add_cap( 'read_services' );
        $role->add_cap( 'delete_services' );
        $role->add_cap( 'edit_services' );
        $role->add_cap( 'edit_others_services' );
        $role->add_cap( 'publish_services' );
        $role->add_cap( 'read_private_services' );
    }
}