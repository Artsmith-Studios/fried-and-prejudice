<?php
/**
 * The sidebar containing the main widget area
 * 
 * Template Name: Sidebar
 *
 * @package fried_and_prejudice_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
