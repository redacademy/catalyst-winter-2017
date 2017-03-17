<?php /* Template Name: news */ ?>
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

        <header class="header">
            <div class="herobanner"></div>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

	<?php get_sidebar(); ?>
        </main> <!--#main -->

    </div> <!--#primary -->

<?php get_footer(); ?>
