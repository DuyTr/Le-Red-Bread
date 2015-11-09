<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function lrb_create_product() {

	$labels = array(
		'name'                => 'products',
		'singular_name'       => 'product',
		'menu_name'           => 'Product',
		'name_admin_bar'      => 'Product',
		'parent_item_colon'   => '',
		'all_items'           => 'All Products',
		'add_new_item'        => 'Add New Product',
		'add_new'             => 'Add New Product',
		'new_item'            => 'New Product',
		'edit_item'           => 'Edit Product',
		'update_item'         => 'Update Product',
		'view_item'           => 'View Product',
		'search_items'        => 'Search Product',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'description'         => 'Products of Le Red Bread',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'products',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'lrb_create_product', 0 );

function lrb_create_testimonial() {

	$labels = array(
		'name'                => 'Testimonials',
		'singular_name'       => 'Testimonial',
		'menu_name'           => 'Testimonial',
		'name_admin_bar'      => 'Testimonial',
		'parent_item_colon'   => '',
		'all_items'           => 'All Testimonials',
		'add_new_item'        => 'Add New Testimonial',
		'add_new'             => 'Add New Testimonial',
		'new_item'            => 'New Testimonial',
		'edit_item'           => 'Edit Testimonial',
		'update_item'         => 'Update Testimonial',
		'view_item'           => 'View Testimonial',
		'search_items'        => 'Search Testimonial',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'description'         => 'Testimonials of Le Red Bread',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-comments',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'testimonials',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'lrb_create_testimonial', 1 );
