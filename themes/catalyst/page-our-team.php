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
            <div class="blue-background">
                <h2 class="subheader-lrg">Meet Team Catalyst</h2>
                <button class="staff-exit-button exit-button" type="button"><span>X</span></button>
            </div>

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
                    <button class="board-exit-button exit-button" type="button"><span>X</span></button>
                </div>

                <?php
                    $args = array( 'post_type' => 'board', 'order' => 'ASC', 'numberposts' => -1 );
                    $board_profiles = get_posts( $args ); // returns an array of posts
                ?>

                <?php foreach ( $board_profiles as $post ) : setup_postdata( $post ); ?>
                    <?php get_template_part( 'template-parts/content', 'board' ); ?>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>

            <div class="advisors-profiles-wrapper">
                <h3 class="small-header">Advisors</h3>

                <?php
                    $args = array( 'post_type' => 'advisors', 'order' => 'ASC', 'numberposts' => -1 );
                    $advisor_profiles = get_posts( $args ); // returns an array of posts
                ?>

                <?php foreach ( $advisor_profiles as $post ) : setup_postdata( $post ); ?>
                    <?php get_template_part( 'template-parts/content', 'advisors' ); ?>
                <?php endforeach; wp_reset_postdata(); ?>
                <div class="navigation-button-container">
                    <a class="navigation-button" href="<?php echo get_home_url(); ?>/projects">View Projects</a>
                </div>
            </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>