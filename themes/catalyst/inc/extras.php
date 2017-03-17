<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function news_hero_banner_css() {
	if(!is_page_template('news.php')){
		return;
	}

	$image = CFS()->get( 'newsheroimage' );
		if(!$image){
			return;
		}
	$hero_css = ".page-template-news .herobanner {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center 100%;
        background-size: cover, cover;
		height: 65vh;
}";
	wp_add_inline_style( 'red-starter-style', $hero_css );

} add_action('wp_enqueue_scripts', 'news_hero_banner_css' );
