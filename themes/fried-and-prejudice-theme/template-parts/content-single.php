<?php
/**
 * Template part for displaying single posts.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="single-entry-header">
		<?php if ( has_post_thumbnail() ) : ?>

			<?php the_post_thumbnail( 'large' ); ?>

		<?php endif; ?>

		<?php the_title( '<h1 class="single-entry-title">', '</h1>' ); ?>

        <div class="single-entry-meta">
			<?php fried_and_prejudice_posted_on(); ?> / <?php fried_and_prejudice_comment_count(); ?> / <?php fried_and_prejudice_posted_by(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="single-entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->

    <footer class="single-entry-footer">
		<?php fried_and_prejudice_entry_footer() ?>

        <div class="social-buttons">
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
       target="_blank"><button type="button" class="black-btn"><i class="fab fa-facebook"></i> Share</button></a>
       <a href="http://twitter.com/intent/tweet?text=Currently reading from friedandprejudice.com: '<?php the_title(); ?>'&amp;url=<?php the_permalink(); ?>&amp;hashtags=<?php echo esc_html( CFS()->get( 'twitter_hashtag' ) ); ?>"
       title="Click to share this post on Twitter" target="_blank"><button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button></a>
        </div> 

        <!-- <div class="social-buttons">
            <button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
            <button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
            <button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
        </div> -->
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
