
<?php

/**
	* Template Name: ourStory
	*
	* @package Catalyst Theme
	*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
		<div class="herobanner">
		<div class="header-text">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="bannertext"><?php echo CFS()->get( 'bannertext' ); ?></p>
		</div>
		</div>
		</header>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
