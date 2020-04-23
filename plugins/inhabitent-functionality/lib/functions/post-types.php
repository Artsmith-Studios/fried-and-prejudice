<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom 'Product' Post Type
// function inhabitent_register_products() {

// 	$labels = array(
// 		'name'                  => 'Recipes',
// 		'singular_name'         => 'Product',
// 		'menu_name'             => 'Recipes',
// 		'name_admin_bar'        => 'Recipes',
// 		'archives'              => 'Product Archives',
// 		'attributes'            => 'Product Attributes',
// 		'parent_item_colon'     => 'Parent Product:',
// 		'all_items'             => 'All Recipes',
// 		'add_new_item'          => 'Add New Recipe',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Product',
// 		'edit_item'             => 'Edit Recipe',
// 		'update_item'           => 'Update Recipe',
// 		'view_item'             => 'View Recipe',
// 		'view_items'            => 'View Recipes',
// 		'search_items'          => 'Search Recipe',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into recipe',
// 		'uploaded_to_this_item' => 'Uploaded to this recipe',
// 		'items_list'            => 'Recipes list',
// 		'items_list_navigation' => 'Recipes list navigation',
// 		'filter_items_list'     => 'Filter recipe list',
//   );
  
// 	$args = array(
// 		'label'                 => 'Product',
// 		'description'           => 'A post type for products in the shop.',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-book-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => 'products',
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 		'show_in_rest'          => true,
// 		// 'template_lock'					=> 'all',
// 		'template'							=> array(
// 			array(
// 				'core/paragraph', array(
// 					'placeholder' => 'Add the product description here.'
// 				)
// 			)
// 		)
// 	);
// 	register_post_type( 'product', $args );

// }
// add_action( 'init', 'inhabitent_register_products', 0 );

// Register 'FAQ' Post Type
function inhabitent_register_FAQs() {

	$labels = array(
		'name'                  => 'FAQs',
		'singular_name'         => 'FAQ',
		'menu_name'             => 'FAQs',
		'name_admin_bar'        => 'FAQs',
		'archives'              => 'FAQ Archives',
		'attributes'            => 'FAQ Attributes',
		'parent_item_colon'     => 'Parent FAQ:',
		'all_items'             => 'All FAQs',
		'add_new_item'          => 'Add New FAQ',
		'add_new'               => 'Add New',
		'new_item'              => 'New FAQ',
		'edit_item'             => 'Edit FAQ',
		'update_item'           => 'Update FAQ',
		'view_item'             => 'View FAQ',
		'view_items'            => 'View FAQs',
		'search_items'          => 'Search FAQs',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into FAQ',
		'uploaded_to_this_item' => 'Uploaded to this FAQ',
		'items_list'            => 'FAQs list',
		'items_list_navigation' => 'FAQs list navigation',
		'filter_items_list'     => 'Filter FAQs list',
  );
  
	$args = array(
		'label'                 => 'FAQ',
		'description'           => 'A post type for FAQs in the blog.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => 'FAQs',
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		// 'template_lock'					=> 'all',
		'template'							=> array(
			array(
				'core/paragraph', array(
					'placeholder' => 'Add the FAQ blog here.'
				)
			)
		)
	);
	register_post_type( 'FAQ', $args );

}
add_action( 'init', 'inhabitent_register_FAQs', 0 );
