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

		<div class="blue-background-header">
			<h2 class="subheader-lrg">Non-Profit Partners &amp; Investors</h2>
		</div>

		<div class="content-container">
			<div class="main-copy-container">
			<p class="main-copy1"><?php echo esc_html(CFS()->get( 'main_copy1' ) ); ?></p>
			<p class="main-copy2"><?php echo esc_html(CFS()->get( 'main_copy2' ) ); ?></p>
			<p class="main-copy3"><?php echo esc_html(CFS()->get( 'main_copy3' ) ); ?></p>
			</div>
			<a class="navigation-button" href="<?php echo get_home_url(); ?>/our-story">Learn More</a>

			<div class="partners-information-container">
				<section class="non-profit-information partners-information">
					<h3 class="small-header">Non-Profit</h3>

					<?php $partners_copy1 = CFS() -> get('partners_copy1');
					if (!empty( $partners_copy1 )) : ?>
					<p class="partners-copy">
						<?php echo esc_html( $partners_copy1 ); ?>
					</p>
					<?php endif; ?>

					<?php $partners_copy2 = CFS() -> get('partners_copy2');
					if (!empty( $partners_copy2 )) : ?>
					<p class="partners-copy">
						<?php echo esc_html( $partners_copy2 ); ?>
					</p>
					<?php endif; ?>

					<a class="navigation-button" href="<?php echo get_home_url(); ?>/non-profit">Learn More</a>
				</section>

				<section class="investors-information partners-information">
					<h3 class="small-header">Investors</h3>

					<?php $investors_copy1 = CFS() -> get('investors_copy1');
					if (!empty( $investors_copy1 )) : ?>
					<p class="investors-copy">
						<?php echo esc_html( $investors_copy1 ); ?>
					</p>
					<?php endif; ?>

					<?php $investors_copy2 = CFS() -> get('investors_copy2');
					if (!empty( $investors_copy2 )) : ?>
					<p class="investors-copy">
						<?php echo esc_html( $investors_copy2 ); ?>
					</p>
					<?php endif; ?>

					<a class="navigation-button" href="<?php echo get_home_url(); ?>/investor">Learn More</a>
				</section>
			</div>
		</div>

		<!--<div class="infographic-container">
			<img class="business-model-diagram" src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>-->
		<a class="navigation-button" href="<?php echo get_home_url() ; ?>/contact">Contact Us</a>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
