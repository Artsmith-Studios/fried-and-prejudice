<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom 'product Type' Taxonomy
// function inhabitent_register_product_type() {

// 	$labels = array(
// 		'name'                       => 'Recipe Types',
// 		'singular_name'              => 'Recipe Type',
// 		'menu_name'                  => 'Recipe Type',
// 		'all_items'                  => 'All Recipe Type',
// 		'parent_item'                => 'Parent Recipe Type',
// 		'parent_item_colon'          => 'Parent Recipe Type:',
// 		'new_item_name'              => 'New Recipe Type Name',
// 		'add_new_item'               => 'Add New Recipe Type',
// 		'edit_item'                  => 'Edit Recipe Type',
// 		'update_item'                => 'Update Recipe Type',
// 		'view_item'                  => 'View Recipe Type',
// 		'separate_items_with_commas' => 'Separate Recipe types with commas',
// 		'add_or_remove_items'        => 'Add or remove Recipe types',
// 		'choose_from_most_used'      => 'Choose from the most used',
// 		'popular_items'              => 'Popular Recipe Types',
// 		'search_items'               => 'Search Recipe Types',
// 		'not_found'                  => 'Not Found',
// 		'no_terms'                   => 'No Recipe types',
// 		'items_list'                 => 'Recipe Types list',
// 		'items_list_navigation'      => 'Recipe Types list navigation',
// 	);
// 	$rewrite = array(
// 		'slug'                       => 'product-type',
// 		'with_front'                 => true,
// 		'hierarchical'               => true,
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 		'rewrite'                    => $rewrite,
// 		'show_in_rest'               => true,
// 	);
// 	register_taxonomy( 'product_type', array( 'product' ), $args );

// }
// add_action( 'init', 'inhabitent_register_product_type', 0 );
