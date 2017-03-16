<?php
/**
 * The template for displaying single posts for projects(projects page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

<div class="single-content">
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="banner">
            <p class='banner-name'><?php echo CFS()->get('project_name'); ?></p>
            <p class='banner-location'>Location: <?php echo CFS()->get('project_location'); ?></p>
            <p class='banner-status'>Status: <span class='project-status'><?php echo CFS()->get('project_status'); ?></span></p>
        </div>

        <div class="proj-content">
            <h3>Structure: </h3>
            <?php echo CFS()->get('structure'); ?>
            <h3>Status: </h3>
            <p><?php echo CFS()->get('status'); ?></p>
            <h3>Partners: </h3>
            <?php echo CFS()->get('partners'); ?>
            <h3>Financing/Grants: </h3>
            <?php echo CFS()->get('financing_grants'); ?>
            <h3>Affordability: </h3>
            <?php echo CFS()->get('affordability'); ?>
            <h3>Total Project Cost: </h3>
            <p><?php echo CFS()->get('cost'); ?></p>
            <p><?php echo CFS()->get('description'); ?></p>
        </div>

    <?php endwhile; ?>
</div>

 <?php get_footer(); ?>