<?php
/**
 * The template for displaying archive for the products post type (careers page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

<div class="job-container">
			<?php while ( have_posts() ) : the_post(); ?>
				<p><?php echo CFS()->get( 'job_title' ); ?><p>  
                <p><?php echo CFS()->get( 'role' ); ?><p>   
                <p><?php echo CFS()->get( 'responsibilities' ); ?><p>   
					
			<?php endwhile; ?>
</div>











<?php get_footer(); ?>
