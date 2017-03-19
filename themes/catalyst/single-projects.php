<?php
/**
 * The template for displaying single posts for projects(projects page).
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

<div class="single-content">
    <section>
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="hero-image-banner">
                <p class='banner-name'><?php echo CFS()->get('project_name'); ?></p>
                <p class='banner-location'>Location: <?php echo CFS()->get('project_location'); ?></p>
                <p class='banner-status'>Status: <span class='project-status'><?php echo CFS()->get('project_status'); ?></span></p>
            </div>

            <div class="content-head">
                <h2>Project details</h2>
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
            <div class="content-head">
                <h2>Architectural design</h2>
            </div>
            <div class="arch-text">
                <p>Disclosed floor plans, site map, draft design, and construction photos during the development stage of the project.</p>
            </div>
        </div>
        <div class="img-carousel" data-flickity='{"contain": true, "wrapAround": true, "pageDots": false, "imagesLoaded": true }'>
            <?php $gallery_images = CFS()->get('gallery_images');
            foreach ($gallery_images as $image) : ?>
                <div class="images">
                    <?php echo '<img src="'.$image['images'].'"/>'; ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="quote-carousel" data-flickity='{"contain": true, "wrapAround": true, "imagesLoaded": true, "autoPlay": 2000, "prevNextButtons": false, "pageDots": false }'>
            <?php $quotes_gallery = CFS()->get('quotes_gallery');
            foreach ($quotes_gallery as $quotes) : ?>
                <div class="quotes">
                    <?php echo '<p class="quote-text"> '.$quotes['quotes'].'</p>';
                    echo '<p class="person"> '.$quotes['person'].'</p>';
                    echo '<p class="line"> '.$quotes['line1'].'</p>';
                    echo '<p class="line"> '.$quotes['line2'].'</p>'; ?>
                </div>
                <?php endforeach ?>
        </div>
        <div class="collab-link-container">
            <a href="#" class="collab-link">Collaborate with us</a>
        </div>
        <?php endwhile; ?>
    </section>
    <section>
        <div class="other-proj">
            <h2>Other Projects</h2>
        </div>
        <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
    </section>
</div>
 <?php get_footer(); ?>