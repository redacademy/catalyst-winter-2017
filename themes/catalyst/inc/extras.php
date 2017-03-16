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