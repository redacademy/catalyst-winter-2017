<!--hero banners for pages-->
<header>
    <div class="hero-image-banner image-credit-container">
        <div class="header-text">
        <?php
        $page_heading = esc_html( CFS()->get( 'page_heading' ) );
        if ( !empty( $page_heading ) ) :
        ?>
        <h1 class="entry-title"><?php echo $page_heading; ?> </h1>
        <?php endif; ?>
        <?php
        $banner_text = esc_html( CFS()->get( 'banner_text' ) );
        if ( !empty( $banner_text ) ) :
        ?>
        <p class="banner-text"><?php echo $banner_text; ?></p>
        <?php endif; ?>
        </div>
        <p class="image-credits">Image: <?php echo esc_html( CFS()->get( 'hero_image_credits' ) ); ?></p>
    </div>
</header>


<?php
$intro_copy = CFS()->get( 'intro_copy' );
    if ( !empty( $intro_copy ) ) :
?>
    <p class="intro-copy"><?php echo esc_html($intro_copy); ?></p>
<?php endif; ?>
