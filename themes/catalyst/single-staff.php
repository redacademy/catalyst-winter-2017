<?php
/**
 * The template for displaying single staff posts.
 *
 * @package Catalyst_Theme
 */

get_header(); ?>

<main class="preview-container">
	<section class="staff-profile-popout profile-popout">

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				if ( !empty( $cvDescription ) ) :
			?>

				<div class="left-column">
					<img class="profile-image" src="<?php echo esc_attr( CFS()->get('profile_image') ); ?>"/>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>

					<?php $quote = esc_html( CFS()->get( 'quote' ) );
						if ( !empty( $quote ) ) :
					?>

						<div class="quote-container">
							<p class="quote">
								<?php echo $quote; ?>
							</p>
								<div class="left-quotation"></div>
								<div class="right-quotation"></div>
						</div>

					<?php endif; ?>
				</div>

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				elseif ( empty( $cvDescription ) ) :
			?>
				<div class="center-column">
					<img class="profile-image" src="<?php echo esc_url( CFS()->get('profile_image') ); ?>"/>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>

					<?php $quote = esc_html( CFS()->get('quote') );
						if ( !empty( $quote ) ) :
					?>

					<div class="quote-container">
						<p class="quote">
							<?php echo $quote; ?>
							<div class="left-quotation"></div>
							<div class="right-quotation"></div>
						</p>
					</div>

					<?php endif; ?>
				</div>

			<?php endif; ?>

			<h3 class="tagline clearfix"><?php echo esc_html( CFS()->get('tagline') ); ?></h3>

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				if ( !empty( $cvDescription ) ) :
			?>

			<article class="cv">
				<?php echo $cvDescription; ?>
			</article>
			<?php endif; ?>

	</section><!-- #post-## -->
</main>

<?php get_footer(); ?>
