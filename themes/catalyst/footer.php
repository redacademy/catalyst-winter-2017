<?php
/**
 * The template for displaying the footer.
 *
 * @package Catalyst_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer">
					<div class="page-link">
					<a href="<?php echo get_home_url(); ?>/collaborate">collaborate</a>
					<a href="<?php echo get_home_url(); ?>/news-media">news + media</a>
					</div>

					<div class="company-info">
							<div id="secondary" class="footer-widget-area" role="complementary">
								<!--<div class="footerLogo"></div>-->
								<?php if ( function_exists('dynamic_sidebar') || dynamic_sidebar('Footer') ) : ?>
								<?php endif; ?>
								<?php dynamic_sidebar( 'Footer' ); ?>
							</div><!-- #secondary -->
						</div>

					<div class="sns-icon">
						<a href="https://twitter.com/catalyst_cds"><div class="twitter"></div></a>
						<a href="https://www.linkedin.com"><div class="linkedin"></div></a>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
