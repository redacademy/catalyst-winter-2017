<?php

/**
	* Template Name: Projects
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<div class="hero-image-banner">
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="banner-text">
            <?php echo CFS()->get( 'bannertext' ); ?>
        </p>
    </header>
</div>
<div class='intro container'>
    <p class="intro">
                <?php echo CFS()->get( 'intro_copy' ); ?>
    </p>
</div>

<div class="project-content">
    <?php $posts = get_posts( array( 
        'post_type' => 'projects', 
        'order' => 'ASC', 
    ));
    foreach ( $posts as $post ) :?>
        <div class="project-post">
            <div class="proj-head">
                <p class='name'><?php echo CFS()->get('project_name'); ?></p><span class='break'>|</span>
                <p>Location: <span><?php echo CFS()->get('project_location'); ?></span></p><span class='break'>|</span>
                <p>Status: <span class='status'><?php echo CFS()->get('project_status'); ?></span></p>
            </div>
            <div class="img-container">
                <img class='project-image' src='<?php echo CFS()->get('heroimage'); ?>'>
            </div>
            <a href="<?php the_permalink(); ?>" class="project-link">Learn More</a>
        </div>
    <?php endforeach; ?>
</div>

 <?php get_footer(); ?>