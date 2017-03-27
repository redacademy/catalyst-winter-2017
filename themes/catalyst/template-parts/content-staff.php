<?php ?>

	<section class="staff-profile-preview profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

		<?php $name = CFS()->get( 'name' );
		if ( !empty( $name ) ) :?>
		<h4 class="name"><?php echo $name; ?></h4>
		<?php endif; ?>

		<?php $job_title = CFS()->get( 'job_title' );
		if ( !empty( $job_title ) ) :?>
		<p class="job-title"><?php echo $job_title; ?></p>
		<?php endif; ?>
		<button class="staff-enter-button enter-button" type="button"><span>+</span></button>
	</section>

	<section class="staff-profile-popout profile-popout">

			<div class="left-column">
				<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

				<?php $name = CFS()->get( 'name' );
				if ( !empty( $name ) ) :?>
				<h4 class="name"><?php echo $name; ?></h4>
				<?php endif; ?>

				<?php $job_title = CFS()->get( 'job_title' );
				if ( !empty( $job_title ) ) :?>
				<p class="job-title"><?php echo $job_title; ?></p>
				<?php endif; ?>

				<?php $quote = CFS()->get( 'quote' );
				if ( !empty( $quote ) ) :?>
				<p class="quote"><?php echo $quote; ?></p>
				<?php endif; ?>
			</div>

			<div class="right-column">
				<?php $tagline = CFS()->get( 'tagline' );
				if ( !empty( $tagline ) ) :?>
				<h3 class="tagline"><?php echo $tagline; ?></h3>
				<?php endif; ?>

				<?php $cvdescription = CFS()->get( 'cvdescription' );
				if ( !empty( $cvdescription ) ) :?>
				<article class="cv"><?php echo $cvdescription; ?></article>
				<?php endif; ?>

			</div>

	</section><!-- #post-## -->