<?php

/**
	* Template Name: Careers Archive
	*
	* @package Catalyst Theme
	*/

get_header(); ?>
<div class="hero-image-banner"> </div>
<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<p class="banner-text">
		<?php echo CFS()->get( 'bannertext' ); ?>
	</p>
</header><!-- .entry-header -->
<p class="intro-copy">
	<?php echo CFS()->get( 'intro_copy' ); ?>
</p>
<div class="page-header-container">
	<h2 class="page-title">Job Opportunities</h2>
</div>
<div class="job-container">
	 <?php $posts = get_posts( array( 
        'post_type' => 'projects', 
        'order' => 'ASC', 
    ));
    foreach ( $posts as $post ) : ?>
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
		<a href="#" class="contact-link">Contact us</a>
	</div>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>