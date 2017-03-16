<?php
/**
 * The template for displaying archive for the products post type (careers page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

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
		<a href="#" class="contact-link"><div class="contact-button"><p class="contact">Contact us</p></div></a>
	</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>