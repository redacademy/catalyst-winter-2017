<?php

/**
	* Template Name: Contact
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="hero-image-banner">
                <header class="header-text">
                    <p class="entry-title">
                        <?php echo CFS()->get( 'bannertext' ); ?>
                    </p>
                    <p class="banner-text">
                        <?php echo CFS()->get( 'address' ); ?>
                    </p>
                    <p class="banner-text-small">
                        <?php echo CFS()->get( 'email' ); ?>
                    </p>
                </header><!-- .page-header -->
            </div>
            <div class="blue-background">
			    <h2 class="subheader-sm">we would like to hear from you</h2>
		    </div>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="entry-content">
		            <?php the_content(); ?>
		            <?php
			            wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                            'after'  => '</div>',
			            ) );
		            ?>
	            </div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
