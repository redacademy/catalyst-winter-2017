
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

        <?php $subheading1 = esc_html( CFS()->get( 'subheading1' ) );
        if( !empty( $subheading1 ) ): ?>
        <div class="blue-background-header">
            <h2 class="subheader-lrg"><?php echo $subheading1; ?></h2>
        </div>
        <?php endif; ?>

        <div class="newsmedia-content">
            <?php get_sidebar(); ?>

            <div class="newsmedia-article">
                <?php $newsarticles = get_posts( array(
                    'post_type' => 'newsmedia',
                    'order' => 'DSC',
                    'numberposts' => '5',
                    ));
                foreach ( $newsarticles as $newsarticle ) : setup_postdata( $newsarticle );
                    $img = get_the_post_thumbnail($newsarticle->ID);
                    if(!empty( $img )) {;
                    ?>
                        <article id="post-<?php echo $newsarticle->ID ?>" class="news">
                            <?php
                                if(!empty($img)){
                                    echo "<div class='article-thumb'>".$img."</div>";
                                }else{
                                    echo " <div class='article-thumb' style='height:0px'></div>";
                                };
                            ?>

                            <div class="article-content">
                                <p class="date"><?php echo get_the_date("m.d.Y", $newsarticle->ID) ?></p>

                                <h3><?php echo get_the_title($newsarticle->ID) ?></h3>
                            </div>

                            <?php echo CFS()->get('link', $newsarticle->ID); ?>
                        </article>

                    <?php }else { ;?>
                        <article id="post-<?php echo $newsarticle->ID ?>" class="news no-image">
                            <?php
                                echo " <div class='article-thumb' style='height:0px'></div>";
                            ?>

                            <div class="article-content">
                                <p class="date"><?php echo get_the_date("m.d.Y", $newsarticle->ID) ?></p>

                                <h3><?php echo get_the_title($newsarticle->ID) ?></h3>
                            </div>

                            <?php echo CFS()->get('link', $newsarticle->ID); ?>
                        </article>
                    <?php };?>
                <?php endforeach; ?>

                <div class="video"><?php echo CFS()->get( 'video' ); ?></div>
            </div>
        </div>
    </main> <!--#main -->
</div> <!--#primary -->

<?php get_footer(); ?>
