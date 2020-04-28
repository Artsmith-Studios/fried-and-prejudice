<?php
/* 
Template Name: Archives
*/
get_header(); ?>

<div id="primary" class="site-content">
<div id="content" class="archive-site-main" role="main">
 
<h1 class="entry-title">Category: <?php single_cat_title(); ?></h1>
<?php while ( have_posts() ) : the_post(); ?>
                 
 
<div class="entry-content">
<?php if ( has_post_thumbnail() ) : ?>

<?php the_post_thumbnail( 'large' ); ?>

<?php endif; ?>
<div class="front-page-entry-meta">
	<p><?php fried_and_prejudice_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
	<?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<?php the_excerpt() ?>
</div><!-- .entry-meta -->
<?php echo '<div class="journal-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</a></div>';?>

</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>

	<div class="archive-footer">
		<p class="cat-title"><strong>Categories:</strong></p>
		<ul class="bycategories">
		<?php wp_list_categories('title_li='); ?>
		</ul>
		<div class="clear"></div>
		<?php wp_pagenavi(); ?>
	</div>
 
</div><!-- #content -->
</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>