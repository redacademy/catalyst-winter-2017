
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

				<?php $subheading1 = CFS()->get( 'subheading1' );
				if( !empty( $subheading1 ) ) : ?>
				<div class="blue-background-header">
        	<h2 class='subheader-lrg'><?php echo esc_html( CFS()->get('subheading1')); ?></h2>
				</div>
				<?php endif; ?>

        <p class='mission-copy'><?php echo esc_html( CFS()->get( 'our_mission' ) ); ?></p>

				<div class="infographic-container">
					<div class="infographic-img">
						<img src="<?php echo CFS()->get('infographic_img1'); ?>" alt="">
					</div>
				</div>
			</section>

			<section class="formula">

				<div class="blue-background-header">
					<h2 class='subheader-lrg'><?php echo esc_html( CFS()->get( 'subheading2' ) ); ?></h2>
				</div>

				<div class="formula-p">
					<p class="formula-text1"><?php echo esc_html( CFS()->get( 'formula_text1' ) ); ?></p>

					<p class="formula-text2"><?php echo esc_html( CFS()->get( 'formula_text2' ) ); ?></p>
				</div>

				<?php $subheading3 = esc_html( CFS()->get( 'subheading3' ) );
				if( !empty( $subheading3 ) ) :?>
					<div class="blue-background-header infographic-header">
						<h2 class='subheader-lrg'><?php echo $subheading3; ?></h2>
					</div>
				<?php endif; ?>

				<?php $infographic2 = CFS()->get( 'infographic_img2' );
				if( !empty( $infographic2 ) ): ?>
				<div class="infographic-container">
					<div class="infographic-img">
						<img src="<?php echo CFS()->get('infographic_img2'); ?>" alt="">
					</div>
				</div>
				<?php endif; ?>
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
					<?php $text_area1 = esc_html( CFS()->get( 'person2' ) );
					if ( !empty( $text_area1 ) ) :?>
					<h4><?php echo $text_area1; ?></h4>
					<?php endif; ?>

					<?php $text_area2 = esc_html( CFS()->get( 'role2' ) );
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
