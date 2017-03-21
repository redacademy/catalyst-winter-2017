
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
		<div class="hero-image-banner">
		<div class="header-text">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="bannertext"><?php echo CFS()->get( 'bannertext' ); ?></p>
		</div>
		</div>
		</header>

		<p class="top-text"><?php echo CFS()->get( 'intro_copy' ); ?></p>
			<section class="catalyst-mission">
				<h2><?php echo CFS()->get( 'content_title1' ); ?></h2>
				<h3><?php echo CFS()->get( 'our_mission' ); ?></h3>

				<div class="mission-quote">
					<p class="quotation-left">"</p>
					<p class="quote"><?php echo CFS()->get( 'quotation1' ); ?></p>
					<p class="quotation-right">"</p>
				</div>
				<div class="robert">
				<h4><?php echo CFS()->get( 'text_area1' ); ?></h4>
				<p class="position"><?php echo CFS()->get( 'text_area2' ); ?></p>
				</div>
				<div class="mission-content">
					<div class="mission-image income">
					<img src ="<?php echo CFS()->get( 'image1' ); ?>"/>
					<div class="mission-text">
					<h5><?php echo CFS()->get( 'image_title1' ); ?></h5>
					<p class="mission-text"><?php echo CFS()->get( 'image_text1' ); ?></p>
					</div>
					</div>

					<img src="<?php echo CFS()->get( 'arrow_image' ); ?>"class="arrow"/>

					<div class="mission-image rent">
					<img src ="<?php echo CFS()->get( 'image2' ); ?>"/>
					<div class="mission-text">
					<h5 class="rent-title"><?php echo CFS()->get( 'image_title2' ); ?></h5>
					<p class="mission-text"><?php echo CFS()->get( 'image_text2' ); ?></p>
					</div>
					</div>

					<img src="<?php echo CFS()->get( 'arrow_image' ); ?>"class="arrow"/>


					<div class="mission-image life">
					<img src ="<?php echo CFS()->get( 'image3' ); ?>"/>
					<div class="mission-text">
					<h5><?php echo CFS()->get( 'image_title3' ); ?></h5>
					<p class="mission-text"><?php echo CFS()->get( 'image_text3' ); ?></p>
					</div>
					</div>
				</div>

			</section>
			<section class="formula">

				<h2><?php echo CFS()->get( 'content_title2' ); ?></h2>
				<div class="formula-p">
					<p class="formula-text"><?php echo CFS()->get( 'formula_text1' ); ?></p>
					<p class="formula-text"><?php echo CFS()->get( 'formula_text2' ); ?></p>
				</div>


				<div class="formula-carousel" data-flickity='{ "pageDots": false, "imagesLoaded": true, "watchCSS": true }'>
					<?php $formula_images = CFS()->get('formula');
					foreach ($formula_images as $images) : ?>
						<div class="formulas">
							<div>
								<?php echo '<img class="img" src="'.$images['formula_image'].'"/>';
								echo '<img class="fill" src="'.$images['fill'].'"/>'; ?>
							</div>
								<p class='formula-text'> <?php echo $images['formula_text']; ?> </p>

							
						</div>
					<?php endforeach ?>
				</div>




				<a><?php echo CFS()->get( 'btn1' ); ?></a>
			</section>
			<section class="end-content">
				<div class="end-content-quote">

				<div class="mission-quote2">
					<p class="quotation-left">"</p>
					<p class="quote"><?php echo CFS()->get( 'quotation2' ); ?></p>
					<p class="quotation-right">"</p>
				</div>
				<div class="robert">
				<h4><?php echo CFS()->get( 'text_area1' ); ?></h4>
				<p class="position"><?php echo CFS()->get( 'text_area2' ); ?></p>
				</div>
				<a><?php echo CFS()->get( 'btn2' ); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
