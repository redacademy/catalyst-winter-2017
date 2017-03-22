
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
    <?php get_sidebar(); ?>
    <div class="newsmedia-article">
        <?php $newsarticles = get_posts( array(
            'post_type' => 'newsmedia',
            'order' => 'ASC',
            ));
             foreach ( $newsarticles as $newsarticle ) : setup_postdata( $newsarticle ); ?>

             <div id="news" class="<?php echo $newsarticle->ID ?>">
                <?php echo get_the_post_thumbnail($newsarticle->ID) ?>

                <div class="article-content">
                <p class="date"><?php echo get_the_date("m d, Y", $newsarticle->ID) ?></p>
                <h3><?php echo get_the_title($newsarticle->ID) ?></h3>
                <?php echo get_template_part( 'template-parts/content', 'newsmedia'); ?>
				<?php echo CFS()->get('link', $newsarticle->ID); ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>












        <div class="load-more"><a>load more</a></div>
        </main> <!--#main -->
    </div> <!--#primary -->

<?php get_footer(); ?>
