
<?php
<<<<<<< HEAD:themes/catalyst/news.php
/**
 * Template Name: news
 *
 * @package RED_Starter_Theme
 */
=======
>>>>>>> master:themes/catalyst/page-templates/news.php

/**
	* Template Name: news
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <header class="header">
            <div class="herobanner">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

	<?php get_sidebar(); ?>
        </main> <!--#main -->
<<<<<<< HEAD:themes/catalyst/news.php

    </div> <!--#primary -->
=======
	</div> <!--#primary -->
>>>>>>> 34779e15a6fe7d5d82175d165d64b9053e420db9
>>>>>>> master:themes/catalyst/page-templates/news.php

<?php get_footer(); ?>
