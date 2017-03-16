<?php
/**
 * The template for displaying archive for the projects post type (projects page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

<div class="project-content">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="project-post">
        <div class="proj-head">
            <p class='name'><?php echo CFS()->get('project_name'); ?></p>
            <p>Location: <span><?php echo CFS()->get('project_location'); ?></span></p>
            <p>Status: <span class='status'><?php echo CFS()->get('project_status'); ?></span></p>
        </div>
        <div class="img-container">
            <img class='project-image' src='<?php echo CFS()->get('banner_image'); ?>'>
        </div>
    

        <a href="#" class="project-link"><div class="project-button"><p class="learn-more">Learn More</p></div></a>

    </div>

    <?php endwhile; ?>
</div>
 <?php get_footer(); ?>