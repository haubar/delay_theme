<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Revelar
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function revelar_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'revelar_body_classes' );

/**
* Remove the 1st gallery shortcode from gallery post format content.
*/
function revelar_strip_first_gallery( $content ) {
	if ( 'gallery' === get_post_format() && 'post' === get_post_type() && get_post_gallery() ) {
		$regex   = get_shortcode_regex( array( 'gallery' ) );
		$content = preg_replace( '/'. $regex .'/s', '', $content, 1 );
		$content = wp_kses_post( $content );
	}

	return $content;
}
add_filter( 'the_content', 'revelar_strip_first_gallery' );
