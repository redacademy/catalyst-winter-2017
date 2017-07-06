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

		<div class="blue-background-header">
			<h2 class="subheader-lrg"><?php echo esc_html(CFS()->get( 'main_title' ) ); ?></h2>
		</div>
		<div class="investor-p"><?php echo CFS()->get( 'main_copy' ); ?></div>

		<div class="blue-background-header">
			<h2 class="subheader-lrg"><?php echo esc_html(CFS()->get( 'second_title' ) ); ?></h2>
		</div>
		<div class="investor-list"><?php echo CFS()->get( 'second_copy' ); ?></div>

		<div class="blue-background-header">
			<h2 class="subheader-lrg"><?php echo esc_html(CFS()->get( 'third_title' ) ); ?></h2>
		</div>
			<div class="investor-list"><?php echo CFS()->get( 'third_copy' ); ?></div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
