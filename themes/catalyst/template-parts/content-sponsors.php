<?php
/**
 * Template part for displaying sponsor logos.
 *
 * @package Catalyst_Theme
 */

?>

<section>
  <div class="blue-background-header">
    <h2 class="subheader-lrg supporters-header">Our Supporters</h2>
  </div>

  <div class="supporters-logo-container">
    <?php

    $args = array( 'post_type' => 'sponsor', 'order' => 'ASC', 'numberposts' => '-1' );
    $sponsors = get_posts( $args ); // returns an array of posts
    ?>

    <?php foreach ( $sponsors as $post ) : setup_postdata( $post ); ?>
      <img class="sponsor-logo" src="<?php echo get_the_post_thumbnail_url($post, 'full') ; ?>" alt="sponsor logo"/>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
</section>
