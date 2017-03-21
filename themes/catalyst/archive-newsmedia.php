
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
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p class="entry-subtitle"><?php echo CFS()->get('bannertext'); ?></p>
				</div>
            </div>
        </header>

		<div class="video"><?php echo CFS()->get('video'); ?></div>


<h2>link to other stories</h2>
<div class="newsmedia-content">
	<?php get_sidebar(); ?>
	<div class="newsmedia-article">
		<?php
			$args = array(
			'post_type' => 'newsmedia',
			'order' => 'ASC',
			'numberposts' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' )
			);
			$newsmedia_article = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $newsmedia_article as $newsmedia ) : setup_postdata( $newsmedia ); ?>
			<div class="<?php echo $newsmedia->ID ?>">

	            <?php get_template_part( 'template-parts/content', 'newsmedia'); ?>

			</div>
        <?php endforeach; wp_reset_postdata(); ?>

	</div>
</div>

		<div class="load-more"><a>load more</a></div>
        </main> <!--#main -->
	</div> <!--#primary -->

<?php get_footer(); ?>
