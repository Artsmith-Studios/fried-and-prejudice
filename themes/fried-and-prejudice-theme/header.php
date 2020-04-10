<?php
/**
 * The header for the fried_and_prejudice theme
 * 
 * Template Name: Header
 *
 * @package fried_and_prejudice_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1, maxium-scale=1" name="viewport">
    <meta property="og:image"
          content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fried_and_prejudice-logo-full.svg" alt="fried-prejudice-logo-full"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet"> <!--sanchez font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--roboto font link -->
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet"> <!--Allura font link --> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

    <header id="masthead" class="site-header" role="banner" style="z-index: 99;">

        <div class="site-branding">
            <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                         rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <a href="<?php echo home_url(); ?>">
                <div class="img-div"></div>
            </a>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

            <i class="fas fa-search"></i>
			<?php get_search_form(); ?>
        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">
