
<?php
/**
 * Template Name: news
 *
 * @package RED_Starter_Theme
 */


/**
	* Template Name: news
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <header class="header">
            <div class="hero-image-banner">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p class="entry-subtitle"><?php echo CFS()->get('bannertext'); ?></p>
            </div>
        </header>
		<div class="video">youtube</div>
		<?php get_sidebar(); ?>
		<div class="load-more"><a>load more</a></div>
        </main> <!--#main -->
	</div> <!--#primary -->

<?php get_footer(); ?>
