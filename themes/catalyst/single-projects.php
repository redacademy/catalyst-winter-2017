<?php
/**
 * The template for displaying single posts for projects(projects page).
 *
 * @package Catalyst_Theme
 */

 get_header(); ?>

<div class="single-content">
    <section>
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="hero-image-banner">
                <div class="header-text">
                    <p class='project-name'><?php echo CFS()->get('project_name'); ?></p>
                    <p class='project-location'>Location: <?php echo CFS()->get('project_location'); ?></p>
                    <p class='project-status'>Status: <span class='project-status'><?php echo CFS()->get('project_status'); ?></span></p>
                </div>
            </div>

            <div class="blue-background-header">
                <h2 class='subheader-sm'>Project details</h2>
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
    </section>
    <section>
        <div>
            <div class="blue-background-header">
                <h2 class='subheader-sm'>Architectural design</h2>
            </div>
        </div>
        <div class="img-carousel">
            <?php $gallery_images = CFS()->get('gallery_images');
            foreach ($gallery_images as $image) : ?>
                <div class="images">
                    <?php echo '<img src="'.$image['image'].'"/>'; ?>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <div class="quote-carousel">
            <?php $quotes_gallery = CFS()->get('quotes_gallery');
            foreach ($quotes_gallery as $quotes) : ?>
                <div class="quotes">
                    <div class="left-quotation-mark"></div>
                    <?php echo '<p class="quote-text"> '.$quotes['quotes'].'</p>';
                    echo '<p class="person"> '.$quotes['person'].'</p>';
                    echo '<p class="line"> '.$quotes['line1'].'</p>';
                    echo '<p class="line"> '.$quotes['line2'].'</p>'; ?>
                    <div class="right-quotation-mark"></div>
                </div>
                <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <a href="#" class="navigation-button">Collaborate with us</a>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <section>
        <div class="blue-background-header">
            <h2 class='subheader-sm'>Other Projects</h2>
        </div>
        <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
    </section>
</div>
 <?php get_footer(); ?>