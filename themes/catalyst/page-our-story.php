
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


				<div class="blue-background-header">
        	<h2 class='subheader-lrg'><?php echo esc_html( CFS()->get('content_title1')); ?></h2>
				</div>

        <p class='mission-copy'><?php echo esc_html( CFS()->get( 'our_mission' ) ); ?></p>


				<div class="mission-quote">
					
					<div class="q-text-container">
						<div class="quotation-left"></div>
						<?php $quotation1 = esc_html( CFS()->get( 'quotation1' ) );
							if ( !empty( $quotation1) ) :?>
								<p class='quote'>
									<?php echo $quotation1; ?>
								</p>
						<?php endif; ?>
						<div class="quotation-right"></div>
					</div>
					
				</div>
				<div class="robert">

				<?php $text_area1 = esc_html( CFS()->get( 'text_area1' ) );
				if ( !empty( $text_area1) ) :?>
				<h4><?php echo $text_area1; ?></h4>
				<?php endif; ?>

				<?php $text_area2 = esc_html( CFS()->get( 'text_area2' ) );
				if ( !empty( $text_area2) ) :?>
				<p class="position"><?php echo $text_area2; ?></p>
				<?php endif; ?>

				</div>
				<div class="mission-content">
					<div class="mission-image income">
					<img src ="<?php echo esc_attr( CFS()->get( 'image1' ) ); ?>"/>
					<div class="mission-text">

					<?php $image_title1 = esc_html( CFS()->get( 'image_title1' ) );
					if ( !empty( $image_title1) ) :?>
					<h5 class="income-title"><?php echo $image_title1; ?></h5>
					<?php endif; ?>

					<?php $image_text1 = esc_html( CFS()->get( 'image_text1' ) );
					if ( !empty( $image_text1 ) ) :?>
					<p class="mission-tex-p"><?php echo $image_text1; ?></p>
					<?php endif; ?>

				</div>
				</div>

					<img src="<?php echo esc_attr( CFS()->get( 'arrow_image' ) ); ?>"class="arrow"/>

					<div class="mission-image rent">
					<img src ="<?php echo esc_attr( CFS()->get( 'image2' ) ); ?>"/>
					<div class="mission-text">
					<?php $image_title2 = esc_html( CFS()->get( 'image_title2' ) );
					if ( !empty( $image_title2 ) ) :?>
					<h5 class="rent-title"><?php echo $image_title2; ?></h5>
					<?php endif; ?>
					<?php $image_text2 = esc_html( CFS()->get( 'image_text2' ) );
					if ( !empty( $image_text2) ) :?>
					<p class="mission-text-p"><?php echo $image_text2; ?></p>
					<?php endif; ?>
					</div>
					</div>

					<img src="<?php echo esc_attr( CFS()->get( 'arrow_image' ) ); ?>"class="arrow"/>

					<div class="mission-image life">
					<img src ="<?php echo esc_attr( CFS()->get( 'image3' ) ); ?>"/>
					<div class="mission-text">
					<?php $image_title3 = esc_html( CFS()->get( 'image_title3' ) );
					if ( !empty( $image_title3 ) ) :?>
					<h5><?php echo $image_title3; ?></h5>
					<?php endif; ?>

					<?php $image_text3 = esc_html( CFS()->get( 'image_text3' ) );
					if ( !empty( $image_text3 ) ) :?>
					<p class="mission-text-p"><?php echo $image_text3; ?></p>
					<?php endif; ?>

					</div>
					</div>
				</div>
			</section>

			<section class="formula">

			<div class="blue-background-header">
				<h2 class='subheader-lrg'><?php echo esc_html( CFS()->get( 'content_title2' ) ); ?></h2>
			</div>


				<div class="formula-p">

				<p class="formula-text1"><?php echo esc_html( CFS()->get( 'formula_text1' ) ); ?></p>

				<p class="formula-text2"><?php echo esc_html( CFS()->get( 'formula_text2' ) ); ?></p>

				</div>

				<?php get_template_part( 'template-parts/ourStory-carousel', 'projects carousel' ); ?>
			</section>

			<section class="end-content">
				<div class="end-content-quote">
				<div class="mission-quote2">
					<div class="quotation-left2"></div>
					<?php $quotation2 = esc_html( CFS()->get( 'quotation2' ) );
					if ( !empty( $quotation2 ) ) :?>
					<p class="quote2"><?php echo $quotation2; ?></p>
					<?php endif; ?>
					<div class="quotation-right2"></div>
				</div>
				<div class="robert">
					<?php $text_area1 = esc_html( CFS()->get( 'text_area1' ) );
					if ( !empty( $text_area1 ) ) :?>
					<h4><?php echo $text_area1; ?></h4>
					<?php endif; ?>

					<?php $text_area2 = esc_html( CFS()->get( 'text_area2' ) );
					if ( !empty( $text_area2 ) ) :?>
					<p class="position"><?php echo $text_area2; ?></p>
					<?php endif; ?>
				</div>

				<?php $btn2 = esc_html( CFS()->get( 'btn2' ) );
				if ( !empty( $btn2 ) ) :?>
				<a class="navigation-button" href="<?php echo get_home_url(); ?>/our-team"><?php echo $btn2; ?></a>
				<?php endif; ?>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
