<?php
/**
 * The template for displaying about page.
 * Template Name: FAQ
 *
 * @package fried_and_prejudice_Theme
 */
get_header(); ?>

    <div class="faq-all-container">
        <div class="faq-header">

            <div class="header-container">
                <h1>Frequently Asked Questions</h1>
            </div>

        </div>

		<?php
		$args = array( 'post_type' => array( 'posts', 'faq' ) );
		query_posts( $args );
		while ( have_posts() ) : the_post(); ?>

            <div class="faq_container">
                

                <div class="faq">

					<?php the_title( '<h2 class="faq_question">', '</h2>' ); ?>

                    <div class="faq_answer_container">

						<?php the_content(); ?>

                    </div>

                </div>

            </div>

		<?php endwhile; ?>

    </div>

<?php get_footer(); ?>