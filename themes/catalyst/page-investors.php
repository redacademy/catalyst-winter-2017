<?php

/**
	* Template Name: Non-profits page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/hero-banner'); ?>
		<div class="investor-p"><?php echo wp_kses_post( CFS()->get( 'main_copy' ) ); ?></div>

		<div class="blue-background-header">
			<h2 class="subheader-lrg"><?php echo esc_html(CFS()->get( 'second_title' ) ); ?></h2>
		</div>
		<div class="investor-list"><?php echo wp_kses_post( CFS()->get( 'second_copy' ) ); ?></div>

		<div class="blue-background-header">
			<h2 class="subheader-lrg"><?php echo esc_html(CFS()->get( 'third_title' ) ); ?></h2>
		</div>

		<?php $third_copy = wp_kses_post( CFS()->get( 'third_copy' ) );
		if( !empty( $third_copy ) ) : ?>
			<div class="investor-p">
				<?php echo $third_copy; ?>
				<a class="navigation-button" href="<?php echo get_home_url(); ?>/contact">
					<?php echo esc_html( CFS()->get( 'button_text' ) ); ?>
				</a>
			</div>
		<?php endif; ?>

		<?php $supporters = CFS()->get('supporters_activate');
		if ($supporters === 1) :
			get_template_part( 'template-parts/content', 'sponsors');
		endif; ?>

		<?php $activate_carousel = CFS()->get('activate_testimonials');
		if ($activate_carousel === 1) : ?>
			<section class="quote-carousel">
					<?php $quotes_gallery = CFS()->get('quotes_gallery');
					foreach ($quotes_gallery as $quote) : ?>
							<div class="quotes">
									<div class="q-text-container">
											<div class="left-quotation-mark"></div>
											<?php echo '<p class="quote-text"> '.$quote['quote_text'].'</p>'; ?>
											<div class="right-quotation-mark"></div>
									</div>
									<?php echo '<p class="person"> '.$quote['name'].'</p>';
									echo '<p class="line"> '.$quote['role'].'</p>';
									echo '<p class="line"> '.$quote['organization'].'</p>'; ?>
							</div>
					<?php endforeach; wp_reset_postdata(); ?>
			</section>
		<?php	endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
