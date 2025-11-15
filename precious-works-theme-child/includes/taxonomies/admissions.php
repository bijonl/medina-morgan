<?php function register_admission_taxonomy() {
    $labels = array(
        'name'              => _x( 'Admissions', 'taxonomy general name', 'medina-morgan' ),
        'singular_name'     => _x( 'Admission', 'taxonomy singular name', 'medina-morgan' ),
        'search_items'      => __( 'Search Admission', 'medina-morgan' ),
        'all_items'         => __( 'All Admission', 'medina-morgan' ),
        'parent_item'       => __( 'Parent Admission', 'medina-morgan' ),
        'parent_item_colon' => __( 'Parent Admission:', 'medina-morgan' ),
        'edit_item'         => __( 'Edit Admission', 'medina-morgan' ),
        'update_item'       => __( 'Update Admission', 'medina-morgan' ),
        'add_new_item'      => __( 'Add New Admission', 'medina-morgan' ),
        'new_item_name'     => __( 'New Admission Name', 'medina-morgan' ),
        'menu_name'         => __( 'Admissions', 'medina-morgan' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false,
        'meta_box_cb'       => false,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'admissions' ),
    );

    register_taxonomy( 'admissions', array( 'staff' ), $args );
}
add_action( 'init', 'register_admission_taxonomy' ); ?>
