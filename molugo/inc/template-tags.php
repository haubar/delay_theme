<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Revelar
 */

if ( ! function_exists( 'revelar_footer_class' ) ) :
/**
 * Count the number of footer sidebars to enable dynamic classes for the footer.
 */
function revelar_footer_class() {
	$column_count = 0;
	$class = '';

	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$column_count++;
	}
	if ( is_active_sidebar( 'sidebar-2' ) ) {
		$column_count++;
	}
	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$column_count++;
	}

	if ( $column_count > 0 ) {
		$class = 'columns-' . $column_count;
	}

	echo esc_attr( $class );
}
endif;

if ( ! function_exists( 'revelar_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time.
 */
function revelar_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	echo '<span class="posted-on"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></span>'; // WPCS: XSS OK

}
endif;

if ( ! function_exists( 'revelar_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function revelar_post_meta() {
	// Display post date/time information.
	revelar_posted_on();

	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'revelar' ) );
		if ( $categories_list && revelar_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'revelar' ) . '</span>', $categories_list ); // WPCS: XSS OK
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'revelar' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'revelar' ) . '</span>', $tags_list ); // WPCS: XSS OK
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'revelar' ), esc_html__( '1 Comment', 'revelar' ), esc_html__( '% Comments', 'revelar' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'revelar' ), '<span class="edit-link">', '</span>' );
}
endif;

if ( ! function_exists( 'revelar_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function revelar_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'revelar' ), array( 'span' => array( 'class' => array() ) ) ),
			'<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
		)
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'revelar_excerpt_more' );
endif;

if ( ! function_exists( 'revelar_categorized_blog' ) ) :
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function revelar_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'revelar_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'revelar_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so revelar_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so revelar_categorized_blog should return false.
		return false;
	}
}
endif;

if ( ! function_exists( 'revelar_post_formats' ) ) :
/*
 * Return the post format, linked to the post format archive
 */
function revelar_post_format() {
	$format = get_post_format();
	$formats = get_theme_support( 'post-formats' );

	if ( 'post' == get_post_type() && $format && in_array( $format, $formats[0] ) ) :

		printf( '<a class="post-format-link" href="%1$s" title="%2$s"><span class="screen-reader-text">%3$s</span><span class="entry-format"></span></a>',
					esc_url( get_post_format_link( $format ) ),
					esc_attr( sprintf( __( 'All %s posts', 'revelar'  ), get_post_format_string( $format ) ) ),
					esc_attr( get_post_format_string( $format ) )
				);
	else :
		echo wp_kses( '<span class="entry-format"></span>', array( 'span' => array( 'class' => array() ) ) );
	endif;
}
endif;

/**
 * Flush out the transients used in revelar_categorized_blog.
 */
function revelar_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'revelar_categories' );
}
add_action( 'edit_category', 'revelar_category_transient_flusher' );
add_action( 'save_post',     'revelar_category_transient_flusher' );
