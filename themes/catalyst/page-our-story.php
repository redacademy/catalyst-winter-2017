
<?php
/**
	* Template Name: ourStory
	*
	* @package Catalyst Theme
	*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/hero-banner'); ?>

			<section class="catalyst-mission">

  				<?php $content_title1 = CFS()->get( 'content_title1' );
                if ( !empty( $content_title1 ) ) :?>
                <h2 class='status'><?php echo $content_title1; ?></h2>
                <?php endif; ?>

				<?php $our_mission = CFS()->get( 'our_mission' );
                if ( !empty( $our_mission ) ) :?>
                <h3 class='status'><?php echo $our_mission; ?></h3>
                <?php endif; ?>

				<div class="mission-quote">
					<div class="quotation-left"></div>

					<?php $quotation1 = CFS()->get( 'quotation1' );
					if ( !empty( $quotation1) ) :?>
					<p class='quote'><?php echo $quotation1; ?></p>
					<?php endif; ?>

					<div class="quotation-right"></div>
				</div>
				<div class="robert">

				<?php $text_area1 = CFS()->get( 'text_area1' );
				if ( !empty( $text_area1) ) :?>
				<h4><?php echo $text_area1; ?></h4>
				<?php endif; ?>

				<?php $text_area2 = CFS()->get( 'text_area2' );
				if ( !empty( $text_area2) ) :?>
				<p class="position"><?php echo $text_area2; ?></p>
				<?php endif; ?>

				</div>
				<div class="mission-content">
					<div class="mission-image income">
					<img src ="<?php echo CFS()->get( 'image1' ); ?>"/>
					<div class="mission-text">

					<?php $image_title1 = CFS()->get( 'image_title1' );
					if ( !empty( $image_title1) ) :?>
					<h5 class="position"><?php echo $image_title1; ?></h5>
					<?php endif; ?>

					<?php $mission_text = CFS()->get( 'image_text1' );
					if ( !empty( $mission_text) ) :?>
					<p class="mission-text"><?php echo $mission_text; ?></p>
					<?php endif; ?>

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
					<p class="formula-text1"><?php echo CFS()->get( 'formula_text1' ); ?></p>
					<p class="formula-text2"><?php echo CFS()->get( 'formula_text2' ); ?></p>
				</div>

				<?php get_template_part( 'template-parts/ourStory-carousel', 'projects carousel' ); ?>
			</section>

	<div class="download"><?php echo CFS()->get( 'pdf_download' ); ?></div>

			<section class="end-content">
				<div class="end-content-quote">

				<div class="mission-quote2">
					<div class="quotation-left2"></div>
					<p class="quote2"><?php echo CFS()->get( 'quotation2' ); ?></p>
					<div class="quotation-right2"></div>
				</div>
				<div class="robert">
				<h4><?php echo CFS()->get( 'text_area1' ); ?></h4>
				<p class="position"><?php echo CFS()->get( 'text_area2' ); ?></p>
				</div>
				<a class="btn" href="<?php echo get_home_url(); ?>/our-team"><?php echo CFS()->get( 'btn2' ); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
