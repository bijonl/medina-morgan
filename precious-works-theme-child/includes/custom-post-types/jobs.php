<?php
/**
 * Homepage Slides Custom Post Type
 *
 * This custom post type adds support for Homepage Slides. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_jobs() {
    $labels = apply_filters( 'jobs_post_type_labels', array(
        'name'               => 'Jobs',
        'singular_name'      => 'Job',
        'menu_name'          => 'Jobs',
        'add_new'            => 'Add New Job',
        'add_new_item'       => 'Add Job',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Job',
        'new_item'           => 'New Job',
        'view'               => 'View Job',
        'view_item'          => 'View Job',
        'search_items'       => 'Search Job',
        'not_found'          => 'No Job',
        'not_found_in_trash' => 'No Job Found in Trash',
        'parent'             => 'Parent Job',
    ));

    $args = apply_filters( 'jobs_post_type_args', array(
        'label'               => 'jobs',
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
        'supports'            => array( 'title'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'jobs', $args );
}
add_action( 'init', 'register_custom_post_type_jobs' );


// Run once for user permissions

add_action( 'admin_init', 'add_jobs_caps');
function add_jobs_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_jobs' );
        $role->add_cap( 'read_jobs' );
        $role->add_cap( 'delete_jobs' );
        $role->add_cap( 'edit_jobs' );
        $role->add_cap( 'edit_others_jobs' );
        $role->add_cap( 'publish_jobs' );
        $role->add_cap( 'read_private_jobs' );
    }
}