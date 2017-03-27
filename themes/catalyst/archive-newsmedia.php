
<?php
/**
	* The template for displaying archive pages.
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <header class="header">
            <div class="hero-image-banner">
			<div class="header-text">
				<p class="entry-subtitle"><?php echo CFS()->get('bannertext'); ?></p>
				</div>
            </div>
        </header>

		<h2>link to other stories</h2>
		<div class="newsmedia-content">
			<?php get_sidebar(); ?>
			<div class="newsmedia-article">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'newsmedia'); ?>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="load-more"><a>load more</a></div>
        </main> <!--#main -->
	</div> <!--#primary -->

<?php get_footer(); ?>
