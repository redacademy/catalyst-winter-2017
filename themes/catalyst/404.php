<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Catalyst_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		</div>
			<section class="error-404 not-found">
				<div class="error-logo"></div>
				<h1 class="entry-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				<p class="banner-text"><?php echo esc_html( 'It looks like nothing was found at this location.' ); ?></p>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
