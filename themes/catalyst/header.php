<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://use.fontawesome.com/1679034438.js"></script>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="container">
						<div class="logo">
							<a href="<?php  echo esc_url( home_url( '/' ) ); ?>"><h1 class="header-logo">Catalyst Logo</h1></a>
						</div>
							<div class="top-menu">
							<div class="desktop-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', ) ); ?>
							</div>

							<div class="hamburger-menu">
							<button class="hamburger">&#9776;</button>
							<div class="list">
							<button class="cross">&#735;</button>
							<div class="mobile-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', ) ); ?>
							</div>
							</div>
						</div>
					</div>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">


