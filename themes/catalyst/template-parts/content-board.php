<?php ?>

	<section class="board-profile-preview profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

		<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
		<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>
		<button class="board-enter-button enter-button" type="button"><span>+</span></button>
	</section>

	<section class="board-profile-popout profile-popout">

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				if ( !empty( $cvDescription ) ) : 
			?>

				<div class="left-column">
					<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>

					<?php $quote = esc_html( CFS()->get('quote') ); 
						if ( !empty( $quote ) ) : 
					?>
						<p class="quote">
							<?php echo $quote; ?>
							<div class="left-quotation"></div>
							<div class="right-quotation"></div>
						</p>
					<?php endif; ?>
				</div>

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				elseif ( empty( $cvDescription ) ) : 
			?>
				<div class="center-column">
					<img class="profile-image" src="<?php echo esc_attr( CFS()->get('profile_image') ); ?>"/>

					<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>
					<p class="job-title"><?php echo esc_html( CFS()->get('job_title') ); ?></p>

					<?php $quote = esc_html( CFS()->get( 'quote' ) ); 
						if ( !empty( $quote ) ) : 
					?>
						<p class="quote">
							<?php echo $quote; ?>
							<div class="left-quotation"></div>
							<div class="right-quotation"></div>
						</p>
					<?php endif; ?>
				</div>

			<?php endif; ?>

			<h3 class="tagline clearfix"><?php echo esc_html( CFS()->get( 'tagline' ) ); ?></h3>

			<?php $cvDescription = wp_kses_post( CFS()->get('cvdescription') );
				if ( !empty( $cvDescription ) ) : 
			?>
			<article class="cv">
				<?php echo $cvDescription; ?>
			</article>
			<?php endif; ?>
    
	</section><!-- #post-## -->