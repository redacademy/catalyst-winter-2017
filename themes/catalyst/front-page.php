<?php get_header(); ?>


<section class="front-page">
    <header class="hero-image-banner">
        <div class="fp-carousel"><?php $banner_array = CFS()->get('fp_gallery');
            foreach ($banner_array as $image) : ?>
                <img class="fp-image" src='<?php echo $image['fp_images']; ?>'/>
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
            <h2>the catalyst formula</h2>
            <!--<p class="catalyst-formula-copy">-->
            <?php $catalyst_formula_copy = CFS()->get( 'catalyst_formula_copy' );
            if ( !empty( $catalyst_formula_copy ) ) :?>
            <p class="catalyst-formula-copy"><?php echo $catalyst_formula_copy; ?></p>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/ourStory-carousel', 'projects carousel' ); ?>
            <div class="readmore"><a href="">learn more</a></div>
        </div>

        <div class="projects">
            <h2>our projects</h2>
            <?php $our_projects_copy = CFS()->get( 'our_projects_copy' );
            if ( !empty( $our_projects_copy ) ) :?>
            <p class="our-projects-copy"><?php echo $our_projects_copy; ?></p>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
            <div class="readmore"><a>view more projects</a></div>
        </div>

        <div class="team">
            <h2>team catalyst</h2>
            <?php $team_catalyst_copy = CFS()->get( 'team_catalyst_copy' );
            if ( !empty( $team_catalyst_copy ) ) :?>
            <p class="team-catalyst-copy"><?php echo $team_catalyst_copy; ?></p>
            <?php endif; ?>

            <?php $team_catalyst_subheader = CFS()->get( 'team_catalyst_subheader' );
            if ( !empty( $team_catalyst_subheader ) ) :?>
            <h3 class="small-subheader"><?php echo $team_catalyst_subheader; ?></h3>
            <?php endif; ?>

            <div class="member-carousel">
                <?php $members = CFS()->get('team_members');
                    foreach ( $members as $member ) : setup_postdata( $member ); ?>
                    <div class="member">
                        <img class="member_img" src='<?php echo $member['member']; ?>' />
                        <p class="member-name"> <?php echo $member['member_name']; ?> </p>
                        <p class="position"> <?php echo $member['position']; ?> </p>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <div class="readmore"><a>collaborate with us</a></div>
        </div>
    </div>
</section>



<?php get_footer(); ?>