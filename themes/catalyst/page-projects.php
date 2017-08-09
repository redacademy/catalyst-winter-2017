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
        'numberposts' => -1,
        'post_type' => 'projects',
        'order' => 'ASC',
    ));
    foreach ( $posts as $post ) :?>
        <div class="project-post">
            <div class="blue-background-header">

                <?php $project_name = esc_html( CFS()->get('project_name') );
                if ( !empty( $project_name ) ) : ?>
                <h2 class="subheader-name"><?php echo $project_name; ?></h2>
                <?php endif; ?>

                </h2><span class='break'></span>

                <h2 class='subheader-sub'>
                 <?php $project_location = esc_html( CFS()->get( 'project_location' ) );
                if ( !empty( $project_location ) ) : ?>
                <span><?php echo $project_location; ?></span>
                <?php endif; ?>

                </h2><span class='break'></span>
                <h2 class='subheader-sub'>Status:
                <?php $project_status = esc_html( CFS()->get( 'project_status' ) );
                if ( !empty( $project_status ) ) :?>
                <span class='status'><?php echo $project_status; ?></span>
                <?php endif; ?>
                </h2>
            </div>
            <div class="img-container image-credit-container">
                <img class='project-image' src='<?php echo esc_attr( CFS()->get('pBanner') ); ?>'>
                <p class='image-credits'>Image: <?php echo CFS()->get('project_banner_image_credits'); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" class="navigation-button">Learn More</a>
        </div>
    <?php endforeach; ?>
</div>

 <?php get_footer(); ?>
