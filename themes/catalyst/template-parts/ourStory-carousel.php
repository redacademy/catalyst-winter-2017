<?php
/**
 * Template part for displaying projects carousel.
 *
 * @package Catalyst_Theme
 */

?>

<div class="formula-carousel">
    
	<?php $formula_images = CFS()->get('formula', 21);
	foreach ($formula_images as $images) : ?>
		<div class="formulas">
			<div>
				<?php echo '<img class="img" src="'.esc_attr( $images['formula_image'] ).'"/>'; ?>
				
				<?php $fill_image = $images['fill'];
				if ( !empty( $fill_image ) ) : ?>
					<img class="fill" src="<?php echo esc_attr( $fill_image ); ?> "/>
				<?php endif; ?>
			</div>
				<p class='formula-text'> <?php echo $images['formula_text']; ?> </p>
		</div>
	<?php endforeach; wp_reset_postdata();?>
	
</div>