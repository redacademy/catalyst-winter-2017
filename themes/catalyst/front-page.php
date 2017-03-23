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
            <p class="catalyst-formula-copy"><?php echo CFS()->get( 'catalyst_formula_copy' ); ?></p>
            <?php get_template_part( 'template-parts/ourStory-carousel', 'projects carousel' ); ?>
             <div class="readmore"><a href="">learn more</a></div>
        </div>

        <div class="projects">
            <h2>our projects</h2>
            <p class="our-projects-copy"><?php echo CFS()->get( 'our_projects_copy' ); ?></p>
            <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
             <div class="readmore"><a>view more projects</a></div>
        </div>

        <div class="team">
            <h2>team catalyst</h2>
            <p class="team-catalyst-copy"><?php echo CFS()->get( 'team_catalyst_copy' ); ?></p>
            <h3 class="small-subheader"><?php echo CFS()->get( 'team_catalyst_subheader' ); ?></h3>

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