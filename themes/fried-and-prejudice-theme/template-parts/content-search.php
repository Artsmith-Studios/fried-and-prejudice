<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="search-entry-header">
    <div class="product-thumbnail-container">
		<?php if ( has_post_thumbnail() ) : ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail( 'large' ); ?></a>

		<?php endif; ?>
    </div><!-- .product-thumbnail-container -->
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

            <div class="search-entry-meta">
				<?php fried_and_prejudice_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                / <?php fried_and_prejudice_posted_by(); ?>
            </div><!-- .entry-meta -->

		<?php endif; ?>

    </header><!-- .entry-header -->

    <div class="search-entry-summary">
		<?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->
