
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
     <div class="front-page-journal-container">
            <?php
                $btpgid=get_queried_object_id();
                $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array( 
                'posts_per_page' => 5, 
                'category_name' => $btmetanm,
                'paged' => $paged,
                'post_type' => 'post' );
            $journal_posts = new WP_Query( $args );

    if ( $journal_posts->have_posts() ) :
        while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>

                    <?php the_post_thumbnail( 'large' ); ?>

                <?php endif; ?>

                <?php if ( 'post' === get_post_type() ) : ?>

                    <div class="front-page-entry-meta">
                        <?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                        <?php the_excerpt() ?>
                        <p><?php fried_and_prejudice_posted_on(); ?>
                            / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                    </div><!-- .entry-meta -->
                    <?php
                    echo '<div class="journal-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</a></div>';
                    ?>

                <?php endif; ?>

            </article><!-- #post-## -->

      <?php   endwhile;  endif;?>
	
        </div> <!-- end of front-page-journal-container -->
        <div class="index-footer">
        <p class="cat-title"><strong>Categories:</strong></p>
        <ul class="bycategories">
        <?php wp_list_categories('title_li='); ?>
        </ul>
        <div class="clear"></div>

        <?php wp_pagenavi( array( 'query' => $journal_posts ) ); ?>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>