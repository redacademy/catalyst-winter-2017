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
								<?php echo '<img class="img" src="'.$images['formula_image'].'"/>';
								echo '<img class="fill" src="'.$images['fill'].'"/>'; ?>
							</div>
								<p class='formula-text'> <?php echo $images['formula_text']; ?> </p>
						</div>
					<?php endforeach; wp_reset_postdata();?>
				</div>