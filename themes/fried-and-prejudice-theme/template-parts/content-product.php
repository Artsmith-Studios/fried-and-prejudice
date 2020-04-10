<?php
/**
 * Template part for displaying single posts.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<div class="product-grid-item">
    <div class="product-thumbnail-container">
		<?php if ( has_post_thumbnail() ) : ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail( 'large' ); ?></a>

		<?php endif; ?>
    </div><!-- .product-thumbnail-container -->

    <div class="product-entry-content">
		<h2 style="text-align: center;"><?php the_title(); ?></h2>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->
</div> <!-- #post-## -->
