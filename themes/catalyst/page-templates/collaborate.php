<?php

/**
	* Template Name: Collaborate page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-image-banner">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="banner-text">
						<?php echo CFS()->get( 'bannertext' ); ?>
					</p>
				</header><!-- .entry-header -->
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'collaborate' ); ?>

			<?php endwhile; // End of the loop. ?>
			<img class="key-graphic-1" src="<?php echo get_template_directory_uri(); ?>/images/graphics/key.svg">
			<img class="key-graphic-2" src="<?php echo get_template_directory_uri(); ?>/images/graphics/key.svg">
			<img class="dollar-sign-graphic-1" src="<?php echo get_template_directory_uri(); ?>/images/graphics/dollar-sign.svg">
			<img class="dollar-sign-graphic-2" src="<?php echo get_template_directory_uri(); ?>/images/graphics/dollar-sign.svg">
			<div class="infographic-container">
				<img class="business-model-diagram" src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
			<a class="navigation-button" href="#">Contact Us</a>
				<div class="blue-background">
					<h2 class="subheader supporters-header">Our Supporters</h2>
				</div>
			<div class="supporters-logo-container">

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>