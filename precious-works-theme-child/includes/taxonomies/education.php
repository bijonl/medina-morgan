<?php function mm_register_education_taxonomy() {
    $labels = array(
        'name'              => _x( 'Education', 'taxonomy general name', 'medina-morgan' ),
        'singular_name'     => _x( 'Education', 'taxonomy singular name', 'medina-morgan' ),
        'search_items'      => __( 'Search Education', 'medina-morgan' ),
        'all_items'         => __( 'All Education', 'medina-morgan' ),
        'parent_item'       => __( 'Parent Education', 'medina-morgan' ),
        'parent_item_colon' => __( 'Parent Education:', 'medina-morgan' ),
        'edit_item'         => __( 'Edit Education', 'medina-morgan' ),
        'update_item'       => __( 'Update Education', 'medina-morgan' ),
        'add_new_item'      => __( 'Add New Education', 'medina-morgan' ),
        'new_item_name'     => __( 'New Education Name', 'medina-morgan' ),
        'menu_name'         => __( 'Education', 'medina-morgan' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => false,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'education' ),
    );

    register_taxonomy( 'education', array( 'staff' ), $args );
}
add_action( 'init', 'mm_register_education_taxonomy' ); ?>
