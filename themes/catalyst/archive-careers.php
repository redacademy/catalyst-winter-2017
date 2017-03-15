<?php
/**
 * The template for displaying archive for the products post type (careers page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

<div class="page-header-container">
	<p class="page-title">Job Opportunities</p>
</div>
<div class="job-container">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="job-post">
		<?php echo CFS()->get( 'job_title' ); ?>  
		<p class="role">role:</p>
		<?php echo CFS()->get( 'role' ); ?>
		<p class="responsibilities">responsibilities:</p>
		<?php echo CFS()->get( 'responsibilities' ); ?>   
	</div>
	<?php endwhile; ?>
</div>


















<?php get_footer(); ?>
