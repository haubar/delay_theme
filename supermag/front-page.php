<?php

/**
 * The front-page template file.
 *
 * @package AcmeThemes
 * @subpackage Supermag
 * @since Supermag 1.1.0
 */
get_header(); ?>
<?php
/**
 * supermag_action_front_page hook
 * @since supermag 1.1.0
 *
 * @hooked supermag_front_page -  10
 */
do_action( 'supermag_action_front_page' );
?>
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar( ); ?>
<?php get_footer();