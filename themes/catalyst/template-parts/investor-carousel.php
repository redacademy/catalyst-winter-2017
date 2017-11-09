<?php
/**
 * Template part for displaying investors testimonials carousel.
 *
 * @package Catalyst_Theme
 */

?>
<?php
    $postid = get_the_ID();
    $posts = get_posts( array(
        'post_type' => 'inv_testimonials',
        'order' => 'ASC',
    )); ?>

<div class="testimonials">
  <div class="blue-background-header">
    <h2 class="subheader-lrg">Testimonials</h2>
  </div>

  <div class="other-post-gallery">
      <?php foreach ( $posts as $post ) :
          $id = get_the_id(); ?>
          <div class="other-proj-wrapper">
              <div class="quotes-wrapper">
                  <?php $quote = CFS()->get('quote', $id); ?>

                  <div class="quote">
                      <div class="left-quotation-mark"></div>

                      <p>
                          <?php echo esc_html( $quote ); ?>
                          <span class="quote-target">
                              <div class="right-quotation-mark"></div>
                          </span>
                      </p>
                  </div>

                  <p class="person"> <?php echo esc_html( CFS()->get( 'person' ) ); ?></p>
                  <p class="line"> <?php echo esc_html( CFS()->get( 'line1' ) ); ?></p>
                  <p class="line"> <?php echo esc_html( CFS()->get( 'line2' ) ); ?></p>

              </div>
          </div>

      <?php endforeach; wp_reset_postdata();?>
  </div>
</div>
