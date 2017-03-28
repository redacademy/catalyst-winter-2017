<?php

/**
	* Template Name: Careers
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<?php get_template_part( 'template-parts/hero-banner'); ?>

<div class="blue-background-header">
    <h2 class="subheader-lrg">job opportunities</h2>
</div>
<div class="job-container">
	 <?php $posts = get_posts( array(
        'post_type' => 'careers',
        'order' => 'ASC',
    ));
    foreach ( $posts as $post ) : ?>
	<div class="job-post">
		<h3 class='job-title'><?php echo esc_html(CFS()->get( 'job_title' ) ); ?> </h3>
		<div class="role-container">
			<p class="role">role:</p>
			<?php echo CFS()->get( 'role' ); ?>
		</div>
		<div class="resp-container">
			<p class="responsibilities">responsibilities:</p>
			<?php echo CFS()->get( 'responsibilities' ); ?>
		</div>
		<a class='navigation-button' href="<?php echo get_home_url(); ?>/our-story">Contact us</a>

	</div>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>