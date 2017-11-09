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

            <div class="project-image-banner image-credit-container">
                <div class="header-text">
                    <?php $project_name = esc_html( CFS()->get( 'project_name' ) );
                    if ( $project_name ) :?>
                    <h1 class='project-name'><?php echo $project_name; ?></h1>
                    <?php endif; ?>

                    <?php $project_location = esc_html( CFS()->get( 'project_location' ) );
                    if ( $project_location ) :?>
                    <p class='project-location'>Location: <?php echo $project_location; ?></p>
                    <?php endif; ?>
                </div>
                <p class="image-credits">Image: <?php echo esc_html( CFS()->get('project_banner_image_credits') ); ?></p>
            </div>

            <div class="proj-content">
                <?php $description = wp_kses_post( CFS()->get( 'description' ) );
                if ( $description ) :?>
                    <p><?php echo $description; ?></p>
                <?php endif; ?>

                <?php $project_status = esc_html( CFS()->get( 'project_status' ) );
                if ( $project_status ) :?>
                <div class="proj-row">
                    <h3 class='project-status'>Status:</h3>
                    <p class='p-stat'><?php echo $project_status; ?></p>
                </div>
                <?php endif; ?>

                <?php $partners = wp_kses_post( CFS()->get( 'partners' ) );
                if ( $partners ) :?>
                <div class="proj-row">
                    <h3>Partners:</h3>
                    <?php echo $partners; ?>
                </div>
                <?php endif; ?>

                <?php $client = esc_html( CFS()->get( 'project_client' ) );
                if ( $client ) :?>
                <div class="proj-row">
                    <h3>Client:</h3>
                    <p><?php echo $client; ?></p>
                </div>
                <?php endif; ?>

                <?php $cRole = CFS()->get( 'catalyst_role' );
                foreach ( $cRole as $key => $label ) :
                    if ( !($label === 'none') ) : ?>
                    <div class="proj-row">
                        <h3>Catalyst Role:</h3>
                        <p><?php echo $label; ?></p>
                    </div>
                    <?php endif;
                endforeach; wp_reset_postdata(); ?>

                <?php $affordability = wp_kses_post( CFS()->get( 'affordability' ) );
                if ( !empty($affordability) ) :?>
                <div class="proj-row"></div>
                    <h3>Affordability: </h3>
                    <?php echo $affordability; ?>
                <?php endif; ?>

                <?php $financing_grants = wp_kses_post( CFS()->get( 'financing_grants' ) );
                if ( $financing_grants ) :?>
                    <h3>Financial Information: </h3>
                    <?php echo $financing_grants; ?>
                <?php endif; ?>

                <?php $cost = esc_html( CFS()->get( 'cost' ) );
                if ( $cost ) :?>
                <div class="proj-row">
                    <h3>Total Project Cost:</h3>
                    <p><?php echo $cost; ?></p>
                </div>
                <?php endif; ?>

                <?php $beginning_date = esc_html( CFS()->get( 'beginning_date' ) );
                if ( $beginning_date ) :?>
                    <div class="proj-row">
                        <h3>Rental Applications Begin:</h3>
                        <p><?php echo $beginning_date; ?></p>
                    </div>
                <?php endif; ?>

            </div>
    </section>

    <?php $activate_carousel = CFS() -> get( 'activate_project_carousel' );
    if( $activate_carousel === 1 ) : ?>

        <section class='arch-design'>
            <?php $subheading1 = esc_html( CFS()->get( 'subheading1' ) );
            if ( !empty( $subheading1 ) ) : ?>
                <div class="blue-background-header">
                    <h2 class='subheader-lrg'><?php echo $subheading1; ?></h2>
                </div>
            <?php endif; ?>

                <div class="img-carousel">

                    <?php $gallery_images = CFS()->get('gallery_images');
                    foreach ($gallery_images as $image) : ?>
                        <div class="images image-credit-container">
                            <?php echo '<img src="'.$image['image'].'"/>'; ?>
                            <p class='image-credits'>Image: <?php echo esc_html( $image['project_images_credits']); ?></p>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

            <a href="<?php echo get_home_url(); ?>/collaborate" class="navigation-button">Collaborate with us</a>
        </section>
    <?php endif; ?>

    <?php $activate_quotes_carousel = CFS() -> get( 'activate_quotes_carousel' );
    if( $activate_quotes_carousel === 1 ) : ?>
        <section class="quote-carousel">
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
        </section>
    <?php endif; ?>

    <?php endwhile; wp_reset_postdata(); ?>

    <section>

        <?php $subheading2 = esc_html( CFS()->get( 'subheading2' ) );
        if ( !empty( $subheading2 ) ) : ?>
        <div class="blue-background-header">
            <h2 class='subheader-lrg'><?php echo $subheading2 ; ?></h2>
        </div>
        <?php endif; ?>

        <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
    </section>
</div>
<?php get_footer(); ?>
