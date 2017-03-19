
<?php

/**
	* Template Name: ourStory
	*
	* @package Catalyst Theme
	*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
		<div class="herobanner">
		<div class="header-text">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="bannertext"><?php echo CFS()->get( 'bannertext' ); ?></p>
		</div>
		</div>
		</header>
			<p>We are creating vibrant, affordable and inspiring places for people to live and work in.</p>

			<section class="catalyst-mission">
				<h2>Catalyst mission</h2>
				<h3>our mission is to use real estate to effect social change. </h3>

				<p>It’s not about the buildings, if it’s not home, not about the people, don’t bother. </p>

				<p>Robert Brown</p>
				<p>Catalyst President</p>

				<p>annual income</p>
				<p>We aim for workforce retail housing. We serve those in our community with a household income in this range.</p>

				<p>rent</p>
				<p>Rent will be capped at 30% of their income.</p>

				<p>Quality of life</p>
				<p>The people in this community will be able to save on rent and enjoy a better lifestyle.</p>
			</section>
			<section class="catalyst-formula">
				
				<h2>the catalyst formula</h2>
				<p>We are not just a consultant. We bring forward real estate expertise and shared mission and vision as a non-profit but we also bring money to the table.</p>
				<p>We are in this for the long term. We want to own these buildings forever. We are about maintaining the rent levels. Over time, we are actually able to decrease rent.</p>



				<div class="formula-carousel" data-flickity='{"contain": true, "pageDots": false, "imagesLoaded": true }'>
					<?php $formula_images = CFS()->get('formula');
					foreach ($formula_images as $images) : ?>
						<div class="formulas">
							<div class="formula-textimg">
								<?php echo '<img src="'.$images['formula_image'].'"/>'; ?>
								<p class='formula-text'> <?php echo $images['formula_text']; ?> </p>
							</div>
							<?php echo '<img src="'.$images['fill'].'"/>'; ?>
						</div>
					<?php endforeach ?>
				</div>




				<a>download model</a>
			</section>
			<section class="quotes">
				<p>It might not always start off where you want them to be on the affordability scale but once they’re built, once you get control of them and you get to see how it goes - if a community organization owns them, then you can improve things overtime.</p>

				<p>Robert Brown</p>
				<p>catalyst president</p>
				<a>meet our team</a>
			</section>	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
