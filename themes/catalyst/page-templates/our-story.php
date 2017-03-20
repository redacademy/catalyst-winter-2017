
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

		<?php echo CFS()->get( 'intro_copy' ); ?>
			<section class="catalyst-mission">
				<h2><?php echo CFS()->get( 'content_title1' ); ?></h2>
				<h3><?php echo CFS()->get( 'our_mission' ); ?></h3>

				<div class="mission-quote">
					<img class="quotation-left" src="../../images/ourstory/start.svg" alt="quotation"/>
					<p class="quote"><?php echo CFS()->get( 'quotation1' ); ?></p>
					<img class="quotation-right" src="../../images/ourstory/start.svg" alt="quotation"/>
				</div>

				<h4><?php echo CFS()->get( 'text_area1' ); ?></h4>
				<p class="position"><?php echo CFS()->get( 'text_area2' ); ?></p>

<div class="mission-content">
<div class="mission-image income">
<img src ="../../image/ourstory/plus.svg"/>
<h5><?php echo CFS()->get( 'image_title1' ); ?></h5>
<p class="mission-text"><?php echo CFS()->get( 'image_text1' ); ?></p>
</div>

<img src="../../image/ourstory/arrow-next.svg"class="arrow"/>

<div class="mission-image rent">
<h5><?php echo CFS()->get( 'image_title2' ); ?></h5>
<p class="mission-text"><?php echo CFS()->get( 'image_text2' ); ?></p>
</div>

<img src="../../image/ourstory/arrow-next.svg"class="arrow"/>

<div class="mission-image life">
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




				<a><?php echo CFS()->get( 'btn1' ); ?></a>
			</section>
			<section class="end-content">
				<div class="end-content-quote">
				<img class="quotation-left" src="../../images/ourstory/start.svg" alt="quotation"/>
				<p class="quote"><?php echo CFS()->get( 'quotation2' ); ?></p>
				<img class="quotation-left" src="../../images/ourstory/start.svg" alt="quotation"/>
				</div>

				<h4><?php echo CFS()->get( 'text_area1' ); ?></h4>
				<p class="position"><?php echo CFS()->get( 'text_area2' ); ?></p>

				<a><?php echo CFS()->get( 'btn2' ); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
