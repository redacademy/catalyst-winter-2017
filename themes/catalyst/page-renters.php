<?php

/**
	* Template Name: Renters
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

<?php get_template_part( 'template-parts/hero-banner'); ?>

<?php $renters_intro = wp_kses_post( CFS()->get('renters_intro_copy') );
if( !empty( $renters_intro ) ) : ?>
    <div class="intro-copy">
        <p><?php echo $renters_intro; ?></p>
    </div>
<?php endif; ?>

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
            <div class="img-container image-credit-container">
                <?php if(CFS()->get('renters_banner')) : ?>
                <img class='project-image' src='<?php echo esc_attr( CFS()->get('renters_banner') ); ?>'>
                <p class='image-credits'>Image: <?php echo CFS()->get('renters_banner_image_credits'); ?></p>
                <?php else : ?>
                <img class='project-image' src='<?php echo esc_attr( CFS()->get('rent_logo') ); ?>'>
                <?php endif; ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="navigation-button">Learn More</a>
        </div>
    <?php endforeach; ?>
</div>

 <?php get_footer(); ?>
