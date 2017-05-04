<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Revelar
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function revelar_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'wrapper'		 => false,
		'container'		 => 'main',
		'render'		 => 'revelar_infinite_scroll_render',
		'footer_widgets' => array( 'sidebar-1', 'sidebar-2', 'sidebar-3' ),
		'footer'		 => 'page',
	) );
} // end function revelar_jetpack_setup
add_action( 'after_setup_theme', 'revelar_jetpack_setup' );

/**
 * Define the code that is used to render the posts added by Infinite Scroll.
 *
 * Used to include the correct template part for the blog home page.
 */
function revelar_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_home() ) {
			get_template_part( 'template-parts/content', 'home' );
		} else {
			get_template_part( 'template-parts/content', get_post_format() );
		}
	}
} // end function revelar_infinite_scroll_render

/**
 * Change the wrapper id on the blog index page.
 */
function revelar_infinite_scroll_js_settings( $settings ) {

	if ( is_home() ) {
		$settings['id'] = 'posts-wrapper';
	}

	return $settings;
} // end function revelar_infinite_scroll_js_settings
add_filter( 'infinite_scroll_js_settings', 'revelar_infinite_scroll_js_settings' );

/**
 * Add theme support for Responsive Videos.
 *
 * @since Revelar 1.0
 */
function revelar_responsive_videos_init() {
	add_theme_support( 'jetpack-responsive-videos' );
} // end function revelar_responsive_videos_init
add_action( 'after_setup_theme', 'revelar_responsive_videos_init' );

/**
 * Add theme support for Content Options.
 *
 * @since Revelar 1.0.3
 */
function revelar_content_options_init() {
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => false,
		'author-bio'   => false,
		'post-details' => array(
			'stylesheet' => 'revelar-styles',
			'date'       => 'posted-on',
			'categories' => 'cat-links',
			'tags'       => 'tags-links',
		),
	) );
} // end function revelar_content_options_init
add_action( 'after_setup_theme', 'revelar_content_options_init' );
