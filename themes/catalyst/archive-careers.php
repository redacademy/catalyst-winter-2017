<?php

/**
	* Template Name: Careers
	*
	* @package Catalyst Theme
	*/

get_header(); ?>
<div class="hero-image-banner"> </div>
<p class="banner-text">Careers</p>
<div class="page-header-container">
	<h2 class="page-title">Job Opportunities</h2>
</div>
<div class="job-container">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="job-post">
		<h3 class='job-title'><?php echo CFS()->get( 'job_title' ); ?> </h3> 
		<div class="role-container">
			<p class="role">role:</p>
			<?php echo CFS()->get( 'role' ); ?>
		</div>
		<div class="resp-container">
			<p class="responsibilities">responsibilities:</p>
			<?php echo CFS()->get( 'responsibilities' ); ?>   
		</div>
		<div class='link-container'>
			<a href="#" class="contact-link">Contact us</a>
		</div>
	</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>