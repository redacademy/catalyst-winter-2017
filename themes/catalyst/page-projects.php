<?php

/**
	* Template Name: Projects
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

   <?php get_template_part( 'template-parts/hero-banner'); ?>

<div class="project-content">
    <?php $posts = get_posts( array(
        'post_type' => 'projects',
        'order' => 'ASC',
    ));
    foreach ( $posts as $post ) :?>
        <div class="project-post">
            <div class="proj-head">

                <?php $project_name = CFS()->get('project_name');
                if ( !empty( $project_name ) ) : ?>
                <p class="name"><?php echo $project_name; ?></p>
                <?php endif; ?>
                <span class='break'>|</span>

                <p>Location:
                 <?php $project_location = CFS()->get( 'project_location' );
                if ( !empty( $project_location ) ) : ?>
                <span><?php echo $project_location; ?></span>
                <?php endif; ?>

                </p><span class='break'>|</span>
                <p>Status:
                <?php $project_status = CFS()->get( 'project_status' );
                if ( !empty( $project_status ) ) :?>
                <span class='status'><?php echo $project_status; ?></span>
                <?php endif; ?>
                </p>
            </div>
            <div class="img-container">
                <img class='project-image' src='<?php echo CFS()->get('heroimage'); ?>'>
            </div>
            <a href="<?php the_permalink(); ?>" class="project-link">Learn More</a>
        </div>
    <?php endforeach; ?>
</div>

 <?php get_footer(); ?>