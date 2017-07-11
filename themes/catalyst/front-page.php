<?php get_header(); ?>


<section class="front-page">
    <header class="hero-image-banner">
        <div class="fp-carousel"><?php $banner_array = CFS()->get('fp_gallery');
            foreach ($banner_array as $image) : ?>
                <div class="fp-img-container">
                    <img class="fp-image" src='<?php echo esc_attr( $image['fp_images'] ); ?>'/>
                </div>
            <?php endforeach ?>
        </div>
        <div class="header-text">
            <h1>we improve the quality of peoples lives</h1>
            <p>We build communities.</p>
            <p>We use real estate to affect social change.</p>
        </div>
    </header>
    <div class="front-content">
        <div class="formula">
            <div class="blue-background-header">
                <h2 class='subheader-lrg'>the catalyst formula</h2>
            </div>

            <?php $catalyst_formula_copy = esc_html( CFS()->get( 'catalyst_formula_copy' ) );
            if ( !empty( $catalyst_formula_copy ) ) :?>
            <p class="catalyst-formula-copy"><?php echo $catalyst_formula_copy; ?></p>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/ourStory-carousel', 'projects carousel' ); ?>
            <a class="navigation-button" href="<?php echo get_home_url(); ?>/our-story">learn more</a>
        </div>


        <div class="projects">
            <div class="blue-background-header">
                <h2 class='subheader-lrg'>our projects</h2>
            </div>

            <?php $our_projects_copy = CFS()->get( 'our_projects_copy' );
            if ( !empty( $our_projects_copy ) ) :?>
            <p class="our-projects-copy"><?php echo $our_projects_copy; ?></p>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
            <a class="navigation-button" href="<?php echo get_home_url(); ?>/projects">view more projects</a>
        </div>

        <div class="team">
            <div class="blue-background-header">
                <?php $team_catalyst_subheader = esc_html( CFS()->get( 'team_catalyst_subheader' ) );
                if ( !empty( $team_catalyst_subheader ) ) :?>
                <h2 class="subheader-lrg"><?php echo $team_catalyst_subheader; ?></h3>
                <?php endif; ?>
            </div>

            <?php $team_catalyst_copy = esc_html( CFS()->get( 'team_catalyst_copy' ) );
            if ( !empty( $team_catalyst_copy ) ) :?>
            <p class="team-catalyst-copy"><?php echo $team_catalyst_copy; ?></p>
            <?php endif; ?>

            <a class="navigation-button" href="<?php echo get_home_url(); ?>/our-team">Meet Our Team</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>
