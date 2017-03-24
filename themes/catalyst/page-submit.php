
<?php

/**
	* Template Name: Submit
	*
	* @package Catalyst Theme
	*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			   <?php get_template_part( 'template-parts/hero-banner'); ?>

			<div class="thankyou-container">
				<div class='top-message'>
					<h2 class="thanks">Thank You</h2>
					<p class="text">for your interest in</p>
				</div>
				<div class='logo'>
					<img src="wp-content/themes/catalyst/images/full-logo.svg">
				</div>
				<div class='bottom-message'>
					<p class="bottom-text">While waiting you can <span>sign up</span> or <span>follow</span> us.</p>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
