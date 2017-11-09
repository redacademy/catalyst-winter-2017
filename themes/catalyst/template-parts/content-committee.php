<section class="committee-profile-preview profile-preview">
	<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

	<?php $photoCredit = CFS()->get( 'photo_credit' );
	if( !empty( $photoCredit ) ): ?>
		<p class="photo-credit">Image: <?php echo $photoCredit; ?></p>
	<?php endif; ?>

	<?php $name = esc_html(CFS()->get( 'name' ));
	if( !empty( $name ) ): ?>
		<h4 class="name"><?php echo $name; ?></h4>
	<?php endif; ?>

	<?php $currentTitle = esc_html(CFS()->get( 'current_title' ));
	if( !empty( $currentTitle ) ): ?>
		<p class="job-title"><?php echo $currentTitle; ?></p>
	<?php endif; ?>

	<?php $currentCompany = esc_html(CFS()->get( 'current_company' ));
	if( !empty( $currentCompany ) ): ?>
		<p class="job-title"><?php echo $currentCompany; ?></p>
	<?php endif; ?>

	<?php $role = esc_html(CFS()->get( 'role' ));
	if( !empty( $role ) ): ?>
		<p class="job-title"><?php echo $role; ?></p>
	<?php endif; ?>

	<button class="committee-enter-button enter-button" type="button"><span>+</span></button>
</section>

<section class="committee-profile-popout profile-popout">
	<div class="center-column">
		<img class="profile-image" src="<?php echo esc_url( CFS()->get('profile_image') ); ?>"/>

		<?php $photoCredit = CFS()->get( 'photo_credit' );
		if( !empty( $photoCredit ) ): ?>
			<p class="photo-credit">Image: <?php echo $photoCredit; ?></p>
		<?php endif; ?>

		<?php $name = esc_html(CFS()->get( 'name' ));
		if( !empty( $name ) ): ?>
			<h4 class="name"><?php echo $name; ?></h4>
		<?php endif; ?>

		<?php $currentTitle = esc_html(CFS()->get( 'current_title' ));
		if( !empty( $currentTitle ) ): ?>
			<p class="job-title"><?php echo $currentTitle; ?></p>
		<?php endif; ?>

		<?php $currentCompany = esc_html(CFS()->get( 'current_company' ));
		if( !empty( $currentCompany ) ): ?>
			<p class="job-title"><?php echo $currentCompany; ?></p>
		<?php endif; ?>

		<?php $role = esc_html(CFS()->get( 'role' ));
		if( !empty( $role ) ): ?>
			<p class="job-title"><?php echo $role; ?></p>
		<?php endif; ?>

	</div>
	</section><!-- #post-## -->
