<!--hero banners for pages-->
<header>
    <div class="hero-image-banner">
    <div class="header-text">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php
    $bannertext = CFS()->get( 'bannertext' );
    if ( !empty( $bannertext ) ) :
    ?>
    <p class="banner-text"><?php echo $bannertext; ?></p>
    <?php endif; ?>
    </div>
    </div>
</header>


<?php
$intro_copy = CFS()->get( 'intro_copy' );
    if ( !empty( $intro_copy ) ) :
?>
    <p class="intro-copy"><?php echo $intro_copy; ?></p>
<?php endif; ?>
