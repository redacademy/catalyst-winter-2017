<?php

/**
	* Template Name: Our Team Page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php get_template_part( 'template-parts/hero-banner'); ?>

            <div class="content-wrapper">
                <div class="blue-background-header">
                    <h2 class="subheader-lrg">Meet Team Catalyst</h2>
                    <button class="staff-exit-button exit-button" type="button">
                        <span></span>
                    </button>
                </div>
                <div class="thing"></div>
                <div class="staff-profiles-wrapper">
                    <h3 class="small-header">Staff</h3>

                    <?php
                        $args = array( 'post_type' => 'staff', 'order' => 'ASC', 'numberposts' => -1 );
                        $staff_profiles = get_posts( $args ); // returns an array of posts
                    ?>

                    <?php foreach ( $staff_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'staff' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                    <div class="navigation-button-container">
                        <a class="navigation-button" href="<?php echo get_home_url(); ?>/careers">Join Our Team</a>
                    </div>
                </div>

                <div class="board-profiles-wrapper">
                    <div class="board-profiles-header">
                        <h3 class="small-header">Board</h3>
                    </div>

                    <?php
                        $args = array( 'post_type' => 'board', 'order' => 'ASC', 'numberposts' => -1 );
                        $board_profiles = get_posts( $args ); // returns an array of posts
                    ?>

                    <?php foreach ( $board_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'board' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

                <?php
                    $args = array( 'post_type' => 'committee', 'order' => 'ASC', 'numberposts' => -1 );
                    $committee_profiles = get_posts( $args ); // returns an array of posts
                ?>

                <?php if( CFS() -> get( 'activate_committee' ) === 1 ) : ?>

                <div class="committee-profiles-wrapper">
                    <div class="committee-profiles-header">
                        <h3 class="small-header">Committee Members & Past Board Members</h3>
                    </div>

                    <?php foreach ( $committee_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'committee' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

                <?php endif; ?>

                <div class="advisors-profiles-wrapper">
                    <h3 class="small-header">Advisors</h3>

                    <?php $advisors_copy = CFS() -> get('advisors_copy'); ?>

                    <div class="advisors-copy-container">
                        <?php if( !empty( $advisors_copy ) ) : ?>
                            <p class="advisors-copy"><?php echo esc_html( $advisors_copy ); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php
                        $args = array( 'post_type' => 'advisors', 'order' => 'ASC', 'numberposts' => -1 );
                        $advisor_profiles = get_posts( $args ); // returns an array of posts
                    ?>

                    <?php foreach ( $advisor_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'advisors' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <?php $activate_founding_supporter = CFS()->get( 'activate_founding_supporter' );

                if( $activate_founding_supporter === 1 ) : ?>

                <section class="founding-supporter-section">
                    <?php
                    $founding_supporter_heading = esc_html( CFS()->get( 'founding_supporter_heading' ) );
                    $supporter_image = esc_attr( CFS()->get( 'founding_supporter_image' ) );
                    $photo_credit = esc_html( CFS()->get( 'founding_supporter_photocred' ) );
                    $caption = esc_html( CFS()->get( 'founding_supporter_caption' ) );
                    ?>
                    <div class="blue-background-header">
                        <h2 class="subheader-lrg"><?php echo $founding_supporter_heading; ?></h2>
                    </div>

                    <div class="img-container image-credit-container">
                        <img src="<?php echo $supporter_image; ?>">
                        <?php if( !empty( $photo_credit ) ) : ?>
                            <p class="image-credits">Image: <?php echo $photo_credit; ?></p>
                        <?php endif; ?>

                        <?php if( !empty( $caption ) ) : ?>
                            <p class="image-caption"><?php echo $caption; ?></p>
                        <?php endif; ?>
                    </div>
                </section>

                <?php endif; ?>

                <div class="navigation-button-container">
                    <a class="navigation-button" href="<?php echo get_home_url(); ?>/projects">View Projects</a>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
