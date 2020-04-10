<?php
/**
 * The template for displaying the about page
 *
 * Template Name: About-Page
 *
 * @package fried_and_prejudice_Theme
 */

get_header(); ?>

<div class="about-content-area">

	<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <div class="hero-image-header">
                    <h1>The Full Story</h1>
                </div>
				<?php the_content(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-## -->

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>
