
<?php
/**
 * The main template file
 * 
 * Template Name: Index
 *
 * @package fried_and_prejudice_Theme
 */

get_header(); ?>

<div id="primary" class="journal-content-area">
    <main id="main" class="journal-site-main" role="main">
	<header class="search-page-header">
                <h1 class="search-page-title">What Brings you Here?</h1>
            </header><!-- .page-header -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', '' ); ?>
			
		<?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>