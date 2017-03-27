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
                <a href="<?php echo get_permalink() ?>"><img src='<?php echo CFS()->get('heroimage', $id); ?>' /></a>
            </div>
            <p class='project-name'><?php echo CFS()->get('project_name', $id); ?></p>
            <p class='project-location'>Location: <?php echo CFS()->get('project_location', $id); ?></p>
            <p class='project-status'>Status: <span><?php echo CFS()->get('project_status', $id); ?></span></p>
            <div class="left-quotation-mark"></div>
            <div class="quotes-wrapper">
                <?php $quotes_array = CFS()->get('quotes_gallery', $id);
                $first_quotes_object = array_slice($quotes_array,0,1);
                foreach ($first_quotes_object as $quote) : ?>
                    <p class="quote"><?php echo $quote['quotes']; ?></p> 
                    <p class="person"> <?php echo $quote['person']; ?></p> 
                    <p class="line"> <?php echo $quote['line2']; ?></p>
                    <p class="line"> <?php echo $quote['line1']; ?></p> 
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <div class="right-quotation-mark"></div>
        </div>

    <?php endforeach; wp_reset_postdata();?>
</div>
