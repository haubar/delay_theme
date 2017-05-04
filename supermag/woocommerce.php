<?php
/**
 * The template for woocommerce pages.
 *
 *
 * @package Acmethemes
 * @subpackage SuperMag
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if ( have_posts() ) :
            woocommerce_content();
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
