<?php
/**
 * Template part for displaying projects carousel.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="formula-carousel" data-flickity='{ "pageDots": false, "imagesLoaded": true, "watchCSS": true }'>
    
					<?php $formula_images = CFS()->get('formula', 21);
					foreach ($formula_images as $images) : ?>
						<div class="formulas">
							<div>
								<?php echo '<img class="img" src="'.$images['formula_image'].'"/>';
								echo '<img class="fill" src="'.$images['fill'].'"/>'; ?>
							</div>
								<p class='formula-text'> <?php echo $images['formula_text']; ?> </p>
						</div>
					<?php endforeach ?>
				</div>