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

			<?php
				$mainCopy1 = CFS()->get( 'main_copy1' );
				$mainCopy2 = CFS()->get( 'main_copy2' );
				$mainCopy3 = CFS()->get( 'main_copy3' );
			?>

			<div class="main-copy-text">
				<p class="main-copy1"><?php if( !empty( $mainCopy1 ) ) { echo esc_html( $mainCopy1 ); } ?></p>
				<p class="main-copy2"><?php if( !empty( $mainCopy2 ) ) { echo esc_html( $mainCopy2 ); } ?></p>
				<p class="main-copy3"><?php if( !empty( $mainCopy3 ) ) { echo esc_html( $mainCopy3 ); } ?></p>
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
				<div class="blue-background-header">
					<h2 class="subheader-lrg">Investors</h2>
				</div>

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

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
