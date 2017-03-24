<?php

/**
	* Template Name: Collaborate page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!--<div class="hero-image-banner">
			<header class="header-text">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p class="banner-text">
					<?php echo CFS()->get( 'bannertext' ); ?>
				</p>
			</header>
		</div>-->
<?php get_template_part( 'template-parts/hero-banner'); ?>
		<p class="intro-copy">
			<?php echo CFS()->get( 'intro_copy' ); ?>
		</p>

		<div class="blue-background">
			<h2 class="subheader">Non-Profit Partners &amp; Investors</h2>
		</div>

		<div class="content-container">
			<p class="main-copy"><?php echo CFS()->get( 'main_copy' ); ?></p>

			<a class="navigation-button" href="#">Learn More</a>

			<div class="partners-information-container">
				<section class="non-profit-information partners-information">
					<h3 class="small-header">Non-Profit</h3>
					<ul class="collaborate-dashed-list">
						<h4 class="small-subheader"><?php echo CFS()->get( 'partners_requirements_header' ); ?></h4>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_requirement_1' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_requirement_2' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_requirement_3' ); ?></li>
						<h4 class="small-subheader"><?php echo CFS()->get( 'partners_benefits_header' ); ?></h4>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_benefit_1' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_benefit_2' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_benefit_3' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'partners_benefit_4' ); ?></li>
						<div class="key-graphic-1"></div>
						<p class="partners-text"><?php echo CFS()->get( 'partners_copy' ) ?></p>
						<div class="key-graphic-2"></div>
					</ul>
				</section>
				<section class="investors-information partners-information">
					<h3 class="small-header">Investors</h3>
					<ul class="collaborate-dashed-list">
						<h4 class="small-subheader"><?php echo CFS()->get( 'investors_requirements_header' ); ?></h4>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_requirement_1' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_requirement_2' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_requirement_3' ); ?></li>
						<h4 class="small-subheader">Your Return:</h4>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_benefit_1' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_benefit_2' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_benefit_3' ); ?></li>
						<li><span class="hyphen">- </span><?php echo CFS()->get( 'investors_benefit_4' ); ?></li>
						<div class="dollar-sign-graphic-1"></div>
						<p class="partners-text"><?php echo CFS()->get( 'investors_copy' ); ?></p>
						<div class="dollar-sign-graphic-2"></div>
					</ul>
				</section>
			</div>
		</div>

		<div class="infographic-container">
			<img class="business-model-diagram" src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>
		<a class="navigation-button" href="<?php echo get_home_url() ; ?>/contact">Contact Us</a>
			<div class="blue-background">
				<h2 class="subheader supporters-header">Our Supporters</h2>
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