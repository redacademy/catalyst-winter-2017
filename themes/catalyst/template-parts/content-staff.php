<?php ?>

	<section class="profile-preview">
		<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

		<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
		<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>
		<button class="enter-button" type="button"></button>
	</section>

	<section class="profile-popout">

			<div class="left-column">
				<img class="profile-image" src="<?php echo CFS()->get('profile_image'); ?>"/>

				<h4 class="name"><?php echo CFS()->get('name'); ?></h4>
				<p class="job-title"><?php echo CFS()->get('job_title'); ?></p>

				<p class="quote"><?php echo CFS()->get('quote'); ?></p>
			</div>

			<div class="right-column">
				<button class="exit-button" type="button"></button>

				<h3 class="tagline"><?php echo CFS()->get('tagline'); ?></h3>

				<article class="cv">
					<?php echo CFS()->get('cvdescription'); ?>
				</article>
			</div>

	</section><!-- #post-## -->