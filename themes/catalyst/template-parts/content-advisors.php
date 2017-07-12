<?php ?>

	<section class="profile-preview">
		<a href="<?php echo esc_attr( CFS()->get( 'web_site_address' ) ); ?>">
			<h4 class="name"><?php echo esc_html( CFS()->get('name') ); ?></h4>

			<?php $role = esc_html( CFS()->get( 'role' ) );
			if( !empty( $role ) ) : ?>
				<p class="job-title"><?php echo $role; ?></p>
			<?php endif; ?>

			<?php $organization = esc_html( CFS()->get( 'organization' ) );
			if( !empty( $organization ) ) : ?>
				<p class="job-title"><?php echo $organization; ?></p>
			<?php endif; ?>
		</a>
	</section>
