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
			<div class="main-copy_container">
			<p class="main-copy1"><?php echo esc_html(CFS()->get( 'main_copy1' ) ); ?></p>
			<p class="main-copy2"><?php echo esc_html(CFS()->get( 'main_copy2' ) ); ?></p>
			<p class="main-copy3"><?php echo esc_html(CFS()->get( 'main_copy3' ) ); ?></p>
			</div>
			<a class="navigation-button" href="#">Learn More</a>

			<div class="partners-information-container">
				<section class="non-profit-information partners-information">
					<h3 class="small-header">Non-Profit</h3>
					<ul class="collaborate-dashed-list">
						<h4 class="small-subheader"><?php echo esc_html( CFS()->get( 'partners_requirements_header' ) ); ?></h4>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_requirement_1' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_requirement_2' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_requirement_3' ) ); ?></li>
						<h4 class="small-subheader"><?php echo esc_html( CFS()->get( 'partners_benefits_header' ) ); ?></h4>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_benefit_1' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_benefit_2' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_benefit_3' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'partners_benefit_4' ) ); ?></li>
						<div class="key-graphic-1"></div>
						<div class="partners-text">
						<?php $partners_copy_1 = CFS()->get( 'partners_copy1' );
						if ( !empty( $partners_copy_1 ) ) : ?>
						<p class="partners-text-1"><?php echo $partners_copy_1; ?></p>
						<?php endif; ?>

						<?php $partners_copy_2 = CFS()->get( 'partners_copy2' );
						if ( !empty( $partners_copy_2 ) ) : ?>
						<p class="partners-text-2"><?php echo $partners_copy_2; ?></p>
						<?php endif; ?>
						</div>
						<div class="key-graphic-2"></div>
					</ul>
				</section>
				<section class="investors-information partners-information">
					<h3 class="small-header">Investors</h3>
					<ul class="collaborate-dashed-list">
						<h4 class="small-subheader"><?php echo esc_html( CFS()->get( 'investors_requirements_header' ) ); ?></h4>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_requirement_1' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_requirement_2' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_requirement_3' ) ); ?></li>
						<h4 class="small-subheader">Your Return:</h4>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_benefit_1' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_benefit_2' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_benefit_3' ) ); ?></li>
						<li><span class="hyphen">- </span><?php echo esc_html( CFS()->get( 'investors_benefit_4' ) ); ?></li>
						<div class="dollar-sign-graphic-1"></div>
						<div class="partners-text">
						<?php $investors_copy_1 = CFS()->get( 'investors_copy1' );
						if ( !empty( $investors_copy_1 ) ) : ?>
						<p class="partners-text-1"><?php echo $investors_copy_1; ?></p>
						<?php endif; ?>
						<?php $investors_copy_2 = CFS()->get( 'investors_copy2' );
						if ( !empty( $investors_copy_2 ) ) : ?>
						<p class="partners-text-2"><?php echo $investors_copy_2; ?></p>
						<?php endif; ?>
						</div>
						<div class="dollar-sign-graphic-2"></div>
					</ul>
				</section>
			</div>
		</div>

		<div class="infographic-container">
			<img class="business-model-diagram" src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>
		<a class="navigation-button" href="<?php echo get_home_url() ; ?>/contact">Contact Us</a>
			<div class="blue-background-header">
				<h2 class="subheader-sm supporters-header">Our Supporters</h2>
			</div>
		<div class="supporters-logo-container">
			<?php

			$args = array( 'post_type' => 'sponsor', 'order' => 'ASC', 'numberposts' => '-1' );
			$sponsors = get_posts( $args ); // returns an array of posts
			?>

			<?php foreach ( $sponsors as $post ) : setup_postdata( $post ); ?>
				<img class="sponsor-logo" src="<?php echo get_the_post_thumbnail_url($post, 'full') ; ?>" alt="sponsor logo"/>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>