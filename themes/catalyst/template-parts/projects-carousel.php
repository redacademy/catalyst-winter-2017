<?php
/**
 * Template part for displaying projects carousel.
 *
 * @package Catalyst_Theme
 */

?>

<div class="other-post-gallery">
    <?php $posts = get_posts( array(
        'post_type' => 'projects',
        'order' => 'ASC',
    ));
    foreach ( $posts as $post ) :
        $id = get_the_id(); ?>
        <div class="other-proj-wrapper">
            <div class="image-wrapper">
                <a href="<?php echo get_permalink() ?>"><img src='<?php echo esc_attr( CFS()->get('pBanner', $id) ); ?>' /></a>
            </div>

            <p class='project-name'><?php echo esc_html( CFS()->get('project_name', $id) ); ?></p>
            <p class='project-location'>Location: <?php echo esc_html( CFS()->get('project_location', $id) ); ?></p>
            <p class='project-status'>Status: <span><?php echo esc_html( CFS()->get('project_status', $id) ); ?></span></p>


            <div class="quotes-wrapper">
                <?php $quotes_array = CFS()->get('quotes_gallery', $id);
                $first_quotes_object = array_slice($quotes_array,0,1);

                if ( !empty( $quotes_array ) ) : ?>
                    <?php foreach ($first_quotes_object as $quote) : ?>
                        <div class="quote">
                        <div class="left-quotation-mark"></div>
                        <p><?php echo esc_html( $quote['quotes'] ); ?></p>
                         <div class="right-quotation-mark"></div>
                        </div>
                        <p class="person"> <?php echo esc_html( $quote['person'] ); ?></p>
                        <p class="line"> <?php echo esc_html( $quote['line2'] ); ?></p>
                        <p class="line"> <?php echo esc_html( $quote['line1'] ); ?></p>
                    <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

        </div>

    <?php endforeach; wp_reset_postdata();?>
</div>
