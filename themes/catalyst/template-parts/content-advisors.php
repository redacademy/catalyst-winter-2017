<?php ?>

	<section class="profile-preview">
		<?php $name = CFS()->get( 'name' );
		if ( !empty( $name ) ) :?>
		<h4 class="name"><?php echo $name; ?></h4>
		<?php endif; ?>

		<?php $job_title = CFS()->get( 'job_title' );
		if ( !empty( $job_title ) ) :?>
		<p class="job-title"><?php echo $job_title; ?></p>
		<?php endif; ?>
	</section>