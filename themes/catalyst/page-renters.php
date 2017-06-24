<?php

/**
	* Template Name: Renters
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

   <?php get_template_part( 'template-parts/hero-banner'); ?>

<div class="renter-content">
    <?php $posts = get_posts( array(
        'post_type' => 'renters',
        'order' => 'ASC',
    ));
    foreach ( $posts as $post ) :?>
        <div class="renter-post">
            <div class="blue-background-header">

                <?php $project_name = esc_html( CFS()->get('project_name') );
                if ( !empty( $project_name ) ) : ?>
                <h2 class="subheader-name"><?php echo $project_name; ?></h2>
                <?php endif; ?>
            </div>
            <div class="img-container">
                <?php if(CFS()->get('renters_banner')) : ?>
                <img class='project-image' src='<?php echo esc_attr( CFS()->get('renters_banner') ); ?>'>
                <?php else : ?>
                <img class='project-image' src='<?php echo esc_attr( CFS()->get('rent_logo') ); ?>'>
                <?php endif; ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="navigation-button">Learn More</a>
        </div>
    <?php endforeach; ?>
</div>

 <?php get_footer(); ?>