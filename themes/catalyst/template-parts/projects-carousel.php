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
                <a href="<?php echo get_permalink() ?>"><img src='<?php echo esc_attr( CFS()->get('heroimage', $id) ); ?>' /></a>
            </div>
<<<<<<< HEAD
            <p class='project-name'><?php echo esc_html( CFS()->get('project_name', $id) ); ?></p>
            <p class='project-location'>Location: <?php echo esc_html( CFS()->get('project_location', $id) ); ?></p>
            <p class='project-status'>Status: <span><?php echo esc_html( CFS()->get('project_status', $id) ); ?></span></p>
=======

            <?php $project_name = CFS()->get('project_name', $id);
            if ( !empty( $project_name ) ) :?>
            <p class='project-name'><?php echo $project_name; ?></p>
            <?php endif; ?>

            <?php $project_location = CFS()->get('project_location', $id);
            if ( !empty( $project_location ) ) :?>
            <p class='project-location'>Location: <?php echo $project_location; ?></p>
            <?php endif; ?>

            <?php $project_status = CFS()->get('project_status', $id);
            if ( !empty( $project_status ) ) :?>
            <p class='project-status'>Status: <span><?php echo $project_status; ?></span></p>
            <?php endif; ?>

>>>>>>> b6363f30eeae9b0216062d91b2de5b76d446cf09
            <div class="left-quotation-mark"></div>
            <div class="quotes-wrapper">
                <?php $quotes_array = CFS()->get('quotes_gallery', $id);
                $first_quotes_object = array_slice($quotes_array,0,1);
<<<<<<< HEAD
                if ( !empty( $quotes_array ) ) : ?>
                    <?php foreach ($first_quotes_object as $quote) : ?>
                        <p class="quote"><?php echo esc_html( $quote['quotes'] ); ?></p> 
                        <p class="person"> <?php echo esc_html( $quote['person'] ); ?></p> 
                        <p class="line"> <?php echo esc_html( $quote['line2'] ); ?></p>
                        <p class="line"> <?php echo esc_html( $quote['line1'] ); ?></p> 
                    <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>
=======
                foreach ($first_quotes_object as $quote) : ?>
                    <p class="quote"><?php echo $quote['quotes']; ?></p>
                    <p class="person"> <?php echo $quote['person']; ?></p>
                    <p class="line"> <?php echo $quote['line2']; ?></p>
                    <p class="line"> <?php echo $quote['line1']; ?></p>
                <?php endforeach; wp_reset_postdata(); ?>
>>>>>>> b6363f30eeae9b0216062d91b2de5b76d446cf09
            </div>
            <div class="right-quotation-mark"></div>
        </div>

    <?php endforeach; wp_reset_postdata();?>
</div>
