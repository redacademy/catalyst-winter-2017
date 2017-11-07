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
