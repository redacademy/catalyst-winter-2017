<?php

/**
	* Template Name: Contact
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php get_template_part( 'template-parts/hero-banner'); ?>

			<div class="renters-redirect">

				<div class="intro-copy">
					<?php $intro_copy = esc_html( CFS()->get('contact_main_copy') ); ?>
					<?php if( !empty( $intro_copy ) ) : ?>
						<p><?php echo $intro_copy; ?></p>
					<?php endif; ?>

					<?php $renter_copy = wp_kses_post( CFS()->get('contact_renters') ); ?>
					<?php if( !empty( $renter_copy ) ) : ?>
						<p><?php echo $renter_copy; ?></p>
					<?php endif; ?>
				</div>

			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="entry-content">
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
	            </div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
