<?php

/**
	* Template Name: Collaborate page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<?php get_template_part( 'template-parts/hero-banner'); ?>

		<section class="main-copy-container">
			<div class="blue-background-header">
				<h2 class="subheader-lrg">Non-Profit Partners &amp; Investors</h2>
			</div>

			<div class="main-copy-text">
				<?php $mainCopy1 = CFS()->get( 'main_copy1' );
				if( !empty( $mainCopy1 ) ) : ?>
					<?php echo $mainCopy1; ?>
				<?php endif; ?>
			</div>

			<div class="infographic-container">
				<img class="business-model-diagram" src="<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>">
			</div>
		</section>

		<div class="partners-information-container">
			<section class="non-profit-information partners-information">
				<div class="blue-background-header">
					<h2 class="subheader-lrg">Non-Profit Partners</h2>
				</div>

				<?php $non_profit_copy1 = CFS() -> get('non_profit_copy1');
				if (!empty( $non_profit_copy1 )) : ?>
					<?php echo $non_profit_copy1; ?>
				<?php endif; ?>

				<a class="navigation-button" href="<?php echo get_home_url(); ?>/non-profit">Learn More</a>
			</section>

			<section class="investors-information partners-information">
				<div class="blue-background-header">
					<h2 class="subheader-lrg">Investors</h2>
				</div>

				<?php $investors_copy1 = CFS() -> get('investors_copy1');
				if (!empty( $investors_copy1 )) : ?>
					<?php echo $investors_copy1; ?>
				<?php endif; ?>

				<a class="navigation-button" href="<?php echo get_home_url(); ?>/investor">Learn More</a>

			</section>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
