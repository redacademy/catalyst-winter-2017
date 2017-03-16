<?php /* Template Name: news-template */ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="header">
            <h1>news & media</h1>
            <div class="hero banner"></div>
        </div>

        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


        </main> <!--#main -->
	</div> <!--#primary -->

<?php get_footer(); ?>
