<?php ?>

	<section class="committee-profile-preview profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

		<?php $photoCredit = CFS()->get( 'photo_credit' );
		if( !empty( $photoCredit ) ): ?>
			<p class="photo-credit">Image: <?php echo $photoCredit; ?></p>
		<?php endif; ?>

		<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
		<p class="job-title"><?php echo esc_html( CFS()->get('role') ); ?></p>
		<button class="committee-enter-buttons enter-button" type="button"><span>+</span></button>
	</section>

	<section class="committee-profile-popout profile-popout">

			<?php $text_blurb = wp_kses_post( CFS()->get('text_blurb') );
				if ( !empty( $text_blurb ) ) :
			?>

				<div class="left-column">
					<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

					<?php $photoCredit = CFS()->get( 'photo_credit' );
					if( !empty( $photoCredit ) ): ?>
						<p class="photo-credit">Image: <?php echo $photoCredit; ?></p>
					<?php endif; ?>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('role') ); ?></p>

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

			<?php
				elseif ( empty( $text_blurb ) ) :
			?>
				<div class="center-column">
					<img class="profile-image" src="<?php echo esc_attr( CFS()->get('profile_image') ); ?>"/>

					<?php $photoCredit = CFS()->get( 'photo_credit' );
					if( !empty( $photoCredit ) ): ?>
						<p class="photo-credit">Image: <?php echo $photoCredit; ?></p>
					<?php endif; ?>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>

					<?php $quote = esc_html( CFS()->get( 'quote' ) );
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

			<? if ( !empty( $text_blurb ) ) :?>
			<article class="cv">
				<?php echo $text_blurb; ?>
			</article>
			<?php endif; ?>

	</section><!-- #post-## -->
