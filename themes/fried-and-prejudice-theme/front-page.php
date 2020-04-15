<?php
/**
 * The template for displaying the front-page
 * 
 * Template Name: Front-Page
 *
 * @package fried_and_prejudice_Theme
 */

get_header(); ?>
<div class="front-page-container">
    <div class="front-page-hero hero-image-header">
		<div class="front-page-logo-description">
			<div class="logo-title">
				<img id="mobile-main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/logo-mobile.png" alt="fried-prejudice-logo-mobile">
				<img id="desktop-main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/logo-desktop.png" alt="fried-prejudice-logo-desktop">
				<div class="front-description">
					<h3 class="front-subtitle"> Restaurant Review. Easy Recipes. All Things Food.</h3> 
				</div>
			</div>
		</div>
	</div>

	<section class="full-story">
		<div class="full-story-two-column">
			<div class="full-story-description-half">
			<!--	<div class="flex-logo">
					<img class="orange-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/fried-prejudice-logo-orange.png" alt="fried-prejudice-logo-orange"/>
				</div> -->
			<h1 class="full-story-title">The Full Story</h1>
				<p class="summary">I love writing and food, so I put those together to come up with Fried & Prejudice. <br><br> Fried & Prejudice is my passion project, which has gained more traction since its humble beginings in the year 2016. Here, I featured unbiased restaurant reviews from resetaurants all over Asia (though I focus more on my home country, the Philippines) for the foodies, while I have some recipes for the home cooks and aspiring chefs. I even feature some goodies and snacks that I've tried out! <br><br> By all means, take a look around. I hope you enjoy the unqiue content I have to offer, and that it makes you love food just as much as I do.</p>
			</div>
			<div class="picture-half">
				<img class="full-story-picture" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stock photos/new.jpg" alt="contact-image"/>
			</div>
		</div>
	</section> <!--end of full story -->

	<section class="blogs">
		<div class="blogs-header">
		<!--	<img class="what-brings-you-here-fork" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-03.png" alt="utensils-fork"/> -->
			<h2 class="blogs-title">What Brings You Here?</h2>
		<!--	<img class="what-brings-you-here-spoon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-06.png" alt="utensils-spoon"/> -->

		</div>
		<div class="front-page-journal-container">
		
		<?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
			) );
			?>
			<div class="category-list">
			<?php
			foreach( $categories as $category ) {
				//$bgimage = get_stylesheet_directory_uri() . '/assets/images/stock photos/' . $category->name . '.jpg';
				echo '<div class="category-item" style="background-image: url(\'' . get_stylesheet_directory_uri() . '/assets/images/stock photos/' . $category->name . '.jpg\'); background-size: 100%; background-position: center; background-repeat: no-repeat; width: 300px; height: 300px;">';
				$category_link = sprintf( 
					'<a style="color: white !important;" href="%1$s" alt="%2$s">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( $category->name ) ),
					esc_html( $category->name )
				);
				echo '<p>' . sprintf( $category_link ) . '</p> ';
				echo '<p>' . sprintf( $category->description ) . '</p>';
				echo '</div>';
			} ?> <!-- end of foreach loop -->
			</div> <!-- category list -->

		</div> <!-- end of front-page-journal-container -->
	</section>
	
	<section class="ig-gallery">
		<div class="flex-ig-logo">
			<img class="ig-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/hey2.png" alt="instagram-logo"/>
		</div>
		<h2 class="gallery-title">Gallery</h2>
		<?php echo do_shortcode('[insta-gallery id="1"]')?>;
	</section>
	
	<section class="look-at-me-section">
		<div class="two-column">
			<div class="spoon-fork">
				<!-- <img class="look-at-me-utensils" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-01.png" alt="fork"/> -->
				<!-- <img class="look-at-me-utensils" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-04.png" alt="spoon"/> -->
			</div>
			<div class="look-at-me-social">
			<h1 class="look-at-me-title">Look At Me!</h1>
				<div class="social-row">
					<a class="social-logo" target='_blank' rel="noopener" href="https://www.facebook.com/friedandprejudice/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/facebook.png" alt="facebook-logo"/></a>
					<a class="social-logo" target='_blank' rel="noopener" href="https://www.instagram.com/friedandprejudice/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/instagram.png" alt="instagram-logo"/></a>
					<a class="social-logo" target='_blank' rel="noopener" href="https://www.zomato.com/friedandprejudice/foodjourney"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/zomato2.png" alt="zomato-logo"/></a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="faq-section">
		<div class="faq-content">
			<div class="faq-header">
				<!-- <img class="faq-fork" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-03.png" alt="fork" /> -->
				<h1 class="faq-title">Work With Me!</h1>
				<!-- <img class="faq-spoon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-06.png" alt="spoon" /> -->
			</div>
			<div class="button">
				<a style="text-decoration: none;" href="<?php echo get_permalink( get_page_by_path( 'faq' ) )?>">
				<button class="faq-button">FAQ</button>
				</a>
			</div>
		</div>
	</section> <!--end of work with me -->

	<section class="contact-form">
		<div class="flex-logo">
			<img class="orange-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/fried-prejudice-logo-orange.png" alt="fried-prejudice-logo-orange"/>
		</div>
		<h1 class="contact-form-title">Talk To Me!</h1>
		<div class="contact-two-column">
			<div class="contact-half">
				<?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]') ?>
			</div>
			<div class="picture-half">
				<img class="contact-picture" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stock photos/new.jpg" alt="contact-image"/>
			</div>
		</div>
	</section> <!--end of contact form -->


	<section class="affiliates">
	<h1 class="affiliates-title">Affiliates</h1>
		<div class="affiliate-list">
		<!--	<img class="affiliate-fork" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-03.png" alt="fork" /> -->
			<a class="affiliate-logo" rel="noopener" href="https://www.wheninmanila.com/author/diane-nicole-go/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/WIM-Logo.jpg" alt="when-in-manila-logo" /></a>
			<a class="affiliate-logo" rel="noopener" href="https://www.zomato.com/friedandprejudice" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/zomato.jpg" alt="zomato-logo"/></a>
			<a class="affiliate-logo" rel="noopener" href="https://www.instagram.com/welovetoeatph/?igshid=nl0b072pqair" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/we-love-to-eat.jpg" alt="we-love-to-eat-logo"/></a>
			<img class="affiliate-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/foodmnl_logo.png" alt="food-mnl-logo"/>
			<a class="affiliate-logo" rel="noopener" href="https://instagram.com/seemslegeat?igshid=1irnm6mnw104l" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/seema-legit.jpg" alt="seems-legit-logo"/></a>
			<a class="affiliate-logo" rel="noopener" href="https://whattoeatph.com/author/friedandprejudiceph/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/affiliates/wteph-official-logo.png" alt="what-to-eat-logo"/></a>
		<!--	<img class="affiliate-spoon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vectors/utensils-06.png" alt="spoon"/> -->
		</div>
	</section> <!--end of affiliates section -->

</div>

<?php get_footer(); ?>
