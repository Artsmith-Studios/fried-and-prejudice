<?php
/**
 * The template for displaying all single journal posts
 * 
 * Template Name: Single-View
 *
 * @package fried_and_prejudice_Theme
 */

get_header(); ?>

<div id="primary" class="single-content-area">
    <main id="main" class="single-site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="navigation-links">
            <div class="left"><?php previous_post_link( '%link', '<i class="fas fa-arrow-left"></i>' ); ?></div>
            <div class="middle"><a href="<?php echo get_permalink( get_page_by_title( 'What Brings You Here?' ) ) ?>"><span
                            class="break">Back to </span>blogs</a></div>
            <div class="right"><?php next_post_link( '%link', '<i class="fas fa-arrow-right"></i>' ); ?></div>
        </div><!-- end of navigation-links -->

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // End of the loop. ?>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
