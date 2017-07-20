<?php
/**
 * The template for displaying all pages.
 *
 * @package Catalyst_Theme
 */

get_header(); ?>
	<div class="hero-image-banner image-credit-container">
		<p class='image-credits'>Image: <?php echo CFS()->get('hero_image_credits'); ?></p>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
