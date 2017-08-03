<?php get_header(); ?>


<section class="front-page">
    <header class="hero-image-banner">
        <div class="fp-carousel"><?php $banner_array = CFS()->get('fp_gallery');
            foreach ($banner_array as $image) : ?>
                <div class="fp-img-container image-credit-container">
                    <img class="fp-image" src='<?php echo esc_attr( $image['fp_images'] ); ?>'/>
                    <p class='image-credits'>Image: <?php echo esc_html( $image['fp_image_gallery_credits']); ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="header-text">
            <?php $page_heading = esc_html( CFS()->get( 'fp_page_heading' ) ); ?>
            <?php $banner_text = esc_html( CFS()->get( 'fp_banner_text' ) ); ?>

            <h1><?php echo $page_heading; ?></h1>
            <p><?php echo $banner_text; ?></p>
        </div>
    </header>
    <div class="front-content">

        <?php $intro_copy = esc_html( CFS()->get( 'intro_copy' ) );
        if ( !empty( $intro_copy ) ) :?>
            <p class="intro-copy"><?php echo $intro_copy; ?></p>
        <?php endif; ?>

        <div class="formula">
            <?php $formula_subheader = esc_html( CFS()->get( 'formula_subheader' ) );
            if( !empty( $formula_subheader ) ): ?>
                <div class="blue-background-header">
                    <h2 class='subheader-lrg'><?php echo $formula_subheader; ?></h2>
                </div>
            <?php endif; ?>

            <?php $catalyst_formula_copy = esc_html( CFS()->get( 'catalyst_formula_copy' ) );
            if ( !empty( $catalyst_formula_copy ) ) :?>
                <p class="catalyst-formula-copy"><?php echo $catalyst_formula_copy; ?></p>
            <?php endif; ?>

            <div class="infographic-container">
                <div class="infographic-img">
                    <img src="<?php echo CFS()->get('infographic_img'); ?>" alt="">
                </div>
            </div>

            <a class="navigation-button" href="<?php echo get_home_url(); ?>/our-story">learn more</a>
        </div>


        <div class="projects">
            <div class="blue-background-header">
                <?php $projects_subheader = esc_html( CFS()->get( 'projects_subheader' ) ); ?>
                <h2 class='subheader-lrg'><?php echo $projects_subheader; ?></h2>
            </div>

            <?php $our_projects_copy = CFS()->get( 'our_projects_copy' );
            if ( !empty( $our_projects_copy ) ) :?>
            <p class="our-projects-copy"><?php echo $our_projects_copy; ?></p>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
            <a class="navigation-button" href="<?php echo get_home_url(); ?>/projects">more projects</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>
