<?php
/**
 * Template part for displaying single products.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<div class="tax-grid-item">
    <div class="tax-thumbnail-container">
		<?php if ( has_post_thumbnail() ) : ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail( 'large' ); ?></a>

		<?php endif; ?>
    </div><!-- .product-thumbnail-container -->

    <div class="tax-entry-content">
		<h2 style="text-align: center;"><?php the_title(); ?></h2>
    </div><!-- .entry-content -->

</div> <!-- #post-## -->
