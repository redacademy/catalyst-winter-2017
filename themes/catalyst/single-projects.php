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
                    <?php 
                        $projname = CFS()->get('project_name');
                        $projloc = CFS()->get('project_location');
                        $projstat = CFS()->get('project_status');
                        if ( !empty( $projname ) ) : 
                    ?>
                        <p class='project-name'><?php echo $projname; ?></p>
                    <?php endif;
                        if ( !empty( $projloc ) ) : 
                    ?>
                        <p class='project-location'>Location: <?php echo $projloc; ?></p>
                    <?php endif;
                        if ( !empty( $projstat ) ) : 
                    ?>
                        <p class='project-status'>Status: <span class='project-status'><?php echo $projstat; ?></span></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="content-head">
                <h2>Project details</h2>
            </div>

            <div class="proj-content">
                <?php 
                    $structure = CFS()->get('structure');
                    $status = CFS()->get('status');
                    $partners = CFS()->get('partners');
                    $grants = CFS()->get('financing_grants');
                    $affordability= CFS()->get('affordability');
                    $cost = CFS()->get('cost');
                    $description = CFS()->get('description');
                    if ( !empty( $projstat ) ) : 
                    ?>
                        <h3>Structure: </h3>
                <?php echo $structure; ?>
                    <?php endif;
                    if ( !empty( $status ) ) : 
                    ?>
                        <h3>Status: </h3>
                <p><?php echo $status; ?></p>
                    <?php endif;
                    if ( !empty( $partners ) ) : 
                    ?>
                        <h3>Partners: </h3>
                <?php echo $partners; ?>
                    <?php endif;
                    if ( !empty( $grants ) ) : 
                    ?>
                        <h3>Financing/Grants: </h3>
                <?php echo $grants; ?>
                    <?php endif;
                    if ( !empty( $affordability ) ) : 
                    ?>
                        <h3>Affordability: </h3>
                <?php echo $affordability; ?>
                    <?php endif;
                    if ( !empty( $cost ) ) : 
                    ?>
                        <h3>Total Project Cost: </h3>
                <p><?php echo $cost; ?></p>
                    <?php endif;
                    if ( !empty( $cost ) ) : 
                    ?>
                        <p><?php echo $description; ?></p>
                    <?php endif; ?>
            </div>
    </section>
    <section>
        <div>
            <div class="content-head">
                <h2>Architectural design</h2>
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
        <div class="collab-link-container">
            <a href="#" class="collab-link">Collaborate with us</a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <section>
        <div class="other-proj">
            <h2>Other Projects</h2>
        </div>
        <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
    </section>
</div>
 <?php get_footer(); ?>