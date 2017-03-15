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

<<<<<<< HEAD
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
=======
        <div class="header">
            <h1>news & media</h1>
            <div class="hero banner"></div>
        </div>

        <div class="video"></div>

        <div>
            <h2>Links to other stories</h2>
            <div class="stories">
            <ul class="twitter">
                <li class="twitter-list"></li>
                <li class="twitter-list"></li>
                <li class="twitter-list"></li>
            </ul>
            <ul class="article">
                <li class="article-list"></li>
                <li class="article-list"></li>
                <li class="article-list"></li>
            </ul>
            </div>
        </div>
        <div class="load-more">
        <a href="">load more</a>
		<div>
        </main> <!--#main -->
	</div> <!--#primary -->
>>>>>>> 34779e15a6fe7d5d82175d165d64b9053e420db9

<?php get_footer(); ?>
