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

<<<<<<< HEAD

function news_hero_banner_css() {
	if(!is_page_template('news.php')){
=======
function catalyst_project_css() {
    
		$url = CFS()->get ( 'banner_image'); 

        $single_project_css = "
        .single-projects .single-content .banner{ 
            background:url($url) no-repeat center bottom;
			background-size: cover;
			height: 375px;
        }";

        wp_add_inline_style( 'red-starter-style', $single_project_css );
    }
    add_action( 'wp_enqueue_scripts', 'catalyst_project_css' );

// second version
function our_story_hero_banner_css() {
	if(!is_page_template('page-our-story.php')){
>>>>>>> master
		return;
	}

	$image = CFS()->get( 'heroimage' );
		if(!$image){
			return;
		}
<<<<<<< HEAD
	$hero_css = ".page-template-news .herobanner {
=======

	$hero_css = ".page-template-page-our-story .herobanner {
>>>>>>> master
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center 100%;
        background-size: cover, cover;
		height: 65vh;
<<<<<<< HEAD
}";
	wp_add_inline_style( 'red-starter-style', $hero_css );

} add_action('wp_enqueue_scripts', 'news_hero_banner_css' );
=======

}";
	wp_add_inline_style( 'red-starter-style', $hero_css );

} add_action('wp_enqueue_scripts', 'our_story_hero_banner_css' );

// Add header image for collaborate page 

function catalyst_collaborate_image_css() {

    if ( ! is_page_template('page-templates/collaborate.php') ) {
        return;
    } 

    $image = CFS()->get('heroimage');

    if ( ! $image ) {
        return;
    }

    $hero_css = ".hero-image-banner{
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
		url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";

    wp_add_inline_style( 'red-starter-style', $hero_css );
}

add_action('wp_enqueue_scripts', 'catalyst_collaborate_image_css');
>>>>>>> master
