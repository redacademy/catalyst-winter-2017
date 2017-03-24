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
					<a href="">careers</a>
					<a href="">news & media</a>
					</div>

					<div class="company-info">
						<!--<div class="footer-title">-->

							<?php
							/**
							* The footer containing the footer-1 widget area.s
							*
							* @package Catalyst_Theme
							*/

							if ( ! is_active_sidebar( 'footer-1' ) ) {
								return;
							}
							?>

							<div id="secondary" class="footer-widget-area" role="complementary">
								<div class="footerLogo"></div>
								<?php dynamic_sidebar( 'footer-1' ); ?>
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
