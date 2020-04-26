<?php
/* 
Template Name: Archives
*/
get_header(); ?>

<div id="primary" class="site-content">
<div id="content" class="archive-site-main" role="main">
 
<?php while ( have_posts() ) : the_post(); ?>
                 
<h1 class="entry-title"><?php the_title(); ?></h1>
 
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
 
<p><strong>Categories:</strong></p>
<ul class="bycategories">
<?php wp_list_categories('title_li='); ?>
</ul>
<div class="clear"></div>
 
 
 
</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>