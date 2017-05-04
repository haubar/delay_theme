<?php
/**
 * Excerpt length 90 return
 *
 * @since supermag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( !function_exists('supermag_alter_excerpt') ) :
    function supermag_alter_excerpt(){
        return 90;
    }
endif;

add_filter('excerpt_length', 'supermag_alter_excerpt');

/**
 * Add ... for more view
 *
 * @since supermag 1.1.0
 *
 * @param null
 * @return null
 *
 */

if ( !function_exists('supermag_excerpt_more') ) :
    function supermag_excerpt_more($more) {
        return '...';
    }
endif;
add_filter('excerpt_more', 'supermag_excerpt_more');