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

function catalyst_hero_image_css() {

    // $frontpage_id = get_option( 'page_on_front' );
    // $tmp = get_page_template_slug($frontpage_id);

		if ( is_front_page()  === false ) {

            $url = CFS()->get ( 'heroimage');

            $hero_image_css = ".hero-image-banner{
                height: 60vh;
                background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ),
                url({$url}) no-repeat center bottom;
                background-size: cover, cover;
            }";

            wp_add_inline_style( 'red-starter-style', $hero_image_css );
        }

        elseif ( is_front_page() === true ) {
            $url = CFS()->get ( 'heroimage');

            $hero_image_css = ".hero-image-banner{
                height: 110vh;
                background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ),
                url({$url}) no-repeat center bottom;
                background-size: cover, cover;
            }";

            wp_add_inline_style( 'red-starter-style', $hero_image_css );
            return;
        }
    }
    add_action( 'wp_enqueue_scripts', 'catalyst_hero_image_css' );


