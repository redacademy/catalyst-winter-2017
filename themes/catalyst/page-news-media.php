
<?php
/**
    * Template Name: news and meida
    *
    * @package Catalyst Theme
    */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

       <?php get_template_part( 'template-parts/hero-banner'); ?>

        <div class="video"><?php echo CFS()->get('video'); ?></div>


<h2>link to other stories</h2>
<div class="newsmedia-content">
    <?php get_sidebar(); ?>
    <div class="newsmedia-article">
        <?php $newsarticles = get_posts( array(
            'post_type' => 'newsmedia',
            'order' => 'DSC',
            'numberposts' => '5',
            ));
             foreach ( $newsarticles as $newsarticle ) : setup_postdata( $newsarticle ); ?>

             <article id="post-<?php echo $newsarticle->ID ?>" class="news">
                <?php
                $img = get_the_post_thumbnail($newsarticle->ID);
                if(!empty($img)){
                echo "<div class='article-thumb' style='height:150px'>".$img."</div>";
                }else{
                    echo " <div class='article-thumb' style='height:0px'></div>";
                };
                ?>
                <div class="article-content">
                <p class="date"><?php echo get_the_date("m d, Y", $newsarticle->ID) ?></p>
                <h3><?php echo get_the_title($newsarticle->ID) ?></h3>
                <?php echo get_template_part( 'template-parts/content', 'newsmedia'); ?>
                </div>
                <?php echo CFS()->get('link', $newsarticle->ID); ?>
            </article>
        <?php endforeach; ?>

    </div>
</div>

        <div class="load-more"><a class="load-more-button">load more</a></div>
        </main> <!--#main -->
    </div> <!--#primary -->

<?php get_footer(); ?>
