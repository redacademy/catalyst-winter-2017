
<?php

/**
	* Template Name: Submit
	*
	* @package Catalyst Theme
	*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-image-banner">
				<header class="entry-title">
					<p class="banner-text">
						<?php echo CFS()->get( 'bannertext' ); ?>
					</p>
				</header><!-- .entry-header -->
			</div>
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
