<?php
/**
 * Template part for displaying single products.
 *
 * @package fried_and_prejudice_Theme
 */

?>

<div class="product-single-item">
	<?php if ( has_post_thumbnail() ) : ?>

        <div class="product-single-image">

            <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail( 'large' ); ?></a>

        </div><!-- .product-thumbnail-container -->
	<?php endif; ?>

    <div class="product-single-content">

        <h1><?php the_title(); ?></h1>
        <p class="product-single-price"><?php echo CFS()->get( 'price' ); ?></p>
        <p><?php the_content() ?></p>

        <div class="social-buttons">
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
       target="_blank"><button type="button" class="black-btn"><i class="fab fa-facebook"></i> Share</button></a>
       <a href="http://twitter.com/intent/tweet?text=Currently reading from friedandprejudice.com: '<?php the_title(); ?>'&amp;url=<?php the_permalink(); ?>&amp;hashtags=<?php echo esc_html( CFS()->get( 'twitter_hashtag' ) ); ?>"
       title="Click to share this post on Twitter" target="_blank"><button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button></a>
        </div> 

    </div><!-- .entry-content -->
</div> <!-- #post-## -->
