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

            <div class="project-image-banner">
                <div class="header-text">
                    <?php $project_name = esc_html( CFS()->get( 'project_name' ) );
                    if ( $project_name ) :?>
                    <p class='project-name'><?php echo $project_name; ?></p>
                    <?php endif; ?>

                    <?php $project_location = esc_html( CFS()->get( 'project_location' ) );
                    if ( $project_location ) :?>
                    <p class='project-location'>Location: <?php echo $project_location; ?></p>
                    <?php endif; ?>

                    <?php $project_status = esc_html( CFS()->get( 'project_status' ) );
                    if ( $project_status ) :?>
                    <p class='project-status'>Status: <span class='p-stat'><?php echo $project_status; ?></span></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="blue-background-header">
                <h2 class='subheader-lrg'>Project details</h2>
            </div>

            <div class="proj-content">
                <?php $description = esc_html( CFS()->get( 'description' ) );
                if ( $description ) :?>
                    <p><?php echo $description; ?></p>
                <?php endif; ?>

                <?php $partners = wp_kses_post( CFS()->get( 'partners' ) );
                if ( $partners ) :?>
                    <h3>Partners: <?php echo $partners; ?></h3>
                <?php endif; ?>

                <?php $client = esc_html( CFS()->get( 'project_client' ) );
                if ( $client ) :?>
                    <h3>Client: <p><?php echo $client; ?></p></h3>
                <?php endif; ?>

                <?php $cRole = CFS()->get( 'catalyst_role' );
                foreach ( $cRole as $key => $label ) :
                    if ( !($label === 'none') ) : ?>
                        <h3>Catalyst Role: <p><?php echo $label; ?></p></h3>
                    <?php endif;
                endforeach; wp_reset_postdata(); ?>

                <?php $affordability = wp_kses_post( CFS()->get( 'affordability' ) );
                if ( $affordability ) :?>
                    <h3>Affordability: </h3>
                    <?php echo $affordability; ?>
                <?php endif; ?>

                <?php $financing_grants = wp_kses_post( CFS()->get( 'financing_grants' ) );
                if ( $financing_grants ) :?>
                    <h3>Financing/Grants: </h3>
                    <?php echo $financing_grants; ?>
                <?php endif; ?>

                <?php $cost = esc_html( CFS()->get( 'cost' ) );
                if ( $cost ) :?>
                    <h3>Total Project Cost: <p><?php echo $cost; ?></p></h3>
                <?php endif; ?>
            </div>
    </section>
    <section class='arch-design'>
        <div>
            <div class="blue-background-header">
                <h2 class='subheader-lrg'>Architectural design</h2>
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
                        <div class="q-text-container">
                            <div class="left-quotation-mark"></div>
                            <?php echo '<p class="quote-text"> '.$quotes['quotes'].'</p>'; ?>
                            <div class="right-quotation-mark"></div>
                        </div>
                        <?php echo '<p class="person"> '.$quotes['person'].'</p>';
                        echo '<p class="line"> '.$quotes['line1'].'</p>';
                        echo '<p class="line"> '.$quotes['line2'].'</p>'; ?>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
            </div>
        <a href="<?php echo get_home_url(); ?>/collaborate" class="navigation-button">Collaborate with us</a>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <section>
        <div class="blue-background-header">
            <h2 class='subheader-lrg'>Other Projects</h2>
        </div>
        <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
    </section>
</div>
 <?php get_footer(); ?>
