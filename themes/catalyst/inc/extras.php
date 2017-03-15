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




// second version
function hero_banner_css() {
	if(!is_page_template('page-our-story.php')){
		return;
	}

	$image = CFS()->get( 'heroimage' );
		if(!$image){
			return;
		}
		echo $image;
	$hero_css = ".page-template-default .herobanner {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: 100px 100px;
}";
	wp_add_inline_style( 'red-starter-style', $hero_css );

} add_action('wp_enqueue_scripts', 'hero_banner_css' );

// // first version
// function hero_banner() {
// 	wp_enqueue_style(
// 		'custom-style', get_template_directory_uri().'/build/css/style.css'
// 	);
// 	$url = CFS()->get( 'heroimage' );
// 	$custom_css = ".about_header{ background:
// 	linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100% ), url($url), no-repeat center 0px;
// 	background-size: cover}";
// 	wp_add_inline_style( 'custom-style', $custom_css );
// }
// add_action( 'wp_enqueue_scripts', 'hero_banner' );
