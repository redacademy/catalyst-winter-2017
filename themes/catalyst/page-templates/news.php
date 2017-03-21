
<?php
/**
	* Template Name: news and meida
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
	<div class="newsmedia-twitter">
	<div class="twitter1"><?php echo CFS()->get( 'twitter_post1' ); ?></div>
	<div class="twitter2"><?php echo CFS()->get( 'twitter_post2' ); ?></div>
	<div class="twitter3"><?php echo CFS()->get( 'twitter_post3' ); ?></div>
	</div>

	<div class="newsmedia-article">
		<?php
			$args = array(
			'post_type' => 'newsmedia_type',
			'order' => 'ASC',
			'numberposts' => 5 );
			$newsmedia_article = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $newsmedia_article as $newsmedia ) : setup_postdata( $newsmedia ); ?>
			<div class="<?php echo $newsmedia_article->name ?>">
       	 	<?php echo get_the_post_thumbnail( $newsmedia ) ?>
			<p><?php red_starter_posted_on(); ?></p>
			<h3><?php echo get_the_title( $newsmedia ) ?></h3>
            <p><?php get_template_part( 'template-parts/content', 'newsmedia_type' ); ?></p>
			</div>
        <?php endforeach; wp_reset_postdata(); ?>
	</div>

</div>
		<div class="load-more"><a>load more</a></div>
        </main> <!--#main -->
	</div> <!--#primary -->

<?php get_footer(); ?>
