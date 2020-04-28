<?php
/**
 * Template part for displaying posts.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<div class="front-page-journal-container">
			<?php
			$journal_args = array(
				'post_type'      => 'post',
				'posts_per_page' => '5',
				'ignore_sticky_posts' => 1,//this is the one :)
				'paged' => $paged,   
			);

			$journal_posts = get_posts( $journal_args );
			?>

			<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( has_post_thumbnail() ) : ?>

						<?php the_post_thumbnail( 'large' ); ?>

					<?php endif; ?>

					<?php if ( 'post' === get_post_type() ) : ?>

						<div class="front-page-entry-meta">
							<p><?php fried_and_prejudice_posted_on(); ?>
								/ <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
							<?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
							<?php the_excerpt() ?>
						</div><!-- .entry-meta -->
						<?php
						echo '<div class="journal-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</a></div>';
						?>

					<?php endif; ?>

				</article><!-- #post-## -->

			<?php endforeach; ?>
	
		</div> <!-- end of front-page-journal-container -->
